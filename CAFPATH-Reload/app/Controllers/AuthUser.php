<?php
include '../../config/connection.php';

session_start();

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_check_client = "SELECT num, username FROM Client WHERE username = ? AND password = ?";
    $stmt_check_client = $conn->prepare($sql_check_client);
    $stmt_check_client->bind_param("ss", $username, $password);
    $stmt_check_client->execute();
    $result_client = $stmt_check_client->get_result();

    if ($result_client->num_rows === 1) {
        $client_data = $result_client->fetch_assoc();
        $_SESSION['client_id'] = $client_data['num'];
        $_SESSION['client_username'] = $client_data['username'];

        header("Location: ../../views/client/sessionClient.php");
        exit;
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
        header("Location: ../../views/auth/LoginViewUser.php");
    }

    $stmt_check_client->close();
} else {
    echo "Por favor, ingrese su nombre de usuario y contraseña.";
}

$conn->close();
?>