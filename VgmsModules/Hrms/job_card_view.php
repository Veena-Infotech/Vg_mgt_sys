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
    <title>Job openings</title>

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
        <div class="content my-4">
            <div class="d-flex align-items-center gap-6 mb-4">
                <h2 class="mb-1">Jobs</h2>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#jobOpeningModal">
                    Add a Job Opening
                </button>
            </div>



            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 hover-actions-trigger shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Project Title Example</h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <button class="btn btn-primary btn-icon flex-shrink-0 toggle-button" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Check responses">
                                        <span class="fa-solid fa-chevron-right"></span>
                                    </button>
                                </div>
                            </div>

                            <span class="badge text-bg-success mb-4 px-3 py-2 fs-11 text-uppercase fw-semibold">
                                Active
                            </span>

                            <div class="d-flex align-items-center mb-2">
                                <span class="fa-solid fa-user-circle me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 text-truncate lh-1">
                                    Created by: <span class="fw-semibold text-primary ms-1">John Doe</span>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <span
                                    class="fa-solid fa-location-dot me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">
                                    Location: <span class="ms-1 text-body-emphasis">New York</span>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <span class="fa-solid fa-link me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">
                                    Form Link:
                                    <a href="#" target="_blank" class="ms-1 text-decoration-none text-primary">Apply
                                        Here</a>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">
                                    Started:
                                    <span class="fw-semibold text-body-tertiary text-opacity-85 ms-1">2025-01-15</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">
                                    Deadline:
                                    <span class="fw-semibold text-body-tertiary text-opacity-85 ms-1">2025-06-30</span>
                                </p>
                            </div>


                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <!-- <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Job Opening">
                                    <i class="fa-solid fa-pen"></i>
                                </button> -->
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#EditjobOpeningModal" title="Edit Job Opening">
                                    <i class="fa-solid fa-pen"></i>
                                </button>


                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-comment-dots me-1"></i>
                                    <p class="d-inline-block fw-bold mb-0">
                                        10 <span class="fw-normal">Responses</span>
                                    </p>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 hover-actions-trigger shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Project Title Example 2</h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <button class="btn btn-primary btn-icon flex-shrink-0 toggle-button" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Check responses">
                                        <span class="fa-solid fa-chevron-right"></span>
                                    </button>

                                </div>
                            </div>

                            <span class="badge text-bg-success mb-4 px-3 py-2 fs-11 text-uppercase fw-semibold">
                                Active
                            </span>

                            <div class="d-flex align-items-center mb-2">
                                <span class="fa-solid fa-user-circle me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 text-truncate lh-1">
                                    Created by: <span class="fw-semibold text-primary ms-1">John Doe</span>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <span
                                    class="fa-solid fa-location-dot me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">
                                    Location: <span class="ms-1 text-body-emphasis">New York</span>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <span class="fa-solid fa-link me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">
                                    Form Link:
                                    <a href="#" target="_blank" class="ms-1 text-decoration-none text-primary">Apply
                                        Here</a>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">
                                    Started:
                                    <span class="fw-semibold text-body-tertiary text-opacity-85 ms-1">2025-01-15</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">
                                    Deadline:
                                    <span class="fw-semibold text-body-tertiary text-opacity-85 ms-1">2025-06-30</span>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#EditjobOpeningModal" title="Edit Job Opening">
                                    <i class="fa-solid fa-pen"></i>
                                </button>


                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-comment-dots me-1"></i>
                                    <p class="d-inline-block fw-bold mb-0">
                                        10 <span class="fw-normal">Responses</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>




                <!-- Add more cards here with the same structure -->
            </div>
        </div>
        <!-- Job Opening Modal -->
        <div class="modal fade" id="jobOpeningModal" tabindex="-1" aria-labelledby="jobOpeningModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="jobOpeningModalLabel">Add Job Opening</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="jobOpeningForm">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="roleInput" class="form-label">Role</label>
                                <select class="form-select" id="roleInput" name="role" required>
                                    <option value="" selected disabled>Select Role</option>
                                    <option value="Frontend Developer">Frontend Developer</option>
                                    <option value="Backend Developer">Backend Developer</option>
                                    <option value="Full Stack Developer">Full Stack Developer</option>


                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="departmentSelect" class="form-label">Department</label>
                                <select class="form-select" id="departmentSelect" name="department" required>
                                    <option value="" disabled selected>Select Department</option>
                                    <option value="HR">HR</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Finance">Finance</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="jobdescInput" class="form-label">Job Description</label>
                                <textarea class="form-control" id="jobdescInput" name="jobdesc" rows="3"
                                    required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="locationInput" class="form-label">Location</label>
                                <input type="text" class="form-control" id="locationInput" name="location" required>
                            </div>

                            <div class="mb-3">
                                <label for="formlinkInput" class="form-label">Form Link</label>
                                <input type="url" class="form-control" id="formlinkInput" name="formlink" required>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="startdateInput" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="startdateInput" name="startdate"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="enddateInput" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="enddateInput" name="enddate" required>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Clear</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="EditjobOpeningModal" tabindex="-1" aria-labelledby="jobOpeningModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="jobOpeningModalLabel">Edit Job Opening</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="jobOpeningForm">
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="roleInput" class="form-label">Role</label>
                                <select class="form-select" id="roleInput" name="role" required>
                                    <option value="" disabled>Select Role</option>
                                    <option value="Frontend Developer" selected>Frontend Developer</option>
                                    <option value="Backend Developer">Backend Developer</option>
                                    <option value="Full Stack Developer">Full Stack Developer</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="departmentSelect" class="form-label">Department</label>
                                <select class="form-select" id="departmentSelect" name="department" required>
                                    <option value="" disabled>Select Department</option>
                                    <option value="HR">HR</option>
                                    <option value="Engineering" selected>Engineering</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Finance">Finance</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="jobdescInput" class="form-label">Job Description</label>
                                <textarea class="form-control" id="jobdescInput" name="jobdesc" rows="3"
                                    required>Looking for a skilled Frontend Developer proficient in React.js and responsive design.</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="locationInput" class="form-label">Location</label>
                                <input type="text" class="form-control" id="locationInput" name="location"
                                    value="New York" required>
                            </div>

                            <div class="mb-3">
                                <label for="formlinkInput" class="form-label">Form Link</label>
                                <input type="url" class="form-control" id="formlinkInput" name="formlink"
                                    value="https://forms.gle/example" required>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="startdateInput" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="startdateInput" name="startdate"
                                        value="2025-01-15" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="enddateInput" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="enddateInput" name="enddate"
                                        value="2025-06-30" required>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Clear</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

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





    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });
    </script>



</body>




</html>