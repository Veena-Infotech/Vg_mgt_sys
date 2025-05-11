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
    <title>List view Project details</title>

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
            <div class="mb-9">
                <div id="projectSummary" data-list='{"valueNames":["projectName","assignees","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
                    <div class="row mb-4 gx-6 gy-3 align-items-center">
                        <div class="col-auto">
                            <h2 class="mb-0">Projects<span class="fw-normal text-body-tertiary ms-3">(32)</span></h2>
                        </div>
                        <div class="col-auto"><a class="btn btn-primary px-5" href="create-new.html"><i class="fa-solid fa-plus me-2"></i>Add new project</a></div>
                    </div>
                    <?php
                         include '../PhpFiles/connection.php'; // DB connection

                        // Total projects count
                        $total_projects_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM tbl_project");
                        $total_projects = mysqli_fetch_assoc($total_projects_query)['total'];

                        // Get all statuses with count of projects
                        $status_query = mysqli_query($conn, "
                        SELECT s.id, s.status_name, COUNT(p.id) AS count 
                        FROM tbl_project_status s 
                        LEFT JOIN tbl_project p ON p.project_status = s.id 
                        GROUP BY s.id
                        ");

                        // Get current status from URL (e.g., ?status=On-Going)
                        $current_status = isset($_GET['status']) ? $_GET['status'] : '';

    
                    ?>
                    <div class="row g-3 justify-content-between align-items-end mb-4">
                        <div class="col-12 col-sm-auto">
                            <ul class="nav nav-links mx-n2">
                            <li class="nav-item">
                                <a class="nav-link px-2 py-1 <?= $current_status == '' ? 'active' : '' ?>" 
                                    href="viewproject_list.php">
                                    <span>All</span>
                                    <span class="text-body-tertiary fw-semibold">(<?= $total_projects ?>)</span>
                                </a>
                            </li>
                            <?php while ($row = mysqli_fetch_assoc($status_query)): ?>
                                <li class="nav-item">
                                    <a class="nav-link px-2 py-1 <?= $current_status == $row['status_name'] ? 'active' : '' ?>"
                                        href="viewproject_list.php?status=<?= urlencode($row['status_name']) ?>">
                                        <span><?= htmlspecialchars($row['status_name']) ?></span>
                                        <span class="text-body-tertiary fw-semibold">(<?= $row['count'] ?>)</span>
                                    </a>
                                </li>
<?php endwhile; ?>
                                
                            </ul>
                        </div>
                        <div class="col-12 col-sm-auto">
                            <div class="d-flex align-items-center">
                                <div class="search-box me-3">
                                    <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search" />
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                </div><a class="btn btn-phoenix-primary px-3 me-1 border-0 text-body" href="../../VgmsModules/pms/viewproject_list.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="List view"><span class="fa-solid fa-list fs-10"></span></a>
                                    <a class="btn btn-phoenix-primary px-3" href="../../VgmsModules/pms/viewproject_card.php" data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view"><svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z" fill="currentColor"></path>
                                        <path d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z" fill="currentColor"></path>
                                        <path d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z" fill="currentColor"></path>
                                        <path d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z" fill="currentColor"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar">
                        <table class="table fs-9 mb-0 border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="projectName" style="width:30%;">PROJECT NAME</th>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="assignees" style="width:10%;">ASSIGNEES</th>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                                    <th class="sort align-middle text-end" scope="col" data-sort="statuses" style="width:10%;">STATUS</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="project-list-table-body">
                               <?php
                                    include '../PhpFiles/connection.php';    // Database connection file

                                    // Step 1: Handle filter from URL
                                    $status_filter = '';
                                    if (isset($_GET['status']) && $_GET['status'] !== '') {
                                        $status = mysqli_real_escape_string($conn, $_GET['status']);
                                        $status_filter = "WHERE s.status_name = '$status'";
                                    }

                                    $sql = "
                                        SELECT
                                            p.id,
                                            p.project_title,
                                            p.project_start_date,
                                            p.project_end_date,
                                            s.bagde_color AS bagde_color,
                                            s.status_name AS project_status,
                                            COUNT(t.id) AS task_count
                                        FROM tbl_project p
                                        INNER JOIN tbl_project_status s ON p.project_status = s.id
                                        LEFT JOIN tbl_tasks t ON p.project_title = t.project_name
                                        $status_filter
                                        GROUP BY p.id
                                        ORDER BY p.project_start_date DESC
                                    ";
                                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<tr class="position-static">
                                        <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">' . htmlspecialchars($row['project_title']) . '</a></td>
                                        <td class="align-middle white-space-nowrap assignees ps-3 py-4">
                                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-s  rounded-circle">
                                                    <img class="rounded-circle " src="../../assets/img/team/34.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/34.webp" alt="" /></div>
                                                            <h6 class="text-white">Jean Renoir</h6>
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
                                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-s  rounded-circle">
                                                    <img class="rounded-circle " src="../../assets/img/team/59.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/59.webp" alt="" /></div>
                                                            <h6 class="text-white">Katerina Karenin</h6>
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
                                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-s  rounded-circle">
                                                    <img class="rounded-circle " src="../../assets/img/team/35.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/35.webp" alt="" /></div>
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
                                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <div class="avatar avatar-s  rounded-circle">
                                                    <img class="rounded-circle " src="../../assets/img/team/58.webp" alt="" />
                                                </div>
                                            </a>
                                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                <div class="position-relative">
                                                    <div class="bg-holder z-n1" style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                                    <!--/.bg-holder-->
                                                    <div class="p-3">
                                                        <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                                        <div class="text-center">
                                                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../../assets/img/team/58.webp" alt="" /></div>
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
                                            <div class="avatar avatar-s  rounded-circle">
                                                <div class="avatar-name rounded-circle "><span>+2</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                                        <p class="mb-0 fs-9 text-body">'. htmlspecialchars($row['project_start_date']) . '</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                                        <p class="mb-0 fs-9 text-body">'. htmlspecialchars($row['project_end_date']) .'</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                                        <p class="fw-bo text-body fs-9 mb-0">'. htmlspecialchars($row['task_count']) . '</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                        <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                                        <div class="progress" style="height:3px;">
                                            <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>';
$status = $row['bagde_color'];
$statusColumnHtml = ''; // Initialize

switch ($status) {
    case 'blue':
        $statusColumnHtml = '<td class="align-middle white-space-nowrap text-end statuses">
                                <span class="badge badge-phoenix fs-10 badge-phoenix-success">'
                                . htmlspecialchars($row['project_status']) .
                                '</span>
                             </td>';
        break;
    case 'yellow':
        $statusColumnHtml = '<td class="align-middle white-space-nowrap text-end statuses">
                                <span class="badge badge-phoenix fs-10 badge-phoenix-info">'
                                . htmlspecialchars($row['project_status']) .
                                '</span>
                             </td>';
        break;
    case 'green':
        $statusColumnHtml = '<td class="align-middle white-space-nowrap text-end statuses">
                                <span class="badge badge-phoenix fs-10 badge-phoenix-success">'
                                . htmlspecialchars($row['project_status']) .
                                '</span>
                             </td>';
        break;
    case 'red':
        $statusColumnHtml = '<td class="align-middle white-space-nowrap text-end statuses">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-danger">'
                                    . htmlspecialchars($row['project_status']) .
                                    '</span>
                                 </td>';
        break;
    case 'black':
        $statusColumnHtml = '<td class="align-middle white-space-nowrap text-end statuses">
                                        <span class="badge badge-phoenix fs-10 badge-phoenix-warning">'
                                        . htmlspecialchars($row['project_status']) .
                                        '</span>
                                     </td>';
        break;
    default:
        $statusColumnHtml = '<td class="align-middle white-space-nowrap text-end statuses">
                                <span class="badge badge-phoenix fs-10 badge-phoenix-secondary">'
                                . htmlspecialchars($row['project_status']) .
                                '</span>
                             </td>';
        break;
}

// Later in your row output:
echo $statusColumnHtml;

                                    echo '<td class="align-middle text-end white-space-nowrap pe-0 action">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="project_details.php?project_id=' . $row['id'] . '">View</a><a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>';
                                    }
                                } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs-9 border-bottom border-translucent">
                        <div class="d-flex">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </div>
                        <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>
           <!-- Footer -->
       <?php include("../../Components/footer.php"); ?>
        </div>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15 rounded-pill">
                    <div class="modal-body p-0">
                        <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                                <div class="scrollbar-overlay" style="max-height: 30rem;">
                                    <div class="list pb-3">
                                        <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                                        <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center" href="../e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                                        <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                                        <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                                                <div class="avatar avatar-l status-online  me-2 text-body">
                                                    <img class="rounded-circle " src="../../assets/img/team/40x40/10.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                                                <div class="avatar avatar-l  me-2 text-body">
                                                    <img class="rounded-circle " src="../../assets/img/team/40x40/12.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                                        <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
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