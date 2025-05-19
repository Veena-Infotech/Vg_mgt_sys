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
    <title>Loan Management</title>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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

            <div class="container py-5">
                <!-- Header -->
                <div class="d-flex align-items-center mb-2" id="header">
                    <!-- <i class="bi bi-calendar-check text-primary fs-2 me-2"></i> -->
                    <h2 class="fw-bold mb-0">My Leave Requests</h2>
                </div>

                <!-- Subtitle and line -->
                <p class="mb-1">Track all your submitted leave requests and check their approval status.</p>
                <hr class="mb-4 mt-1" />

                <!-- Leave Requests Card -->
                <div class="card border-0 shadow-lg" id="cardBox">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-lines-fill text-success fs-4 me-2"></i>
                            <h5 class="mb-0">Leave Status Summary</h5>
                        </div>
                        <!-- Filter and Search (smaller width) -->
                        <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">

                            <!-- Search -->
                            <!-- Search -->
                            <input type="text" id="searchBox" name="searchQuery" class="form-control form-control-sm w-auto"
                                placeholder="Search..." style="min-width: 160px;" />


                            <!-- Apply Button -->
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Apply for Leave
                            </button>
                        </div>
                    </div>
                    <div id="tableExample4"
                        data-list='{"valueNames":["date-from","date-to","reason","approval-by","status"],"page":5,"pagination":true,"filter":{"key":"payment"}}'>
                        <div class="row justify-content-end g-0">

                            <div class="table-responsive">
                                <table class="table table-sm fs-9 mb-0">
                                    <thead>
                                        <tr class="bg-body-highlight">

                                            <th class="sort border-top border-translucent" data-sort="date-from">From
                                            </th>
                                            <th class="sort border-top border-translucent" data-sort="date-to">To</th>
                                            <th class="sort border-top border-translucent" data-sort="reason">Reason
                                            </th>
                                            <th class="sort border-top border-translucent" data-sort="approval-by">
                                                Approval By</th>
                                            <th class="sort border-top border-translucent text-end pe-3"
                                                data-sort="status">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Aryan</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                        class="fw-bold">Success</span><span
                                                        class="ms-1 fas fa-check"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                        class="fw-bold">Success</span><span
                                                        class="ms-1 fas fa-check"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                        class="fw-bold">Success</span><span
                                                        class="ms-1 fas fa-check"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                        class="fw-bold">Success</span><span
                                                        class="ms-1 fas fa-check"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                        class="fw-bold">Pending</span><span
                                                        class="ms-1 fas fa-stream"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span
                                                        class="fw-bold">Blocked</span><span
                                                        class="ms-1 fas fa-ban"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                        class="fw-bold">Pending</span><span
                                                        class="ms-1 fas fa-stream"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                        class="fw-bold">Success</span><span
                                                        class="ms-1 fas fa-check"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                        class="fw-bold">Success</span><span
                                                        class="ms-1 fas fa-check"></span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle date-from">2025-05-01</td>
                                            <td class="align-middle date-to">2025-07-01</td>
                                            <td class="align-middle reason">Family Function</td>
                                            <td class="align-middle approval-by">HR Manager</td>
                                            <td class="align-middle payment text-end py-3 pe-3">
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                                                        class="fw-bold">Pending</span><span
                                                        class="ms-1 fas fa-stream"></span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include("../../Components/footer.php"); ?>
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


    <!-- GSAP Animations -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            gsap.from("#header", {
                opacity: 0,
                y: -30,
                duration: 0.6,
                ease: "power2.out"
            });
            gsap.from("#cardBox", {
                opacity: 0,
                y: 40,
                duration: 0.8,
                delay: 0.2,
                ease: "power2.out"
            });
        });


        const filterSelect = document.getElementById("leaveFilter");
        const searchBox = document.getElementById("searchBox");
        const tableRows = document.querySelectorAll("#leaveTableBody tr");

        function filterAndSearch() {
            const status = filterSelect.value.toLowerCase();
            const query = searchBox.value.toLowerCase();

            tableRows.forEach(row => {
                const reason = row.cells[3].textContent.toLowerCase();
                const statBadge = row.cells[4].textContent.toLowerCase();

                const matchesStatus = status === "all" || statBadge.includes(status);
                const matchesSearch = reason.includes(query);

                row.style.display = matchesStatus && matchesSearch ? "" : "none";
            });
        }

        filterSelect.addEventListener("change", filterAndSearch);
        searchBox.addEventListener("input", filterAndSearch);
    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>