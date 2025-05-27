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
    <title>Meeting</title>

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
        <!-- meeting_summary.php -->

        <div class="content mt-4"  >
            <h2 class="mb-4" id="heading-gsap">Meeting Summary</h2>

            <!-- Add Meeting Note Form -->
            <div class="card p-4 mb-5 shadow" id="heading-gsap">
                <h5 class="mb-3">Add New Meeting</h5>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="meetingDate" class="form-label">Meeting Date</label>
                            <input type="date" class="form-control" id="meetingDate" required>
                        </div>
                        <div class="col-md-8">
                            <label for="participants" class="form-label">Participants</label>
                            <input type="text" class="form-control" id="participants"
                                placeholder="e.g. Mr. Aakash, Ms. Priya" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="agenda" class="form-label">Agenda</label>
                        <input type="text" class="form-control" id="agenda"
                            placeholder="e.g. Discuss Q2 project roadmap" required>
                    </div>

                    <div class="mb-3">
                        <label for="summary" class="form-label">Meeting Summary</label>
                        <textarea class="form-control" id="summary" rows="4"
                            placeholder="Brief discussion points and outcomes..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Meeting</button>
                </form>
            </div>

            <!-- View Meeting Notes Table -->
            <div class="card shadow" id="heading-gsap">
                <div class="card-header text-white">
                    <h5 class="mb-0">View Meetings</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Meeting Date</th>
                                <th>Participants</th>
                                <th>Agenda</th>
                                <th>Summary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="meetingTableBody">
                            <!-- Example static row -->
                            <tr>
                                <td>1</td>
                                <td>2025-04-25</td>
                                <td>John, Priya</td>
                                <td>Project Kickoff</td>
                                <td>Discussed project roadmap and responsibilities</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editMeetingModal">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <!-- Example static row -->
                            <tr>
                                <td>1</td>
                                <td>2025-04-25</td>
                                <td>John, Priya</td>
                                <td>Project Kickoff</td>
                                <td>Discussed project roadmap and responsibilities</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editMeetingModal">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>2025-04-26</td>
                                <td>Aakash, Neha</td>
                                <td>Design Review</td>
                                <td>Reviewed wireframes and finalized homepage layout</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editMeetingModal">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>2025-04-27</td>
                                <td>Vikas, Riya</td>
                                <td>Sprint Planning</td>
                                <td>Planned tasks for next sprint and assigned roles</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editMeetingModal">
                                        Edit
                                    </button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Reusable Modal for Editing Meeting -->
            <div class="modal fade" id="editMeetingModal" tabindex="-1" aria-labelledby="editMeetingModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="editMeetingModalLabel">Edit Meeting</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body row g-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="editMeetingDate"
                                            placeholder="Meeting Date" required>
                                        <label for="editMeetingDate">Meeting Date</label>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="editParticipants"
                                            placeholder="Participants" required>
                                        <label for="editParticipants">Participants</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="editAgenda" placeholder="Agenda"
                                            required>
                                        <label for="editAgenda">Agenda</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="editSummary" placeholder="Summary"
                                            style="height: 100px" required></textarea>
                                        <label for="editSummary">Summary</label>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
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





    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script>
        gsap.from("#formCard", {
            opacity: 0,
            y: 60,
            duration: 1,
            ease: "power2.out"
        });
        
        

        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.7,
            ease: "power2.out",
            delay: 0.1
        });


    </script>



</body>




</html>