<?php
include '../PhpFiles/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_id = $_POST['file_id'];
    $office_id = $_POST['officename'];
    $room_name = $_POST['room_name'];
    $cupboard_name = $_POST['cupboard_name'];
    $filename = trim($_POST['filename']);

    // Validate all required fields
    if (!empty($file_id) && !empty($office_id) && !empty($room_name) && !empty($cupboard_name) && !empty($filename)) {
        $stmt = $conn->prepare("UPDATE tbl_fms 
                                SET officename = ?, room_name = ?, cupboard_name = ?, filename = ? 
                                WHERE id = ?");
        $stmt->bind_param("iisss", $office_id, $room_name, $cupboard_name, $filename, $file_id);

        if ($stmt->execute()) {
            // Redirect or show success
            header("Location: ../Fms/index_table.php?id=id=" . $room_id ."success=1");
            exit;
        } else {
            echo "❌ Failed to update file location. Please try again.";
        }
    } else {
        echo "⚠️ All fields are required.";
    }
} else {
    echo "❌ Invalid request method.";
}
?>
