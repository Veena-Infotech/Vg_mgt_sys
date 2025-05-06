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
    <title>Project Details </title>

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
        <?php

        use Dom\Mysql;

        include '../../Components/navbar.php'; ?>
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

            <div class="content px-0 pt-navbar" style="margin-top: -4.5%;">
                <div class="row g-0">
                    <div class="col-12 col-xxl-8 px-0 bg-body">
                        <?php
                        // include '../PhpFiles/connection.php';
                        include '../PhpFiles/handle_project_details.php';

                        if (isset($_GET['project_id'])) {
                            $project_id = intval($_GET['project_id']);
                        
                            $query = "SELECT p.*, c.f_name, c.l_name ,s.*
                            FROM tbl_project p 
                            INNER JOIN tbl_client c ON p.project_client = c.client_id 
                            INNER JOIN tbl_project_status s ON p.project_status = s.id
                            WHERE p.project_id = $project_id";
                  
                        
                        $result = mysqli_query($conn, $query) or die("Query Unsucessfull");

                        if ( mysqli_num_rows($result) > 0 ) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo ' 
                                <div class="px-4 px-lg-6 pt-6 pb-9">
                            <div class="mb-5">
                                <div class="d-flex justify-content-between">
                                    <h2 class="text-body-emphasis fw-bolder mb-2">' . $row['project_title'] . '</h2>
                                    <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                    </div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary">' . $row['status_name'] . '<span class="ms-1 uil uil-stopwatch"></span></span>
                            </div>
                            <div class="row gx-0 gx-sm-5 gy-8 mb-8">
                                <div class="col-12 col-xl-3 col-xxl-4 pe-xl-0">
                                    <div class="mb-4 mb-xl-7">
                                        <div class="row gx-0 gx-sm-7">
                                            <div class="col-12 col-sm-auto">
                                                <table class="lh-sm mb-4 mb-sm-0 mb-xl-4">
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-1" colspan="2">
                                                                <div class="d-flex"><span class="fa-solid fa-earth-americas me-2 text-body-tertiary fs-9"></span>
                                                                    <h5 class="text-body">Public project</h5>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1">
                                                                <div class="d-flex"><span class="fa-solid fa-user me-2 text-body-tertiary fs-9"></span>
                                                                    <h5 class="text-body mb-0 text-nowrap">Client :</h5>
                                                                </div>
                                                            </td>
                                                            <td class="ps-1 py-1"><a class="fw-semibold d-block lh-sm" href="#!">'.$row['f_name'].' '.$row['l_name'].'</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1">
                                                                <div class="d-flex"><span class="fa-regular fa-credit-card me-2 text-body-tertiary fs-9"></span>
                                                                    <h5 class="text-body mb-0 text-nowrap">Budget : </h5>
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold ps-1 py-1 text-body-highlight">$8,742</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <table class="lh-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td class="align-top py-1 text-body text-nowrap fw-bold">Started : </td>
                                                            <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">' . $row['project_start_date'] . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1 text-body text-nowrap fw-bold">Deadline :</td>
                                                            <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">' . $row['project_end_date'] . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1 text-body text-nowrap fw-bold">Progress :</td>
                                                            <td class="text-warning fw-semibold ps-3">80%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center"><span class="fa-solid fa-list-check me-2 text-body-tertiary fs-9"></span>
                                            <h5 class="text-body-emphasis mb-0 me-2">91<span class="text-body fw-normal ms-2">tasks</span></h5><a class="fw-bold fs-9 mt-1" href="#!">See tasks <span class="fa-solid fa-chevron-right me-2 fs-10"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-9 col-xxl-8">
                                    <div class="row flex-between-center mb-3 g-3">
                                        <div class="col-auto">
                                            <h4 class="text-body-emphasis">Task completed over time</h4>
                                            <p class="text-body-tertiary mb-0">Hard works done across all projects</p>
                                        </div>
                                        <div class="col-8 col-sm-4"><select class="form-select form-select-sm">
                                                <option>Mar 1 - 31, 2022</option>
                                                <option>April 1 - 30, 2022</option>
                                                <option>May 1 - 31, 2022</option>
                                            </select></div>
                                    </div>
                                    <div class="echart-completed-task-chart" style="min-height:200px;width:100%"></div>
                                </div>
                                <div class="col-12 col-sm-5 col-lg-4 col-xl-3 col-xxl-4">
                                    <div class="mb-5">
                                        <h4 class="text-body-emphasis">Work loads</h4>
                                        <h6 class="text-body-tertiary">Last 7 days</h6>
                                    </div>
                                    <div class="echart-top-coupons mb-5" style="height:115px;width:100%;"></div>
                                    <div class="row justify-content-center">
                                        <div class="col-auto col-sm-12">
                                            <div class="row justify-content-center justify-content-sm-between g-5 g-sm-0 mb-2">
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bullet-item me-2 bg-primary"></div>
                                                        <h6 class="text-body fw-semibold flex-1 mb-0">Shantinan Mekalan</h6>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <h6 class="text-body fw-semibold mb-0">72%</h6>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center justify-content-sm-between g-5 g-sm-0 mb-2">
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bullet-item me-2 bg-primary-lighter"></div>
                                                        <h6 class="text-body fw-semibold flex-1 mb-0">Makena Zikonn</h6>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <h6 class="text-body fw-semibold mb-0">18%</h6>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center justify-content-sm-between g-5 g-sm-0 mb-2">
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bullet-item me-2 bg-info"></div>
                                                        <h6 class="text-body fw-semibold flex-1 mb-0">Meena Kumari</h6>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <h6 class="text-body fw-semibold mb-0">10%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-lg-8 col-xl-5">
                                    <h4 class="text-body-emphasis mb-4">Team members</h4>
                                    <div class="d-flex mb-8">
                                        <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block outline-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-xl  me-1">
                                                    <img class="rounded-circle " src="../../assets/img/team/33.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/33.webp" alt="" /></div>
                                                            <h6 class="text-white">Tyrion Lannister</h6>
                                                            <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                            <div class="d-flex flex-center mb-3">
                                                                <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-body-emphasis">
                                                    <div class="p-3 border-bottom border-translucent">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                        </div>
                                                    </div>
                                                    <ul class="nav d-flex flex-column py-3 border-bottom">
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                            </div>
                                        </div>
                                        <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block outline-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-xl  me-1">
                                                    <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/30.webp" alt="" /></div>
                                                            <h6 class="text-white">Milind Mikuja</h6>
                                                            <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                            <div class="d-flex flex-center mb-3">
                                                                <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-body-emphasis">
                                                    <div class="p-3 border-bottom border-translucent">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                        </div>
                                                    </div>
                                                    <ul class="nav d-flex flex-column py-3 border-bottom">
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                            </div>
                                        </div>
                                        <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block outline-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-xl  me-1">
                                                    <img class="rounded-circle " src="../../assets/img/team/31.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/31.webp" alt="" /></div>
                                                            <h6 class="text-white">Stanly Drinkwater</h6>
                                                            <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                            <div class="d-flex flex-center mb-3">
                                                                <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-body-emphasis">
                                                    <div class="p-3 border-bottom border-translucent">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                        </div>
                                                    </div>
                                                    <ul class="nav d-flex flex-column py-3 border-bottom">
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                            </div>
                                        </div>
                                        <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block outline-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-xl  me-1">
                                                    <img class="rounded-circle " src="../../assets/img/team/60.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/60.webp" alt="" /></div>
                                                            <h6 class="text-white">Josef Stravinsky</h6>
                                                            <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                            <div class="d-flex flex-center mb-3">
                                                                <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-body-emphasis">
                                                    <div class="p-3 border-bottom border-translucent">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                        </div>
                                                    </div>
                                                    <ul class="nav d-flex flex-column py-3 border-bottom">
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                            </div>
                                        </div>
                                        <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block outline-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-xl  me-1">
                                                    <img class="rounded-circle " src="../../assets/img/team/65.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/65.webp" alt="" /></div>
                                                            <h6 class="text-white">Igor Borvibson</h6>
                                                            <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                            <div class="d-flex flex-center mb-3">
                                                                <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-body-emphasis">
                                                    <div class="p-3 border-bottom border-translucent">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                        </div>
                                                    </div>
                                                    <ul class="nav d-flex flex-column py-3 border-bottom">
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-body-emphasis mb-4">Tags</h4><span class="badge badge-tag me-2 mb-1">Unused_brain</span><span class="badge badge-tag me-2 mb-1">Machine</span><span class="badge badge-tag me-2 mb-1">Coding</span><span class="badge badge-tag me-2 mb-1">Meseeks</span><span class="badge badge-tag me-2 mb-1">Smithpeople</span><span class="badge badge-tag me-2 mb-1">Rick</span><span class="badge badge-tag me-2 mb-1">Biology</span><span class="badge badge-tag me-2 mb-1">Neurology</span><span class="badge badge-tag me-2 mb-1">Brainlessness</span><span class="badge badge-tag me-2 mb-1">Stupidity</span><span class="badge badge-tag me-2 mb-1">Jerry</span><span class="badge badge-tag me-2 mb-1">Not _the_mouse</span>
                                </div>
                            </div>
                            <h3 class="text-body-emphasis mb-4">Project overview</h3>
                            <p class="text-body-secondary mb-4">' . $row['project_description'] . '</p>
                           
                        </div>';
                            }
                        }
                    }
                        ?>



                    </div>
                    <div class="col-12 col-xxl-4 px-0 border-start-xxl border-top-sm">
                        <div class="bg-light dark__bg-gray-1100 h-100">
                            <div class="px-4 px-lg-6">
                                <h3 class="text-body-highlight mb-4 fw-bold" style="position: sticky; top: 0; z-index: 1; margin-top:3%">
                                    Recent activity
                                </h3>

                            </div>
                            <hr>
                            <div style="max-height: 500px; overflow-y: auto;">
                                <div class="timeline-vertical timeline-with-details">
                                    <div class="p-4 p-lg-6">

                                        <div class="timeline-vertical timeline-with-details">
                                            <div class="timeline-item position-relative">
                                                <div class="row g-md-3">
                                                    <div class="col-12 col-md-auto d-flex">
                                                        <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                            <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 DEC, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                                                        </div>
                                                        <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-chess text-primary-dark fs-10"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="timeline-item-content ps-6 ps-md-3">
                                                            <h5 class="fs-9 lh-sm">Phoenix Template: Unleashing Creative Possibilities</h5>
                                                            <p class="fs-9">by <a class="fw-semibold" href="#!">Shantinon Mekalan</a></p>
                                                            <p class="fs-9 text-body-secondary mb-5">Discover limitless creativity with the Phoenix template! Our latest update offers an array of innovative features and design options.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-item position-relative">
                                                <div class="row g-md-3">
                                                    <div class="col-12 col-md-auto d-flex">
                                                        <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                            <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">05 DEC, 2023<br class="d-none d-md-block" /> 12:30 AM</p>
                                                        </div>
                                                        <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-dove text-primary-dark fs-10"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="timeline-item-content ps-6 ps-md-3">
                                                            <h5 class="fs-9 lh-sm">Empower Your Digital Presence: The Phoenix Template Unveiled</h5>
                                                            <p class="fs-9">by <a class="fw-semibold" href="#!">Bookworm22</a></p>
                                                            <p class="fs-9 text-body-secondary mb-5">Unveiling the Phoenix template, a game-changer for your digital presence. With its powerful features and sleek design,</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-item position-relative">
                                                <div class="row g-md-3">
                                                    <div class="col-12 col-md-auto d-flex">
                                                        <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                            <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">15 DEC, 2023<br class="d-none d-md-block" /> 2:30 AM</p>
                                                        </div>
                                                        <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-dungeon text-primary-dark fs-10"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="timeline-item-content ps-6 ps-md-3">
                                                            <h5 class="fs-9 lh-sm">Phoenix Template: Simplified Design, Maximum Impact</h5>
                                                            <p class="fs-9">by <a class="fw-semibold" href="#!">Sharuka Nijibum</a></p>
                                                            <p class="fs-9 text-body-secondary mb-0">Introducing the Phoenix template, where simplified design meets maximum impact. Elevate your digital presence with its sleek and intuitive features.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 px-lg-6">
                                <h4 class="mb-3">Files</h4>
                            </div>
                            <div class="bg-light dark__bg-gray-1100 h-100" style="max-height: 600px; overflow-y: auto;">


                                <div class="border-top px-4 px-lg-6 py-4">
                                    <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                            <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                            </div>
                                            <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                        </div>
                                        <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="../../assets/img/generic/40.png" alt="" style="width:320px" />
                                    </div>
                                </div>
                                <div class="border-top px-4 px-lg-6 py-4">
                                    <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                            <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                            </div>
                                            <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                        </div>
                                        <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="../../assets/img/generic/40.png" alt="" style="width:320px" />
                                    </div>
                                </div>
                                <div class="border-top px-4 px-lg-6 py-4">
                                    <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                            <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                            </div>
                                            <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                        </div>
                                        <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="../../assets/img/generic/40.png" alt="" style="width:320px" />
                                    </div>
                                </div>
                                <div class="border-top px-4 px-lg-6 py-4">
                                    <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                            <div>
                                                <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                                                    <p class="text-body-highlight mb-0 lh-1">All_images.zip</p>
                                                </div>
                                                <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>12.8 mb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></div>
                                            </div>
                                            <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top px-4 px-lg-6 py-4 ">
                                    <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                            <div>
                                                <div class="d-flex align-items-center mb-1 flex-wrap"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                                    <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                                </div>
                                                <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>123 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></div>
                                            </div>
                                            <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
                <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
                    <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
                            <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
                        </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
                    </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
                </div>
                <div class="offcanvas-body scrollbar px-card" id="themeController">
                    <div class="setting-panel-item mt-0">
                        <h5 class="setting-panel-item-title">Color Scheme</h5>
                        <div class="row gx-2">
                            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label></div>
                            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label></div>
                            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label></div>
                        </div>
                    </div>
                    <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="setting-panel-item-title mb-1">RTL </h5>
                            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
                        </div>
                        <p class="mb-0 text-body-tertiary">Change text direction</p>
                    </div>
                    <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
                            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
                        </div>
                        <p class="mb-0 text-body-tertiary">Toggle support chat</p>
                    </div>
                    <div class="setting-panel-item">
                        <h5 class="setting-panel-item-title">Navigation Type</h5>
                        <div class="row gx-2">
                            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/nav-combo-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png" alt="" /></span><span class="label-text"> Combo</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual nav</span></label></div>
                        </div>
                    </div>
                    <div class="setting-panel-item">
                        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                        <div class="row gx-2">
                            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
                        </div>
                    </div>
                    <div class="setting-panel-item">
                        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                        <div class="row gx-2">
                            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label></div>
                        </div>
                    </div>
                    <div class="setting-panel-item">
                        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                        <div class="row gx-2">
                            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label></div>
                            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
                        </div>
                    </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
                </div>
                </a>





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
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../assets/js/project-details.js"></script>




    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>