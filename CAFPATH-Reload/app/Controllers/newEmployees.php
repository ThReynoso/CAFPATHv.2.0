<?php
include '../../config/connection.php';

function generarPassword($longitud = 8) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $longitudCaracteres = strlen($caracteres);
    $password = '';
    for ($i = 0; $i < $longitud; $i++) {
        $password .= $caracteres[rand(0, $longitudCaracteres - 1)];
    }
    return $password;
}

if (isset($_POST['warehouse_code'], $_POST['name'], $_POST['lastname'], $_POST['role'])) {
    $warehouse_code = $_POST['warehouse_code'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $surname = $_POST['surname'] ?? '';
    $role = $_POST['role'];
    $vehicle_num = $_POST['vehicle_num'] ?? null;

    $sql_check_warehouse = "SELECT COUNT(*) AS total FROM Warehouse WHERE code = ?";
    $stmt_check_warehouse = $conn->prepare($sql_check_warehouse);
    $stmt_check_warehouse->bind_param("s", $warehouse_code);
    $stmt_check_warehouse->execute();
    $result_check_warehouse = $stmt_check_warehouse->get_result();

    if ($result_check_warehouse) {
        $row_check = $result_check_warehouse->fetch_assoc();
        if ($row_check['total'] == 0) {
            echo "El código de almacén '$warehouse_code' no existe en la tabla Warehouse.";
            exit;
        }
    } else {
        echo "Error en la consulta para verificar el almacén: " . $conn->error;
        exit;
    }

    $sql_get_usernum = "SELECT MAX(num) AS max_usernum FROM Users";
    $result_usernum = $conn->query($sql_get_usernum);

    if ($result_usernum && $result_usernum->num_rows > 0) {
        $row_usernum = $result_usernum->fetch_assoc();
        $user_num = $row_usernum['max_usernum'] + 1;
    } else {
        $user_num = 1;
    }

    $username = strtolower(substr($name, 0, 2) . substr($lastname, 0, 2) . substr($surname, 0, 2));
    if (strlen($username) < 3) {
        $username .= rand(100, 999); 
    }
    $password = generarPassword(10);

    $sql_insert_user = "INSERT INTO Users (num, username, password, role) VALUES (?, ?, ?, ?)";
    $stmt_user = $conn->prepare($sql_insert_user);
    $stmt_user->bind_param("isss", $user_num, $username, $password, $role);

    if ($stmt_user->execute()) {
        $vehicle_num = !empty($vehicle_num) ? $vehicle_num : null;

        $sql_insert_employee = "INSERT INTO Employees (name, lastname, surname, role, usernum, username, password, vehicle, warehouse) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_employee = $conn->prepare($sql_insert_employee);
        $stmt_employee->bind_param("ssssiisss", $name, $lastname, $surname, $role, $user_num, $username, $password, $vehicle_num, $warehouse_code);

        if ($stmt_employee->execute()) {
            echo "Empleado registrado exitosamente con el nombre de usuario: $username y contraseña: $password.";
        } else {
            echo "Error al registrar el empleado: " . $stmt_employee->error;
        }

        $stmt_employee->close();
    } else {
        echo "Error al registrar el usuario: " . $stmt_user->error;
    }

    $stmt_user->close();
} else {
    echo "Por favor, complete todos los campos obligatorios.";
}

$conn->close();