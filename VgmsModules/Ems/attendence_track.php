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
    <title>Phoenix</title>

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
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
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
            <!-- Title and Subtitle -->
            <div id="headerSection" class="text-start mb-4">
                <h1 class="fw-bold">Employee Attendance Management</h1>
                <p class="lead text-muted">Easily track and manage workforce attendance.</p>

            </div>
            <hr class="hr" />
            <!-- Date selectors on same row -->
            <div class="container mb-4 position-relative">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <div class="form-floating form-floating-advance-select mb-3">
                            <label for="floaTingLabelSingleSelect">Select Employee</label>
                            <select class="form-select" id="floaTingLabelSingleSelect" data-choices="data-choices"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option>Massachusetts Institute of Technology</option>
                                <option>University of Chicago</option>
                                <option>GSAS Open Labs At Harvard</option>
                                <option>California Institute of Technology</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative align-items-center justify-content-center d-flex">
                        <button class="btn btn-outline-secondary me-1 mb-1" onclick="filterByDate()"
                            type="button">Fetch</button>
                    </div>
                    <div class="col-md-4 position-relative">
                        <!-- Floating Label Input for Time Range -->
                        <div class="form-floating">
                            <input class="form-control datetimepicker flatpickr-input" id="timepicker2" type="text"
                                placeholder="d/m/y to d/m/y"
                                data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}'
                                readonly="readonly">
                            <label for="timepicker2">Select Time Range</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tableExample3"
                data-list="{&quot;valueNames&quot;:[&quot;date&quot;,&quot;status&quot;,&quot;mode&quot;,&quot;intime&quot;,&quot;outtime&quot;,&quot;overtime&quot;,&quot;remarkpermissions&quot;,&quot;localtion&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                <div class="search-box mb-3 mx-auto">
                    <form class="position-relative"><input
                            class="form-control search-input search form-control-sm animate-search" type="search"
                            placeholder="Search" aria-label="Search">
                        <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true"
                            focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                    </form>
                </div>
                <div class="d-flex gap-2 flex-wrap justify-content-center mb-3">
                    <button class="btn btn-outline-primary btn-sm filter-btn animate-filters" data-filter="remote">Work
                        from
                        Home</button>
                    <button class="btn btn-outline-success btn-sm filter-btn animate-filters"
                        data-filter="Sick Leave">Sick
                        Leave</button>
                    <button class="btn btn-outline-warning btn-sm filter-btn animate-filters"
                        data-filter="Overtime">Overtime</button>
                    <button class="btn btn-outline-danger btn-sm filter-btn animate-filters"
                        data-filter="Late">Late</button>
                    <button class="btn btn-outline-secondary btn-sm filter-btn animate-filters"
                        data-filter="All">Reset</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm fs-9 mb-0 text-center">
                        <thead class="animate-header">
                            <tr>
                                <th class="sort border-top ps-3" data-sort="date">
                                    <i class="fas fa-calendar-day me-1"></i> Date
                                </th>
                                <th class="sort border-top" data-sort="status">
                                    <i class="fas fa-user-check me-1"></i> Status
                                </th>
                                <th class="sort border-top" data-sort="mode">
                                    <i class="fas fa-briefcase me-1"></i> Mode
                                </th>
                                <th class="sort border-top" data-sort="intime">
                                    <i class="fas fa-sign-in-alt me-1"></i> Intime
                                </th>
                                <th class="sort border-top" data-sort="outtime">
                                    <i class="fas fa-sign-out-alt me-1"></i> Outtime
                                </th>
                                <th class="sort border-top" data-sort="overtime">
                                    <i class="fas fa-clock me-1"></i> Overtime
                                </th>
                                <th class="sort border-top" data-sort="remarkpermissions">
                                    <i class="fas fa-exclamation-triangle me-1"></i> Permissions and Remarks
                                </th>
                                <th class="sort border-top" data-sort="localtion">
                                    <i class="fas fa-map-marker-alt me-1"></i> Location
                                </th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col">
                                    <i class="fas fa-cogs me-1"></i> Action
                                </th>
                            </tr>
                        </thead>

                        <tbody class="list">
                            <tr>
                                <td class="align-middle ps-3 date">12-10-2024</td>
                                <td class="align-middle status">Present</td>
                                <td class="align-middle mode">Office</td>
                                <td class="align-middle intime">10:30am</td>
                                <td class="align-middle outtime">10:30am</td>
                                <td class="align-middle overtime">1hr</td>
                                <td class="align-middle remarkpermissions">Late</td>
                                <td class="align-middle location">
                                    <i class="fas fa-map-marker-alt text-primary" style="cursor:pointer;"
                                        onclick="showMapPopup('19.0760','72.8777')"></i>
                                </td>

                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg
                                                class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                </path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                <i class="fas fa-pen me-2 text-warning"></i> Edit
                                            </a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle ps-3 date">13-10-2024</td>
                                <td class="align-middle status">Present</td>
                                <td class="align-middle mode">Remote</td>
                                <td class="align-middle intime">09:00am</td>
                                <td class="align-middle outtime">06:00pm</td>
                                <td class="align-middle overtime">0hr</td>
                                <td class="align-middle remarkpermissions">-</td>
                                <td class="align-middle location">
                                    <i class="fas fa-map-marker-alt text-primary" style="cursor:pointer;"
                                        onclick="showMapPopup('18.5204','73.8567')"></i>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                <i class="fas fa-pen me-2 text-warning"></i> Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle ps-3 date">14-10-2024</td>
                                <td class="align-middle status">Present</td>
                                <td class="align-middle mode">Office</td>
                                <td class="align-middle intime">10:00am</td>
                                <td class="align-middle outtime">06:45pm</td>
                                <td class="align-middle overtime">45min</td>
                                <td class="align-middle remarkpermissions">Overtime</td>
                                <td class="align-middle location">
                                    <i class="fas fa-map-marker-alt text-primary" style="cursor:pointer;"
                                        onclick="showMapPopup('19.0760','72.8777')"></i>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                <i class="fas fa-pen me-2 text-warning"></i> Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle ps-3 date">12-10-2024</td>
                                <td class="align-middle status">Present</td>
                                <td class="align-middle mode">Office</td>
                                <td class="align-middle intime">10:30am</td>
                                <td class="align-middle outtime">10:30am</td>
                                <td class="align-middle overtime">1hr</td>
                                <td class="align-middle remarkpermissions">Late</td>
                                <td class="align-middle location">
                                    <i class="fas fa-map-marker-alt text-primary" style="cursor:pointer;"
                                        onclick="showMapPopup('19.0760','72.8777')"></i>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg
                                                class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                </path>
                                            </svg></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                <i class="fas fa-pen me-2 text-warning"></i> Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle ps-3 date">13-10-2024</td>
                                <td class="align-middle status">Present</td>
                                <td class="align-middle mode">Remote</td>
                                <td class="align-middle intime">09:00am</td>
                                <td class="align-middle outtime">06:00pm</td>
                                <td class="align-middle overtime">0hr</td>
                                <td class="align-middle remarkpermissions">-</td>
                                <td class="align-middle location">
                                    <i class="fas fa-map-marker-alt text-primary" style="cursor:pointer;"
                                        onclick="showMapPopup('18.5204','73.8567')"></i>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                <i class="fas fa-pen me-2 text-warning"></i> Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle ps-3 date">14-10-2024</td>
                                <td class="align-middle status">Present</td>
                                <td class="align-middle mode">Office</td>
                                <td class="align-middle intime">10:00am</td>
                                <td class="align-middle outtime">06:45pm</td>
                                <td class="align-middle overtime">45min</td>
                                <td class="align-middle remarkpermissions">Overtime</td>
                                <td class="align-middle location">
                                    <i class="fas fa-map-marker-alt text-primary" style="cursor:pointer;"
                                        onclick="showMapPopup('19.0759','72.8778')"></i>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                <i class="fas fa-pen me-2 text-warning"></i> Edit
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
                        data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of
                        </span>43</span>
                    <div class="d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg
                                class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                </path>
                            </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                        <ul class="mb-0 pagination">
                            <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button>
                            </li>
                            <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                            <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                            <li class="disabled"><button class="page" type="button">...</button></li>
                        </ul><button class="page-link pe-0" data-list-pagination="next"><svg
                                class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                </path>
                            </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                    </div>
                </div>
            </div>

        </div>

        <div id="mapPopup"
            class="position-fixed top-0 start-0 w-100 h-100 d-none justify-content-center align-items-center animate-map"
            style="backdrop-filter: blur(5px); background-color: rgba(0,0,0,0.4); z-index: 1050;">
            <div class="p-7 shadow modal-dialog modal-dialog-centered" id="verticallyCentered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Employee Location</h5> <button
                            class="btn-close position-absolute top-0 end-0 m-3" onclick="hideMapPopup()"></button>
                    </div>
                    <div class="modal-body">
                        <iframe id="mapFrame" class="w-100 mt-3" height="500" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Attendance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body row g-3">

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control datetimepicker" id="editDate" placeholder="Date" required
                                        type="text" placeholder="dd/mm/yyyy"
                                        data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                    <label for="editDate">Date</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="editStatus" aria-label="Status">
                                        <option selected disabled>Choose status</option>
                                        <option>Present</option>
                                        <option>Absent</option>
                                        <option>Leave</option>
                                    </select>
                                    <label for="editStatus">Status</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="editMode" aria-label="Mode">
                                        <option selected disabled>Choose mode</option>
                                        <option>Work from Home</option>
                                        <option>Office</option>
                                    </select>
                                    <label for="editMode">Mode</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control datetimepicker" id="editInTime"
                                        placeholder="Intime" type="text" placeholder="hour : minute"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                                    <label for="editInTime">In Time</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control datetimepicker" id="editOutTime" type="text"
                                        placeholder="hour : minute"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'>
                                    <label for="editOutTime">Out Time</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="editOvertime" placeholder="Overtime">
                                    <label for="editOvertime">Overtime (in hours)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="editRemarks" aria-label="Remarks">
                                        <option selected disabled>Select remark</option>
                                        <option>Permission granted</option>
                                        <option>Medical Leave</option>
                                        <option>Official Work</option>
                                    </select>
                                    <label for="editRemarks">Remarks / Permissions</label>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Save</button>
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
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- you js code goes here -->
    <script>
        // Show map popup with animation
        function showMapPopup(lat, lng) {
            const url = `https://www.google.com/maps?q=${lat},${lng}&output=embed`;
            document.getElementById('mapFrame').src = url;

            // Show the map popup
            const popup = document.getElementById('mapPopup');
            popup.classList.remove('d-none');

            // Apply GSAP animation for showing the popup
            gsap.from(".animate-map", {
                scale: 0.8,
                opacity: 0,
                duration: 0.5,
                ease: "back.out(1.7)"
            });
        }

        // Hide map popup with animation
        function hideMapPopup() {
            const popup = document.getElementById('mapPopup');

            // Animate the popup to fade out and scale down before hiding
            gsap.to(".animate-map", {
                scale: 0.8,
                opacity: 0,
                duration: 0.5,
                ease: "back.in(1.7)",
                onComplete: function () {
                    // After the animation, hide the popup and clear the map frame
                    popup.classList.add('d-none');
                    document.getElementById('mapFrame').src = '';
                }
            });
        }

    </script>
    <script>
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter').toLowerCase();
                document.querySelectorAll('.list tr').forEach(row => {
                    const content = row.textContent.toLowerCase();
                    row.style.display = filter === 'all' || content.includes(filter) ? '' : 'none';
                });
            });
        });
    </script>
    <script>
        function filterByDate() {
            const range = document.getElementById('timepicker2').value.split(' to ');
            if (range.length < 2) return;

            const start = new Date(range[0]);
            const end = new Date(range[1]);

            // Set time to 0 for consistent comparison
            start.setHours(0, 0, 0, 0);
            end.setHours(0, 0, 0, 0);

            document.querySelectorAll('.list tr').forEach(row => {
                const dateCell = row.querySelector('.date');
                if (!dateCell) return;

                const [dd, mm, yyyy] = dateCell.textContent.trim().split('-');
                const rowDate = new Date(`${yyyy}-${mm}-${dd}`); // format as yyyy-mm-dd
                rowDate.setHours(0, 0, 0, 0); // normalize

                // Compare
                if (rowDate >= start && rowDate <= end) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Animate thead
            gsap.from(".animate-header", "th", {
                y: -30,
                opacity: 0,
                stagger: 0.1,
                duration: 1,
                ease: "power2.out"
            });

            // Animate rows
            gsap.from("tr", {
                y: 20,
                opacity: 0,
                stagger: 0.1,
                duration: 1,
                ease: "power3.out"
            });

            // Animate search and filter buttons
            gsap.from([".animate-search", ".animate-filters"], {
                y: -20,
                opacity: 0,
                stagger: 0.2,
                duration: 1,
                ease: "back.out(1.7)"
            });

            // Animate buttons and icons
            gsap.from(["button", "th i", "td i"], {
                scale: 0.5,
                opacity: 0,
                stagger: 0.05,
                duration: 1,
                ease: "back.out(1.7)"
            });
        });

        // Animate modal when shown
        const modal = document.getElementById('editModal');
        modal.addEventListener('shown.bs.modal', () => {
            gsap.from(".animate-modal", {
                y: -50,
                opacity: 0,
                duration: 0.5,
                ease: "power2.out"
            });
        });
    </script>

</body>



</html>