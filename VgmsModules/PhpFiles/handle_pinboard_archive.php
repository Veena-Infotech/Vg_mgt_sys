<?php
include '../PhpFiles/connection.php';

if (isset($_POST['id']) && isset($_POST['action'])) {
    $id = (int)$_POST['id'];
    $action = $_POST['action'];

    $archiveValue = ($action === 'archive') ? 1 : 0;

    $query = "UPDATE tbl_pin_board SET is_archived = $archiveValue WHERE pinboard_id = $id";

    if (mysqli_query($conn, $query)) {
        echo 'success';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
} else {
    echo 'Invalid request';
}
?>
