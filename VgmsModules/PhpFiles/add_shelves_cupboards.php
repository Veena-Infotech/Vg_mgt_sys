<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $room_id = intval($_POST['room_id']);
    $name = trim($_POST['name']);

    // Fetch office_id from tbl_rooms
    $stmt = $conn->prepare("SELECT office_id FROM tbl_rooms WHERE id = ?");
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $stmt->bind_result($office_id);
    $stmt->fetch();
    $stmt->close();

    if (!$office_id) {
        die("Invalid Room ID: Cannot find office.");
    }

    // Insert into shelves_cupboards
    $insert = $conn->prepare("INSERT INTO shelves_cupboards (name, room_name, office_id) VALUES (?, ?, ?)");
    $insert->bind_param("sii", $name, $room_id, $office_id);

    if ($insert->execute()) {
        // Redirect back to the page, showing success
        header("Location: ../Fms/index_table.php?id=" . $room_id . "&success=1");
        exit;
    } else {
        echo "Database Error: " . $insert->error;
    }

    $insert->close();
}
?>
