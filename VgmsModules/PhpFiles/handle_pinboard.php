<?php
include '../PhpFiles/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['pin_headline'], $_POST['pin_content'], $_POST['archive'], $_POST['pinboard_id'])) {
        $pin_headline = $_POST['pin_headline'];
        $pin_content = $_POST['pin_content'];
        $pin_archive = $_POST['archive'];
        $pinboard_id = $_POST['pinboard_id'];

        // Check if pinboard_id exists in tbl_project
        $check = mysqli_query($conn, "SELECT id FROM tbl_project WHERE id = '$pinboard_id'");
        if (mysqli_num_rows($check) > 0) {
            $query = "INSERT INTO tbl_pin_board (pin_headline, pin_content, archive, pinboard_id) 
                      VALUES('$pin_headline', '$pin_content', '$pin_archive', '$pinboard_id')";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                echo "Note added successfully.";
            } else {
                echo "Insert failed.";
            }
        } else {
            echo "Invalid pinboard_id (project does not exist).";
        }
    } else {
        echo "Missing required form fields.";
    }
}
?>


