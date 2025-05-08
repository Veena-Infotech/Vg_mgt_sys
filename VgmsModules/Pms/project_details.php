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
    <style>
        .row.g-0 {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        /* LEFT content area: 2/3 width */
        .col-left {
            flex: 0 0 66.66%;
            max-width: 66.66%;
            padding: 1rem;
        }

        /* RIGHT activity panel: 1/3 width */
        .col-right {
            flex: 0 0 33.33%;
            max-width: 33.33%;
            padding: 1rem;
        }

        /* Responsive: stack on small screens */
        @media (max-width: 992px) {

            .col-left,
            .col-right {
                flex: 0 0 100%;
                max-width: 100%;
                padding: 1rem 0;
            }
        }

        .table-wrapper1 {
            height: 450px;
            /* or whatever height you want */
            overflow-y: auto;
            /* Allows vertical scrolling */
            overflow-x: hidden;
            /* Prevents horizontal scrolling */
            scrollbar-width: thin;
            scrollbar-color: #aaa #1c1c1c;
            /* Firefox styles */
        }

        /* For Chrome, Edge, and Safari */
        .table-wrapper1::-webkit-scrollbar {
            width: 8px;
            /* Vertical scrollbar width */
            height: 0;
            /* No horizontal scrollbar */
        }

        .table-wrapper1::-webkit-scrollbar-track {
            background: #1c1c1c;
        }

        .table-wrapper1::-webkit-scrollbar-thumb {
            background-color: #aaa;
            border-radius: 10px;
        }


        .table-wrapper {
            height: 550px;
            /* or whatever height you want */
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #aaa #1c1c1c;
            /* scrollbar thumb and track for Firefox */
        }

        /* For Chrome, Edge, and Safari */
        .table-wrapper::-webkit-scrollbar {
            width: 8px;
        }

        .table-wrapper::-webkit-scrollbar-track {
            background: #1c1c1c;
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background-color: #aaa;
            border-radius: 10px;
        }
    </style>

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
            <div class="container-fluid">
                <div class="row g-0">
                    <!-- Left Card Section -->
                    <div class="col-left">
                        <div class="col-12 col-xxl-8 px-0 bg-body" style="margin-top: -6%; margin-left:-6%;">
                            <div class="px-4 px-lg-6 pt-6 pb-9">
                                <div class="mb-5">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="text-body-emphasis fw-bolder mb-2">Retrieving Old Repos to Redirect to a new URL</h2>

                                        <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <span class="badge badge-phoenix badge-phoenix-primary">Ongoing<span class="ms-1 uil uil-stopwatch"></span></span>
                                </div>
                                <div class="row gx-0 gx-sm-5 gy-8 mb-8">
                                    <div class="row">
                                        <!-- Top: Project Info Section -->
                                        <div class="col-12 mb-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="badge bg-primary rounded-pill fs-10 px-3 py-1 me-2">
                                                    ONGOING <i class="fa-regular fa-clock ms-1"></i>
                                                </span>
                                            </div>

                                            <div class="row gx-0 gx-sm-7">
                                                <div class="col-12 col-sm-auto mb-4 mb-sm-0">
                                                    <table class="lh-sm mb-3">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="d-flex mb-2">
                                                                        <span class="fa-solid fa-earth-americas me-2 text-body-tertiary fs-9"></span>
                                                                        <h5 class="text-body mb-0">Public project</h5>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1">
                                                                    <div class="d-flex">
                                                                        <span class="fa-solid fa-user me-2 text-body-tertiary fs-9"></span>
                                                                        <h5 class="text-body mb-0 text-nowrap">Client :</h5>
                                                                    </div>
                                                                </td>
                                                                <td class="ps-1 py-1">
                                                                    <a class="fw-semibold d-block lh-sm" href="#!">Gobble the Bleep Inc</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1">
                                                                    <div class="d-flex">
                                                                        <span class="fa-regular fa-credit-card me-2 text-body-tertiary fs-9"></span>
                                                                        <h5 class="text-body mb-0 text-nowrap">Budget : </h5>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-bold ps-1 py-1 text-body-highlight">$8,742</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-12 col-sm-auto">
                                                    <table class="lh-sm mb-3">
                                                        <tbody>
                                                            <tr>
                                                                <td class="align-top py-1 text-body fw-bold">Started :</td>
                                                                <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">17th Nov, 2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1 text-body fw-bold">Deadline :</td>
                                                                <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">21st May, 2028</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1 text-body fw-bold">Progress :</td>
                                                                <td class="text-warning fw-semibold ps-3">80%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <span class="fa-solid fa-list-check me-2 text-body-tertiary fs-9"></span>
                                                <h5 class="text-body-emphasis mb-0 me-2">91 <span class="text-body fw-normal ms-2">tasks</span></h5>
                                                <a class="fw-bold fs-9 mt-1" href="#!">See tasks <span class="fa-solid fa-chevron-right me-1 fs-10"></span></a>
                                            </div>
                                        </div>

                                        <!-- Bottom: Chart Section -->
                                        <div class="col-12">
                                            <div class="row flex-between-center mb-3 g-3">
                                                <div class="col-auto">
                                                    <h4 class="text-body-emphasis mb-1">Task completed over time</h4>
                                                    <p class="text-body-tertiary mb-0">Hard works done across all projects</p>
                                                </div>
                                                <div class="col-8 col-sm-4">
                                                    <select class="form-select form-select-sm">
                                                        <option>Mar 1 - 31, 2022</option>
                                                        <option>Apr 1 - 30, 2022</option>
                                                        <option>May 1 - 31, 2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="echart-completed-task-chart" style="min-height: 200px; width: 100%"></div>
                                        </div>
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
                                <p class="text-body-secondary mb-4">The new redirection team is happy to announce that we’ve fixed all our unresponsive URLs and redirected them to new URLs. The tremendous assistance from our support team and the dev team, as well as that of the team lead’s, this team has made an impossible possible within a week. They didn’t stop for a moment, and we got our pages working again for all the valuable users. </p>
                                <p class="text-body-secondary mb-0">Join us in celebrating the massive success of data transferring and getting us a huge revenue by eating out. Free public viewing and a buffet is offered for the great team as well as for the other teams working with us. We’ll be checking out places for the best option available at hands and we’ll let you know the schedule once we decide on one.<a class="fw-semibold" href="#!">read more </a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-right" id="recentActivity">
                        <div class="row justify-content-end">
                            <div class="col-12 col-xxl-4 px-0 border-start-xxl border-top-sm">
                                <div class="bg-light dark__bg-gray-1100 h-100">

                                    <div class="p-4 p-lg-6 scrollbar ">
                                        <h3 class="text-body-highlight mb-4 fw-bold">Recent activity</h3>
                                        <hr>
                                        <div class="scroll table-wrapper1">
                                            <div class="timeline-vertical timeline-with-details ">
                                                <div class="timeline-item position-relative ">
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
                                    <hr>
                                    <div class="files list-group-flush scrollbar " style="flex: 1;">
                                        <div class="px-4 px-lg-6">
                                            <h4 class="mb-3">Files</h4>
                                        </div>
                                        <div class="scroll table-wrapper">
                                            <div class="border-top px-4 px-lg-6 py-4 ">
                                                <div class="me-n3">
                                                    <div class="d-flex flex-between-center">
                                                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                            <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                                        </div>
                                                        <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="../../assets/img/generic/40.png" alt="" />
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
                    </div>
                </div>
            </div>
            <div class="c" style="margin-top: 1%;">
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
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../assets/js/project-details.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        gsap.from(".col-left", {
            x: -300,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out",
        });

        gsap.from(".col-right", {
            x: 300,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out",
            delay: 0.2, // Delay the right panel to animate after the left one
        });
    </script>






    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>