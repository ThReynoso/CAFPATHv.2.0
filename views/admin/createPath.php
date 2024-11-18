<?php
session_start();
include '../../config/connection.php';

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (!isset($_SESSION['num'])) {  
    die("Acceso no autorizado. Por favor inicie sesión.");
}

$supervisor_id = $_SESSION['num'];

$sql = "SELECT warehouse FROM Employees WHERE num = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $supervisor_id);
$stmt->execute();
$stmt->bind_result($warehouse_code);
$stmt->fetch();
$stmt->close();

if (!$warehouse_code) {
    die("Error: No se obtuvo el almacén del supervisor.");
}

echo "Almacén del supervisor: " . $warehouse_code . "<br>";

$hoy = date("Y-m-d");
$sqlEmpleados = "SELECT E.num, E.name, E.lastname, E.surname 
                 FROM Employees E
                 LEFT JOIN Assamble A ON E.num = A.employees AND A.shipment IN 
                     (SELECT num FROM Shipment WHERE date = ?)
                 WHERE E.role = 'R003' AND E.warehouse = ? AND A.employees IS NULL";
$stmtEmpleados = $conn->prepare($sqlEmpleados);
$stmtEmpleados->bind_param("ss", $hoy, $warehouse_code);
$stmtEmpleados->execute();
$empleados = $stmtEmpleados->get_result()->fetch_all(MYSQLI_ASSOC);
$stmtEmpleados->close();

$sqlVehiculos = "SELECT V.number, V.license_plate, V.model
                 FROM Vehicle V
                 LEFT JOIN Vehicle_Assignment VA ON V.number = VA.vehicle_number AND VA.assigned_date = ?
                 WHERE V.warehouse = ? AND VA.vehicle_number IS NULL";
$stmtVehiculos = $conn->prepare($sqlVehiculos);
$stmtVehiculos->bind_param("ss", $hoy, $warehouse_code);
$stmtVehiculos->execute();
$vehiculosDisponibles = $stmtVehiculos->get_result()->fetch_all(MYSQLI_ASSOC);
$stmtVehiculos->close();

$sqlPaquetes = "SELECT S.num, CONCAT(C.street, ' ', C.number, ', ', C.colony) AS direccion_destino
                FROM Shipment S
                JOIN Client C ON S.client = C.num
                WHERE S.warehouse = ? AND S.vehicle IS NULL AND S.path IS NULL
                ORDER BY S.num ASC";
