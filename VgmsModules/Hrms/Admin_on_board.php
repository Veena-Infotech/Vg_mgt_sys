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
    <title>Admin Onboarding</title>

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

        <!-- Main Resignation Request Cards -->
        <div class="content mt-5" id="heading-gsap">
            <h4 class="mb-4">
                <i class="fa-solid fa-file-signature me-2 text-primary"></i>Resignation Requests
            </h4>
            <div class="row g-4">

                <!-- START: Card 1 (repeatable for each employee) -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <i class="fa-solid fa-user-tie text-primary me-2"></i>Employee:
                                <span class="text-primary">John Doe</span>
                            </h5>

                            <p class="mb-2">
                                <i class="fa-regular fa-calendar-plus text-secondary me-2"></i>
                                <strong>Application Date:</strong> <span class="text-muted">2025-06-01</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-file-circle-question text-secondary me-2"></i>
                                <strong>Reason:</strong> <span class="text-muted">Better career opportunity</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-calendar-check text-secondary me-2"></i>
                                <strong>Resignation Date:</strong> <span class="text-muted">2025-06-20</span>
                            </p>

                            <p class="mb-3">
                                <i class="fa-solid fa-comments text-secondary me-2"></i>
                                <strong>Feedback:</strong> <span class="text-muted">I enjoyed working here</span>
                            </p>

                            <div class="d-flex gap-2 justify-content-between align-items-center">
                                <button
                                    class="btn btn-outline-success btn-sm radius-6 px-3 fw-semibold hover-border border-2"
                                    data-bs-toggle="modal" data-bs-target="#acceptModal">
                                    <i class="fa-solid fa-check me-1"></i> Accept
                                </button>
                                <button
                                    class="btn btn-outline-danger btn-sm radius-6 px-3 fw-semibold hover-border border-2"
                                    data-bs-toggle="modal" data-bs-target="#rejectModal">
                                    <i class="fa-solid fa-xmark me-1"></i> Reject
                                </button>
                                <button
                                    class="btn btn-outline-warning btn-sm radius-6 px-3 fw-semibold hover-border border-2"
                                    data-bs-toggle="modal" data-bs-target="#holdModal">
                                    <i class="fa-solid fa-clock me-1"></i> On Hold
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <i class="fa-solid fa-user-tie text-primary me-2"></i>Employee:
                                <span class="text-primary">John Doe</span>
                            </h5>

                            <p class="mb-2">
                                <i class="fa-regular fa-calendar-plus text-secondary me-2"></i>
                                <strong>Application Date:</strong> <span class="text-muted">2025-06-01</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-file-circle-question text-secondary me-2"></i>
                                <strong>Reason:</strong> <span class="text-muted">Better career opportunity</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-calendar-check text-secondary me-2"></i>
                                <strong>Resignation Date:</strong> <span class="text-muted">2025-06-20</span>
                            </p>

                            <p class="mb-3">
                                <i class="fa-solid fa-comments text-secondary me-2"></i>
                                <strong>Feedback:</strong> <span class="text-muted">I enjoyed working here</span>
                            </p>

                            <div class="d-flex gap-2 justify-content-between align-items-center">
                                <button
                                    class="btn btn-outline-success btn-sm radius-6 px-3 fw-semibold hover-border border-2"
                                    data-bs-toggle="modal" data-bs-target="#acceptModal">
                                    <i class="fa-solid fa-check me-1"></i> Accept
                                </button>
                                <button
                                    class="btn btn-outline-danger btn-sm radius-6 px-3 fw-semibold hover-border border-2"
                                    data-bs-toggle="modal" data-bs-target="#rejectModal">
                                    <i class="fa-solid fa-xmark me-1"></i> Reject
                                </button>
                                <button
                                    class="btn btn-outline-warning btn-sm radius-6 px-3 fw-semibold hover-border border-2"
                                    data-bs-toggle="modal" data-bs-target="#holdModal">
                                    <i class="fa-solid fa-clock me-1"></i> On Hold
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- You can repeat this card structure for each employee -->
            </div>
        </div>

        <!-- Accept Modal -->
        <div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="accept_resignation.php" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Accept Resignation</h5>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="accept_remark" name="accept_remark" rows="4"
                            placeholder="Reason for Accepting..." required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Reject Modal -->
        <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="reject_resignation.php" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reject Resignation</h5>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="reject_remark" name="reject_remark" rows="4"
                            placeholder="Reason for Rejection..." required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancel</button>
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- On Hold Modal -->
        <div class="modal fade" id="holdModal" tabindex="-1" aria-labelledby="holdModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="hold_resignation.php" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Put Resignation On Hold</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="hold_remark" class="form-label">Reason</label>
                            <textarea class="form-control" id="hold_remark" name="hold_remark" rows="3"
                                placeholder="Reason for hold..." required></textarea>
                        </div>
                        <div>
                            <label for="hold_until" class="form-label">Hold Until Date</label>
                            <input type="date" class="form-control" id="hold_until" name="hold_until" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancel</button>
                        <button class="btn btn-warning" type="submit">Submit</button>
                    </div>
                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.2
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>



</body>




</html>