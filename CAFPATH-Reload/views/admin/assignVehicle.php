<?php
include '../../config/connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['employee_num'])) {
    $employee_num = $_POST['employee_num'];

    $sql = "SELECT warehouse FROM Employees WHERE num = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $employee_num);
    $stmt->execute();
    $result = $stmt->get_result();
    $employeeData = $result->fetch_assoc();

    if ($employeeData) {
        $warehouse = $employeeData['warehouse'];
        $sql = "SELECT V.number, V.license_plate, V.model
                FROM Vehicle V
                LEFT JOIN Vehicle_Assignment VA ON V.number = VA.vehicle_number
                WHERE V.warehouse = ? AND VA.employee_num IS NULL";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $warehouse);
        $stmt->execute();
        $vehiculosDisponibles = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
        echo "Empleado no encontrado.";
    }
    $stmt->close();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['assign_vehicle'])) {
    $employee_num = $_POST['employee_num'];
    $vehicle_number = $_POST['vehicle_number'];
    $assigned_date = date("Y-m-d");

    $sql = "INSERT INTO Vehicle_Assignment (vehicle_number, employee_num, assigned_date) 
            VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $vehicle_number, $employee_num, $assigned_date);

    if ($stmt->execute()) {
        echo "Vehículo asignado correctamente al empleado.";
    } else {
        echo "Error al asignar vehículo: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignar Vehículo</title>
</head>
<body>
    <h2>Asignar Vehículo a Empleado</h2>
    <form method="POST">
        <label for="employee_num">Número de Empleado:</label>
        <input type="number" name="employee_num" id="employee_num" required>
        <button type="submit">Buscar Vehículos Disponibles</button>
    </form>

    <?php if (isset($vehiculosDisponibles) && count($vehiculosDisponibles) > 0): ?>
        <h3>Vehículos disponibles en el almacén del empleado</h3>
        <form method="POST">
            <input type="hidden" name="employee_num" value="<?php echo $employee_num; ?>">
            <label for="vehicle_number">Seleccione un Vehículo:</label>
            <select name="vehicle_number" id="vehicle_number" required>
                <?php foreach ($vehiculosDisponibles as $vehiculo): ?>
                    <option value="<?php echo $vehiculo['number']; ?>">
                        <?php echo "ID: " . $vehiculo['number'] . " - Placa: " . $vehiculo['license_plate'] . " - Modelo: " . $vehiculo['model']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="assign_vehicle">Asignar Vehículo</button>
        </form>
    <?php elseif (isset($vehiculosDisponibles) && count($vehiculosDisponibles) == 0): ?>
        <p>No hay vehículos disponibles en el almacén de este empleado.</p>
    <?php endif; ?>
</body>
</html>