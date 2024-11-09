<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Inventario por Almacén</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Consulta de Inventario por Almacén</h2>
    <form action="" method="POST">
        <label for="warehouse_code">Selecciona el Almacén:</label>
        <select id="warehouse_code" name="warehouse_code" required>
            <?php
            include '../../config/connection.php';
            $sql = "SELECT code, name FROM Warehouse";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['code'] . "'>" . $row['name'] . "</option>";
                }
            } else {
                echo "<option value='WH001'>Almacen Principal</option>";
                echo "<option value='WH002'>Almacen Materia Prima</option>";
                echo "<option value='WH003'>Almacen Producto Terminado</option>";
                echo "<option value='WH004'>Almacen Refacciones</option>";
                echo "<option value='WH005'>Almacen Empaque</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Consultar Inventario">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $selectedWarehouse = $_POST['warehouse_code'];
        $sql = "SELECT name AS product_name, amount AS quantity 
                FROM Stock
                WHERE Stock.warehouse = '$selectedWarehouse'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Inventario del Almacén Seleccionado:</h3>";
            echo "<table border='1'><tr><th>Producto</th><th>Cantidad</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['product_name'] . "</td><td>" . $row['quantity'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay inventario disponible para el almacén seleccionado.</p>";
        }
    }
    $conn->close();
    ?>
</body>
</html>
