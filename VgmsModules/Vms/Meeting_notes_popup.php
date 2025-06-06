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
    <title>Registration Form</title>

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
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
    <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet" />


    <style>
        /* Style for the file upload drop area */
        .file-drop-area {
            border: 2px dashed rgb(97, 107, 117);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            position: relative;
            /* background-color: #f8f9fa; */
            transition: background-color 0.3s ease;
        }

        .file-item img {
            object-fit: cover;
        }

        /* .file-drop-area:hover {
            background-color: #e9ecef;
        } */

        /* Hidden file input */
        .file-drop-area input[type="file"] {
            display: none;
        }

        /* Style for the message within the drop area */
        .file-drop-message p {
            margin: 0;
            font-size: 14px;
            color: rgb(98, 111, 125);
        }

        /* Preview of uploaded files */
        #filePreview {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }

        #filePreview .file-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        #filePreview .file-item img {
            width: 30px;
            margin-right: 10px;
        }

        #photoMessage {
            display: none;
            background-color: #e0f2fe;
            border: 1px solid #0284c7;
            color: #0369a1;
            padding: 8px 12px;
            border-radius: 6px;
            margin-top: 12px;
            font-size: 14px;
        }

        #customMessage {
            display: none;
            background-color: #e0f2fe;
            border: 1px solid #0284c7;
            color: #0369a1;
            padding: 8px 12px;
            border-radius: 6px;
            margin-top: 12px;
            font-size: 14px;
        }
    </style>

</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <?php include_once('../../Components/navbar.php'); ?>
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
            <!-- <div class="container shadow-lg rounded-4 p-4 mt-4 mb-2 "> -->
            <h2 class="mb-1 fw-bold ">Meeting Notes</h2>
<hr>
            <!-- <div class="progress mb-4 rounded-pill" style="margin-top: 1%;">
                <div id="progress-bar" class="progress-bar bg-primary rounded-pill" role="progressbar"
                    style="width: 0%">
                </div>
            </div> -->

            <form action="../PhpFiles/handle_vms_meeting_notes.php" method="POST" id="onboardingForm" enctype="multipart/form-data" class="dropzone dropzone-multiple p-0" id="dropzone-multiple" data-dropzone="data-dropzone" >

                <!-- STEP TEMPLATE START -->
                <!-- Repeat this template per section with unique content -->
                <div class="step">
                    <div class="row g-3">
                        <?php
                        include '../PhpFiles/connection.php';

$meeting_id = isset($_GET['meeting_id']) ? mysqli_real_escape_string($conn, $_GET['meeting_id']) : '';
$uid = '';
$visitor_name = '';
$employee_name = '';

