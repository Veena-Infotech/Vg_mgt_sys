<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectId = $_POST['project_id'] ?? '';
    $projectTitle = $_POST['project_title'] ?? '';
    $fileName = $_POST['file_name'] ?? '';

    if (empty($projectId) || empty($projectTitle) || empty($fileName)) {
        echo "<script>alert('Error: Missing required parameters.');</script>";
        exit;
    }

    // Construct the full file path based on the project title and file name
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/Vg_mgt_sys/VgmsModules/Dims/DimsV2/uploads/project';
    $filePath = realpath($basePath . $projectTitle . '/' . $fileName);

    // Send alert with the file path (for debugging purposes)
    echo "<script>alert('File Path: " . $filePath . "');</script>";

    // Validate and delete the file
    if ($filePath && strpos($filePath, realpath($basePath . $projectTitle)) === 0 && file_exists($filePath)) {
        if (unlink($filePath)) {
            echo "<script>alert('File removed successfully.');</script>";
            echo json_encode(['success' => true]);

            // Use $_POST['project_id'] to redirect correctly
            echo "<script> window.location.href = '../Pms/edit_project.php?project_id=" . $_POST['project_id'] . "';</script>";
        } else {
            echo "<script>alert('Error: Failed to delete file.');</script>";
            echo json_encode(['success' => false, 'error' => 'Failed to delete file']);
        }
    } else {
        echo "<script>alert('Error: File not found.');</script>";
        echo json_encode(['success' => false, 'error' => 'File not found']);
    }
    exit;
}
?>
