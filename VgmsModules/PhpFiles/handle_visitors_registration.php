<?php
include 'connection.php'; // Ensure this connects correctly

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
    $society_name = ($source === 'society') ? $_POST['society_name'] : NULL;
    $company_name = ($source === 'company') ? $_POST['company_name'] : NULL;

    $designation = ($source === 'society') ? $_POST['designation'] : NULL;
    $visitor_type = ($source === 'company') ? $_POST['visitorType'] : NULL;

    $reference_id = (int) $_POST['referenceName']; // This is emp_id
    $whom_to_meet = $_POST['whomToMeet'];
    $number_guests = $_POST['noofguest'];
    $visit_purpose = trim($_POST['reason']);
    $registered_date = date('Y-m-d');

    // Validate reference_id
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

    // Generate UID
    function generateUID()
    {
        $prefix = "VST";
        $random = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
        $time = substr(time(), -4);
        return $prefix . '-' . strtoupper($random) . '-' . $time;
    }

    $uid = generateUID();

    // Handle image
    if (isset($_POST['capturedImageData']) && !empty($_POST['capturedImageData'])) {
        $imageData = $_POST['capturedImageData'];

        // Decode base64
        list($type, $imageData) = explode(';', $imageData);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        // Save image
        $uploadDir = "../uploads/visitor_img/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imageName = 'visitor_' . time() . '.png';
        $imagePath = $uploadDir . $imageName;
        file_put_contents($imagePath, $imageData);
    }

    // Insert visitor
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
            $visitor_id = mysqli_insert_id($conn); // Get inserted visitor ID

            // Insert into meeting history
            $meeting_uid = uniqid("meet_");
            $meeting_date = date('Y-m-d');
            $meeting_time = date('H:i:s');

            $insertMeeting = "INSERT INTO tbl_meeting_history (uid, date, time, visitor_id, emp_id, reason)
                              VALUES (?, ?, ?, ?, ?, ?)";
            $stmt2 = mysqli_prepare($conn, $insertMeeting);
            mysqli_stmt_bind_param($stmt2, "sssiss", $meeting_uid, $meeting_date, $meeting_time, $visitor_id, $whom_to_meet, $visit_purpose);

            if (mysqli_stmt_execute($stmt2)) {
                // ✅ All good — redirect
                header("Location: ../Vms/New-Registration.php?success=true");
                exit;
            } else {
                echo "❌ Meeting insert failed: " . mysqli_stmt_error($stmt2);
            }

        } else {
            echo "❌ Visitor insert failed: " . mysqli_stmt_error($stmt);
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
