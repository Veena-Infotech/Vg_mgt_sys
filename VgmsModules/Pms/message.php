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
    <title>Support System</title>

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
        <div class="content pb-10 d-flex justify-content-between">

            <!-- LEFT PANEL: CHAT LIST -->
            <div class="card bg-body-emphasis me-2 d-flex flex-column" style="width: 450px; height: 80vh;">
                <!-- Header -->
                <div class="card-header d-flex justify-content-between align-items-center px-3 py-2 border-bottom border-translucent">
                    <h5 class="mb-0">Chats</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-link p-0"><i class="fa-solid fa-pen fs-8"></i></button>
                        <button class="btn btn-link p-0"><i class="fa-solid fa-bars fs-8"></i></button>
                    </div>
                </div>

                <!-- Search -->
                <div class="p-3 border-bottom border-translucent">
                    <input class="form-control bg-body-secondary border-0 rounded-pill px-3 fs-9" type="text" placeholder="Search or start a new chat">
                </div>

                <!-- Scrollable Chat List -->
                <div class="list-group list-group-flush scrollbar" style="flex: 1;">
                    <!-- Repeat this block for each chat -->
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action px-3 py-2 d-flex align-items-center gap-2 border-0">
                        <div class="avatar avatar-lg rounded-circle overflow-hidden bg-body-secondary d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-muted fs-7"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex justify-content-between">
                                <strong class="text-body-emphasis">VEENA INFOTECH</strong>
                                <small class="text-body-secondary">28-04-2025</small>
                            </div>
                            <p class="mb-0 text-body-secondary fs-9">Aakash sir: Hello Interns...</p>
                        </div>
                    </a>

                </div>
            </div>

            <!-- RIGHT PANEL: CHAT MESSAGES -->
            <div class="card bg-body-emphasis d-flex flex-column" style="height: 80vh; width: 100%;">
                <!-- Header -->
                <div class="card-header d-flex justify-content-between align-items-center px-4 py-3 border-bottom border-translucent">
                    <h5 class="mb-0 d-flex align-items-center gap-2">
                        Chat With Your Project Manager
                        <span class="fa-solid fa-circle text-success fs-11"></span>
                    </h5>
                    <div class="btn-reveal-trigger">
                        <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fas fa-ellipsis-h text-body"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown">
                            <a class="dropdown-item" href="#!">Request a callback</a>
                            <a class="dropdown-item" href="#!">Search in chat</a>
                            <a class="dropdown-item" href="#!">Show history</a>
                            <a class="dropdown-item" href="#!">Report to Admin</a>
                            <a class="dropdown-item btn-support-chat" href="#!">Close Support</a>
                        </div>
                    </div>
                </div>

                <!-- Scrollable Chat Body -->
                <div class="card-body chat d-flex flex-column p-0" style="height: 100vh;">
                    <!-- Sticky Header -->
                    <div class="text-center py-3" style="position: sticky; top: 0; z-index: 10;">
                        <div class="avatar avatar-3xl status-online">
                            <img class="rounded-circle border border-3 border-light-subtle" src="../../assets/img/team/30.webp" alt="" />
                        </div>
                        <h5 class="mt-2 mb-3">Eric</h5>
                        <p class="text-center text-body-emphasis mb-0">
                            Ask us anything – we’ll get back to you here or by email within 24 hours.
                        </p>
                    </div>
                    <div class="overflow-y-auto px-4 py-3 scrollbar" style="flex: 1; max-height: 350px; overflow-y: auto;">

                        <!-- Messages -->
                        <div class="overflow-y-auto px-4 py-3" style="flex: 1;">
                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- User Message -->
                            <div class="d-flex justify-content-end mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- Support Reply -->
                            <div class="d-flex justify-content-start mt-2">
                                <a class="bg-body-hover border border-primary d-inline-flex align-items-center text-decoration-none p-2 px-3 rounded-pill" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can help you with that!</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>

                            <!-- You can repeat the above two blocks for each new message -->
                        </div>

                    </div>
                    <!-- Chat Input -->
                    <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3" style="margin-top: -3%;">
                        <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4">
                            <input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message" />
                            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos">
                                <span class="fa-solid fa-image"></span>
                            </label>
                            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
                            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment">
                                <span class="fa-solid fa-paperclip"></span>
                            </label>
                            <input class="d-none" type="file" id="supportChatAttachment" />
                        </div>
                        <button class="btn p-0 border-0 send-btn">
                            <span class="fa-solid fa-paper-plane fs-9"></span>
                        </button>
                    </div>

                  


                </div>


            </div>

            <!-- Optional footer include -->
            <?php include("../../Components/footer.php"); ?>
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