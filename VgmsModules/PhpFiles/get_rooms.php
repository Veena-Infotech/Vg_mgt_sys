<?php
include './connection.php';

// Handle POST request
if (isset($_POST['office_id'])) {
    $office_id = $_POST['office_id'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT id, room_name FROM tbl_rooms WHERE office_id = ?");
    $stmt->bind_param("i", $office_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Output HTML options
    echo '<option value="">Select Room</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['room_name']) . '</option>';
    }
}
?>
