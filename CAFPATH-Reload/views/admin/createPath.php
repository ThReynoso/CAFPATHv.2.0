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

$empleados = [];
$vehiculosDisponibles = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Formulario enviado.<br>";
    
    $sqlEmpleados = "SELECT num, name, lastname, surname 
                     FROM Employees 
                     WHERE role = 'R003' AND warehouse = ?";
    $stmtEmpleados = $conn->prepare($sqlEmpleados);
    $stmtEmpleados->bind_param("s", $warehouse_code);
    
    if (!$stmtEmpleados->execute()) {
        die("Error en la consulta de empleados: " . $stmtEmpleados->error);
    }
    
    $empleados = $stmtEmpleados->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmtEmpleados->close();

    if (empty($empleados)) {
        echo "<p>No hay empleados disponibles con rol R003 en su almacén.</p>";
    } else {
        echo "<h3>Empleados disponibles en el almacén:</h3>";
    }

    $hoy = date("Y-m-d");
    $sqlVehiculos = "SELECT V.number, V.license_plate, V.model
                     FROM Vehicle V
                     LEFT JOIN Vehicle_Assignment VA ON V.number = VA.vehicle_number 
                         AND VA.assigned_date = ?
                     WHERE V.warehouse = ? AND VA.vehicle_number IS NULL";
    $stmtVehiculos = $conn->prepare($sqlVehiculos);
    $stmtVehiculos->bind_param("ss", $hoy, $warehouse_code);
    
    if (!$stmtVehiculos->execute()) {
        die("Error en la consulta de vehículos: " . $stmtVehiculos->error);
    }
    
    $vehiculosDisponibles = $stmtVehiculos->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmtVehiculos->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignar Vehículo a Empleado</title>
</head>
<body>
    <h2>Asignar Vehículo a Empleado</h2>
    
    <form method="POST">
        <button type="submit">Buscar Empleados</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <h3>Empleados disponibles en el mismo almacén con rol R003</h3>
        <?php if (!empty($empleados)): ?>
            <label for="employee_num">Seleccione un Empleado:</label>
            <select name="employee_num" id="employee_num" required>
                <?php foreach ($empleados as $empleado): ?>
                    <option value="<?php echo $empleado['num']; ?>">
                        <?php echo $empleado['name'] . ' ' . $empleado['lastname'] . ' ' . $empleado['surname']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <?php if (!empty($vehiculosDisponibles)): ?>
                <h3>Vehículos disponibles en el almacén</h3>
                <label for="vehicle_number">Seleccione un Vehículo:</label>
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

            <h3>Datos de la Ruta</h3>
            <label for="starting_point">Punto de Inicio:</label>
            <input type="text" name="starting_point" id="starting_point" required>
            <label for="end_point">Punto de Destino:</label>
            <input type="text" name="end_point" id="end_point" required>
            <label for="starting_date">Fecha de Inicio:</label>
            <input type="date" name="starting_date" id="starting_date" required>
            <label for="est_arrival">Fecha Estimada de Llegada:</label>
            <input type="date" name="est_arrival" id="est_arrival" required>
            <button type="submit" name="assign_vehicle">Asignar Vehículo y Crear Ruta</button>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>