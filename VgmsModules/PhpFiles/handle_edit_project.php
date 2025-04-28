<?php
// Include database connection
include '../PhpFiles/connection.php';
$id = $_POST['id']; 
$project_title = $_POST['project_title'] ?? '';
$project_type = $_POST['type'] ?? '';  // type (column of project_type) 
$project_manager = $_POST['project_manager'] ?? '';
$project_client = $_POST['project_client'] ?? '';
$project_status = $_POST['project_status'] ?? '';
$project_description = $_POST['project_desc'] ?? '';
$date_range = $_POST['date_range'] ?? ''; 

$query = "UPDATE tbl_edit_project SET project_title = '{$project_title}' ,type = '{$project_type}' WHERE id = {$id}";
$result = mysqli_query($conn,$query) or die("Query unsuccessfull.");

header("Location: http://localhost/Vg_mgt_sys/VgmsModules/Pms/edit_project.php");
mysqli_close($conn);


?>
