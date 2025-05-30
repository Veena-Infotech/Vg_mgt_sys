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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
            <h2 class="mb-1 lh-sm">Training Program Management</h2>
      <p class="text-muted mb-4">Enter comprehensive details to create, update, and manage employee training programs efficiently, ensuring effective learning and development</p>
      <hr class="hr" /><br>
            <h3 class="text-center mb-4 text-primary fw-bold">
                Training Program Details</h3>
            <form class="row g-3 needs-validation" novalidate="">
                <div class="col-md-6 d-flex flex-column">
                    <!-- City Field -->
                    <div class="mb-1">
                        <label class="form-label" for="validationCustom03">PROGRAM NAME</label>
                        <input class="form-control" id="validationCustom03" type="text" required>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>

                    <!-- Salutation Field with padding adjustment -->
                    <div style="margin-top: 15px;">
                        <label class="form-label">CATEGORY</label>
                        <select class="form-select" name="category" required>
                            <option value="">Select</option>
                            <option value="technical">Technical</option>
                            <option value="soft_skills">Soft Skills</option>
                            <option value="compliance">Compliance</option>
                        </select>
                    </div>
                </div>

                <!-- Right Column (Program Description) -->
                <div class="col-md-6 d-flex flex-column" style="margin-top: 23px;">
                    <label class="form-label mb-1" for="programDescription">Program Description</label>
                    <textarea class="form-control flex-grow-1" id="programDescription" required
                        style="min-height: 115px;"></textarea>
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="datepicker">Start Date</label>
                    <input class="form-control datetimepicker flatpickr-input" id="datepicker" type="text"
                        placeholder="dd/mm/yyyy"
                        data-options="{&quot;disableMobile&quot;:true,&quot;dateFormat&quot;:&quot;d/m/Y&quot;}"
                        readonly="readonly">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="datepicker">END DATE</label>
                    <input class="form-control datetimepicker flatpickr-input" id="datepicker" type="text"
                        placeholder="dd/mm/yyyy"
                        data-options="{&quot;disableMobile&quot;:true,&quot;dateFormat&quot;:&quot;d/m/Y&quot;}"
                        readonly="readonly">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="validationCustom03">TRAINER NAME</label>
                    <input class="form-control" id="validationCustom03" type="text" required>
                    <div class="invalid-feedback">Please provide a valid city.</div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">TRAINER</label>
                    <select class="form-select" name="trainer_type" required>
                        <option value="">Select</option>
                        <option value="Mr.Aakash">Mr.Aakash</option>
                        <option value="Mr.Aryan">Mr.Aryan</option>
                        <option value="Mr.Om">Mr.Om</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Location</label>
                    <select class="form-select" name="location" required>
                        <option value="">Select</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>


                <!-- Material Type Section -->
                <div class="col-md-6">
                    <label class="form-label">Material Type</label>
                    <div class="d-flex align-items-center border rounded px-3" style="height: 38px;">
                        <!-- Checkbox 1: Online Video -->
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" id="materialVideo" name="material_type[]"
                                value="online_video" onchange="toggleTextBox()">
                            <label class="form-check-label" for="materialVideo">Online Video</label>
                        </div>

                        <!-- Checkbox 2: Google Drive -->
                        <div class="form-check mb-0 mx-10">
                            <input class="form-check-input" type="checkbox" id="materialDrive" name="material_type[]"
                                value="google_drive" onchange="toggleTextBox()">
                            <label class="form-check-label" for="materialDrive">Google Drive</label>
                        </div>

                        <!-- Checkbox 3: Presentation (unchanged) -->
                        <div class="form-check mb-0 mx-3">
                            <input class="form-check-input" type="checkbox" id="materialPres" name="material_type[]"
                                value="presentation" onchange="toggleTextBox()">
                            <label class="form-check-label" for="materialPres">Presentation</label>
                        </div>
                    </div>
                    <div id="materialLinkBox" class="mt-3" style="display: none;">
                        <label class="form-label">Provide Link</label>
                        <input type="text" class="form-control" placeholder="Enter link or drive URL">
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <script>
        function toggleTextBox() {
            const checkboxes = document.querySelectorAll('input[name="material_type[]"]');
            const isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);
            const textbox = document.getElementById('materialLinkBox');

            textbox.style.display = isAnyChecked ? 'block' : 'none';
        }
    </script>
    </script>



</body>




</html>