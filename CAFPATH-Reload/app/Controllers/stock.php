<?php
include_once '../../config/connection.php';


if (isset($_POST['warehouse_code'])) {
    $warehouse_code = $_POST['warehouse_code'];

    $sql_warehouse = "SELECT name, street, colony, number FROM Warehouse WHERE code = ?";
    $stmt = $conn->prepare($sql_warehouse);
    $stmt->bind_param("s", $warehouse_code);
    $stmt->execute();
    $result_warehouse = $stmt->get_result();

    if ($result_warehouse->num_rows > 0) {
        $warehouse = $result_warehouse->fetch_assoc();
        echo "<h3>Almacén: " . htmlspecialchars($warehouse['name']) . "</h3>";
        echo "<p>Dirección: " . htmlspecialchars($warehouse['street']) . ", " . htmlspecialchars($warehouse['colony']) . ", No. " . htmlspecialchars($warehouse['number']) . "</p>";

        $sql_inventory = "SELECT Stock.name AS stock_name, Stock.amount, Item.name AS item_name, Item.description 
                          FROM Inventory
                          JOIN Stock ON Inventory.stock = Stock.code
                          JOIN Item ON Inventory.item = Item.code
                          WHERE Stock.warehouse = ?";
        $stmt_inventory = $conn->prepare($sql_inventory);
        $stmt_inventory->bind_param("s", $warehouse_code);
        $stmt_inventory->execute();
        $result_inventory = $stmt_inventory->get_result();

        if ($result_inventory->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Artículo</th><th>Descripción</th><th>Cantidad</th></tr>";

            while ($inventory = $result_inventory->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($inventory['item_name']) . "</td>";
                echo "<td>" . htmlspecialchars($inventory['description']) . "</td>";
                echo "<td>" . htmlspecialchars($inventory['amount']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay inventario disponible en este almacén.</p>";
        }
    } else {
        echo "<p>Almacén no encontrado.</p>";
    }

    $stmt->close();
    $stmt_inventory->close();
    $conn->close();
} else {
    echo "<p>Por favor, seleccione un almacén.</p>";
}
?>
