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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
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
                <!-- Title & Subtitle -->
                <div class="mb-4">
                    <h3 class="fw-bold" id="pageTitle"><i class="bi bi-cash-coin me-2"></i>Loan & Advance Salary</h3>
                    <p class="text-muted" id="pageSubtitle">Request and track your financial assistance easily</p>
                </div>

                <!-- Filters (optional demo layout) -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <button class="btn btn-outline-primary">Loan</button>
                    <button class="btn btn-outline-success">Advance</button>
                    <input type="text" class="form-control w-auto" placeholder="Search" />
                    <button class="btn btn-outline-secondary ms-auto">Export</button>
                </div>

                <!-- Table -->

                <div id="tableExample3" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-3" data-sort="name">
                                        <span class="bi bi-person me-2"></span> Name <!-- Bootstrap icon for 'Name' -->
                                    </th>
                                    <th class="sort border-top" data-sort="email">
                                        <span class="bi bi-envelope me-2"></span> Email <!-- Bootstrap icon for 'Email' -->
                                    </th>
                                    <th class="sort border-top" data-sort="age">
                                        <span class="bi bi-cash me-2"></span> Amount <!-- Bootstrap icon for 'Amount' -->
                                    </th>
                                    <th class="sort border-top" data-sort="age">
                                        <span class="bi bi-card-checklist me-2"></span> Type Request <!-- Bootstrap icon for 'Type Request' -->
                                    </th>
                                    <th class="sort border-top" data-sort="age">
                                        <span class="bi bi-credit-card me-2"></span> EMI <!-- Bootstrap icon for 'EMI' -->
                                    </th>
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">
                                        <span class="bi bi-gear me-2"></span> ACTION <!-- Bootstrap icon for 'Action' -->
                                    </th>
                                </tr>

                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="align-middle ps-3 name">Anna</td>
                                    <td class="align-middle email">anna@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Homer</td>
                                    <td class="align-middle email">homer@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Oscar</td>
                                    <td class="align-middle email">oscar@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Emily</td>
                                    <td class="align-middle email">emily@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Jara</td>
                                    <td class="align-middle email">jara@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Clark</td>
                                    <td class="align-middle email">clark@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Jennifer</td>
                                    <td class="align-middle email">jennifer@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Tony</td>
                                    <td class="align-middle email">tony@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Tom</td>
                                    <td class="align-middle email">tom@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Michael</td>
                                    <td class="align-middle email">michael@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Antony</td>
                                    <td class="align-middle email">antony@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Raymond</td>
                                    <td class="align-middle email">raymond@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Marie</td>
                                    <td class="align-middle email">marie@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Cohen</td>
                                    <td class="align-middle email">cohen@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Rowen</td>
                                    <td class="align-middle email">rowen@example.com</td>
                                    <td class="align-middle age">39</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">John</td>
                                    <td class="align-middle email">john@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Emily</td>
                                    <td class="align-middle email">emily@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Alice</td>
                                    <td class="align-middle email">alice@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">David</td>
                                    <td class="align-middle email">david@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Sullivan Benton</td>
                                    <td class="align-middle email">sullivan@example.com</td>
                                    <td class="align-middle amount">35</td>
                                    <td class="align-middle type-request">loan</td>
                                    <td class="align-middle emi">2</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Uriah Nunez</td>
                                    <td class="align-middle email">uriah@example.com</td>
                                    <td class="align-middle age">32</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="bi bi-three-dots fs-10"></span> <!-- Bootstrap icon for the button -->
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-check-circle me-2"></span> Accept <!-- Bootstrap icon for 'Accept' -->

                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="bi bi-hourglass me-2"></span> Pending <!-- Bootstrap icon for 'Pending' -->

                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">
                                                    <span class="bi bi-x-circle me-2"></span> Reject <!-- Bootstrap icon for 'Reject' -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Terry Lynch</td>
                                    <td class="align-middle email">terry@example.com</td>
                                    <td class="align-middle age">45</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Lailah Green</td>
                                    <td class="align-middle email">lailah@example.com</td>
                                    <td class="align-middle age">25</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Phillip Mack</td>
                                    <td class="align-middle email">phillip@example.com</td>
                                    <td class="align-middle age">21</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Whitney Sawyer</td>
                                    <td class="align-middle email">whitney@example.com</td>
                                    <td class="align-middle age">12</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Jaliyah Ritter</td>
                                    <td class="align-middle email">jaliyah@example.com</td>
                                    <td class="align-middle age">12</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Clayton Arnold</td>
                                    <td class="align-middle email">clayton@example.com</td>
                                    <td class="align-middle age">52</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Jett Donovan</td>
                                    <td class="align-middle email">jett@example.com</td>
                                    <td class="align-middle age">31</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Javion Christensen</td>
                                    <td class="align-middle email">javion@example.com</td>
                                    <td class="align-middle age">25</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Brittany Griffin</td>
                                    <td class="align-middle email">brittany@example.com</td>
                                    <td class="align-middle age">41</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Dustin Middleton</td>
                                    <td class="align-middle email">dustin@example.com</td>
                                    <td class="align-middle age">45</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Janessa Mann</td>
                                    <td class="align-middle email">janessa@example.com</td>
                                    <td class="align-middle age">65</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Evangeline Santos</td>
                                    <td class="align-middle email">evangeline@example.com</td>
                                    <td class="align-middle age">32</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Parker Todd</td>
                                    <td class="align-middle email">parker@example.com</td>
                                    <td class="align-middle age">41</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Jaxson Gill</td>
                                    <td class="align-middle email">jaxson@example.com</td>
                                    <td class="align-middle age">33</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Lucille</td>
                                    <td class="align-middle email">lucille@example.com</td>
                                    <td class="align-middle age">34</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Terrell</td>
                                    <td class="align-middle email">terrell@example.com</td>
                                    <td class="align-middle age">35</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Shayna</td>
                                    <td class="align-middle email">shayna@example.com</td>
                                    <td class="align-middle age">36</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Alvaro</td>
                                    <td class="align-middle email">alvaro@example.com</td>
                                    <td class="align-middle age">37</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Clay</td>
                                    <td class="align-middle email">clay@example.com</td>
                                    <td class="align-middle age">37</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Oscar</td>
                                    <td class="align-middle email">oscar@example.com</td>
                                    <td class="align-middle age">37</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Tabitha</td>
                                    <td class="align-middle email">tabitha@example.com</td>
                                    <td class="align-middle age">37</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Jordon</td>
                                    <td class="align-middle email">jordon@example.com</td>
                                    <td class="align-middle age">37</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
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



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
                <script>
                    // Initialize the GSAP animation
                    gsap.from(".card", {
                        duration: 1,
                        opacity: 0,
                        y: -50,
                        stagger: 0.2
                    });

                    // Initialize the Bootstrap dropdowns
                    var dropdowns = document.querySelectorAll('.dropdown-toggle');
                    dropdowns.forEach(function(dropdown) {
                        dropdown.addEventListener('click', function() {
                            var dropdownMenu = this.nextElementSibling;
                            if (dropdownMenu.classList.contains('show')) {
                                dropdownMenu.classList.remove('show');
                            } else {
                                dropdownMenu.classList.add('show');
                            }
                        });
                    });

                    // Close dropdowns when clicking outside
                    document.addEventListener('click', function(event) {
                        if (!event.target.matches('.dropdown-toggle')) {
                            dropdowns.forEach(function(dropdown) {
                                var dropdownMenu = dropdown.nextElementSibling;
                                if (dropdownMenu.classList.contains('show')) {
                                    dropdownMenu.classList.remove('show');
                                }
                            });
                        }
                    });

                    // Initialize the list.js for search and pagination
                    var options = {
                        valueNames: ['name', 'email', 'age'],
                        page: 10,
                        pagination: true
                    };
                    var userList = new List('user-list', options);

                    // Initialize the tooltip
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl);
                    });
                </script>
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



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>