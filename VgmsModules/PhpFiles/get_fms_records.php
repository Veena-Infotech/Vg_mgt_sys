<?php
header('Content-Type: application/json');
include '../PhpFiles/connection.php';

$sql = "SELECT 
            filename, 
            officename, 
            room_name, 
            cupboard_name, 
            current_status, 
            taken_by, 
            taken_time, 
            Reason 
        FROM tbl_fms 
        ORDER BY added_time DESC";

$result = $conn->query($sql);

if (!$result) {
    echo json_encode(['status' => 'error', 'message' => 'Query failed: ' . $conn->error]);
    exit;
}

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = [
        'file_name'     => $row['filename'],
        'office_name'   => $row['officename'],
        'room_name'     => $row['room_name'],
        'cupboard'      => $row['cupboard_name'],
        'status'        => $row['current_status'],
        'taken_by'      => $row['taken_by'] ?? '—',
        'taken_time'    => $row['taken_time'] ?? '—',
        'reason'        => $row['Reason'] ?? '—'
    ];
}

if (count($data) > 0) {
    echo json_encode(['status' => 'success', 'records' => $data]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No records found in tbl_fms']);
}
?>
