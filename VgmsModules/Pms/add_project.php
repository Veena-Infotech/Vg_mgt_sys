<?php
// Include database connection
include '../PhpFiles/connection.php';
?>

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
    <title>Add Project</title>

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
    <link href="../../vendors/choices/choices.min.css" rel="stylesheet" />
    <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet" />
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
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
            <div id="heading-gsap">
                <h3 class="mb-4">Add Project </h3>
                <form action="../PhpFiles/handle_add_project.php" method="post" class="p-0" enctype="multipart/form-data">
                    <div class="row g-3">
                        <!-- Project Title -->
                        <div class="col-md-6">
                            <label class="form-label">Project Title <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter project title" name="project_title">
                        </div>

                        <!-- Project Type Dropdown -->
                        <!-- Project Type -->
                        <div class="col-md-6">
                            <label class="form-label">Project Type <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_type" required>
                                <option selected disabled>Select type</option>
                                <?php
                                include 'connection.php'; // Ensure this path is correct

                                $typeQuery = "SELECT id, type FROM tbl_project_type";
                                $result = $conn->query($typeQuery);

                                if ($result && $result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['type']) . '</option>';
                                    }
                                } else {
                                    echo '<option disabled>No project types found</option>';
                                }


                                ?>
                            </select>
                        </div>


                        <?php


                        // Fetch project managers from tbl_emp (or another table if project managers are stored separately)
                        $sql = "SELECT id, CONCAT(f_name, ' ', l_name) AS full_name FROM tbl_emp "; // Adjust this query to fetch managers specifically
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Begin the dropdown options
                            $manager_options = "<option selected disabled>Select Manager</option>";

                            // Fetch each manager and add them as options in the dropdown
                            while ($row = $result->fetch_assoc()) {
                                $manager_id = $row['id'];
                                $manager_name = $row['full_name'];
                                $manager_options .= "<option value=\"$manager_id\">$manager_name</option>";
                            }
                        } else {
                            $manager_options = "<option>No managers found</option>";
                        }
                        ?>

                        <!-- Project Manager Dropdown -->
                        <div class="col-md-6">
                            <label class="form-label">Project Manager <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_manager">
                                <?php echo $manager_options; ?>
                            </select>
                        </div>


                        <!-- Project Client -->
                        <div class="col-md-6">
                            <label class="form-label">Project Client <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_client" required>
                                <option selected disabled>Select client</option>
                                <?php
                                include 'connection.php'; // Ensure correct path to your DB connection file

                                $clientQuery = "SELECT id, CONCAT(f_name, ' ', l_name) AS full_name FROM tbl_client";
                                $result = $conn->query($clientQuery);

                                if ($result && $result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['full_name']) . '</option>';
                                    }
                                } else {
                                    echo '<option disabled>No clients available</option>';
                                }


                                ?>
                            </select>
                        </div>


                        <?php


                        // Fetch employees from tbl_emp
                        $sql = "SELECT id, CONCAT(f_name, ' ', l_name) AS full_name FROM tbl_emp"; // Adjust status condition as necessary
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Begin the dropdown options
                            $options = "<option disabled>Select organizer...</option>";

                            // Fetch each employee and add them as options in the dropdown
                            while ($row = $result->fetch_assoc()) {
                                $emp_id = $row['id'];
                                $emp_name = $row['full_name'];
                                $options .= "<option value=\"$emp_id\">$emp_name</option>";
                            }
                        } else {
                            $options = "<option>No employees found</option>";
                        }
                        ?>

                        <!-- Assigned Teams Dropdown -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Assigned Employee <span style="color: red;">*</span></label>
                                <select class="form-select" id="organizerMultiple2" data-choices="data-choices" multiple="multiple" size="1" name="organizerMultiple[]" required="required" data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <?php echo $options; ?>
                                </select>
                                <div class="invalid-feedback">Please select one or multiple</div>
                            </div>
                        </div>



                        <!-- Status Dropdown -->
                        <div class="col-md-6">
                            <label class="form-label">Project Status <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_status" required>
                                <option selected disabled>Select status</option>
                                <?php
                                include 'connection.php'; // make sure this points to your DB connection

                                $statusQuery = "SELECT id, status_name FROM tbl_project_status";
                                $result = $conn->query($statusQuery);

                                if ($result && $result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['status_name']) . '</option>';
                                    }
                                } else {
                                    echo '<option disabled>No status options available</option>';
                                }

                                $conn->close();
                                ?>
                            </select>
                        </div>


                        <!-- File Upload -->
                        <div class="col-md-6">
                            <label class="form-label">Upload File <span style="color: red;">*</span></label>
                            <div class="file-drop-area" id="fileDropArea">
                                <input type="file" class="form-control d-none" name="file[]" id="fileInput" multiple>

                                <div class="file-drop-message text-center">
                                    <img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="25" alt="" />
                                    <p>Drag & Drop your files here or <strong>browse</strong></p>
                                </div>
                                <div id="filePreview" class="mt-3"></div>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top: -1%;">
                            <div class="max-w-md mx-auto p-6 rounded shadow-md">
                                <label class="form-label">Cover Photo<span style="color: red;">*</span></label>

                                <!-- Checkbox Options -->
                                <div class="flex flex-col gap-3">
                                    <!-- Use Default -->
                                    <label class="inline-flex items-center gap-2">
                                        <input
                                            type="checkbox"
                                            id="useDefault"
                                            class="border border-gray-300 rounded text-blue-600"
                                            onclick="toggleCoverUpload('default')" />
                                        <span class="text-sm text-gray-700">Use Default</span>
                                    </label>

                                    <!-- Use Customized -->
                                    <label class="inline-flex items-center gap-2">
                                        <input
                                            type="checkbox"
                                            id="useCustom"
                                            class="border border-gray-300 rounded text-blue-600"
                                            onclick="toggleCoverUpload('custom')" />
                                        <span class="text-sm text-gray-700">Use Customized</span>
                                    </label>
                                </div>

                                <!-- File Upload Box -->
                                <div class="dropzone dropzone-single p-0" id="dropzone" data-dropzone="data-dropzone" data-options='{"url":"valid/url","maxFiles":1,"maxFilesize":5,"acceptedFiles":"image/*","dictDefaultMessage":"Choose or Drop a file here"}'>
                                    <div class="fallback"><input type="file" name="file" /></div>
                                    <div class="dz-message" data-dz-message="data-dz-message">
                                        <div class="dz-message-text"><img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop your file here</div>
                                        <button class="btn dz-upload-btn border-0 position-absolute z-5 bg-black bg-opacity-50 text-white mt-3 ms-3 px-3" data-dz-message="data-dz-message">
                                            Change Picture<span class="fa-solid fa-camera fs-10 ms-1"></span>
                                        </button>
                                    </div>
                                    <div class="dz-preview d-block m-0">
                                        <div class="rounded-2 position-relative" style="height: 144px">
                                            <img class="rounded-2 w-100 h-100 object-fit-cover" src="../../../assets/img/icons/file-bg.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                                            <button class="btn border-0 position-absolute top-0 end-0 z-5 bg-black bg-opacity-50 text-white mt-3 me-3 px-3 cursor-pointer" data-dz-remove="data-dz-remove">
                                                <span class="fa-solid fa-xmark cursor-pointer"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div id="photoMessage">Photo already selected ✅</div>
                                <div id="customMessage">Please Insert Image</div> <!-- New message for custom upload -->
                            </div>
                        </div>



                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label">Project Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description..." name="project_desc"></textarea>
                        </div>

                        <!-- Start and End Date of Project -->
                        <div class="col-md-6">
                            <label class="form-label" for="timepicker2">Select Time Range</label>
                            <input class="form-control datetimepicker" id="timepicker2" type="text" placeholder="d/m/y to d/m/y" name="date_range" data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' />
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 text-end">
                            <button class="btn btn-primary" type="submit" id="submitBtn">Submit</button>
                            <button class="btn btn-secondary" type="reset">Clear</button>
                        </div>
                    </div>
                </form>





            </div>
            <footer>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
            </footer>
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
    <script src="../../vendors/dropzone/dropzone-min.js"></script>
    <script src="../../vendors/leaflet/leaflet.js"></script>
    <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../assets/js/ecommerce-dashboard.js"></script>





    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="../../vendors/choices/choices.min.js"></script>
    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.7,
            ease: "power2.out",
            delay: 0.7
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>

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
        let myDropzone;
        let hasFile = false;

        window.addEventListener("DOMContentLoaded", () => {
            const dropzoneElement = document.getElementById("dropzone");
            const photoMessage = document.getElementById("photoMessage");
            const customMessage = document.getElementById("customMessage");

            // Initially hide the Dropzone and any messages
            dropzoneElement.style.display = "none";
            photoMessage.style.display = "none";
            customMessage.style.display = "none";

            myDropzone = new Dropzone(dropzoneElement, {
                url: "/upload", // Replace with your actual backend URL
                maxFiles: 1,
                maxFilesize: 5,
                acceptedFiles: "image/*",
                dictDefaultMessage: "Choose or Drop a file here",
                autoProcessQueue: false,
                init: function() {
                    this.on("addedfile", function() {
                        hasFile = true;
                        toggleCoverUpload("custom"); // Show customized message when file is added
                    });

                    this.on("removedfile", function() {
                        hasFile = false;
                        toggleCoverUpload("default"); // Show default message when file is removed
                    });
                }
            });
        });

        function toggleCoverUpload(option) {
            const useDefault = document.getElementById("useDefault");
            const useCustom = document.getElementById("useCustom");
            const dropzone = document.getElementById("dropzone");

            const photoMessage = document.getElementById("photoMessage");
            const customMessage = document.getElementById("customMessage");

            // When the "Use Default" option is selected
            if (option === "default") {
                useCustom.checked = false;
                dropzone.style.display = "none"; // Hide the file upload box
                customMessage.style.display = "none"; // Hide the custom message
                photoMessage.style.display = "block"; // Show the default photo message
            }
            // When the "Use Customized" option is selected
            else if (option === "custom") {
                useDefault.checked = false;
                dropzone.style.display = "block"; // Show the file upload box
                customMessage.style.display = "block"; // Show the custom message
                photoMessage.style.display = "none"; // Hide the default photo message
            }
        }
    </script>








</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>