<?php
include '../PhpFiles/connection.php';
include '../PhpFiles/logging_function.php';
session_start();

// Ensure POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_id = intval($_POST['file_id']);
    $office_id = $_POST['officename'];
    $room_name = trim($_POST['room_name']);
    $cupboard_name = trim($_POST['cupboard_name']);
    $filename = trim($_POST['filename']);

    // User info
    $user_id = $_SESSION['user_id'] ?? null;
    $user_name = 'Unknown';

    if ($user_id) {
        $stmt = $conn->prepare("SELECT f_name FROM tbl_emp WHERE id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->bind_result($user_name);
        $stmt->fetch();
        $stmt->close();
    }

    // Validate
    if (!empty($file_id) && !empty($office_id) && !empty($room_name) && !empty($cupboard_name) && !empty($filename)) {

        $stmt = $conn->prepare("UPDATE tbl_fms 
            SET officename = ?, room_name = ?, cupboard_name = ?, filename = ?, added_by = ? 
            WHERE id = ?");
        $stmt->bind_param("sssssi", $office_id, $room_name, $cupboard_name, $filename, $user_name, $file_id);

        if ($stmt->execute()) {
            // Log the update
            $action = "File named as $filename by $user_name (moved to $room_name / $cupboard_name)";
            logFileHistory($conn, $file_id, $action, $user_name);

            // Redirect with success
            header("Location: ../Fms/index_table.php?id=$room_name&success=1");
            exit;
        } else {
            echo "❌ Failed to update file. " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "⚠️ All fields are required.";
    }
} else {
    echo "❌ Invalid request method.";
}
?>
