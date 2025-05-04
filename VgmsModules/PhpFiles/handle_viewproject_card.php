<?php
// Include database connection
include '../PhpFiles/connection.php';

$project_id = $_POST['id'] ?? '';
$project_title = $_POST['project_title'] ?? '';
$project_start_date = $_POST['project_start_date'] ?? '';
$project_end_date = $_POST['project_end_date'] ?? '';

// table tbl_pin_board
$project_status_type = $_POST['type'];


header("Location: http://localhost/Vg_mgt_sys/VgmsModules/Pms/viewproject_card.php");
mysqli_close($conn);


?>