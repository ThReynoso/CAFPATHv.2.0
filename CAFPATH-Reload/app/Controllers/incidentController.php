<?php
include_once '../../config/connection.php';

$user = $_POST['username'];
$description = $_POST['description'];
$date = $_POST['date'];

$sql_user = "SELECT num FROM Users WHERE username = ?";
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bind_param("s", $user);
$stmt_user->execute();
$result_user = $stmt_user->get_result();

if ($result_user->num_rows > 0) {
    $user_id = $result_user->fetch_assoc()['num'];

    $sql_incident = "INSERT INTO Incident (description, date, user) VALUES (?, ?, ?)";
    $stmt_incident = $conn->prepare($sql_incident);
    $stmt_incident->bind_param("ssi", $description, $date, $user_id);

    if ($stmt_incident->execute()) {
        echo "<script>
                alert('Incidente reportado con éxito.');
                window.location.href = '../../views/client/sessionClient.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al reportar el incidente: " . $conn->error . "');
                window.location.href = '../../views/client/sessionClient.php';
              </script>";
    }

    $stmt_incident->close();
} else {
    echo "<script>
            alert('Usuario no encontrado.');
            window.location.href = '../../views/client/sessionClient.php';
          </script>";
}

$stmt_user->close();
$conn->close();
?>