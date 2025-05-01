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
    <title>View Project</title>

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
    <link href="../../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
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
            <!-- <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                    <li class="breadcrumb-item active">Default</li>
                </ol>
            </nav> -->
            <div class="pb-8">
                <h2 class="mb-4">Customer Side View Project</h2>
                <div id="reports" data-list='{"valueNames":["title","text","priority","reportsby","reports","date"],"page":10,"pagination":true}'>
                    <div class="row g-3 justify-content-between mb-2">
                        <div class="col-12">
                            <div class="d-md-flex justify-content-between">
                                <div class="mb-3"><button class="btn btn-primary me-4"><span class="fas fa-plus me-2"></span>Create Report</button></div>
                                <div class="d-flex mb-3">
                                    <div class="search-box me-2">
                                        <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search" />
                                            <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                    </div><button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="modal" data-bs-target="#reportsFilterModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-filter text-primary" data-fa-transform="down-3"></span></button>
                                    <div class="modal fade" id="reportsFilterModal" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border border-translucent">
                                                <form id="addEventForm" autocomplete="off">
                                                    <div class="modal-header justify-content-between border-translucent p-4">
                                                        <h5 class="modal-title text-body-highlight fs-6 lh-sm">Filter</h5><button class="btn p-1 text-danger" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9"> </span></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-2 px-4">
                                                        <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="priority">Priority</label><select class="form-select" id="priority">
                                                                <option value="urgent" selected="selected">Urgent</option>
                                                                <option value="medium">Medium </option>
                                                                <option value="high">High</option>
                                                                <option value="low">Low</option>
                                                            </select></div>
                                                        <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="createDate">Create Date</label><select class="form-select" id="createDate">
                                                                <option value="today" selected="selected">Today</option>
                                                                <option value="last7Days">Last 7 Days</option>
                                                                <option value="last30Days">Last 30 Days</option>
                                                                <option value="chooseATimePeriod">Choose a time period</option>
                                                            </select></div>
                                                        <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="category">Category</label><select class="form-select" id="category">
                                                                <option value="salesReports" selected="selected">Sales Reports</option>
                                                                <option value="hrReports">HR Reports</option>
                                                                <option value="marketingReports">Marketing Reports</option>
                                                                <option value="administrativeReports">Administrative Reports</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-end align-items-center px-4 pb-4 border-0 pt-3"><button class="btn btn-sm btn-phoenix-primary px-4 fs-10 my-0" type="submit"> <span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset</button><button class="btn btn-sm btn-primary px-9 fs-10 my-0" type="submit">Done</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 list" id="reportsList">
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Purchasers and sellers</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Urgent</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Purchasing-Related Vendors</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports by email</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Useful Solutions</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Urgent</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Obtaining leads today</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports by email</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">HR Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 20, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Category Products</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Medium</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Based on the percentage of recipients</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports on Sales Orders</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 28, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Current Deals</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Medium</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Sales for Today</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reviews of Products</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 28, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Useful Solutions</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-info" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Low</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Obtaining leads today</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports by email</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">HR Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 27, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Current Deals</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-info" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Low</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Sums up the many existing businesses.</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports by email</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Service Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 26, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Lost of Deals</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-warning" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">High</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Emails sent by users to all records,</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports on Deals</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 25, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Important Accounts</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-info" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Low</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Contracts closed by a salesman</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports on Deals</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 25, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Analytics for Email</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Medium</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Based on Status Sales Orders</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reviews of Products</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 24, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Types of Deals</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Medium</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Products support will stop this month</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports by email</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 23, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Category Products</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-warning" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">High</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Based on the percentage of recipients</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports on Sales Orders</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 22, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Current Sales</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Urgent</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Sales for Today</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reviews of Products</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 22, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Important Accounts</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Urgent</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Contracts closed by a salesman</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports on Deals</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 21, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-translucent">
                                        <div class="d-flex align-items-start mb-1">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /></div>
                                            <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="../../VgmsModules/pms/customer_view_project_bp2.php">Useful Solutions</a>
                                                <div class="d-flex align-items-center"><span class="fa-solid fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1"></span><span class="fw-bold fs-9 text-body lh-2">Urgent</span></div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Obtaining leads today</p>
                                    </div>
                                    <div class="row g-1 g-sm-3 mt-2 lh-1">
                                        <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><span class="fa-regular fa-folder me-2 reportsby"></span>Reports by email</a></div>
                                        <div class="col-12 col-sm-auto">
                                            <!-- <div class="d-flex align-items-center"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">HR Reports</p>
                                            </div> -->
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="d-flex align-items-center"><span class="me-2" data-feather="clock" style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 20, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9 mt-2">
                        <div class="col-auto d-flex">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </div>
                        <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            
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
    <script src="../../vendors/choices/choices.min.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>





    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>