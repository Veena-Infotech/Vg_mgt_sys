<?php
include '../PhpFiles/connection.php';

$task_id = intval($_POST['task_id']);
$status_id = intval($_POST['status_id']);

if ($task_id && $status_id) {
    $stmt = $conn->prepare("UPDATE tbl_tasks SET status_id = ? WHERE id = ?");
    $stmt->bind_param('ii', $status_id, $task_id);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error: " . $stmt->error;
    }
} else {
    echo "Invalid input";
}
?>
