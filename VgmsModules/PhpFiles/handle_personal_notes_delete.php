<?php
include 'connection.php';

if (isset($_POST['id'])) {
    $personal_notes_id = $_POST['id'];

    $query = "DELETE FROM tbl_personal_notes WHERE id = '$personal_notes_id'";

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