if (!empty($meeting_id)) {
    $query = mysqli_query($conn, "
        SELECT 
            h.uid,
            CONCAT(v.f_name, ' ', v.m_name, ' ', v.l_name) AS visitor_name,
            CONCAT(e.f_name, ' ', e.m_name, ' ', e.l_name) AS employee_name
        FROM tbl_meeting_history h
        LEFT JOIN tbl_visitor v ON h.visitor_id = v.id
        LEFT JOIN tbl_emp e ON h.emp_id = e.id
        WHERE h.id = '$meeting_id'
        LIMIT 1
    ");

    if ($row = mysqli_fetch_assoc($query)) {
        $uid = $row['uid'];
        $visitor_name = trim($row['visitor_name']);
        $employee_name = trim($row['employee_name']);
    } 
}
                        ?>


                        <div class="col-md-6">
                            <label class="form-label">Meeting ID</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($uid); ?>" readonly>
                            <input type="hidden" name="meeting_id" value="<?php echo $meeting_id; ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Visitor Name</label>
                            <input class="form-control" type="text" name="visitor_name" placeholder="John Smith" readonly value="<?php echo htmlspecialchars($visitor_name); ?>" />

                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label class="form-label">Employee's Name</label>
                                <input class="form-control" type="text" name="employee_name" placeholder="John Smith" readonly value="<?php echo htmlspecialchars($employee_name); ?>" />

                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="datetimepicker">Meeting Date & Time</label>
                            <input class="form-control datetimepicker flatpickr-input" name="date_time" id="datetimepicker" type="text" placeholder="dd/mm/yyyy hour : minute" data-options="{&quot;enableTime&quot;:true,&quot;dateFormat&quot;:&quot;d/m/y H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">
                        </div>

                        <div class="col-md-6">
                            <label for="uploadFile" class="form-label">Upload File</label>
                            <!-- File Drop HTML -->
                                <!-- <div class="file-drop-area" id="fileDropArea">
                                    <input type="file" class="form-control d-none" name="file[]" id="fileInput" multiple>

                                    <div class="file-drop-message text-center">
                                        <img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" />
                                        <p>Drag & Drop your files here or <strong>browse</strong></p>
                                    </div>
                                    <div id="filePreview" class="mt-3"></div>
                                </div> -->
                                <input class="form-control" id="formFile" name="uploaded_file" type="file" />


                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Payment Amount (If applicable)</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₹</span>
                                <input class="form-control" type="text" name="payment_amt" aria-label="Amount (to the nearest dollar)" />
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Additional Comments</label>
                             <textarea class="form-control" name="additional_comments" id="exampleTextarea" rows="3"> </textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Discussion Summary</label>
                             <textarea class="form-control"  name="discussion_summary" id="exampleTextarea" rows="3"> </textarea>
                        </div>



                    </div>
                    <div class="d-flex justify-content-end mt-4 gap-2">
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        <button type="submit" name="submit_btn" class="btn btn-outline-primary">Submit</button>

                    </div>

                </div>

                <!-- 2. Contact Details -->


                <!-- 3. Identity and Banking Details -->

                <!-- 4. Emergency & Nominee Details -->
                <!-- </div> -->
            </form>

            <!-- Footer -->
            <?php include("../../Components/footer.php"); ?>
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
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../vendors/dropzone/dropzone-min.js"></script>

    <script>
        const steps = document.querySelectorAll('.step');
        const nextBtns = document.querySelectorAll('.next');
        const prevBtns = document.querySelectorAll('.prev');
        const progress = document.getElementById('progress-bar');
        let current = 0;

        function showStep(i) {
            steps.forEach((step, index) => step.style.display = 'none');
            steps[i].style.display = 'block';
            gsap.fromTo(steps[i], {
                opacity: 0,
                y: 50
            }, {
                opacity: 1,
                y: 0,
                duration: 0.5
            });
            progress.style.width = `${(i + 1) / steps.length * 100}%`;
        }

        // Next button click
        nextBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                if (validateStep(currentStep)) {
                    currentStep++;
                    if (currentStep < steps.length) {
                        showStep(currentStep);
                    }
                } else {
                    // Wait for 3 seconds, then remove is-invalid with a fade animation
                    setTimeout(() => {
                        const invalidInputs = steps[currentStep].querySelectorAll('.is-invalid');
                        invalidInputs.forEach(input => {
                            gsap.to(input, {
                                borderColor: "#ced4da", // Bootstrap normal border color
                                duration: 0.5,
                                onComplete: () => {
                                    input.classList.remove('is-invalid');
                                }
                            });
                        });
                    }, 3000);
                }
            });
        });



        prevBtns.forEach(btn => btn.addEventListener('click', () => {
            if (current > 0) {
                current--;
                showStep(current);
            }
        }));

        showStep(current);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // File preview and drag-and-drop functionality
        document.getElementById('fileDropArea').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(e) {
            const filePreview = document.getElementById('filePreview');
            filePreview.innerHTML = ''; // Clear existing preview

            Array.from(e.target.files).forEach(file => {
                const fileElement = document.createElement('div');
                fileElement.classList.add('file-item');

                const fileIcon = document.createElement('img');
                fileIcon.src = '../../../assets/img/icons/file.png'; // Your file icon path
                fileIcon.alt = file.name;

                const fileName = document.createElement('span');
                fileName.textContent = file.name;

                fileElement.appendChild(fileIcon);
                fileElement.appendChild(fileName);
                filePreview.appendChild(fileElement);
            });
        });

        // Drag & Drop handling
        document.getElementById('fileDropArea').addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.backgroundColor = '#e9ecef'; // Change background color on drag
        });

        document.getElementById('fileDropArea').addEventListener('dragleave', function() {
            this.style.backgroundColor = ''; // Reset background color when drag leaves
        });

        document.getElementById('fileDropArea').addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.backgroundColor = ''; // Reset background color when file is dropped

            const fileInput = document.getElementById('fileInput');
            const files = e.dataTransfer.files;

            // Simulate file selection in the file input
            fileInput.files = files;

            // Update preview
            const filePreview = document.getElementById('filePreview');
            filePreview.innerHTML = ''; // Clear existing preview

            Array.from(files).forEach(file => {
                const fileElement = document.createElement('div');
                fileElement.classList.add('file-item');

                const fileIcon = document.createElement('img');
                fileIcon.src = '../../../assets/img/icons/file.png'; // Your file icon path
                fileIcon.alt = file.name;

                const fileName = document.createElement('span');
                fileName.textContent = file.name;

                fileElement.appendChild(fileIcon);
                fileElement.appendChild(fileName);
                filePreview.appendChild(fileElement);
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('onboardingForm');
            const steps = document.querySelectorAll('.step');
            const nextBtns = document.querySelectorAll('.next');
            const prevBtns = document.querySelectorAll('.prev');
            let currentStep = 0;

            showStep(currentStep);

            // Show the current step and hide others
            function showStep(step) {
                steps.forEach((s, index) => {
                    s.style.display = (index === step) ? 'block' : 'none';
                });
            }

            // Validate current step
            function validateStep(stepIndex) {
                let valid = true;
                const step = steps[stepIndex];
                const inputs = step.querySelectorAll('input, select, textarea');

                inputs.forEach(input => {
                    const value = input.value.trim();
                    const type = input.getAttribute('type');
                    const isRequired = true; // You can later make some fields optional if needed

                    if (isRequired && value === '') {
                        input.classList.add('is-invalid');
                        valid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }

                    // Specific validations
                    if (type === 'email' && value !== '') {
                        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailPattern.test(value)) {
                            input.classList.add('is-invalid');
                            valid = false;
                        }
                    }

                    if (type === 'date' && value !== '') {
                        const date = new Date(value);
                        if (isNaN(date.getTime())) {
                            input.classList.add('is-invalid');
                            valid = false;
                        }
                    }

                    if (input.closest('label')?.textContent?.includes('Contact Number') && value !== '') {
                        if (!/^\d{10}$/.test(value)) {
                            input.classList.add('is-invalid');
                            valid = false;
                        }
                    }

                    if (input.closest('label')?.textContent?.includes('Aadhar Card Number') && value !== '') {
                        if (!/^\d{12}$/.test(value)) {
                            input.classList.add('is-invalid');
                            valid = false;
                        }
                    }

                    if (input.closest('label')?.textContent?.includes('PAN Card Number') && value !== '') {
                        if (!/[A-Z]{5}[0-9]{4}[A-Z]{1}/.test(value)) {
                            input.classList.add('is-invalid');
                            valid = false;
                        }
                    }

                    if (type === 'file' && input.required && input.files.length === 0) {
                        input.classList.add('is-invalid');
                        valid = false;
                    }

                    // Conditional validations
                    if (input.closest('label')?.textContent?.includes('Do you have a UPI ID?')) {
                        const upiSelect = input;
                        const upiInput = step.querySelector('input[type="text"][placeholder="Enter UPI ID"]') || step.querySelector('input[placeholder="If Yes, Enter UPI ID"]');
                        if (upiSelect.value === 'Yes' && upiInput && upiInput.value.trim() === '') {
                            upiInput.classList.add('is-invalid');
                            valid = false;
                        }
                    }

                });

                return valid;
            }

            // Next button click
            nextBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (validateStep(currentStep)) {
                        currentStep++;
                        if (currentStep < steps.length) {
                            showStep(currentStep);
                        }
                    } else {
                        alert('Please fill all required fields correctly.');
                    }
                });
            });

            // Previous button click
            prevBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    currentStep--;
                    if (currentStep >= 0) {
                        showStep(currentStep);
                    }
                });
            });

            // Final form submit
            form.addEventListener('submit', function(e) {
                if (!validateStep(currentStep)) {
                    e.preventDefault();
                    alert('Please complete all required fields correctly before submitting.');
                }
            });
        });
    </script>



</body>




</html>