$stmtPaquetes = $conn->prepare($sqlPaquetes);
$stmtPaquetes->bind_param("s", $warehouse_code);
$stmtPaquetes->execute();
$paquetesDisponibles = $stmtPaquetes->get_result()->fetch_all(MYSQLI_ASSOC);
$stmtPaquetes->close();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['paquetes'], $_POST['employee_num'], $_POST['vehicle_number'], $_POST['starting_date'], $_POST['est_arrival'])) {
    $paquetesSeleccionados = $_POST['paquetes'];
    $empleadoSeleccionado = $_POST['employee_num'];
    $vehiculoSeleccionado = $_POST['vehicle_number'];
    $fechaInicio = $_POST['starting_date'];
    $fechaEstimadaLlegada = $_POST['est_arrival'];

    $codigoRuta = rand(100000, 999999);
    $ultimoPaquete = end($paquetesSeleccionados);
    $sqlUltimoPaquete = "SELECT CONCAT(C.street, ' ', C.number, ', ', C.colony) AS direccion_destino
                         FROM Shipment S
                         JOIN Client C ON S.client = C.num
                         WHERE S.num = ?";
    $stmtUltimoPaquete = $conn->prepare($sqlUltimoPaquete);
    $stmtUltimoPaquete->bind_param("i", $ultimoPaquete);
    $stmtUltimoPaquete->execute();
    $stmtUltimoPaquete->bind_result($direccionDestino);
    $stmtUltimoPaquete->fetch();
    $stmtUltimoPaquete->close();

    if (!$direccionDestino) {
        die("Error: No se pudo obtener la dirección del último paquete seleccionado.");
    }

    $sqlInsertRuta = "INSERT INTO Path (starting_point, end_point, est_arrival, starting_date, id_ruta) VALUES (?, ?, ?, ?, ?)";
    $stmtRuta = $conn->prepare($sqlInsertRuta);
    $stmtRuta->bind_param("ssssi", $warehouse_code, $direccionDestino, $fechaEstimadaLlegada, $fechaInicio, $codigoRuta);
    $stmtRuta->execute();
    $idNuevaRuta = $stmtRuta->insert_id;
    $stmtRuta->close();

    if (!$idNuevaRuta) {
        die("Error: No se pudo crear la nueva ruta.");
    }

    $sqlInsertRutaDetalles = "INSERT INTO RutaDetalles (id_vehiculo, fecha, orden_entrega, id_paquete, direccion_destino, id_ruta) VALUES (?, ?, ?, ?, ?, ?)";
    $stmtRutaDetalles = $conn->prepare($sqlInsertRutaDetalles);
    
    foreach ($paquetesSeleccionados as $paquete) {
        $sqlDireccion = "SELECT CONCAT(C.street, ' ', C.number, ', ', C.colony) AS direccion_destino
                         FROM Shipment S
                         JOIN Client C ON S.client = C.num
                         WHERE S.num = ?";
        $stmtDireccion = $conn->prepare($sqlDireccion);
        $stmtDireccion->bind_param("i", $paquete);
        $stmtDireccion->execute();
        $stmtDireccion->bind_result($direccionPaquete);
        $stmtDireccion->fetch();
        $stmtDireccion->close();
    
        if ($direccionPaquete) {
            $stmtRutaDetalles->bind_param("issisi", $vehiculoSeleccionado, $fechaInicio, $codigoRuta, $paquete, $direccionPaquete, $idNuevaRuta);
            $stmtRutaDetalles->execute();
        }
    }
    $stmtRutaDetalles->close();

        $sqlUpdateShipment = "UPDATE Shipment SET vehicle = ?, path = ? WHERE num = ?";
        $stmtUpdateShipment = $conn->prepare($sqlUpdateShipment);

            foreach ($paquetesSeleccionados as $paquete) {
            $stmtUpdateShipment->bind_param("iii", $vehiculoSeleccionado, $idNuevaRuta, $paquete);
            $stmtUpdateShipment->execute();
}
$stmtUpdateShipment->close();


    echo "Ruta creada exitosamente con ID: " . $idNuevaRuta . " y Código de Ruta: " . $codigoRuta;
} else {
    echo "Por favor, completa todos los campos del formulario.";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Ruta</title>
</head>
<body>
    <h2>Crear una Nueva Ruta</h2>
    
    <form method="POST" action="createPath.php">
        <h3>Empleados disponibles en el almacén</h3>
        <?php if (!empty($empleados)): ?>
            <label for="employee_num">Selecciona un empleado:</label>
            <select name="employee_num" id="employee_num" required>
                <?php foreach ($empleados as $empleado): ?>
                    <option value="<?php echo $empleado['num']; ?>">
                        <?php echo $empleado['name'] . ' ' . $empleado['lastname'] . ' ' . $empleado['surname']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <p>No hay empleados disponibles con rol R003 en su almacén sin asignaciones para hoy.</p>
        <?php endif; ?>

        <h3>Vehículos disponibles en el almacén</h3>
        <?php if (!empty($vehiculosDisponibles)): ?>
            <label for="vehicle_number">Selecciona un vehículo:</label>
            <select name="vehicle_number" id="vehicle_number" required>
                <?php foreach ($vehiculosDisponibles as $vehiculo): ?>
                    <option value="<?php echo $vehiculo['number']; ?>">
                        <?php echo "ID: " . $vehiculo['number'] . " - Placa: " . $vehiculo['license_plate'] . " - Modelo: " . $vehiculo['model']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <p>No hay vehículos disponibles para asignar en este almacén hoy.</p>
        <?php endif; ?>

        <h3>Paquetes disponibles</h3>
        <?php if (!empty($paquetesDisponibles)): ?>
            <?php foreach ($paquetesDisponibles as $paquete): ?>
                <div>
                    <input type="checkbox" name="paquetes[]" value="<?php echo $paquete['num']; ?>">
                    <label>Paquete ID: <?php echo $paquete['num']; ?> - Dirección: <?php echo $paquete['direccion_destino']; ?></label>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay paquetes disponibles en este almacén.</p>
        <?php endif; ?>

        <h3>Datos de la Ruta</h3>
        <label for="starting_date">Fecha de Inicio:</label>
        <input type="date" name="starting_date" id="starting_date" required>
        
        <label for="est_arrival">Fecha Estimada de Llegada:</label>
        <input type="date" name="est_arrival" id="est_arrival" required>
        
        <button type="submit" name="assign_vehicle">Asignar Vehículo y Crear Ruta</button>
    </form>
</body>
</html>
