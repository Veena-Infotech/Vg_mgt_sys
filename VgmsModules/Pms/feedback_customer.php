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
    <title>Feed Back</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
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
            <div class="content" style="margin-top: -7%;">

                <div class="row gx-6 gy-3 mb-4 align-items-center">
                    <div class="col-auto">
                        <h2 class="mb-0">Feed Back</h2>
                    </div>
                    
            <hr >
                    <!-- <div class="col-auto"><a class="btn btn-primary px-5" href="create-new.html"><i
                                class="fa-solid fa-plus me-2"></i>Add new project</a></div> -->
                </div>
                <div class="row justify-content-between align-items-end mb-4 g-3">
                    <div class="col-12 col-sm-auto">
                        <ul class="nav nav-links mx-n2">
                            <li class="nav-item"><a class="nav-link px-2 py-1 active" aria-current="page"
                                    href="#"><span>All</span><span
                                        class="text-body-tertiary fw-semibold">(32)</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Ongoing</span><span
                                        class="text-body-tertiary fw-semibold">(14)</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Cancelled</span><span
                                        class="text-body-tertiary fw-semibold">(2)</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Finished</span><span
                                        class="text-body-tertiary fw-semibold">(14)</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Postponed</span><span
                                        class="text-body-tertiary fw-semibold">(2)</span></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <div class="d-flex align-items-center">
                            <div class="search-box me-3">
                                <form class="position-relative"><input class="form-control search-input search"
                                        type="search" placeholder="Search projects" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                            </div>
                                
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
                    <div class="col">
                        <div class="card h-100 hover-actions-trigger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Project Doughnut Dungeon</h4>
                                    <div class="hover-actions top-0 end-0 mt-4 me-4"><button
                                            class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal"
                                            data-bs-target="#projectsCardViewModal"><span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                                </div><span
                                    class="badge badge-phoenix fs-10 mb-4 badge-phoenix-success">completed</span>
                                <div class="d-flex align-items-center mb-2"><span
                                        class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                            class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                                </div>
                                <div class="d-flex align-items-center mb-4"><span
                                        class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 lh-1">Budget : <span
                                            class="ms-1 text-body-emphasis">8,742$</span></p>
                                </div>
                                <!-- <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div> -->
                                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 fw-bold fs-9">Started :<span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov.
                                            2020</span></p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <p class="mb-0 fw-bold fs-9">Deadline : <span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May
                                            2028</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-actions-trigger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Water resistant mosquito killer gun
                                    </h4>
                                    <div class="hover-actions top-0 end-0 mt-4 me-4"><button
                                            class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal"
                                            data-bs-target="#projectsCardViewModal"><span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                                </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-warning">inactive</span>
                                <div class="d-flex align-items-center mb-2"><span
                                        class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                            class="fw-semibold text-primary ms-1"> Monsters.Inc</span></p>
                                </div>
                                <div class="d-flex align-items-center mb-4"><span
                                        class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 lh-1">Budget : <span
                                            class="ms-1 text-body-emphasis">10,500$</span></p>
                                </div>
                                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 fw-bold fs-9">Started :<span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 8th Mar.
                                            2021</span></p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <p class="mb-0 fw-bold fs-9">Deadline : <span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 15th Sept.
                                            2022</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-actions-trigger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Execution of Micky the foul mouse
                                    </h4>
                                    <div class="hover-actions top-0 end-0 mt-4 me-4"><button
                                            class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal"
                                            data-bs-target="#projectsCardViewModal"><span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                                </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-primary">ongoing</span>
                                <div class="d-flex align-items-center mb-2"><span
                                        class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                            class="fw-semibold text-primary ms-1"> Dashney Peeps Corp.</span></p>
                                </div>
                                <div class="d-flex align-items-center mb-4"><span
                                        class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 lh-1">Budget : <span
                                            class="ms-1 text-body-emphasis">18,976$</span></p>
                                </div>
                                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 fw-bold fs-9">Started :<span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov.
                                            2020</span></p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <p class="mb-0 fw-bold fs-9">Deadline : <span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 23rd Sept.
                                            2026</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-actions-trigger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Harnessing stupidity from Jerry</h4>
                                    <div class="hover-actions top-0 end-0 mt-4 me-4"><button
                                            class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal"
                                            data-bs-target="#projectsCardViewModal"><span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                                </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-danger">Critical</span>
                                <div class="d-flex align-items-center mb-2"><span
                                        class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                            class="fw-semibold text-primary ms-1"> Gobble the Bleep Inc</span></p>
                                </div>
                                <div class="d-flex align-items-center mb-4"><span
                                        class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 lh-1">Budget : <span
                                            class="ms-1 text-body-emphasis">8,742$</span></p>
                                </div>
                                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 fw-bold fs-9">Started :<span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 1st Jan.
                                            2016</span></p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <p class="mb-0 fw-bold fs-9">Deadline : <span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 4th Apr.
                                            2022</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-actions-trigger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Making the Butterflies shoot each
                                        other dead</h4>
                                    <div class="hover-actions top-0 end-0 mt-4 me-4"><button
                                            class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal"
                                            data-bs-target="#projectsCardViewModal"><span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                                </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-primary">ongoing</span>
                                <div class="d-flex align-items-center mb-2"><span
                                        class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                            class="fw-semibold text-primary ms-1"> Monsters.Inc</span></p>
                                </div>
                                <div class="d-flex align-items-center mb-4"><span
                                        class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 lh-1">Budget : <span
                                            class="ms-1 text-body-emphasis">35,000$</span></p>
                                </div>
                                
                                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 fw-bold fs-9">Started :<span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 24th Dec.
                                            2019</span></p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <p class="mb-0 fw-bold fs-9">Deadline : <span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 15th Jan.
                                            2024</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-actions-trigger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">The chewing gum attack</h4>
                                    <div class="hover-actions top-0 end-0 mt-4 me-4"><button
                                            class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal"
                                            data-bs-target="#projectsCardViewModal"><span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                                </div><span
                                    class="badge badge-phoenix fs-10 mb-4 badge-phoenix-secondary">Cancelled</span>
                                <div class="d-flex align-items-center mb-2"><span
                                        class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                            class="fw-semibold text-primary ms-1"> DablewGuys Studio</span></p>
                                </div>
                                <div class="d-flex align-items-center mb-4"><span
                                        class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                    <p class="fw-bold mb-0 lh-1">Budget : <span
                                            class="ms-1 text-body-emphasis">250$</span></p>
                                </div>
                                <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 fw-bold fs-9">Started :<span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 4th Aug.
                                            2018</span></p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <p class="mb-0 fw-bold fs-9">Deadline : <span
                                            class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 22nd Oct.
                                            2023</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="projectsCardViewModal" tabindex="-1" aria-labelledby="projectsCardViewModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content overflow-hidden">
                            <div class="modal-header position-relative p-0"><input class="d-none" id="projectCoverInput"
                                    type="file" /><label class="position-absolute top-0 start-0"
                                    for="projectCoverInput"><span
                                        class="project-modal-btn d-inline-block bg-body-emphasis dark__text-gray-100 rounded-2 py-2 px-3 fs-9 fw-bolder mt-3 ms-3 cursor-pointer"><span
                                            class="fa-solid fa-image me-1"></span>Change</span></label><button
                                    class="btn btn-circle project-modal-btn position-absolute end-0 top-0 mt-3 me-3 bg-body-emphasis"
                                    data-bs-dismiss="modal"><span
                                        class="fa-solid fa-xmark text-body dark__text-gray-100"></span></button><img
                                    class="w-100" src="../../assets/img/generic/43.png" alt=""
                                    style="max-height: 200px;min-height: 150px;" /></div>
                            <div class="modal-body p-5 px-md-6">
                                <div class="row g-5">
                                    <div class="col-12 col-md-9">
                                        <div class="mb-4">
                                            <h3 class="fw-bolder lh-sm">It was popularised in the 1960s with the release
                                                of Letraset</h3>
                                            <p class="text-body-highlight fw-semibold mb-0">In list<a
                                                    class="ms-1 fw-bold" href="#!">Review </a></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4">
                                            <p class="text-body-highlight fw-700 mb-0 me-2">64%</p>
                                            <div class="progress flex-1">
                                                <div class="progress-bar rounded-3" role="progressbar"
                                                    style="width: 64%"></div>
                                            </div>
                                        </div>
                                        <h6 class="text-body-secondary mb-2">Due date</h6>
                                        <div class="flatpickr-input-container flatpickr-input-sm w-50 mb-3"><input
                                                class="form-control form-control-sm ps-6 datetimepicker" id="datepicker"
                                                type="text"
                                                data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span
                                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary mt-1"></span>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="text-body-secondary mb-2">Assignees</h6>
                                            <div class="d-flex">
                                                <div class="dropdown"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-m  me-1">
                                                            <img class="rounded-circle "
                                                                src="../../assets/img/team/60.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../../assets/img/team/60.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Emma Watson</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                                <div class="dropdown"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-m  me-1">
                                                            <img class="rounded-circle "
                                                                src="../../assets/img/team/58.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../../assets/img/team/58.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Igor Borvibson</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                                <div class="dropdown"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-m  me-1">
                                                            <img class="rounded-circle "
                                                                src="../../assets/img/team/59.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../../assets/img/team/59.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Katerina Karenin</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                                <div class="dropdown"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-m  me-1">
                                                            <img class="rounded-circle "
                                                                src="../../assets/img/team/34.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../../assets/img/team/34.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Jean Renoir</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div><button class="btn btn-sm btn-phoenix-secondary btn-circle"><span
                                                        class="fa-solid fa-plus"></span></button>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <h6 class="text-body-secondary mb-2">Labels</h6>
                                            <div class="d-flex align-items-center"><span
                                                    class="badge badge-phoenix badge-phoenix-info fs-10 me-2">INFO</span><span
                                                    class="badge badge-phoenix badge-phoenix-warning fs-10 me-2">URGENT</span><span
                                                    class="badge badge-phoenix badge-phoenix-success fs-10 me-2">DONE</span><a
                                                    class="text-body fw-bolder fs-9 lh-1 text-decoration-none"
                                                    href="#!"> <span class="fa-solid fa-plus me-1"></span>Add
                                                    another</a></div>
                                        </div>
                                        <div class="mb-6">
                                            <div class="d-flex align-items-center mb-2">
                                                <h4 class="me-3">Description</h4><button class="btn btn-link p-0"><span
                                                        class="fa-solid fa-pen"></span></button>
                                            </div>
                                            <p class="text-body-highlight">The female circus horse-rider is a recurring
                                                subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard
                                                invited Chagall to make a project based on the circus. They visited
                                                Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall
                                                his private box seats. Chagall completed 19 gouaches...<a
                                                    class="fw-semibold" href="#!">see more </a></p>
                                        </div>
                                        <textarea class="form-control form-control mb-3" rows="3"
                                            placeholder="Add comment"></textarea>
                                        <div
                                            class="d-flex flex-between-center pb-3 border-bottom border-translucent mb-6">
                                            <div class="d-flex"><button class="btn btn-sm ps-0 pe-2 py-0"><span
                                                        class="fa-solid fa-image fs-8"></span></button><button
                                                    class="btn btn-sm px-2 py-0"><span
                                                        class="fa-solid fa-calendar-days fs-8"></span></button><button
                                                    class="btn btn-sm px-2 py-0"><span
                                                        class="fa-solid fa-location-dot fs-8"></span></button><button
                                                    class="btn btn-sm px-2 py-0"><span
                                                        class="fa-solid fa-tag fs-8"></span></button></div><button
                                                class="btn btn-sm btn-primary px-6">Comment</button>
                                        </div>







                                        <div class="mb-3">
                                            <h4 class="mb-4">Top 5 tasks</h4>

                                            <div
                                                class="border-top py-3 row gx-0 justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-8 fw-semibold">Daily meeting with team members
                                                        </p>
                                                        <div class="d-flex align-items-center">
                                                            <span
                                                                class="badge badge-phoenix fs-10 me-2 badge-phoenix-info">CLOSE</span>
                                                            <p class="text-body-tertiary fs-10 mb-0 me-2">1 Nov, 2021
                                                            </p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-0">12:00 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1 text-body-secondary fs-10">Assigned by: Admin</p>
                                                    <p class="mb-0 text-body fs-10">Team sync-up to review yesterday’s
                                                        progress.</p>
                                                </div>
                                            </div>

                                            <div
                                                class="border-top py-3 row gx-0 justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-8 fw-semibold">Daily Standup Meetings</p>
                                                        <div class="d-flex align-items-center">
                                                            <span
                                                                class="badge badge-phoenix fs-10 me-2 badge-phoenix-info">CLOSE</span>
                                                            <p class="text-body-tertiary fs-10 mb-0 me-2">13 Nov, 2021
                                                            </p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-0">10:00 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1 text-body-secondary fs-10">Assigned by: Team Lead</p>
                                                    <p class="mb-0 text-body fs-10">Standup to track daily deliverables.
                                                    </p>
                                                </div>
                                            </div>

                                            <div
                                                class="border-top py-3 row gx-0 justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-8 fw-semibold">Procrastinate for a month</p>
                                                        <div class="d-flex align-items-center">
                                                            <span
                                                                class="badge badge-phoenix fs-10 me-2 badge-phoenix-info">CLOSE</span>
                                                            <p class="text-body-tertiary fs-10 mb-0 me-2">12 Nov, 2021
                                                            </p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-0">12:00 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1 text-body-secondary fs-10">Assigned by: Project
                                                        Manager</p>
                                                    <p class="mb-0 text-body fs-10">Reflect and refine sprint goals.</p>
                                                </div>
                                            </div>

                                            <div
                                                class="border-top py-3 row gx-0 justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-8 fw-semibold">Warming up</p>
                                                        <div class="d-flex align-items-center">
                                                            <span
                                                                class="badge badge-phoenix fs-10 me-2 badge-phoenix-info">CLOSE</span>
                                                            <p class="text-body-tertiary fs-10 mb-0 me-2">12 Nov, 2021
                                                            </p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-0">12:00 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1 text-body-secondary fs-10">Assigned by: QA Lead</p>
                                                    <p class="mb-0 text-body fs-10">Prepare test environments and tools.
                                                    </p>
                                                </div>
                                            </div>

                                            <div
                                                class="border-top border-bottom py-3 row gx-0 justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0 fs-8 fw-semibold">Make ready for release</p>
                                                        <div class="d-flex align-items-center">
                                                            <span
                                                                class="badge badge-phoenix fs-10 me-2 badge-phoenix-info">CLOSE</span>
                                                            <p class="text-body-tertiary fs-10 mb-0 me-2">20 Nov, 2021
                                                            </p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-0">1:00 AM</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1 text-body-secondary fs-10">Assigned by: Deployment
                                                        Team</p>
                                                    <p class="mb-0 text-body fs-10">Finalize packaging and deployment
                                                        files.</p>
                                                </div>
                                            </div>

                                            <a href="tasklist_kanban.php" class="fw-bold fs-9 mt-3 d-inline-block">
                                                <span class="fas fa-list me-1"></span>View all tasks
                                            </a>
                                        </div>

                                        <br>














                                        <h4 class="mb-3">Files</h4>
                                        <div class="border-top pt-3 pb-4">
                                            <div class="me-n3">
                                                <div class="d-flex flex-between-center">
                                                    <div class="d-flex mb-1"><span
                                                            class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                                    </div><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Edit</a><a
                                                            class="dropdown-item text-danger" href="#!">Delete</a><a
                                                            class="dropdown-item" href="#!">Download</a><a
                                                            class="dropdown-item" href="#!">Report abuse</a></div>
                                                </div>
                                                <p class="fs-9 text-body-tertiary mb-2"><span>768 kb</span><span
                                                        class="text-body-quaternary mx-1">| </span><a
                                                        href="#!">Shantinan Mekalan </a><span
                                                        class="text-body-quaternary mx-1">| </span><span
                                                        class="text-nowrap">21st Dec, 12:56 PM</span></p><img
                                                    class="rounded-2" src="../../assets/img/generic/40.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="border-top py-3">
                                            <div class="me-n3">
                                                <div class="d-flex flex-between-center">
                                                    <div class="d-flex mb-1"><span
                                                            class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                                    </div><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Edit</a><a
                                                            class="dropdown-item text-danger" href="#!">Delete</a><a
                                                            class="dropdown-item" href="#!">Download</a><a
                                                            class="dropdown-item" href="#!">Report abuse</a></div>
                                                </div>
                                                <p class="fs-9 text-body-tertiary mb-1"><span>12.8 mb</span><span
                                                        class="text-body-quaternary mx-1">| </span><a href="#!">Yves
                                                        Tanguy </a><span class="text-body-quaternary mx-1">|
                                                    </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="border-top border-bottom py-3 mb-3">
                                            <div class="me-n3">
                                                <div class="d-flex flex-between-center">
                                                    <div class="d-flex align-items-center mb-1"><span
                                                            class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                                        <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                                    </div><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Edit</a><a
                                                            class="dropdown-item text-danger" href="#!">Delete</a><a
                                                            class="dropdown-item" href="#!">Download</a><a
                                                            class="dropdown-item" href="#!">Report abuse</a></div>
                                                </div>
                                                <p class="fs-9 text-body-tertiary mb-1"><span>123 kb</span><span
                                                        class="text-body-quaternary mx-1">|</span><a href="#!">Shantinan
                                                        Mekalan</a><span class="text-body-quaternary mx-1">|</span><span
                                                        class="text-nowrap">12th Dec, 12:56 PM</span></p>
                                            </div>
                                        </div><label class="btn btn-link p-0" for="customFile"><span
                                                class="fas fa-plus me-1"></span>Add file(s)</label><input class="d-none"
                                            id="customFile" type="file" />
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <h5 class="text-body-secondary mb-3">Add to card</h5>
                                        <div class="mb-6"><button
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span
                                                    class="me-2 fa-solid fa-user-plus"></span>Assignee</button><button
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span
                                                    class="me-2 fa-solid fa-tag"></span>Labels</button><button
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span
                                                    class="me-2 fa-solid fa-paperclip"></span>Attachments</button><button
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span
                                                    class="me-2 fa-solid fa-square-check"></span>Checklist</button><button
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span
                                                    class="me-2 fa-solid fa-calendar-days"></span>Dates</button></div>
                                        <h5 class="text-body-secondary mb-3">Actions</h5>
                                        <div class="mb-6">
                                            <a href="pinboard.php"
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100">
                                                <span class="me-2 fa-solid fa-arrow-right"></span>View Pinboard
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100">
                                                <span class="me-2 fa-solid fa-copy"></span>Copy
                                            </a>

                                            <a href="#"
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100">
                                                <span class="me-2 fa-solid fa-trash"></span>Remove
                                            </a>

                                            <a href="#"
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100">
                                                <span class="me-2 fa-solid fa-box-archive"></span>Archive
                                            </a>

                                            <a href="#"
                                                class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100">
                                                <span class="me-2 fa-solid fa-share-nodes"></span>Share
                                            </a>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
                data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
                <div class="modal-dialog">
                    <div class="modal-content mt-15 rounded-pill">
                        <div class="modal-body p-0">
                            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                                style="width: auto;">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                        type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                    data-bs-dismiss="search"><button class="btn btn-link p-0"
                                        aria-label="Close"></button></div>
                                <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                                    <div class="scrollbar-overlay" style="max-height: 30rem;">
                                        <div class="list pb-3">
                                            <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                                                    class="text-body-quaternary">results</span></h6>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Recently Searched </h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-solid fa-clock-rotate-left"
                                                                data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-clock-rotate-left"
                                                                data-fa-transform="shrink-2"></span> MacBook Air - 13″
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Products</h6>
                                            <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="file-thumbnail me-2"><img
                                                            class="h-100 w-100 object-fit-cover rounded-3"
                                                            src="../../assets/img/products/60x60/3.png" alt="" /></div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″
                                                        </h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                                class="fw-medium text-body-tertiary text-opactity-85">8GB
                                                                Memory - 1.6GHz - 128GB Storage</span></p>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="file-thumbnail me-2"><img class="img-fluid"
                                                            src="../../assets/img/products/60x60/3.png" alt="" /></div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″
                                                        </h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                                class="fw-medium text-body-tertiary text-opactity-85">30
                                                                Sep at 12:30 PM</span></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Quick Links</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-solid fa-link text-body"
                                                                data-fa-transform="shrink-2"></span> Support MacBook
                                                            House</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-link text-body"
                                                                data-fa-transform="shrink-2"></span> Store MacBook″
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Files</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-solid fa-file-zipper text-body"
                                                                data-fa-transform="shrink-2"></span> Library MacBook
                                                            folder.rar</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-file-lines text-body"
                                                                data-fa-transform="shrink-2"></span> Feature MacBook
                                                            extensions.txt</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-image text-body"
                                                                data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Members</h6>
                                            <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../../pages/members.html">
                                                    <div class="avatar avatar-l status-online  me-2 text-body">
                                                        <img class="rounded-circle "
                                                            src="../../assets/img/team/40x40/10.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it
                                                        </p>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../../pages/members.html">
                                                    <div class="avatar avatar-l  me-2 text-body">
                                                        <img class="rounded-circle "
                                                            src="../../assets/img/team/40x40/12.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary">
                                                            smith@technext.it</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Related Searches</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-brands fa-firefox-browser text-body"
                                                                data-fa-transform="shrink-2"></span> Search in the Web
                                                            MacBook</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-brands fa-chrome text-body"
                                                                data-fa-transform="shrink-2"></span> Store MacBook″
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include("../../Components/footer.php"); ?>
    </main>







    </main>


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
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/rater-js/index.js"></script>




    </script>




</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>