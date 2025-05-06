<?php
include 'connection.php';

if (isset($_POST['id'])) {
    $pinboard_id = $_POST['id'];

    $query = "DELETE FROM tbl_pin_board WHERE pinboard_id = '$pinboard_id'";

    if (mysqli_query($conn, $query)) {
        echo 'success';
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
    }

    $conn->close();
} else {
    echo 'No ID provided';
}
?>
