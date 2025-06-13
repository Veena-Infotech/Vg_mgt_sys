<?php
include '../PhpFiles/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_text = $_POST['job_text'];
    $department = $_POST['department'];
    $city = $_POST['city'];
    $job_description = $_POST['job_description'];
    $experience_required = $_POST['experience_required'];
    $skills_required_id = $_POST['skills_required_id'];
    //$posting_date = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['posting_date'])));
    //$closing_date = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['closing_date'])));

    // Convert dates to YYYY-MM-DD
$posting_date_raw = $_POST['posting_date'];
$closing_date_raw = $_POST['closing_date'];

$posting_date = DateTime::createFromFormat('d/m/Y', $posting_date_raw)->format('Y-m-d');
$closing_date = DateTime::createFromFormat('d/m/Y', $closing_date_raw)->format('Y-m-d');

    $sql = "INSERT INTO tbl_jobs (
                job_text, department, city, job_description, 
                experience_required, skills_required_id, 
                posting_date, closing_date
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssiiss", 
    $job_text, $department, $city, $job_description, 
    $experience_required, $skills_required_id, 
    $posting_date, $closing_date
);


    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../Hrms/job_opening.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
