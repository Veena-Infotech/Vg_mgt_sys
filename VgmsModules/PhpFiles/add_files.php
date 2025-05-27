<?php
include './connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $room_id = intval($_POST['room_id']);
    $cupboard_id = intval($_POST['cupboard_id']);
    $filename = trim($_POST['filename']);

    // Replace this with actual logged-in user's name
    $added_by = $_SESSION['username'] ?? 'system';

    // Fetch office_id from tbl_rooms
    $stmt = $conn->prepare("SELECT office_id FROM tbl_rooms WHERE id = ?");
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $stmt->bind_result($office_id);
    $stmt->fetch();
    $stmt->close();

    if (!$office_id) {
        die("Invalid room ID");
    }

    // Fetch cupboard name from shelves_cupboards
    $stmt2 = $conn->prepare("SELECT name FROM shelves_cupboards WHERE id = ?");
    $stmt2->bind_param("i", $cupboard_id);
    $stmt2->execute();
    $stmt2->bind_result($cupboard_name);
    $stmt2->fetch();
    $stmt2->close();

    if (!$cupboard_name) {
        die("Invalid cupboard ID");
    }

    // Insert into tbl_fms
    $insert = $conn->prepare("INSERT INTO tbl_fms (officename, room_name, cupboard_name, filename, current_status, added_by, added_time) VALUES (?, ?, ?, ?, 'IN', ?, NOW())");
    $insert->bind_param("iisss", $office_id, $room_id, $cupboard_name, $filename, $added_by);

    if ($insert->execute()) {
        header("Location: ../Fms/index_table.php?id=$room_id&file_added=1");
        exit;
    } else {
        echo "Database error: " . $insert->error;
    }

    $insert->close();
}
?>
