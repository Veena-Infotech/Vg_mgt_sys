<?php
include './connection.php';

// Set JSON header (optional, change based on your frontend needs)
header('Content-Type: application/json');

$response = [
    'success' => false,
    'options' => '',
    'message' => ''
];

if (isset($_POST['room_name'])) {
    $room_id = $_POST['room_name'];

    // Validate input: room_id should be a positive integer
    if (!ctype_digit($room_id)) {
        $response['message'] = 'Invalid room ID.';
        echo json_encode($response);
        exit;
    }

    // Prepare statement
    $stmt = $conn->prepare("SELECT id, name FROM shelves_cupboards WHERE room_name = ?");
    if (!$stmt) {
        $response['message'] = 'Prepare failed: ' . $conn->error;
        echo json_encode($response);
        exit;
    }

    $stmt->bind_param("i", $room_id);
    if (!$stmt->execute()) {
        $response['message'] = 'Execute failed: ' . $stmt->error;
        echo json_encode($response);
        exit;
    }

    $result = $stmt->get_result();

    // Build options HTML
    $options = '<option value="">Select Cupboard</option>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = htmlspecialchars($row['name']);
            $options .= "<option value=\"$name\">$name</option>";
        }
        $response['success'] = true;
        $response['options'] = $options;
    } else {
        $response['message'] = 'No cupboards found for this room.';
        $response['options'] = $options; // Just default option
    }

    echo json_encode($response);
} else {
    $response['message'] = 'room_name parameter missing.';
    echo json_encode($response);
}
