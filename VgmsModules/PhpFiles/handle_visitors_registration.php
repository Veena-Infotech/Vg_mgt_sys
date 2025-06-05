<?php
include 'connection.php'; // Make sure connection.php is correct

// Helper function to sanitize folder name
function sanitize_folder_name($string)
{
    return preg_replace('/[^a-zA-Z0-9-_]/', '_', strtolower($string));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign variables
    $f_name = $_POST['firstName'];
    $m_name = $_POST['middleName'];
    $l_name = $_POST['lastName'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone'];
    $imagePath = null;

    $source = $_POST['source'];
    $society_name = ($source === 'society') ? $_POST['first_name'] : NULL;
    $designation = ($source === 'society') ? $_POST['designation'] : NULL;
    $company_name = ($source === 'company') ? $_POST['first_name'] : NULL;
    $visitor_type = ($source === 'company') ? $_POST['visitorType'] : NULL;

    $reference_id = (int) $_POST['referenceName'];
    $whom_to_meet = $_POST['whomToMeet'];
    $number_guests = $_POST['noofguest'];
    $visit_purpose = trim($_POST['reason']);
    $registered_date = date('Y-m-d');

    // Check if reference_id exists in tbl_client
    $checkRef = "SELECT id FROM tbl_client WHERE id = ?";
    $checkStmt = mysqli_prepare($conn, $checkRef);
    mysqli_stmt_bind_param($checkStmt, "i", $reference_id);
    mysqli_stmt_execute($checkStmt);
    mysqli_stmt_store_result($checkStmt);

    if (mysqli_stmt_num_rows($checkStmt) === 0) {
        echo "Error: Invalid reference selected.";
        exit;
    }
    mysqli_stmt_close($checkStmt);

    // Function to generate a unique ID
    function generateUID()
    {
        $prefix = "VST";
        $random = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
        $time = substr(time(), -4); // last 4 digits of current Unix timestamp
        return $prefix . '-' . strtoupper($random) . '-' . $time;
    }

    $uid = generateUID();

    // ✅ Handle captured image before binding
    if (isset($_POST['capturedImageData']) && !empty($_POST['capturedImageData'])) {
        $imageData = $_POST['capturedImageData'];

        // Decode base64
        list($type, $imageData) = explode(';', $imageData);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        // Save image
        $uploadDir = "uploads/captured/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imageName = 'visitor_' . time() . '.png';
        $imagePath = $uploadDir . $imageName;
        file_put_contents($imagePath, $imageData);

        echo "✅ Captured image saved: $imagePath<br>";
    }

    // Insert query
    $sql = "INSERT INTO tbl_visitor (
        f_name, m_name, l_name, phone_no, email, 
        registered_date, society_name, company_name, 
        reference_id, visitor_type, designation, 
        number_accompanying_guests, visit_purpose, uid, img
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param(
            $stmt,
            "ssssssssssissss",
            $f_name, $m_name, $l_name, $phone_no, $email,
            $registered_date, $society_name, $company_name,
            $reference_id, $visitor_type, $designation,
            $number_guests, $visit_purpose, $uid, $imagePath
        );

        if (mysqli_stmt_execute($stmt)) {
            echo "✅ Visitor registered successfully with UID: $uid";
        } else {
            echo "❌ Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "❌ Statement preparation failed: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "❌ Invalid request.";
}
?>
