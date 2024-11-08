<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'R002') {
    header("Location: login.php");
    exit();
}

include '../../config/connection.php';

$employeeNum = $_SESSION['num'];

$sql = "SELECT s.num AS shipment_id, s.date AS shipment_date, s.delivery_date, c.name AS client_name
        FROM Assamble a
        JOIN Shipment s ON a.shipment = s.num
        JOIN Client c ON s.client = c.num
        WHERE a.employees = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $employeeNum);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Asignados</title>
</head>
<body>
    <h1>Pedidos Asignados</h1>
    <p>Estos son los pedidos que tienes asignados:</p>
    
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID Pedido</th>
                <th>Fecha de Pedido</th>
                <th>Fecha de Entrega</th>
                <th>Cliente</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['shipment_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['shipment_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['delivery_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['client_name']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No tienes pedidos asignados.</p>
    <?php endif; ?>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
