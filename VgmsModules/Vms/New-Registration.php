<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Starter code</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
</head>
<style>
    .content-body {
        background-color: #f8f9fa;
        padding-top: 0rem;
    }

    input.form-control,
    textarea.form-control,
    select.form-select {
        border: 1px solid #495057;
        /* Darker border */
        box-shadow: none;
    }

    input.form-control:focus,
    textarea.form-control:focus,
    select.form-select:focus {
        border-color: #495057;
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
        /* Subtle focus */
    }

    #video,
    #capturedImage {
        width: 160px;
        height: 120px;
        object-fit: cover;
    }

 

    .nav-tabs .nav-link.active {
        color: blue;
        /* Color for the active tab */
        font-weight: bold;
        /* Optional: make active tab bold */
    }

    .nav-tabs .nav-link {
        transition: all 0.3s ease;
    }

    /* Add the blue underline for active tab */
    .nav-tabs .nav-link.active {
        border-color: #007bff #007bff transparent;
        color: #007bff;
    }

    /* .profile-tab {
  opacity: 0;
  visibility: hidden;
} */
</style>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <?php include '../../Components/navbar.php'; ?>
        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                navbarDefault?.remove();
                navbarVertical?.remove();
                dualNav.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'dual');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                navbarVertical?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTopSlim.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarTopSlim?.remove();
                dualNav?.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                topNavSlim?.remove();
                navbarVertical?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTop.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarDefault?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'combo');
            } else {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
            }
        </script>
        <div class="content">
            <div class="content-body" onload="startcamera()" style="padding-top:  0rem;">
                <!-- the padding form the top is 0 to fit the whole page  -->
                <div class="Col-lg-12">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs" id="tabs" style="border-bottom: 2px solid #ddd;">
                                            <li class="nav-item">
                                                <a href="#my-posts" data-bs-toggle="tab" class="nav-link active show"
                                                    style="font-weight: 600; font-size: 1.1rem; padding: 12px 24px; border-radius: 8px 8px 0 0;">
                                                    <i class="bi bi-person-plus-fill" style="margin-right: 8px;"></i>
                                                    New Registration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#about-me" data-bs-toggle="tab" class="nav-link"
                                                    style="font-weight: 600; font-size: 1.1rem; padding: 12px 24px; border-radius: 8px 8px 0 0;">
                                                    <i class="bi bi-person-check-fill" style="margin-right: 8px;"></i>
                                                    Existing Registration
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="container mt-5">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-10">
                                                            <div class="card border-0 shadow-lg rounded-4"
                                                                style="min-height: 500px;">
                                                                <div class="card-body p-5">
                                                                    <h3 class="text-center mb-4 text-primary fw-bold">
                                                                        New Visitor Registration</h3>
                                                                    <form action="../PhpFiles/register_visitor.php" method="POST" enctype="multipart/form-data">
                                                                        <input type="hidden" name="capturedImage" id="captured_image_input">
                                                                        <div class="row">
                                                                            <!-- Full Name -->
                                                                            <!-- Name Fields -->
                                                                            <div class="col-md-4  animate-field">
                                                                                <label class="form-label" for="firstName">First Name</label>
                                                                                <input class="form-control" id="firstName" name="firstName" type="text" placeholder="First Name" required style="border: 1px solid #dcdcdc;" />

                                                                            </div>
                                                                            <div class="col-md-4  animate-field">
                                                                                <label class="form-label" for="middleName">Middle Name</label>
                                                                                <input class="form-control" id="middleName" name="middleName" type="text" placeholder="Middle Name" required style="border: 1px solid #dcdcdc;" />
                                                                            </div>
                                                                            <div class="col-md-4  animate-field">
                                                                                <label class="form-label" for="lastName">Last Name</label>
                                                                                <input class="form-control" id="lastName" name="lastName" type="text" placeholder="Last Name" required style="border: 1px solid #dcdcdc;" />
                                                                            </div>

                                                                            <!-- Email and Phone -->
                                                                            <div class="col-md-6  animate-field">
                                                                                <label class="form-label" for="email">Email</label>
                                                                                <input class="form-control" id="email" name="email" type="email" placeholder="johndoe@example.com" required style="border: 1px solid #dcdcdc;" />
                                                                            </div>
                                                                            <div class="col-md-6  animate-field">
                                                                                <label class="form-label" for="phone">Phone Number</label>
                                                                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="123-456-7890" required style="border: 1px solid #dcdcdc;" />
                                                                            </div>

                                                                            <!-- Radio Buttons -->
                                                                            <div class="col-md-12  animate-field">
                                                                                <label class="form-label">You are from:</label>
                                                                                <div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" id="societyRadio" type="radio" name="source" value="society" required style="border: 1px solid #dcdcdc;" />
                                                                                        <label class="form-check-label" for="societyRadio">Society</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" id="companyRadio" type="radio" name="source" value="company" required style="border: 1px solid #dcdcdc;" />
                                                                                        <label class="form-check-label" for="companyRadio">Company</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Conditional Dropdowns -->
                                                                            <div class="col-md-6" id="designationDropdown" style="display: none;">
                                                                                <label class="form-label" for="designation">Designation</label>
                                                                                <select class="form-select" id="designation" name="designation">
                                                                                    <option selected disabled value="">Choose...</option>
                                                                                    <option>Manager</option>
                                                                                    <option>Secretary</option>
                                                                                    <option>President</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-md-6" id="visitorTypeDropdown" style="display: none;">
                                                                                <label class="form-label" for="visitorType">Visitor Type</label>
                                                                                <select class="form-select" id="visitorType" name="visitorType">
                                                                                    <option selected disabled value="">Choose...</option>
                                                                                    <option>Vendor</option>
                                                                                    <option>Client</option>
                                                                                    <option>Delivery</option>
                                                                                </select>
                                                                            </div>



                                                                            <!-- Reference Radio -->
                                                                            <div class="col-md-12  animate-field">
                                                                                <label class="form-label">Is through Reference?</label>
                                                                                <div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" id="referenceYes" type="radio" name="reference" value="yes" required style="border: 1px solid #dcdcdc;" />
                                                                                        <label class="form-check-label" for="referenceYes">Yes</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" id="referenceNo" type="radio" name="reference" value="no" required style="border: 1px solid #dcdcdc;" />
                                                                                        <label class="form-check-label" for="referenceNo">No</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Reference Name Dropdown -->
                                                                            <div class="col-md-6  animate-field" id="referenceNameField">
                                                                                <label class="form-label" for="referenceName">Reference Name</label>
                                                                                <select class="form-select" id="referenceName" name="referenceName" required style="border: 1px solid  #dcdcdc">
                                                                                    <option value="">Select Reference</option>
                                                                                    <option value="add_new_reference">+ Add Reference</option> <!-- placed right after default -->
                                                                                    <option value="Ref1">Ref1</option>
                                                                                    <option value="Ref2">Ref2</option>
                                                                                    <!-- Add more reference options as needed -->
                                                                                </select>
                                                                            </div>


                                                                            <!-- Whom to Meet -->
                                                                            <?php
                                                                            include('../PhpFiles/connection.php'); // Adjust path if needed

                                                                            $sql = "SELECT id, f_name, l_name, position FROM tbl_emp ORDER BY f_name ASC";
                                                                            $result = mysqli_query($conn, $sql);
                                                                            ?>

                                                                            <div class="col-md-6 mb-4 animate-field">
                                                                                <div class="form-floating">
                                                                                    <select class="form-select rounded-3" id="whomToMeet" name="whomToMeet" required style="border: 1px solid #dcdcdc;">
                                                                                        <option selected disabled>Choose...</option>
                                                                                        <?php
                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                            $emp_id = $row['id'];
                                                                                            $full_name = $row['f_name'] . ' ' . $row['l_name'];
                                                                                            $position = $row['position'];
                                                                                            echo "<option value='$emp_id'>$full_name ($position)</option>";
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                    <label for="whomToMeet">Whom to Meet?</label>
                                                                                </div>
                                                                            </div>


                                                                            <!-- Reason to Meet -->
                                                                            <div class="col-md-8 mb-4">
                                                                                <div class="form-floating h-100 animate-field">
                                                                                    <textarea
                                                                                        class="form-control rounded-3 h-100"
                                                                                        placeholder="Reason for meeting"
                                                                                        id="reason"
                                                                                        name="reason"
                                                                                        style="min-height: 200px; border: 1px solid #dcdcdc;"
                                                                                        required></textarea>
                                                                                    <label for="reason">Reason to
                                                                                        Meet</label>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Capture Image -->
                                                                            <div class="col-md-4 mb-4 animate-field"
                                                                                id="captureImageBox">
                                                                                <div class=" rounded-3 p-3 d-flex flex-column align-items-center justify-content-between h-100"
                                                                                    style="min-height: 200px; ">
                                                                                    <label
                                                                                        class="mb-2 fw-semibold">Capture
                                                                                        Image</label>
                                                                                    <video id="video"
                                                                                        class="border rounded-3 shadow-sm"
                                                                                        style=" height: 100px; object-fit: cover;"></video>
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-secondary btn-sm mt-2"
                                                                                        id="captureBtn">Capture</button>
                                                                                    <img id="capturedImage"
                                                                                        class="rounded-3 d-none border mt-2"
                                                                                        alt="Captured Image"
                                                                                        style="width: 80px; height: auto;">
                                                                                    <canvas id="canvas"
                                                                                        class="d-none"></canvas>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Register Button (full width) -->
                                                                            <div class="col-12 d-grid animate-field">
                                                                                <!-- <button type="submit"
                                                                                    class="btn btn-primary btn-lg rounded-pill shadow-sm">Register</button> -->
                                                                                <button class="btn btn-primary w-100 mb-3">Registration</button>
                                                                            </div>
                                                                        </div> <!-- row end -->
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                                <div class="container mt-5">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-7">
                                                            <div class="card border-0 shadow-lg rounded-4"
                                                                style="min-height: 500px;">
                                                                <div class="card-body p-5">
                                                                    <h3 class="text-center mb-4 text-primary fw-bold">
                                                                        Existing Visitor Registration</h3>
                                                                    <form action="../PhpFiles/schedule_meeting.php" method="post">
                                                                        <?php
                                                                        include('../PhpFiles/connection.php'); // Update path as needed
                                                                        ?>
                                                                        <!-- Visitors Dropdown -->
                                                                        <div class="form-floating mb-4">
                                                                            <select class="form-select rounded-3" id="visitorName" name="visitorName" required style="border: 1px solid #dcdcdc;">
                                                                                <option selected disabled>Choose...</option>
                                                                                <?php
                                                                                $visitorQuery = "SELECT id, f_name, m_name, l_name FROM tbl_visitor ORDER BY f_name ASC";
                                                                                $visitorResult = mysqli_query($conn, $visitorQuery);

                                                                                while ($visitor = mysqli_fetch_assoc($visitorResult)) {
                                                                                    $visitor_id = $visitor['id'];
                                                                                    $full_name = trim($visitor['f_name'] . ' ' . $visitor['m_name'] . ' ' . $visitor['l_name']);
                                                                                    echo "<option value=\"$visitor_id\">$full_name</option>";
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                            <label for="visitorName">Visitors</label>
                                                                        </div>

                                                                        <!-- OTP Section (Always Visible) -->
                                                                        <div class="row align-items-end mb-4" id="otpSection">
                                                                            <!-- OTP Input -->
                                                                            <div class="col-md-8">
                                                                                <label class="form-label" for="otp">Enter OTP</label>
                                                                                <input type="text" class="form-control rounded-3" id="otp" name="otp" maxlength="6" required pattern="\d{6}" style="border: 1px solid #dcdcdc;" placeholder="Enter 6-digit OTP" />
                                                                                <div class="invalid-feedback">Please enter a valid 6-digit OTP.</div>
                                                                            </div>

                                                                            <!-- Verify Button -->
                                                                            <div class="col-md-4">
                                                                                <button class="btn btn-primary mt-4 w-100" type="button" onclick="verifyOTP()">Verify</button>
                                                                            </div>
                                                                        </div>


                                                                        <!-- Rest of Form (Hidden initially) -->
                                                                        <div id="mainFormFields" style="display: none;">
                                                                            <!-- Whom to Meet Dropdown -->
                                                                            <div class="form-floating mb-4">
                                                                                <select class="form-select rounded-3" id="whomToMeet" name="whomToMeet" required style="border: 1px solid #dcdcdc;">
                                                                                    <option selected disabled>Choose...</option>
                                                                                    <?php
                                                                                    $empQuery = "SELECT id, f_name, l_name, position FROM tbl_emp ORDER BY f_name ASC";
                                                                                    $empResult = mysqli_query($conn, $empQuery);
                                                                                    while ($emp = mysqli_fetch_assoc($empResult)) {
                                                                                        $emp_id = $emp['id'];
                                                                                        $emp_name = $emp['f_name'] . ' ' . $emp['l_name'] . ' (' . $emp['position'] . ')';
                                                                                        echo "<option value=\"$emp_id\">$emp_name</option>";
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                                <label for="whomToMeet">Whom to Meet?</label>
                                                                            </div>

                                                                            <!-- Reason -->
                                                                            <div class="form-floating mb-4">
                                                                                <textarea class="form-control rounded-3"
                                                                                    placeholder="Reason for meeting"
                                                                                    id="reason"
                                                                                    name="reason"
                                                                                    style="height: 200px; border: 1px solid #dcdcdc;"
                                                                                    required></textarea>
                                                                                <label for="reason">Reason to Meet</label>
                                                                            </div>

                                                                            <!-- Submit -->
                                                                            <div class="d-grid">
                                                                                <button class="btn btn-primary w-100 mb-3">Update</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
            </div>


            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const video = document.getElementById("video");
                    const canvas = document.getElementById("canvas");
                    const captureBtn = document.getElementById("captureBtn");
                    const capturedImage = document.getElementById("capturedImage");
                    let stream = null;

                    // Function to start the camera
                    async function startCamera() {
                        try {
                            stream = await navigator.mediaDevices.getUserMedia({
                                video: true
                            });
                            video.srcObject = stream;
                            video.play();
                        } catch (error) {
                            console.error("Camera Error: ", error);
                            alert("Camera access denied! Enable it in browser settings.");
                        }
                    }

                    // Capture Image
                    captureBtn.addEventListener("click", function() {
                        if (!stream) {
                            alert("Camera not started. Please allow access.");
                            return;
                        }

                        const context = canvas.getContext("2d");
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
                        context.drawImage(video, 0, 0, canvas.width, canvas.height);

                        // Convert captured image to base64
                        const imageDataUrl = canvas.toDataURL("image/png");

                        // Display captured image
                        capturedImage.src = imageDataUrl;
                        capturedImage.classList.remove("d-none");
                    });

                    // Start camera when the page loads
                    startCamera();
                });
            </script>

            <!-- Script to handle the popup -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const urlParams = new URLSearchParams(window.location.search);
                    const success = urlParams.get('success');

                    if (success) {
                        const modal = new bootstrap.Modal(document.getElementById('statusModal'));
                        const modalHeader = document.getElementById('statusModalHeader');
                        const modalBody = document.getElementById('statusModalBody');

                        if (success === 'true') {
                            modalHeader.classList.remove('bg-danger');
                            modalHeader.classList.add('bg-success');
                            modalBody.textContent = "Visitor registered and meeting logged successfully!";
                        } else {
                            modalHeader.classList.remove('bg-success');
                            modalHeader.classList.add('bg-danger');
                            modalBody.textContent = "Failed to register visitor.";
                        }

                        modal.show();

                        // Auto-hide modal after 5 seconds
                        setTimeout(() => {
                            modal.hide();
                            window.history.replaceState(null, "", window.location.pathname);
                        }, 5000);
                    }
                });
            </script>




            <!-- Modal -->
            <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-success text-white" id="statusModalHeader">
                            <h5 class="modal-title" id="statusModalLabel">Status</h5>
                        </div>
                        <div class="modal-body" id="statusModalBody">
                            Operation successful.
                        </div>
                    </div>
                </div>
            </div>



    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->

    <!-- ===============================================-->
    <!--Dropdown for contacted-to--->

    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/leaflet/leaflet.js"></script>
    <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../assets/js/ecommerce-dashboard.js"></script>
    <!-- Include GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

    <script>
        window.onload = function() {
            // Select the elements to animate
            const formFields = document.querySelectorAll('.card-body  .animate-field');
            const cardBody = document.querySelector('.card-body');
            const tabs = document.querySelectorAll('.nav-tabs .nav-item');
            const newVisitorTitle = document.querySelector('.card-body h3');

            // Animate the entire form card to slide up with opacity transition
            gsap.from(cardBody, {
                opacity: 0, // Start as invisible
                y: 50, // Slide up from below
                duration: 1, // Duration of the animation
                ease: "power3.out", // Smooth easing
            });

            // Animate the form fields and capture image box one by one with a slight delay
            gsap.from(formFields, {
                opacity: 0, // Start invisible
                y: 20, // Slide up from below
                duration: 0.8, // Duration for each field
                stagger: 0.2, // Delay between each element
                ease: "power3.out", // Smooth easing
                delay: 0.5, // Delay to allow the card to animate first
            });

            // Animate the tabs (New Registration and Existing Registration)
            gsap.from(tabs, {
                opacity: 0,
                y: 20,
                duration: 0.8,
                stagger: 0.3, // Delay between tabs for a staggered effect
                ease: "power3.out",
                delay: 1, // Delay to ensure tabs appear after the form fields
            });

            // Animate the "New Visitor Registration" text
            gsap.from(newVisitorTitle, {
                opacity: 0,
                y: 20,
                duration: 1, // Duration for the title animation
                ease: "power3.out",
                delay: 0.5, // Slight delay to make it appear after the form card starts
            });
        };
        const tabs = document.querySelectorAll('.nav-link');
        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                const targetTabContent = document.querySelector(this.getAttribute('href'));

                // Hide all tabs with a fade out animation
                gsap.to('.tab-pane', {
                    opacity: 0,
                    duration: 0.5,
                    onComplete: function() {
                        // After fade out completes, show the target tab content with a fade-in animation
                        gsap.fromTo(targetTabContent, {
                            opacity: 0
                        }, {
                            opacity: 1,
                            duration: 0.5
                        });
                    }
                });
            });
        });
    </script>

    <!-- script for image handling -->

    <script>
        document.getElementById('captureBtn').addEventListener('click', function() {
            const canvas = document.getElementById('canvas');
            const video = document.getElementById('video');
            const context = canvas.getContext('2d');

            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;

            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/jpeg');

            document.getElementById('capturedImage').src = dataURL;
            document.getElementById('capturedImage').classList.remove('d-none');
            document.getElementById('captured_image_input').value = dataURL;
        });



        document.getElementById("societyRadio").addEventListener("change", function() {
            document.getElementById("designationDropdown").style.display = "block";
            document.getElementById("visitorTypeDropdown").style.display = "none";
        });

        document.getElementById("companyRadio").addEventListener("change", function() {
            document.getElementById("designationDropdown").style.display = "none";
            document.getElementById("visitorTypeDropdown").style.display = "block";
        });

        document.getElementById("referenceYes").addEventListener("change", function() {
            document.getElementById("referenceNameField").style.display = "block";
            document.getElementById("addReferenceBtn").style.display = "block";
        });

        document.getElementById("referenceNo").addEventListener("change", function() {
            document.getElementById("referenceNameField").style.display = "none";
            document.getElementById("addReferenceBtn").style.display = "none";
        });

        function verifyOTP() {
            const otpInput = document.getElementById("otp");
            const otpValue = otpInput.value.trim();

            if (/^\d{6}$/.test(otpValue)) {
                otpInput.classList.remove("is-invalid");
                document.getElementById("mainFormFields").style.display = "block";
            } else {
                otpInput.classList.add("is-invalid");
            }
        }

        document.getElementById("referenceName").addEventListener("change", function() {
            if (this.value === "add_new_reference") {
                // Temporary redirect to another page, change later
                window.location.href = "/temporary-add-reference-page";
            }
        });
    </script>


    </script>


</body>




</html>