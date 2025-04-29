<?php
include 'connection.php'; // Make sure connection.php is correct

// Helper function to sanitize folder name
function sanitize_folder_name($string) {
    return preg_replace('/[^a-zA-Z0-9-_]/', '_', strtolower($string));
}

//get form data
$task_title = $_POST['task_title'] ?? '';
$desc = $_POST['description'] ?? '';
$project_name = $_POST['project_name'] ?? '';
$date_range = $_POST['time_range'] ?? '';
$task_category = $_POST['task_category'] ?? '';
$priority = $_POST['organizerSingle'] ?? '';


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

//Insert into table tbl_tasks
$sql = "INSERT INTO tbl_tasks (uid, title, description, project_name, start_date, end_date, task_category, priority)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Prepare failed: " . $conn->error;
    exit;
}


$uid = uniqid('tsk_'); // Generate a unique ID for the task
$stmt->bind_param(
    "ssssssii", 
    $uid, 
    $task_title, 
    $desc, 
    $project_name, 
    $start_date, 
    $end_date, 
    $task_category, 
    $priority
);  

if ($stmt->execute()) {
    $task_id = $stmt->insert_id; // Get the ID of the newly inserted task (auto-incremented)
    echo "✅ Task added successfully. Task ID: " . $task_id;

    // Get the assigned employees
    $assigned_employees = isset($_POST['organizerMultiple']) && is_array($_POST['organizerMultiple']) ? $_POST['organizerMultiple'] : []; // This ensures it's an array or an empty array if not selected

    //Insert into table tbl_task_emp
    if (!empty($assigned_employees)) {
        $emp_sql = "INSERT INTO tbl_task_emp (emp_id, task_id) VALUES (?, ?)";
        $emp_stmt = $conn->prepare($emp_sql);

        if (!$emp_stmt) {
            echo "Prepare failed for employee assignment: " . $conn->error;
            exit;
        }

        foreach ($assigned_employees as $emp_id) {
            $emp_stmt->bind_param("ii", $emp_id, $task_id);
            if (!$emp_stmt->execute()) {
                echo "Error assigning employee with ID: $emp_id to task.<br>";
            }
        }

        echo "✅ Employees assigned to task successfully.<br>";
        $emp_stmt->close();
    } else {
        echo "No employees assigned to the task.<br>";
    }

    // Get the assigned tags
    $assigned_tags = isset($_POST['tagsMultiple']) && is_array($_POST['tagsMultiple']) ? $_POST['tagsMultiple'] : []; // This ensures it's an array or an empty array if not selected

    //Insert into table tbl_task_tags
    if (!empty($assigned_tags)) {
        $tag_sql = "INSERT INTO tbl_task_tag (tag_id, task_id) VALUES (?, ?)";
        $tag_stmt = $conn->prepare($tag_sql);

        if (!$tag_stmt) {
            echo "Prepare failed for tag assignment: " . $conn->error;
            exit;
        }

        foreach ($assigned_tags as $tag_id) {
            $tag_stmt->bind_param("ii", $tag_id, $task_id);
            if (!$tag_stmt->execute()) {
                echo "Error assigning tag with ID: $tag_id to task.<br>";
            }
        }

        echo "✅ Tags assigned to task successfully.<br>";
        $tag_stmt->close();
    } else {
        echo "No tags assigned to the task.<br>";
    }

} else {
    echo "❌ Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>