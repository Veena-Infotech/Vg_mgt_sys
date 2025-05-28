<?php
include './connection.php';
include './logging_function.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $room_id = intval($_POST['room_id']);
    $cupboard_id = intval($_POST['cupboard_id']);
    $filename = trim($_POST['filename']);
    
    $userid = $_SESSION['user_id'] ?? 'system';
    $sql_temp = "SELECT f_name FROM tbl_emp WHERE id = ?";
    $stmt = $conn->prepare($sql_temp); // Prepare the SQL statement
    $stmt->bind_param("i", $userid); // Bind the parameter
    $stmt->execute(); // Execute the statement
    $result = $stmt->get_result(); // Get the result
    $row = $result->fetch_assoc(); // Fetch the first row
    $added_by = $row['f_name']; // Get the value of the 'f_name' column
    $stmt->close(); // Close the statement

    // Fetch office_id and room_name from tbl_rooms
    $stmt = $conn->prepare("SELECT office_id, room_name FROM tbl_rooms WHERE id = ?");
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $stmt->bind_result($office_id, $room_name);
    $stmt->fetch();
    $stmt->close();

    if (!$office_id || !$room_name) {
        die("Invalid room ID");
    }

    // Fetch cupboard name from shelves_cupboards
    $stmt2 = $conn->prepare("SELECT name FROM shelves_cupboards WHERE id = ?");
    $stmt2->bind_param("i", $cupboard_id);
    $stmt2->execute();
    $stmt2->bind_result($cupboard_name);
    $stmt2->fetch();
    $stmt2->close();

    if (!$cupboard_name) {
        die("Invalid cupboard ID");
    }

    // Insert new file record
    $insert = $conn->prepare("INSERT INTO tbl_fms (
        officename, room_name, cupboard_name, filename, current_status, added_by, added_time
    ) VALUES (?, ?, ?, ?, 'IN', ?, NOW())");
    $insert->bind_param("sssss", $office_id, $room_id, $cupboard_name, $filename, $added_by);

    if ($insert->execute()) {
        $file_id = $insert->insert_id;

        // Log file creation
        $action = "File Named $filename created in $room_name / $cupboard_name";
        logFileHistory($conn, $file_id, $action, $added_by);

        header("Location: ../Fms/index_table.php?id=$room_id&file_added=1");
        exit;
    } else {
        echo "❌ Database error: " . $insert->error;
    }

    $insert->close();
}
?>
