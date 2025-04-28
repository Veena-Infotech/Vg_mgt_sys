<?php
include 'connection.php'; // Make sure connection.php is correct

// Helper function to sanitize folder name
function sanitize_folder_name($string) {
    return preg_replace('/[^a-zA-Z0-9-_]/', '_', strtolower($string));
}

// Get form data
$project_title = $_POST['project_title'] ?? '';
$project_type = $_POST['project_type'] ?? '';
$project_manager = $_POST['project_manager'] ?? '';
$project_client = $_POST['project_client'] ?? '';
$project_status = $_POST['project_status'] ?? '';
$project_description = $_POST['project_desc'] ?? '';
$date_range = $_POST['date_range'] ?? '';

echo "Received Project Title: $project_title<br>";

// Handle Date Range
$start_date = $end_date = null;
if (!empty($date_range)) {
    $dates = explode(' to ', $date_range);
    if (count($dates) == 2) {
        $start_date_obj = DateTime::createFromFormat('d/m/y', trim($dates[0]));
        $end_date_obj = DateTime::createFromFormat('d/m/y', trim($dates[1]));
        if ($start_date_obj && $end_date_obj) {
            $start_date = $start_date_obj->format('Y-m-d');
            $end_date = $end_date_obj->format('Y-m-d');
            echo "Parsed Start Date: $start_date, End Date: $end_date<br>";
        } else {
            echo "Date format parsing failed!<br>";
        }
    } else {
        echo "Date range not in correct format!<br>";
    }
}

// Handle File Upload
$file_path = '';
if (isset($_FILES['file'])) {
    echo "File upload detected.<br>";

    if ($_FILES['file']['error'] === 0) {
        $file_name = basename($_FILES['file']['name']);
        echo "Original File Name: $file_name<br>";

        $project_folder_name = sanitize_folder_name($project_title);
        $upload_dir = "../uploads/project/" . $project_folder_name . "/";

        echo "Upload Directory: $upload_dir<br>";

        // Create folder if it doesn't exist
        if (!file_exists($upload_dir)) {
            if (mkdir($upload_dir, 0777, true)) {
                echo "Project folder created successfully.<br>";
            } else {
                echo "Failed to create project folder.<br>";
                exit;
            }
        } else {
            echo "Project folder already exists.<br>";
        }

        $target_file = $upload_dir . $file_name;

        // Move uploaded file
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            echo "File moved successfully.<br>";
            $file_path = $target_file;
        } else {
            echo "Failed to move uploaded file.<br>";
            print_r($_FILES['file']); // Debug file info
            exit;
        }
    } else {
        echo "Upload error: " . $_FILES['file']['error'] . "<br>";
        print_r($_FILES['file']);
        exit;
    }
} else {
    echo "No file found in form submission.<br>";
}

// Insert into tbl_project
$sql = "INSERT INTO tbl_project (uid, project_title, project_type, project_manager, project_client, project_status, file_path, project_description, project_start_date, project_end_date, project_created_by)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Prepare failed: " . $conn->error;
    exit;
}

$uid = uniqid('prj_');
$created_by = 'admin'; // Hardcoded for now

$stmt->bind_param(
    "sssisssssss",
    $uid,
    $project_title,
    $project_type,
    $project_manager,
    $project_client,
    $project_status,
    $file_path,
    $project_description,
    $start_date,
    $end_date,
    $created_by
);

if ($stmt->execute()) {
    $project_id = $stmt->insert_id; // Get the ID of the newly inserted project
    echo "✅ Project added successfully. Project ID: " . $project_id;

    // Get the assigned employees
    $assigned_employees = isset($_POST['organizerMultiple']) && is_array($_POST['organizerMultiple']) ? $_POST['organizerMultiple'] : [];  // This ensures it's an array or an empty array if not selected

    // Insert assigned employees into tbl_project_emp
    if (!empty($assigned_employees)) {
        $emp_sql = "INSERT INTO tbl_project_emp (emp_id, project_id) VALUES (?, ?)";
        $emp_stmt = $conn->prepare($emp_sql);

        if (!$emp_stmt) {
            echo "Prepare failed for employee assignment: " . $conn->error;
            exit;
        }

        foreach ($assigned_employees as $emp_id) {
            $emp_stmt->bind_param("ii", $emp_id, $project_id);
            if (!$emp_stmt->execute()) {
                echo "Error assigning employee with ID: $emp_id to project.<br>";
            }
        }

        echo "✅ Employees assigned to project successfully.<br>";
        $emp_stmt->close();
    } else {
        echo "No employees assigned to this project.<br>";
    }

} else {
    echo "❌ Error inserting project: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
