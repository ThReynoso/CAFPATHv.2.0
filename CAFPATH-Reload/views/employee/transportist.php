<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'R003') {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportista Dashboard</title>
</head>
<body>
    <h1>Bienvenido, Transportista</h1>
    <p>Este es tu panel de control.</p>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>