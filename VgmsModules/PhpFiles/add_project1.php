<?php
include 'connection.php'; // Include the database connection file

// Get posted data
$project_title = $_POST['project_title'];
$project_type = $_POST['project_type'];
$project_manager = $_POST['project_manager'];
$project_client = $_POST['project_client'];
$project_status = $_POST['project_status'];
$project_description = $_POST['project_desc'];
$date_range = $_POST['date_range']; // Corrected variable

// Handle date range conversion (d/m/y to Y-m-d)
$dates = explode(" to ", $date_range);

if (count($dates) == 2) {
    $start_date_raw = DateTime::createFromFormat('d/m/y', trim($dates[0]));
    $end_date_raw = DateTime::createFromFormat('d/m/y', trim($dates[1]));

    if ($start_date_raw && $end_date_raw) {
        $start_date = $start_date_raw->format('Y-m-d');
        $end_date = $end_date_raw->format('Y-m-d');
    } else {
        die("Invalid date format submitted.");
    }
} else {
    die("Invalid date range submitted.");
}

// (Optional) Handle file upload if needed

// Insert into tbl_project
$sql = "INSERT INTO tbl_project 
(project_title, project_type, project_manager, project_client, project_status, project_description, project_start_date, project_end_date) 
VALUES 
('$project_title', '$project_type', '$project_manager', '$project_client', '$project_status', '$project_description', '$start_date', '$end_date')";

$result = mysqli_query($conn, $sql);


mysqli_close($conn);
?>
