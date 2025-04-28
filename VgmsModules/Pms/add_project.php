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
                <form action="../PhpFiles/add_project1.php" method="post" class="dropzone dropzone-multiple p-0" id="dropzone-multiple" data-dropzone="data-dropzone">
                    <div class="row g-3">
                        <!-- Project Title -->
                        <div class="col-md-6">
                            <label class="form-label">Project Title <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter project title"
                                name="project_title">
                        </div>

                        <!-- Project Type Dropdown -->
                        <div class="col-md-6">
                            <label class="form-label">Project Type <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_type">
                                <option selected disabled>Select type</option>
                                <option value="1">Pipeline</option>
                                <option value="2">Residential</option>
                                <option value="3">Commercial</option>
                            </select>
                        </div>

                        <!-- project manager  -->

                        <div class="col-md-6">
                            <label class="form-label">Project Manager<span style="color: red;">*</span></label>
                            <select class="form-select" name="project_manager">
                                <option selected disabled>Select Manager</option>
                                <option value="1">Aryan Sir</option>
                                <option value="2">Op sir</option>
                                <option value="3">Aakash sir</option>
                                <option value="4">Static</option>
                            </select>
                        </div>

                        <!-- project client  -->

                        <div class="col-md-6">
                            <label class="form-label">Project Client<span style="color: red;">*</span></label>
                            <select class="form-select" name="project_client">
                                <option selected disabled>Select client</option>
                                <option value="1">Janesh</option>
                                <option value="2">Ishika</option>
                                <option value="3">Rahul</option>
                                <option value="4">Static</option>
                            </select>
                        </div>

                        <!-- Assigned Teams Dropdown -->
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label">Assigned Employee<span style="color: red;">*</span></label><select class="form-select" id="organizerMultiple2" data-choices="data-choices" multiple="multiple" size="1" 
                            name="organizerMultiple" required="required" data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option >Select organizer...</option>
                                    <option value="1">Neav Panjwani</option>
                                    <option value="2">Om Pandey</option>
                                    <option value="3">Janesh Chichriya</option>
                                    <option value="4">Ishika sharma</option>
                                    <option value="5">Static</option>
                                </select>
                                <div class="invalid-feedback">Please select one or multiple</div>
                            </div>
                        </div>


                        <!-- Status Dropdown -->
                        <div class="col-md-6">
                            <label class="form-label">Project Status<span style="color: red;">*</span></label>
                            <select class="form-select" name="project_status">
                                <option selected disabled>Select status</option>
                                <option value="1">Pipeline</option>
                                <option value="2">Ongoing</option>
                                <option value="3">Completed</option>
                                <option value="4">On Hold</option>
                            </select>
                        </div>


                        <!-- file Upload  -->
                        <label class="form-label">Upload File <span style="color: red;">*</span></label>
                        <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
                        <div class="dz-message" data-dz-message="data-dz-message"><img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop your files here</div>
                        <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                            <div class="d-flex mb-3 pb-3 border-bottom border-translucent media">
                                <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image" src="../../../assets/img/icons/file.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                                <div class="flex-1 d-flex flex-between-center">
                                    <div>
                                        <h6 data-dz-name="data-dz-name"></h6>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                        </div><span class="fs-10 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                                    </div>
                                    <div class="dropdown"><button class="btn btn-link text-body-tertiary btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove"><span style="color: red;">X</a></button>
                                        <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label">Project Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description..."
                                name="project_desc"></textarea>
                        </div>

                        <!-- start and end date of project  -->

                        <label class="form-label" for="timepicker2">Select Time Range</label>
                        <input class="form-control datetimepicker" id="timepicker2" type="text" placeholder="d/m/y to d/m/y"
                        name="date_range" data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' />


                        <!-- Submit Button -->
                        <div class="col-12 text-end">
                            <button class="btn btn-primary" type="submit" id="submitBtn">Submit</button>
                            <button class="btn btn-secondary" type="reset">Clear</button>

                        </div>
                    </div>
                </form><br><br>



            </div>

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
    <!-- alert added extra testing  -->
    <script>
        document.getElementById('submitBtn').addEventListener('click', function(event) {
            event.preventDefault(); // Stop form from submitting immediately

            // Get the selected time range
            var timeRange = document.getElementById('timepicker2').value;

            if (timeRange) {
                alert("Project Deadline Selected: " + timeRange);
                // After alert, you can submit the form manually if needed
                // this.closest('form').submit();
            } else {
                alert("Please select a time range (deadline) before submitting!");
            }
        });
    </script>


</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>