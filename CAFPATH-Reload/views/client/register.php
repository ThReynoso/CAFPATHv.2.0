<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <?php include '../partials/header.php';?>
</head>
<body class="register-body">
    <div class="register-container">
        <h1 class="title">Registrar Cliente</h1>
        <form action="../../app/Controllers/RegisterController.php" method="POST" class="register-form">
            <div class="input-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="lastname">Apellido:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="input-group">
                <label for="surname">Segundo Apellido:</label>
                <input type="text" id="surname" name="surname">
            </div>
            <div class="input-group">
                <label for="company">Empresa:</label>
                <input type="text" id="company" name="company">
            </div>
            <div class="input-group">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="input-group">
                <label for="street">Calle:</label>
                <input type="text" id="street" name="street">
            </div>
            <div class="input-group">
                <label for="colony">Colonia:</label>
                <input type="text" id="colony" name="colony">
            </div>
            <div class="input-group">
                <label for="number">Número:</label>
                <input type="text" id="number" name="number">
            </div>
            <div class="input-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit">Registrar</button>
        </form>
        <button><a href="../auth/LoginViewUser.php">Login</a></button>
    </div>    
</body>
</html>
