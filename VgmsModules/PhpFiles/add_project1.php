<?php
include 'connection.php'; // Include the database connection file

$project_title = $_POST['project_title'];
$project_type = $_POST['project_type'];
$project_manager = $_POST['project_manager'];
$project_client = $_POST['project_client'];
$project_status = $_POST['project_status'];
$project_description = $_POST['project_desc'];
$dates = $_POST['date_range'];
// Split the date range using ' to ' as delimiter
$dates = explode(" to ", $date_range);

$start_date = $dates[0]; // "2025-04-01"
$end_date = $dates[1];   // "2025-04-28"


//inserting the data into the database
$sql= "INSERT INTO tbl_project VALUES ('".$project_title."', '".$project_type."', '".$project_manager."', 
'".$project_client."', '".$project_status."', '".$project_description."', '".$start_date."', '".$end_date."')";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
    echo "<tr>";
    echo "<td>" . $row['project_title'] . "</td>";
    echo "<td>" . $row['project_type'] . "</td>";
    echo "<td>" . $row['project_manager'] . "</td>";
    echo "<td>" . $row['project_client'] . "</td>";
    echo "<td>" . $row['project_status'] . "</td>";
    echo "<td>" . $row['project_description'] . "</td>";
    echo "<td>" . $row['project_start_date'] . "</td>";
    echo "<td>" . $row['project_end_date'] . "</td>";
    echo "</tr>";
}

?>