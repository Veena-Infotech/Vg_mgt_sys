<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Leave Approval Status For Employee</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
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
    <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <!-- change this to your navbar code link should be replaced properly -->
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
            <!-- your main contents goes here  with footer . -->

            <div class="container py-5">
                <!-- Header -->
                <div class="d-flex align-items-center mb-2" id="header">
                    <i class="bi bi-calendar-check text-primary fs-2 me-2"></i>
                    <h2 class="fw-bold mb-0">My Leave Requests</h2>
                </div>

                <!-- Subtitle and line -->
                <p class="text-secondary mb-1">Track all your submitted leave requests and check their approval status.</p>
                <hr class="mb-4 mt-1" />

                <!-- Leave Requests Card -->
                <div class="card border-0 shadow-lg" id="cardBox">
                    <div class="card-header bg-white d-flex flex-wrap justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-lines-fill text-success fs-4 me-2"></i>
                            <h5 class="mb-0">Leave Status Summary</h5>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                            <!-- Filter -->
                            <select class="form-select form-select-sm" id="leaveFilter">
                                <option value="All">All</option>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            <!-- Search -->
                            <input type="text" id="searchBox" class="form-control form-control-sm" placeholder="Search by reason..." />
                            <!-- Apply Button -->
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Apply for Leave
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-hover align-middle mb-0" id="leaveTable">
                            <thead class="table-light text-center">
                                <tr>
                                    <th><i class="bi bi-file-earmark-text me-1"></i>Type</th>
                                    <th><i class="bi bi-calendar me-1"></i>From</th>
                                    <th><i class="bi bi-calendar-check me-1"></i>To</th>
                                    <th><i class="bi bi-chat-left-dots me-1"></i>Reason</th>
                                    <th><i class="bi bi-info-circle me-1"></i>Status</th>
                                    <th><i class="bi bi-person-check me-1"></i>Approved By</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="leaveTableBody">
                                <tr>
                                    <td>Casual Leave</td>
                                    <td>2025-05-01</td>
                                    <td>2025-05-02</td>
                                    <td>Family Function</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-hourglass-split me-1"></i>Pending</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Sick Leave</td>
                                    <td>2025-04-10</td>
                                    <td>2025-04-12</td>
                                    <td>Fever</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Approved</span></td>
                                    <td>HR Manager</td>
                                </tr>
                                <tr>
                                    <td>Earned Leave</td>
                                    <td>2025-03-15</td>
                                    <td>2025-03-18</td>
                                    <td>Travel</td>
                                    <td><span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Rejected</span></td>
                                    <td>Admin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



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
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <!-- you js code goes here -->
</body>



</html>