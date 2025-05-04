<?php
include 'connection.php'; // DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectId = $_POST['project_id'];
    $projectTitle = trim($_POST['project_title']);
    $projectType = $_POST['project_type'];
    $projectManager = $_POST['project_manager'];
    $projectClient = $_POST['project_client'];
    $projectDesc = $_POST['project_desc'];
    $dateRange = explode(" to ", $_POST['project_date_range']);

    $startDate = isset($dateRange[0]) ? date('Y-m-d', strtotime(str_replace('/', '-', $dateRange[0]))) : null;
    $endDate = isset($dateRange[1]) ? date('Y-m-d', strtotime(str_replace('/', '-', $dateRange[1]))) : null;

    // Update project data
    $sql = "UPDATE tbl_project SET 
                project_title = ?, 
                project_type = ?, 
                project_manager = ?, 
                project_client = ?, 
                project_description = ?, 
                project_start_date = ?, 
                project_end_date = ? 
            WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siissssi", $projectTitle, $projectType, $projectManager, $projectClient, $projectDesc, $startDate, $endDate, $projectId);

    if ($stmt->execute()) {
        // Handle file upload
        $basePath = $_SERVER['DOCUMENT_ROOT'] . '/Vg_mgt_sys/VgmsModules/Dims/DimsV2/uploads/project';
        $projectFolder = $basePath . $projectTitle;

        // Create directory if not exists
        if (!is_dir($projectFolder)) {
            mkdir($projectFolder, 0777, true);
        }

        if (!empty($_FILES['project_files']['name'][0])) {
            foreach ($_FILES['project_files']['name'] as $key => $name) {
                $tmpName = $_FILES['project_files']['tmp_name'][$key];
                $destination = $projectFolder . '/' . basename($name);
        
                if (move_uploaded_file($tmpName, $destination)) {
                    echo "<script>alert('File \"$name\" uploaded successfully.');</script>";
                } else {
                    echo "<script>alert('Failed to upload file \"$name\".');</script>";
                }
            }
        }
        
        echo "<script>alert('Project updated successfully.'); window.location.href = '../Pms/edit_project.php?project_id=$projectId';</script>";
    } else {
        echo "<script>alert('Error updating project: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid Request Method.');</script>";
}
?>
