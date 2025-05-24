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
    <title>Card view Project details </title>

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
            <?php
            include '../PhpFiles/connection.php';
            // Assuming $project_id is already available from previous logic or DB result

            $query = "
    SELECT 
        COUNT(*) AS total_tasks,
        SUM(CASE WHEN s.name = 'completed' THEN 1 ELSE 0 END) AS completed_tasks
    FROM tbl_tasks t
    INNER JOIN tbl_task_status s ON t.status = s.id
    WHERE t.project_id = 21
";


            $result = mysqli_query($conn, $query);
            $progressPercentage = 0;
            $barColor = 'bg-danger';

            if ($row = mysqli_fetch_assoc($result)) {
                $total = (int)$row['total_tasks'];
                $completed = (int)$row['completed_tasks'];

                if ($total > 0) {
                    $progressPercentage = round(($completed / $total) * 100);
                }

                if ($progressPercentage <= 35) {
                    $barColor = 'bg-danger';
                } elseif ($progressPercentage <= 65) {
                    $barColor = 'bg-warning';
                } elseif ($progressPercentage <= 99) {
                    $barColor = 'bg-primary';
                } else {
                    $barColor = 'bg-success';
                }
            }
            ?>

            <!-- total task count -->
            <?php
            // Make sure DB connection is established
            include_once '../PhpFiles/connection.php'; // Adjust path

            $project_id = $_GET['project_id'] ?? 0; // Or use your existing way to get project ID

            $count_query = "SELECT COUNT(*) AS total_tasks FROM tbl_tasks WHERE project_id = ?";
            $stmt = $conn->prepare($count_query);



            if ($stmt) {
                $stmt->bind_param("i", $project_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                $total_tasks = $row['total_tasks'] ?? 0;
                $stmt->close();
            } else {
                $total_tasks = 0;
            }
            ?>


            <?php
            include '../PhpFiles/connection.php';

            // Get filters
            $searchTerm = isset($_GET['search']) ? trim($_GET['search']) : '';
            $statusId = isset($_GET['status']) ? intval($_GET['status']) : 0;

            // ---------------------
            // Get counts per status
            // ---------------------
            $statusCounts = [];
            $countQuery = "SELECT project_status, COUNT(*) AS count FROM tbl_project GROUP BY project_status";
            $countResult = $conn->query($countQuery);
            while ($row = $countResult->fetch_assoc()) {
                $statusCounts[$row['project_status']] = $row['count'];
            }

            // Get total count
            $totalQuery = $conn->query("SELECT COUNT(*) AS total FROM tbl_project");
            $totalCount = $totalQuery->fetch_assoc()['total'];

            // Get all statuses
            $statusResult = $conn->query("SELECT id, status_name FROM tbl_project_status");
            $statuses = [];
            while ($row = $statusResult->fetch_assoc()) {
                $statuses[] = $row;
            }

            // --------------------
            // Build Main Query
            // --------------------
            $query = "
            SELECT 
                p.*, 
                p.id AS project_id,
                c.f_name, 
                c.l_name, 
                c.id AS client_id,
                p_status.id AS status_id,
                p_status.status_name
            FROM tbl_project p 
            INNER JOIN tbl_client c ON p.project_client = c.id
            INNER JOIN tbl_project_status p_status ON p.project_status = p_status.id
            WHERE 1=1
            ";



            $params = [];
            $types = "";

            // Add search filter
            if ($searchTerm !== '') {
                $query .= " AND p.project_title LIKE ?";
                $params[] = '%' . $searchTerm . '%';
                $types .= "s";
            }
            if ($statusId > 0) {
                $query .= " AND p.project_status = ?"; // Use correct column for filtering by status
                $params[] = $statusId;
                $types .= "i";
            }

            // Prepare and execute
            $stmt = $conn->prepare($query);
            if (!empty($params)) {
                $stmt->bind_param($types, ...$params);
            }
            $stmt->execute();
            $result = $stmt->get_result();
            ?>

            <div class="content" style="margin-top: -7%;">

                <div class="row gx-6 gy-3 mb-4 align-items-center">
                    <div class="col-auto">
                        <h2 class="mb-0">Projects<span class="fw-normal text-body-tertiary ms-3">
                                <?php
                                // Fetch total project count
                                $countQuery = $conn->query("SELECT COUNT(*) AS total FROM tbl_project");
                                $totalRow = $countQuery->fetch_assoc();
                                $totalProjects = $totalRow['total'];
                                ?>

                            </span></h2>
                    </div>
                    <div class="col-auto"><a class="btn btn-primary px-5" href="create-new.html"><i
                                class="fa-solid fa-plus me-2"></i>Add new project</a></div>
                </div>
                <div class="row justify-content-between align-items-end mb-4 g-3">
                    <div class="col-12 col-sm-auto">
                        <!-- <ul class="nav nav-links mx-n2"> -->
                        <ul class="nav mb-4">
                            <?php
                            $isActiveAll = ($statusId === 0);
                            $url = ($searchTerm !== '') ? "?search=" . urlencode($searchTerm) : "?";
                            echo '<li class="nav-item">
            <a class="nav-link px-2 py-1 ' . ($isActiveAll ? 'active' : '') . '" href="' . $url . '">
                All <span class="text-body-tertiary fw-semibold">(' . $totalCount . ')</span>
            </a>
          </li>';

                            foreach ($statuses as $status) {
                                $isActive = ($status['id'] == $statusId);
                                $url = "?status=" . $status['id'];
                                if ($searchTerm !== '') $url .= "&search=" . urlencode($searchTerm);
                                $count = $statusCounts[$status['id']] ?? 0;

                                echo '<li class="nav-item">
                <a class="nav-link px-2 py-1 ' . ($isActive ? 'active' : '') . '" href="' . $url . '">
                    ' . htmlspecialchars($status['status_name']) . ' <span class="text-body-tertiary fw-semibold">(' . $count . ')</span>
                </a>
              </li>';
                            }
                            ?>
                        </ul>

                        <!-- </ul> -->
                    </div>
                    <div class="col-12 col-sm-auto">
                        <div class="d-flex align-items-center">
                            <div class="search-box me-3">


                                <!-- <form class="position-relative" method="get" action="">
                                    <input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search" name="search" value="<?php echo htmlspecialchars($searchTerm); ?>" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form> -->
                                <!-- 🔍 Search Form -->
                                <form class="position-relative mb-3" method="get" action="">
                                    <input class="form-control search-input search" type="search" placeholder="Search projects" name="search" value="<?php echo htmlspecialchars($searchTerm); ?>" />
                                    <?php if ($statusId): ?>
                                        <input type="hidden" name="status" value="<?php echo htmlspecialchars($statusId); ?>">
                                    <?php endif; ?>
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>



                            </div><a class="btn btn-phoenix-primary px-3 me-1"
                                href="../../VgmsModules/pms/viewproject_list.php" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="List view"><span
                                    class="fa-solid fa-list fs-10"></span></a>

                            <a class="btn btn-phoenix-primary px-3 border-0 text-body"
                                href="../../VgmsModules/pms/viewproject_card.php" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Card view"><svg width="9" height="9"
                                    viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z"
                                        fill="currentColor"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">

                    <!-- code -->



                    <?php

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            // status text and
                            $status = strtolower($row['status_name']); // Normalize to lowercase

                            $colorStyle = '';
                            switch ($status) {
                                case 'waiting':
                                    $colorStyle = 'color: #0d6efd; border: 1px solid #0d6efd;'; // blue
                                    break;
                                case 'on-going':
                                case 'ongoing':
                                    $colorStyle = 'color: #ffc107; border: 1px solid #ffc107;'; // yellow
                                    break;
                                case 'completed':
                                    $colorStyle = 'color: #198754; border: 1px solid #198754;'; // green
                                    break;
                                case 'cancelled':
                                    $badgeClass = 'badge bg-danger text-white'; // red background + white text
                                    break;
                                default:
                                    $colorStyle = 'color: #6c757d; border: 1px solid #6c757d;'; // gray fallback
                                    break;
                            }
                            $project_id = $row['project_id'];
                            $query1 = "
                                SELECT 
                                    COUNT(*) AS total_tasks,
                                    SUM(CASE WHEN s.name = 'completed' THEN 1 ELSE 0 END) AS completed_tasks
                                FROM tbl_tasks t
                                INNER JOIN tbl_task_status s ON t.status = s.id
                                WHERE t.project_id = $project_id
                            ";
                            $result1 = mysqli_query($conn, $query1);

                            $total_tasks = 0;
                            $completed_tasks = 0;
                            $progressPercentage = 0;
                            $barColor = '';

                            if ($result1 && $result1->num_rows > 0) {
                                $taskData = $result1->fetch_assoc();
                                $total_tasks = (int)$taskData['total_tasks'];
                                $completed_tasks = (int)$taskData['completed_tasks'];
                                if ($total_tasks > 0) {
                                    $progressPercentage = round(($completed_tasks / $total_tasks) * 100);
                                }

                                // Determine progress bar color
                                if ($progressPercentage <= 35) {
                                    $barColor = 'bg-danger';
                                } elseif ($progressPercentage <= 65) {
                                    $barColor = 'bg-warning';
                                } elseif ($progressPercentage <= 99) {
                                    $barColor = 'bg-primary';
                                } else {
                                    $barColor = 'bg-success';
                                }
                            }

                            echo '
        <div class="col-md-4">
            <div class="card h-100 hover-actions-trigger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">' . htmlspecialchars($row['project_title']) . '</h4>
                        <input type="hidden" value="' . htmlspecialchars($row['id']) . '" id="prj_id">
                        <div class="hover-actions top-0 end-0 mt-4 me-4"  ><button
    class="btn btn-primary btn-icon flex-shrink-0 toggle-button" 
    data-id="' . $row['project_id'] . '" 
    type="button">


                                            <span
                                                class="fa-solid fa-chevron-right"></span></button></div>
                    </div>
<span class="badge fs-10 mb-4" style="' . $colorStyle . '">'
                                . htmlspecialchars($row['status_name']) . '</span>
</span>
                    <div class="d-flex align-items-center mb-2">
                        <span class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                        <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1">' . htmlspecialchars($row['f_name']) . ' ' . htmlspecialchars($row['l_name']) . '</span></p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <span class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                        <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">$ ' . htmlspecialchars($row['budget']) . '</span></p>
                    </div>
                    
<div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                        <p class="mb-2">Progress</p>
                        <p class="mb-2 text-body-emphasis">' . $progressPercentage . '%</p>
                    </div>
                    <div class="progress bg-body-secondary">
                        <div class="progress-bar rounded ' . $barColor . '" role="progressbar" style="width: ' . $progressPercentage . '%" aria-valuenow="' . $progressPercentage . '" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1">' . htmlspecialchars($row['project_start_date'] ?? '-') . '</span></p>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1">' . htmlspecialchars($row['project_end_date'] ?? '-') . '</span></p>
                    </div>
                     <div
                                    class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                    <div class="avatar-group"><a
                                            class="dropdown-toggle dropdown-caret-none d-inline-block" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                            data-bs-auto-close="outside">
                                            <div class="avatar avatar-m  rounded-circle">
                                                <img class="rounded-circle " src="../../assets/img/team/1.webp"
                                                    alt="" />
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
                                                                src="../../assets/img/team/1.webp" alt="" />
                                                        </div>
                                                        <h6 class="text-white">Ricky Antony</h6>
                                                        <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
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
                                                                    class="fa-solid fa-video"></span></button></div>
                                                        <button class="btn btn-phoenix-primary"><span
                                                                class="fa-solid fa-envelope me-2"></span>Send
                                                            Email</button>
                                                    </div>
                                                </div>
                                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                                    <li class="nav-item"><a
                                                            class="nav-link px-3 d-flex flex-between-center" href="#!">
                                                            <span class="me-2 text-body d-inline-block"
                                                                data-feather="clipboard"></span><span
                                                                class="text-body-highlight flex-1">Assigned
                                                                Projects</span><span
                                                                class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    <li class="nav-item"><a
                                                            class="nav-link px-3 d-flex flex-between-center" href="#!">
                                                            <span class="me-2 text-body"
                                                                data-feather="pie-chart"></span><span
                                                                class="text-body-highlight flex-1">View
                                                                activiy</span><span
                                                                class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="p-3 d-flex justify-content-between"><a
                                                    class="btn btn-link p-0 text-decoration-none" href="#!">Details
                                                </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                                                    href="#!">Unassign </a></div>
                                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                            data-bs-auto-close="outside">
                                            <div class="avatar avatar-m  rounded-circle">
                                                <img class="rounded-circle " src="../../assets/img/team/2.webp"
                                                    alt="" />
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
                                                                src="../../assets/img/team/2.webp" alt="" />
                                                        </div>
                                                        <h6 class="text-white">Raymond Mims</h6>
                                                        <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
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
                                                                    class="fa-solid fa-video"></span></button></div>
                                                        <button class="btn btn-phoenix-primary"><span
                                                                class="fa-solid fa-envelope me-2"></span>Send
                                                            Email</button>
                                                    </div>
                                                </div>
                                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                                    <li class="nav-item"><a
                                                            class="nav-link px-3 d-flex flex-between-center" href="#!">
                                                            <span class="me-2 text-body d-inline-block"
                                                                data-feather="clipboard"></span><span
                                                                class="text-body-highlight flex-1">Assigned
                                                                Projects</span><span
                                                                class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                    <li class="nav-item"><a
                                                            class="nav-link px-3 d-flex flex-between-center" href="#!">
                                                            <span class="me-2 text-body"
                                                                data-feather="pie-chart"></span><span
                                                                class="text-body-highlight flex-1">View
                                                                activiy</span><span
                                                                class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="p-3 d-flex justify-content-between"><a
                                                    class="btn btn-link p-0 text-decoration-none" href="#!">Details
                                                </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                                                    href="#!">Unassign </a></div>
                                        </div>
                                    </div>
                                    <div class="mt-lg-3 mt-xl-0">
    <i class="fa-solid fa-list-check me-1"></i>
    <p class="d-inline-block fw-bold mb-0">' . $total_tasks . ' <span class="fw-normal"> Task</span>
    </p>
</div>


                                </div>
                </div>
            </div>
        </div>';
                        }
                    } else {
                        echo '<p class="text-center mt-4">No projects found.</p>';
                    }
                    ?>
                </div>




                <script>
                    function getCookie(name) {
                        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                        return match ? match[2] : null;
                    }

                    console.log(getCookie('project_id')); // e.g., 42
                </script>

                <?php
                include '../PhpFiles/connection.php';


                $query = "SELECT * FROM tbl_project";
                $result = mysqli_query($conn, $query) or die("Query Unsuccessful");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo '<div class="modal fade" id="projectsCardViewModal" tabindex="-1" aria-labelledby="projectsCardViewModal"
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
                                            <h3 class="fw-bolder lh-sm">' . $row['project_title'] . '</h3>
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
                                                data-options={"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"} /><span
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
                </div>';
                    }
                };
                ?>


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






    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".toggle-button").forEach(function(btn) {
                btn.addEventListener("click", function(e) {
                    e.preventDefault(); // stop modal behavior if any
                    const projectId = this.getAttribute("data-id");
                    alert("Project ID: " + projectId);
                    // redirect after alert
                    window.location.href = "viewproject_card_details.php?project_id=" + projectId;
                });
            });
        });
    </script>

</body>





</html>