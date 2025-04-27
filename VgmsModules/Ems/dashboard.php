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
    <title>Admin Dashboard</title>

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
            <div class="container">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-person-workspace fs-1"></i>
                    <h1 class="fw-bold mb-0" id="pageTitle">Receptionist Dashboard</h1>
                </div>
                <div class="d-flex align-items-center gap-2 mt-2">
                    <i class="bi bi-briefcase fs-5 text-muted"></i>
                    <p class="text-muted mb-0" id="pageSubtitle">Manage daily activities with ease</p>
                </div>
                <!-- Dashboard Content -->
                <div class="row g-4" id="dashboardContent">

                    <!-- Today's Appointments -->
                    <div class="col-lg-4 col-md-6">
                        <div class="border rounded-4 p-4 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-calendar-event display-5 text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-0 text-muted">Today's Appointments</p>
                                    <h3 class="fw-bold">8</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-success-subtle text-success p-2">+15%</span>
                                <small class="text-muted">Since yesterday</small>
                            </div>
                        </div>
                    </div>

                    <!-- New Guests Registered -->
                    <div class="col-lg-4 col-md-6">
                        <div class="border rounded-4 p-4 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-person-plus-fill display-5 text-success"></i>
                                <div class="ms-3">
                                    <p class="mb-0 text-muted">New Guests</p>
                                    <h3 class="fw-bold">5</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-danger-subtle text-danger p-2">-5%</span>
                                <small class="text-muted">Compared to last week</small>
                            </div>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="col-lg-4 col-md-6">
                        <div class="border rounded-4 p-4 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-envelope-paper-fill display-5 text-warning"></i>
                                <div class="ms-3">
                                    <p class="mb-0 text-muted">New Messages</p>
                                    <h3 class="fw-bold">12</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-primary-subtle text-primary p-2">+8%</span>
                                <small class="text-muted">Since yesterday</small>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="col-12">
                        <div class="border rounded-4 p-4 shadow-sm h-100">
                            <h5 class="d-flex align-items-center gap-2 mb-4">
                                <i class="bi bi-lightning-fill"></i> Quick Actions
                            </h5>
                            <div class="d-flex flex-wrap gap-3">
                                <button class="btn btn-outline-primary d-flex align-items-center gap-2">
                                    <i class="bi bi-plus-circle"></i> New Appointment
                                </button>
                                <button class="btn btn-outline-success d-flex align-items-center gap-2">
                                    <i class="bi bi-person-add"></i> Register Guest
                                </button>
                                <button class="btn btn-outline-warning d-flex align-items-center gap-2">
                                    <i class="bi bi-chat-left-text"></i> View Queries
                                </button>
                                <button class="btn btn-outline-danger d-flex align-items-center gap-2">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Charts Section -->
                <div class="row g-4 mt-2" id="chartsSection">

                    <!-- Bar Chart -->
                    <div class="col-lg-8">
                        <div class="border rounded-4 p-4 shadow-sm h-100">
                            <h5 class="fw-bold d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-bar-chart-line"></i> Contacts Created
                            </h5>
                            <p class="text-muted">Contacts received across all channels</p>
                            <canvas id="contactsChart" height="150"></canvas>
                        </div>
                    </div>

                    <!-- Doughnut Chart -->
                    <div class="col-lg-4">
                        <div class="border rounded-4 p-4 shadow-sm h-100">
                            <h5 class="fw-bold d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-pie-chart-fill"></i> New Contacts by Source
                            </h5>
                            <p class="text-muted">Distribution of contact sources</p>
                            <canvas id="sourcesChart" height="150"></canvas>
                        </div>
                    </div>

                </div>

                <div class="row g-4 py-5">

                    <!-- To Do Section -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title mb-4"><i class="bi bi-list-task"></i> Pending approval</h2>

                                <div class="overflow-auto flex-grow-1" style="max-height: 300px;">
                                    <ul class="list-group fs-6" id="todoList">
                                        <li class="list-group-item">
                                            <i class="bi bi-pencil-square me-2"></i> Finalize the geometric shapes
                                            <div class="small text-muted mt-1 ms-4">Waiting for design team feedback</div>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-people-fill me-2"></i> Daily meeting with team members
                                            <div class="small text-muted mt-1 ms-4">Scheduling conflicts to resolve</div>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-calendar-check me-2"></i> Daily Standup Meetings
                                            <div class="small text-muted mt-1 ms-4">Pending team confirmation</div>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-hourglass-split me-2"></i> Procrastinate for a month
                                            <div class="small text-muted mt-1 ms-4">Needs management approval</div>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-fire me-2"></i> Warming up
                                            <div class="small text-muted mt-1 ms-4">Pending on-boarding session</div>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="bi bi-box-arrow-up-right me-2"></i> Make ready for release
                                            <div class="small text-muted mt-1 ms-4">QA sign-off pending</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-outline-primary w-100"><i class="bi bi-plus-circle me-2"></i> Add new task</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payroll Summary Section -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title mb-4"><i class="bi bi-cash-coin"></i> Payroll Summary</h2>
                                <p class="text-muted">Recent payroll activities</p>

                                <div class="overflow-auto flex-grow-1">
                                    <ul class="list-group mt-3" id="payrollSummary">
                                        <li class="list-group-item">
                                            <h5><i class="bi bi-currency-dollar me-2"></i> December 2023 Salary Disbursed</h5>
                                            <p class="mb-0">All employees received December salaries on 1st Jan 2024.</p>
                                        </li>
                                        <li class="list-group-item">
                                            <h5><i class="bi bi-gift me-2"></i> Year-End Bonuses</h5>
                                            <p class="mb-0">Bonuses credited on 20th Dec 2023.</p>
                                        </li>
                                        <li class="list-group-item">
                                            <h5><i class="bi bi-gear-fill me-2"></i> Payroll Adjustments</h5>
                                            <p class="mb-0">Adjustments completed for reimbursements.</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
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
    <script src="../../vendors/leaflet/leaflet.js"></script>
    <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../assets/js/ecommerce-dashboard.js"></script>





    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <!-- GSAP Animations -->
    <script>
        // Animate Title and Subtitle
        gsap.from("#pageTitle", {
            duration: 1,
            x: -100,
            opacity: 0,
            ease: "power4.out"
        });

        gsap.from("#pageSubtitle", {
            duration: 1,
            x: -100,
            opacity: 0,
            delay: 0.2,
            ease: "power4.out"
        });

        // Animate all dashboard cards
        gsap.from("#dashboardContent .col-lg-4, #dashboardContent .col-12", {
            duration: 1,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            ease: "back.out(1.7)"
        });

        // Animate Quick Action Buttons on hover
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', () => {
                gsap.to(button, {
                    scale: 1.05,
                    duration: 0.2
                });
            });
            button.addEventListener('mouseleave', () => {
                gsap.to(button, {
                    scale: 1,
                    duration: 0.2
                });
            });
        });

        // Contacts Bar Chart
        const contactsCtx = document.getElementById('contactsChart').getContext('2d');
        new Chart(contactsCtx, {
            type: 'bar',
            data: {
                labels: ['18 Apr', '19 Apr', '20 Apr', '21 Apr', '22 Apr', '23 Apr', '24 Apr', '25 Apr', '26 Apr'],
                datasets: [{
                    label: 'Contacts',
                    data: [30, 20, 40, 35, 55, 38, 22, 34, 52],
                    backgroundColor: 'rgba(13, 110, 253, 0.7)',
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Sources Doughnut Chart
        const sourcesCtx = document.getElementById('sourcesChart').getContext('2d');
        new Chart(sourcesCtx, {
            type: 'doughnut',
            data: {
                labels: ['Organic', 'Paid Search', 'Direct'],
                datasets: [{
                    label: 'New Contacts',
                    data: [80, 65, 40],
                    backgroundColor: [
                        'rgba(13, 110, 253, 0.7)',
                        'rgba(25, 135, 84, 0.7)',
                        'rgba(255, 193, 7, 0.7)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                cutout: '70%'
            }
        });

        gsap.from("#pageTitle", {
            duration: 1,
            x: -100,
            opacity: 0,
            ease: "power4.out"
        });
        gsap.from("#pageSubtitle", {
            duration: 1,
            x: -100,
            opacity: 0,
            delay: 0.2,
            ease: "power4.out"
        });
        gsap.from("#topButtons button", {
            duration: 1,
            y: -50,
            opacity: 0,
            delay: 0.3,
            ease: "back.out(1.7)"
        });
        gsap.from("#progressSection", {
            duration: 1,
            scale: 0.8,
            opacity: 0,
            delay: 0.4,
            ease: "power2.out"
        });
        gsap.from("#tableSection", {
            duration: 1,
            y: 50,
            opacity: 0,
            delay: 0.5,
            ease: "back.out(1.7)"
        });
        gsap.from("#tableSection table", {
            duration: 1,
            y: 50,
            opacity: 0,
            delay: 0.6,
            ease: "back.out(1.7)"
        });
        gsap.from("#tableSection th, #tableSection td", {
            duration: 1,
            y: 50,
            opacity: 0,
            stagger: 0.1,
            delay: 0.7,
            ease: "back.out(1.7)"
        });

        // Animate the To-do list and Payroll Summary with a fade-in
        gsap.from("#todoList li", {
            opacity: 0,
            x: -50,
            duration: 0.8,
            stagger: 0.2
        });

        gsap.from("#payrollSummary li", {
            opacity: 0,
            x: 50,
            duration: 0.8,
            stagger: 0.2
        });

        // Animate the Add new task button
        gsap.from("#todoList button", {
            opacity: 0,
            scale: 0.8,
            duration: 0.8,
            delay: 0.5
        });
    </script>




</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>