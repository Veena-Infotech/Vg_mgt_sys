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
    <title>Starter code</title>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

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
            <h3 style="margin: 0;" class="mb-4">Add Follow ups</h3>


            <div id="tableExample3" data-list='{"valueNames":["type","details","startdate","time","contact","status","document"],"page":5,"pagination":true}'>
                <div class="search-box mb-3 mx-auto">
                    <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="sort border-top border-translucent ps-3" data-sort="name">Title</th>
                                <th class="sort border-top" data-sort="type">Type</th>
                                <th class="sort border-top" data-sort="details">Details</th>
                                <th class="sort border-top" data-sort="startdate">Start Date</th>
                                <th class="sort border-top" data-sort="time">Time</th>
                                <th class="sort border-top" data-sort="contact">Contact</th>
                                <th class="sort border-top" data-sort="status">Status</th>
                                <th class="sort border-top" data-sort="document">Document</th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <!-- Row 1 -->
                            <tr>
                                <td class="align-middle ps-3 name">Rowen</td>
                                <td class="align-middle email">rowen@example.com</td>
                                <td class="align-middle age">39</td>
                                <td class="align-middle">2025-05-12</td>
                                <td class="align-middle">10:00 AM</td>
                                <td class="align-middle">+91-9876543210</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-info">
                                        <span class="badge-label">In Progress</span>
                                    </span>
                                </td>
                                <td class="align-middle">Document1.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#addNoteModal">Add Note</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Add Note Modal -->
                            <div class="modal fade" id="addNoteModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animate-note-modal border border-300 shadow">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-primary" id="addNoteModalLabel">Add Note</h5>
                                            <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="noteInput" class="form-label fw-bold">Note</label>
                                                    <textarea class="form-control" id="noteInput" rows="4" placeholder="Write your note here..."></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button">Save Note</button>
                                            <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Row 2 -->
                            <tr>
                                <td class="align-middle ps-3 name">Anna Smith</td>
                                <td class="align-middle email">anna.smith@example.com</td>
                                <td class="align-middle age">28</td>
                                <td class="align-middle">2025-06-20</td>
                                <td class="align-middle">3:30 PM</td>
                                <td class="align-middle">+91-8765432109</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-warning">
                                        <span class="badge-label">Pending</span>
                                    </span>
                                </td>
                                <td class="align-middle">TaskDoc.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td class="align-middle ps-3 name">Michael Jordan</td>
                                <td class="align-middle email">mjordan@example.com</td>
                                <td class="align-middle age">55</td>
                                <td class="align-middle">2025-07-15</td>
                                <td class="align-middle">9:00 AM</td>
                                <td class="align-middle">+91-9654321098</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-danger">
                                        <span class="badge-label">Delayed</span>
                                    </span>
                                </td>
                                <td class="align-middle">ReportDoc.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td class="align-middle ps-3 name">LeBron James</td>
                                <td class="align-middle email">lebron.james@example.com</td>
                                <td class="align-middle age">40</td>
                                <td class="align-middle">2025-08-10</td>
                                <td class="align-middle">10:30 AM</td>
                                <td class="align-middle">+91-9876543210</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-success">
                                        <span class="badge-label">On Time</span>
                                    </span>
                                </td>
                                <td class="align-middle">Presentation.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <td class="align-middle ps-3 name">Kobe Bryant</td>
                                <td class="align-middle email">kbrant@example.com</td>
                                <td class="align-middle age">42</td>
                                <td class="align-middle">2025-08-12</td>
                                <td class="align-middle">11:00 AM</td>
                                <td class="align-middle">+91-9333221100</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-warning">
                                        <span class="badge-label">Pending</span>
                                    </span>
                                </td>
                                <td class="align-middle">SalesReport.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr>
                                <td class="align-middle ps-3 name">Serena Williams</td>
                                <td class="align-middle email">serena@example.com</td>
                                <td class="align-middle age">43</td>
                                <td class="align-middle">2025-09-02</td>
                                <td class="align-middle">1:00 PM</td>
                                <td class="align-middle">+91-9123456789</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-success">
                                        <span class="badge-label">On Time</span>
                                    </span>
                                </td>
                                <td class="align-middle">Contract.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 7 -->
                            <tr>
                                <td class="align-middle ps-3 name">Tom Brady</td>
                                <td class="align-middle email">tbrady@example.com</td>
                                <td class="align-middle age">46</td>
                                <td class="align-middle">2025-09-05</td>
                                <td class="align-middle">3:00 PM</td>
                                <td class="align-middle">+91-9283746574</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-danger">
                                        <span class="badge-label">Delayed</span>
                                    </span>
                                </td>
                                <td class="align-middle">FinalReport.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 8 -->
                            <tr>
                                <td class="align-middle ps-3 name">Usain Bolt</td>
                                <td class="align-middle email">usain.bolt@example.com</td>
                                <td class="align-middle age">38</td>
                                <td class="align-middle">2025-09-10</td>
                                <td class="align-middle">4:30 PM</td>
                                <td class="align-middle">+91-9988776655</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-warning">
                                        <span class="badge-label">Pending</span>
                                    </span>
                                </td>
                                <td class="align-middle">EventDetails.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 9 -->
                            <tr>
                                <td class="align-middle ps-3 name">Roger Federer</td>
                                <td class="align-middle email">roger.federer@example.com</td>
                                <td class="align-middle age">42</td>
                                <td class="align-middle">2025-09-12</td>
                                <td class="align-middle">5:00 PM</td>
                                <td class="align-middle">+91-9345678901</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-success">
                                        <span class="badge-label">On Time</span>
                                    </span>
                                </td>
                                <td class="align-middle">MatchSchedule.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 10 -->
                            <tr>
                                <td class="align-middle ps-3 name">Neymar Jr.</td>
                                <td class="align-middle email">neymar.jr@example.com</td>
                                <td class="align-middle age">32</td>
                                <td class="align-middle">2025-09-15</td>
                                <td class="align-middle">6:00 PM</td>
                                <td class="align-middle">+91-9192938495</td>
                                <td class="align-middle">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-danger">
                                        <span class="badge-label">Delayed</span>
                                    </span>
                                </td>
                                <td class="align-middle">MatchReport.pdf</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- Button and Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#followUpModal">
                        Create Follow-up
                    </button>

                    <div class="d-flex">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="followUpModal" tabindex="-1" aria-labelledby="followUpModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content bg-dark text-white">
                            <div class="modal-header">
                                <h5 class="modal-title" id="followUpModalLabel">Create Follow-up</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <!-- Title -->
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter title" />
                                    </div>

                                    <!-- Type Radio -->
                                    <div class="mb-3">
                                        <label class="form-label d-block">Type</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="society" value="Society" checked>
                                            <label class="form-check-label" for="society">Society</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="lead" value="Lead">
                                            <label class="form-check-label" for="lead">Lead</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="landlord" value="Landlord">
                                            <label class="form-check-label" for="landlord">Land Lord</label>
                                        </div>
                                    </div>

                                    <!-- Dropdowns Row -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Select Society</label>
                                            <select class="form-select">
                                                <option selected>Select society</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Society Type</label>
                                            <select class="form-select">
                                                <option selected>Select society type</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Date & Time -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Time</label>
                                            <input type="time" class="form-control" />
                                        </div>
                                    </div>

                                    <!-- Mode & Contact Person -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Mode</label>
                                            <select class="form-select">
                                                <option selected>Select Mode</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Contact Person Name</label>
                                            <input type="text" class="form-control" placeholder="Contact name" />
                                        </div>
                                    </div>

                                    <!-- Mobile & Email -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Mobile No.</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile no" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Enter email" />
                                        </div>
                                    </div>

                                    <!-- Follow-up Details -->
                                    <div class="mb-3">
                                        <label class="form-label">Follow-up Details</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter details here..."></textarea>
                                    </div>

                                    <!-- File Upload -->
                                    <div class="mb-3">
                                        <label class="form-label">Upload Documents</label>
                                        <input type="file" class="form-control" />
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create Followup</button>
                                    </div>
                                </form>
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


    <!-- GSAP Animation Script -->
    <script>
        const modal = document.getElementById('addNoteModal');
        const modalContent = modal.querySelector('.animate-note-modal');

        modal.addEventListener('show.bs.modal', () => {
            gsap.fromTo(modalContent, {
                opacity: 0,
                y: -50,
                scale: 0.9
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.4,
                ease: 'power2.out'
            });
        });

        modal.addEventListener('hide.bs.modal', () => {
            gsap.to(modalContent, {
                opacity: 0,
                y: -30,
                scale: 0.9,
                duration: 0.3,
                ease: 'power2.in'
            });
        });
    </script>

    <!-- JS to toggle form -->
    <script>
        function toggleForm() {
            const form = document.getElementById('myForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>


    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>