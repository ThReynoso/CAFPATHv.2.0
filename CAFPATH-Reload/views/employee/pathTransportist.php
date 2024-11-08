<?php
session_start();
include '../../config/connection.php';

if (!isset($_SESSION['num'])) {
    die("Acceso no autorizado. Por favor inicie sesión.");
}

$transportista_id = $_SESSION['num'];
$fecha_actual = date("Y-m-d");

$sql = "SELECT v.number AS vehicle_id, v.license_plate, p.id AS route_id, p.starting_point, p.end_point, p.starting_date, p.est_arrival 
        FROM Vehicle_Assignment va
        JOIN Vehicle v ON va.vehicle_number = v.number
        JOIN Path p ON va.route_id = p.id
        WHERE va.employee_num = ? AND p.starting_date = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $transportista_id, $fecha_actual);
$stmt->execute();
$rutas = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['iniciar_ruta'])) {
    $route_id = $_POST['route_id'];

    $sqlUpdateStatus = "INSERT INTO Record (date, status, shipment, client, location)
                        SELECT CURDATE(), 'en ruta', s.num, s.client, NULL
                        FROM Shipment s
                        JOIN RutaDetalles rd ON rd.id_paquete = s.num
                        WHERE rd.id_ruta = ? AND s.date = ?";
    $stmtUpdateStatus = $conn->prepare($sqlUpdateStatus);
    $stmtUpdateStatus->bind_param("is", $route_id, $fecha_actual);

    if ($stmtUpdateStatus->execute()) {
        echo "Ruta iniciada y estatus de pedidos actualizado a 'en ruta'.";
    } else {
        echo "Error al actualizar estatus de pedidos: " . $stmtUpdateStatus->error;
    }
    $stmtUpdateStatus->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['completar_pedido'])) {
    $shipment_id = $_POST['shipment_id'];

    $sqlCompleteOrder = "INSERT INTO Record (date, status, shipment, client, location)
                         VALUES (CURDATE(), 'pedido entregado', ?, 
                                 (SELECT client FROM Shipment WHERE num = ?), NULL)";
    $stmtCompleteOrder = $conn->prepare($sqlCompleteOrder);
    $stmtCompleteOrder->bind_param("ii", $shipment_id, $shipment_id);

    if ($stmtCompleteOrder->execute()) {
        echo "Pedido marcado como completado y estatus actualizado a 'pedido entregado'.";
    } else {
        echo "Error al completar pedido: " . $stmtCompleteOrder->error;
    }
    $stmtCompleteOrder->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Rutas y Pedidos Asignados al Transportista</title>
</head>
<body>
    <h2>Rutas y Pedidos Asignados para Hoy</h2>

    <?php if (count($rutas) > 0): ?>
        <?php foreach ($rutas as $ruta): ?>
            <div>
                <h3>Ruta ID: <?php echo $ruta['route_id']; ?> - Vehículo: <?php echo $ruta['license_plate']; ?></h3>
                <p>Inicio: <?php echo $ruta['starting_point']; ?> - Destino: <?php echo $ruta['end_point']; ?></p>
                <p>Fecha de Inicio: <?php echo $ruta['starting_date']; ?> - Llegada Estimada: <?php echo $ruta['est_arrival']; ?></p>
                
                <form method="POST">
                    <input type="hidden" name="route_id" value="<?php echo $ruta['route_id']; ?>">
                    <button type="submit" name="iniciar_ruta">Iniciar Ruta</button>
                </form>

                <h4>Pedidos Asignados a esta Ruta</h4>
                <ul>
                    <?php
                    $sqlOrders = "SELECT s.num AS shipment_id, c.name AS client_name, c.street, c.colony, c.number
                                  FROM Shipment s
                                  JOIN RutaDetalles rd ON rd.id_paquete = s.num
                                  JOIN Client c ON c.num = s.client
                                  WHERE rd.id_ruta = ?";
                    $stmtOrders = $conn->prepare($sqlOrders);
                    $stmtOrders->bind_param("i", $ruta['route_id']);
                    $stmtOrders->execute();
                    $orders = $stmtOrders->get_result()->fetch_all(MYSQLI_ASSOC);
                    $stmtOrders->close();

                    foreach ($orders as $order): ?>
                        <li>
                            Pedido ID: <?php echo $order['shipment_id']; ?> - Cliente: <?php echo $order['client_name']; ?>
                            - Dirección: <?php echo $order['street'] . ", " . $order['colony'] . " " . $order['number']; ?>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="shipment_id" value="<?php echo $order['shipment_id']; ?>">
                                <button type="submit" name="completar_pedido">Marcar como Completado</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No tienes rutas asignadas para hoy.</p>
    <?php endif; ?>
</body>
</html>