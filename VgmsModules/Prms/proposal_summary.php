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
    <title>Proposal Summary</title>

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
            <h3>Proposal Summary</h3>
            <h6>Overview of all proposals and their current status.</h6>
            <hr>

            <!-- Proposal Status Overview Pie Chart -->
            <div class="form-group" id="field-status-chart">
                <label class="form-label">Proposal Status Overview</label>
                <div style="max-width: 350px; margin: auto;">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>

            <!-- Proposal Breakdown by Client -->
            <div id="tableClientBreakdown" data-list='{"valueNames":["client","total","approved","rejected","value"],"page":5,"pagination":true}'>
                <!-- Search box -->
                <!-- <div class="search-box mb-3 mx-auto">
                    <form class="position-relative">
                        <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                        <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                        </svg>
                    </form>
                </div> -->

                <!-- Table -->
                <div class="form-group">
                    <label class="form-label">Proposal Breakdown by Client</label>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-3" data-sort="client">Client</th>
                                    <th class="sort border-top" data-sort="total">Total Proposals</th>
                                    <th class="sort border-top" data-sort="approved">Approved</th>
                                    <th class="sort border-top" data-sort="rejected">Rejected</th>
                                    <th class="sort border-top" data-sort="value">Total Estimated Value</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="align-middle ps-3 client">Client A</td>
                                    <td class="align-middle total">5</td>
                                    <td class="align-middle approved">2</td>
                                    <td class="align-middle rejected">1</td>
                                    <td class="align-middle value">₹10,00,000</td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 client">Client B</td>
                                    <td class="align-middle total">3</td>
                                    <td class="align-middle approved">1</td>
                                    <td class="align-middle rejected">1</td>
                                    <td class="align-middle value">₹7,00,000</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-between mt-3">
                    <!-- <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span> -->
                    <div class="d-flex">
                        <button class="page-link" data-list-pagination="prev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>


            <hr>
            <!-- Submitted vs Approved Chart -->
            <div class="form-group" id="field-submitted-approved">
                <label class="form-label">Submitted vs Approved Over Time</label>
                <div style="width: 100%; max-width: 700px; margin: auto;">
                    <canvas id="submitApproveChart" height="250"></canvas>
                </div>
            </div>

            <!-- Feedback Summary Table -->
            <div id="tableFeedbackSummary" data-list='{"valueNames":["proposal","type","reviewer","comments","date"],"page":5,"pagination":true}'>
                <!-- Search box -->
                <!-- <div class="search-box mb-3 mx-auto">
                    <form class="position-relative">
                        <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                        <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                        </svg>
                    </form>
                </div> -->

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="sort border-top border-translucent ps-3" data-sort="proposal">Proposal Title</th>
                                <th class="sort border-top" data-sort="type">Feedback Type</th>
                                <th class="sort border-top" data-sort="reviewer">Reviewer</th>
                                <th class="sort border-top" data-sort="comments">Comments</th>
                                <th class="sort border-top" data-sort="date">Date</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td class="align-middle ps-3 proposal">Website Redesign</td>
                                <td class="align-middle type">Client</td>
                                <td class="align-middle reviewer">John Doe</td>
                                <td class="align-middle comments">Great initiative, approved.</td>
                                <td class="align-middle date">2025-05-01</td>
                            </tr>
                            <tr>
                                <td class="align-middle ps-3 proposal">App Revamp</td>
                                <td class="align-middle type">Internal</td>
                                <td class="align-middle reviewer">Jane Smith</td>
                                <td class="align-middle comments">Needs timeline revision.</td>
                                <td class="align-middle date">2025-05-03</td>
                            </tr>
                            <!-- More rows as needed -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-between mt-3">
                    <!-- <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of </span></span> -->
                    <div class="d-flex">
                        <button class="page-link" data-list-pagination="prev" disabled>
                            <svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                            </svg>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>



            <div class="c" style="margin-top: 1%;">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>

    <script>
        // Pie Chart - Proposal Status
        new Chart(document.getElementById('statusChart'), {
            type: 'pie',
            data: {
                labels: ['Draft', 'Submitted', 'Approved', 'Rejected'],
                datasets: [{
                    data: [5, 10, 7, 2],
                    backgroundColor: ['#ffc107', '#0dcaf0', '#198754', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Bar Chart - Submitted vs Approved
        new Chart(document.getElementById('submitApproveChart'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                        label: 'Submitted',
                        data: [5, 7, 6, 8, 4],
                        backgroundColor: '#0d6efd'
                    },
                    {
                        label: 'Approved',
                        data: [2, 3, 4, 5, 3],
                        backgroundColor: '#198754'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>






    </script>



</body>




</html>