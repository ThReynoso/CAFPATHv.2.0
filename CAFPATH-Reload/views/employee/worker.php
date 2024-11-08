<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'R002') {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Dashboard</title>
</head>
<body>
    <h1>Bienvenido, Operador</h1>
    <p>Este es tu panel de control.</p>
    <a href="forme.php">Work</a>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
