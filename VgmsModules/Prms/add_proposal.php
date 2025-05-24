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
    <title>Add Proposal</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
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
    <link href="../../vendors/choices/choices.min.css" rel="stylesheet" />
    <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet" />
    <style>
        /* Style for the file upload drop area */
        .file-drop-area {
            border: 2px dashed;
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
            /* color: #007bff; */
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
            <h3>Add Proposal</h3>
            <h6>Create and submit a new project proposal for clients and internal review.</h6>
            <hr>
            <form action="#" method="POST" class="formclass dropzone dropzone-multiple p-0" id="dropzone-multiple" data-dropzone="data-dropzone">



                <div class="row">
                    <div class="col-md-6 ">
                        <!-- Proposal Title -->
                        <div class="col-md-6" style="width: 100%;">
                            <label class="form-label">Project Title <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter project title" name="project_title">

                        </div>
                    </div>
                    <div class="col-md-6 ">

                        <!-- Client Dropdown -->
                        <div class="form-group" id="field-client">
                            <label for="client_id" class="form-label">Client</label>
                            <select id="client_id" name="proposal[client_id]" class="form-select">
                                <option value="" selected>Select Client</option>
                                <option value="1">Client A</option>
                                <option value="2">Client B</option>
                            </select>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6 " style="width: 33%;">
                        <!-- Estimated Cost -->
                        <div class="form-group" id="field-cost">
                            <label for="estimated_cost" class="form-label">Estimated Cost</label>
                            <div class="input-group">
                                <span class="input-group-text">₹</span>
                                <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" />
                                <span class="input-group-text">0.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 " style="width: 33%;">

                        <!-- Status -->
                        <div class="form-group" id="field-status">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="proposal[status]" class="form-select">
                                <option value="" selected>Select Status..</option>
                                <option value="Draft">Draft</option>
                                <option value="Sent">Sent</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-6 " style="width: 34%;">
                        <!-- Team Assigned -->
                        <label class="form-label" for="organizerMultiple">Team Assigned</label>
                        <select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select organizer...</option>
                            <option>Massachusetts Institute of Technology</option>
                            <option>University of Chicago</option>
                            <option>GSAS Open Labs At Harvard</option>
                            <option>California Institute of Technology</option>
                        </select>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6 ">
                        <!-- Scope -->
                        <div class="form-group" id="field-scope">
                            <label for="scope" class="form-label">Scope / Project Details</label>
                            <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" placeholder="Leave a comment here" style="height: 100px">Existing project scope or details.</textarea>
                            </div>
                        </div>
                    </div>

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
                </div>
                <hr>

                <!-- Submit Button -->
                <div class="form-group" id="field-submit" style="margin-right: -1%; display: flex; justify-content: flex-end; gap: 10px;">
                    <button class="btn btn-primary" type="reset">Clear Proposal</button>
                    <button class="btn btn-primary" type="submit">Save Proposal</button>
                </div>

            </form>
            <div class="c" style="margin-top: 1%;">
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        // Animate Project Title (input + label inside same div)
        gsap.from("input[name='project_title'], .form-label[for='project_title']", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.1
        });

        // Client Dropdown
        gsap.from("#field-client", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.2
        });

        // Estimated Cost
        gsap.from("#field-cost", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.3
        });

        // Status Dropdown
        gsap.from("#field-status", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.4
        });

        // Team Assigned (targeting the select directly by ID)
        gsap.from("#organizerMultiple", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.5
        });

        // Scope / Project Details
        gsap.from("#field-scope", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.6
        });

        // File Upload
        gsap.from("#fileDropArea", {
            opacity: 0,
            y: 40,
            duration: 0.5,
            ease: "power2.out",
            delay: 0.65
        });

        // Submit Buttons
        gsap.from("#field-submit", {
            opacity: 0,
            y: 40,
            duration: 0.6,
            ease: "power2.out",
            delay: 0.7
        });
    </script>




    <script src="../../vendors/choices/choices.min.js"></script>
    <script src="../../vendors/dropzone/dropzone-min.js"></script>

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
        // Clear form inputs on reset
        document.querySelector('button[type="reset"]').addEventListener('click', function() {
            const form = document.querySelector('.formclass');
            form.reset();

            // If any custom dropdown or file previews exist, reset them here too
            const filePreview = document.getElementById('filePreview');
            if (filePreview) filePreview.innerHTML = '';

            // Reset Choices.js (if used)
            const teamSelect = document.getElementById('organizerMultiple');
            if (teamSelect && window.Choices) {
                const instance = new Choices(teamSelect);
                instance.clearStore();
            }

            alert('Form has been cleared!');
        });

        // Simulated form submit
        document.querySelector('button[type="submit"]').addEventListener('click', function(e) {
            e.preventDefault();

            // Example: collect values (you can send via AJAX here)
            const title = document.querySelector('[name="project_title"]').value;
            const client = document.querySelector('[name="proposal[client_id]"]').value;
            const status = document.querySelector('[name="proposal[status]"]').value;

            if (!title) {
                alert("Project title is required.");
                return;
            }

            // TODO: Replace with actual AJAX call if needed
            alert('Proposal changes saved successfully!');
        });
    </script>




    </script>



</body>




</html>