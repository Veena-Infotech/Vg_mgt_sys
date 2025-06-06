<?php
include '../PhpFiles/connection.php'; // Adjust the path as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $meeting_id = $_POST['meeting_id'];
    $uid = '';
    $uid_query = mysqli_query($conn, "SELECT uid FROM tbl_meeting_history WHERE id = '$meeting_id' LIMIT 1");
    if ($uid_row = mysqli_fetch_assoc($uid_query)) {
    $uid = $uid_row['uid'];
    }

    $visitor_name = $_POST['visitor_name'];
    $employee_name = $_POST['employee_name'];
    $date_time = $_POST['date_time'];
    $payment_amt = $_POST['payment_amt'];
    $additional_comments = $_POST['additional_comments'];
    $discussion_summary = $_POST['discussion_summary'];

    // Helper function to split full name
function splitFullName($fullName) {
    $parts = explode(" ", trim($fullName));
    return [
        'f_name' => $parts[0] ?? '',
        'm_name' => $parts[1] ?? '',
        'l_name' => $parts[2] ?? ($parts[1] ?? '')
    ];
}

// Split employee name
$emp_name_parts = splitFullName($employee_name);
$emp_query = mysqli_query($conn, "
    SELECT id FROM tbl_emp 
    WHERE f_name = '{$emp_name_parts['f_name']}'
      AND (m_name = '{$emp_name_parts['m_name']}' OR '{$emp_name_parts['m_name']}' = '')
      AND (l_name = '{$emp_name_parts['l_name']}' OR '{$emp_name_parts['l_name']}' = '')
    LIMIT 1
");
$emp_row = mysqli_fetch_assoc($emp_query);
$emp_id = $emp_row ? $emp_row['id'] : NULL;

// Split visitor name
$visitor_name_parts = splitFullName($visitor_name);
$visitor_query = mysqli_query($conn, "
    SELECT id FROM tbl_visitor 
    WHERE f_name = '{$visitor_name_parts['f_name']}'
      AND (m_name = '{$visitor_name_parts['m_name']}' OR '{$visitor_name_parts['m_name']}' = '')
      AND (l_name = '{$visitor_name_parts['l_name']}' OR '{$visitor_name_parts['l_name']}' = '')
    LIMIT 1
");
$visitor_row = mysqli_fetch_assoc($visitor_query);
$visitor_id = $visitor_row ? $visitor_row['id'] : NULL;

    // Handle file upload
$uploaded_file_name = '';

if (!empty($_FILES['uploaded_file']['name'])) {
    $upload_dir = '../uploads/meeting_files/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $original_filename = basename($_FILES['uploaded_file']['name']);
    $tmp_name = $_FILES['uploaded_file']['tmp_name'];
    $error = $_FILES['uploaded_file']['error'];

    if ($error === UPLOAD_ERR_OK) {
        $file_info = pathinfo($original_filename);
        $extension = isset($file_info['extension']) ? '.' . $file_info['extension'] : '';

        // Short random number instead of long uniqid
        $short_id = rand(10000, 99999); // 5-digit number
        $new_filename = 'file_' . $short_id . $extension;
        $destination = $upload_dir . $new_filename;

        if (move_uploaded_file($tmp_name, $destination)) {
            $uploaded_file_name = $destination;
        }
    }
}


    // Update payment amount in tbl_meeting_history
    $update_history_sql = "
        UPDATE tbl_meeting_history 
        SET amount = '$payment_amt' 
        WHERE id = '$meeting_id'
    ";
    mysqli_query($conn, $update_history_sql);

    // Insert into tbl_meeting_notes
    $insert_sql = "INSERT INTO tbl_meeting_notes (
    meeting_id, uid, emp_id, visitor_id, date_time, payment_amt, additional_comments, discussion_summary, files
    ) VALUES (
    '$meeting_id', 
    '$uid',
    ".($emp_id ? "'$emp_id'" : "NULL").", 
    ".($visitor_id ? "'$visitor_id'" : "NULL").", 
    '$date_time', 
    '$payment_amt', 
    '$additional_comments', 
    '$discussion_summary',
    '$uploaded_file_name'
)";



    if (mysqli_query($conn, $insert_sql)) {
    header("Location: ../Vms/Employee_Side_Meeting.php");
    exit(); // Always call exit after header redirection
} else {
    echo "Error: " . mysqli_error($conn);
}

}
?>
