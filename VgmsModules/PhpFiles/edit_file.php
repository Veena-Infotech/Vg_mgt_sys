<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_id = intval($_POST['file_id']);
    $office_id = intval($_POST['office_id']);
    $room_id = intval($_POST['room_id']);
    $cupboard_id = intval($_POST['cupboard_id']);

    // Get cupboard name
    $stmt = $conn->prepare("SELECT name FROM shelves_cupboards WHERE id = ?");
    $stmt->bind_param("i", $cupboard_id);
    $stmt->execute();
    $stmt->bind_result($cupboard_name);
    $stmt->fetch();
    $stmt->close();

    if (!$cupboard_name) {
        die("Invalid cupboard selected");
    }

    $stmt = $conn->prepare("UPDATE tbl_fms SET officename = ?, room_name = ?, cupboard_name = ? WHERE id = ?");
    $stmt->bind_param("iisi", $office_id, $room_id, $cupboard_name, $file_id);

    if ($stmt->execute()) {
        header("Location: ../your_page.php?edit=success");
    } else {
        echo "Update failed: " . $stmt->error;
    }

    $stmt->close();
}
?>
