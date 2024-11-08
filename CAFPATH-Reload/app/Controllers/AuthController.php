<?php
include_once '../../config/connection.php'; 

session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT num, username, password, role FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['num'] = $row['num'];
            $_SESSION['role'] = $row['role'];

            switch ($row['role']) {
                case 'R001': 
                    header("Location: ../../views/admin/dashboard.php");
                    exit();
                case 'R002': 
                    header("Location: ../../views/employee/worker.php");
                    exit();
                case 'R003': 
                    header("Location: ../../views/employee/transportist.php");
                    exit();
                default:
                    echo "Rol no identificado.";
            }
        } else {
            header("Location: login.php?error=Contraseña incorrecta");
            exit();
        }
    } else {
        header("Location: login.php?error=Usuario no encontrado");
        exit();
    }
} else {
    echo "Por favor, ingrese sus credenciales.";
}
?>