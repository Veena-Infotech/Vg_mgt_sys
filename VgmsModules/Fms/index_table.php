<?php
include '../PhpFiles/connection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>
<?php

$room_id = $_GET['id'];
// Get cupboard list for this room
$cupboards = [];
$stmt = $conn->prepare("SELECT id, name FROM shelves_cupboards WHERE room_name = ?");
$stmt->bind_param("i", $room_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $cupboards[] = $row;
}
$stmt->close();
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
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
        <div class="content">
            <div class="flex-grow-1 d-flex flex-column">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-start p-3 border-bottom">
                    <div>
                        <h4 class="mb-0">File Manager</h4>
                        <small>Organize and access your files easily</small>
                    </div>
                    <div class="d-flex justify-content-end mb-3 px-3">
                        <button class="btn btn-primary me-2" type="button" data-bs-toggle="modal" data-bs-target="#ASC">
                            + Add Shelves/Cupboards
                        </button>

                        <div class="modal fade" id="ASC" tabindex="-1" aria-labelledby="ASCModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="../PhpFiles/add_shelves_cupboards.php">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ASCModalLabel">Add Shelves/Cupboards</h5>
                                            <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="room_id" value="<?php echo $_GET['id']; ?>">

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Shelf/Cupboard Name</label>
                                                <input type="text" class="form-control" name="name" id="name" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Add</button>
                                            <button class="btn btn-outline-primary" type="button"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#AF">+ Add
                            File</button>

                        <div class="modal fade" id="AF" tabindex="-1" aria-labelledby="AFModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="../PhpFiles/add_files.php">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="AFModalLabel">Add File</h5>
                                            <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">

                                            <div class="mb-3">
                                                <label for="cupboard_id" class="form-label">Cupboard</label>
                                                <select class="form-select" name="cupboard_id" id="cupboard_id"
                                                    required>
                                                    <option value="">Select</option>
                                                    <?php foreach ($cupboards as $cupboard): ?>
                                                        <option value="<?= $cupboard['id'] ?>">
                                                            <?= htmlspecialchars($cupboard['name']) ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="filename" class="form-label">File Name</label>
                                                <input type="text" class="form-control" name="filename" id="filename"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Add</button>
                                            <button class="btn btn-outline-primary" type="button"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container mt-4">

                    <div id="tableExample3"
                        data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="search-box mb-3 mx-auto">
                            <form class="position-relative"><input
                                    class="form-control search-input search form-control-sm" type="search"
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
                        <div class="table-responsive">
                            <table class="table table-striped table-sm fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-3" data-sort="filename">File
                                            Name</th>
                                        <th class="sort border-top" data-sort="cupboard">Cupboard</th>
                                        <th class="sort border-top" data-sort="status">Status</th>
                                        <th class="sort border-top" data-sort="taken_by">Taken By</th>
                                        <th class="sort border-top" data-sort="taken_time">Taken Time</th>
                                        <th class="sort border-top" data-sort="returned_by">Returned By</th>
                                        <th class="sort border-top" data-sort="returned_time">Returned Time</th>
                                        <th class="sort border-top" data-sort="added_by">Added By</th>
                                        <th class="sort border-top" data-sort="added_time">Added Time</th>
                                        <th class="border-top text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php
                                    include '../PhpFiles/connection.php';

                                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                                        $office_id = $_GET['id'];

                                        $sql = "SELECT * FROM tbl_fms WHERE room_name = ?";
                                        $stmt = $conn->prepare($sql);

                                        if (!$stmt) {
                                            die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
                                        }

                                        $stmt->bind_param("i", $office_id);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $status = strtoupper($row['current_status']);
                                                echo '<tr>';

                                                // File Name
                                                echo '<td class="align-middle ps-3 name">' . htmlspecialchars($row['filename']) . '</td>';

                                                // Cupboard (hide if OUT)
                                                if ($status === 'IN') {
                                                    echo '<td class="align-middle">' . htmlspecialchars($row['cupboard_name']) . '</td>';
                                                } else {
                                                    echo '<td class="align-middle text-muted">OUT</td>';
                                                }

                                                // Status
                                                echo '<td class="align-middle">' . $status . '</td>';

                                                // Taken By & Taken Time (show only if OUT)
                                                if ($status === 'OUT') {
                                                    echo '<td class="align-middle">' . htmlspecialchars($row['taken_by']) . '</td>';
                                                    echo '<td class="align-middle">' . htmlspecialchars($row['taken_time']) . '</td>';
                                                } else {
                                                    echo '<td class="align-middle text-muted">IN</td>';
                                                    echo '<td class="align-middle text-muted">IN</td>';
                                                }

                                                // Returned By & Returned Time (show only if IN)
                                                if ($status === 'IN') {
                                                    echo '<td class="align-middle">' . htmlspecialchars($row['returned_by']) . '</td>';
                                                    echo '<td class="align-middle">' . htmlspecialchars($row['returned_time']) . '</td>';
                                                } else {
                                                    echo '<td class="align-middle text-muted">OUT</td>';
                                                    echo '<td class="align-middle text-muted">OUT</td>';
                                                }

                                                // Added By & Added Time
                                                echo '<td class="align-middle">' . htmlspecialchars($row['added_by']) . '</td>';
                                                echo '<td class="align-middle">' . htmlspecialchars($row['added_time']) . '</td>';

                                                // Actions
                                                echo '<td class="align-middle text-center">
                        <div class="btn-reveal-trigger position-static">
                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end py-2">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editFileModal' . $row['id'] . '">Edit</a>';

                                                if ($status === 'IN') {
                                                    echo '<a class="dropdown-item" href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#markOutModal"
                            data-file-id="' . $row['id'] . '">Mark as OUT</a>';
                                                } else {
                                                    echo '<a class="dropdown-item" href="#" onclick="markFileIn(' . $row['id'] . '); return false;">Mark as IN</a>';
                                                }

                                                echo '</div>
                        </div>
                    </td>';

                                                echo '</tr>';
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
                                data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of
                                </span>43</span>
                            <div class="d-flex"><button class="page-link disabled" data-list-pagination="prev"
                                    disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="chevron-left" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                        </path>
                                    </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                <ul class="mb-0 pagination">
                                    <li class="active"><button class="page" type="button" data-i="1"
                                            data-page="5">1</button></li>
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


                    <?php
                    $stmt = $conn->prepare("SELECT * FROM tbl_fms WHERE room_name = ?");
                    $stmt->bind_param("i", $office_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        $modalId = $row['id'];

                        $officesResult = $conn->query("SELECT id, office_name FROM tbl_offices ORDER BY office_name ASC");

                        $currentOfficeId = $row['officename'];
                        $currentRoomId = $row['room_name'];
                        $roomsResult = $conn->prepare("SELECT id, room_name FROM tbl_rooms WHERE office_id = ?");
                        $roomsResult->bind_param("i", $currentOfficeId);
                        $roomsResult->execute();
                        $rooms = $roomsResult->get_result();

                        $currentRoomName = $row['room_name'];
                        $cupboardsResult = $conn->prepare("SELECT id, name FROM shelves_cupboards WHERE room_name = ?");
                        $cupboardsResult->bind_param("s", $currentRoomName);
                        $cupboardsResult->execute();
                        $cupboards = $cupboardsResult->get_result();
                        ?>
                        <div class="modal fade" id="editFileModal<?= $modalId ?>" tabindex="-1"
                            aria-labelledby="editFileLabel<?= $modalId ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                    <form action="../phpFiles/update_file_location.php" method="POST">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editFileLabel<?= $modalId ?>">Edit File Location
                                            </h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="file_id" value="<?= $modalId ?>">

                                            <div class="mb-3">
                                                <label class="form-label">File Name</label>
                                                <input type="text" class="form-control" name="filename"
                                                    value="<?= htmlspecialchars($row['filename']) ?>" required>
                                            </div>

                                            <!-- Office -->
                                            <div class="mb-3">
                                                <label class="form-label">Office</label>
                                                <select id="office<?= $modalId ?>" name="officename"
                                                    class="form-select office-select" data-id="<?= $modalId ?>" required>
                                                    <option value="">Select Office</option>
                                                    <?php while ($office = $officesResult->fetch_assoc()): ?>
                                                        <option value="<?= $office['id'] ?>" <?= ($office['id'] == $currentOfficeId ? 'selected' : '') ?>>
                                                            <?= htmlspecialchars($office['office_name']) ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>

                                            <!-- Room -->
                                            <div class="mb-3">
                                                <label class="form-label">Room</label>
                                                <select id="room<?= $modalId ?>" name="room_name"
                                                    class="form-select room-select" data-id="<?= $modalId ?>" required>
                                                    <option value="">Select Room</option>
                                                    <?php while ($room = $rooms->fetch_assoc()): ?>
                                                        <option value="<?= $room['id'] ?>" <?= ($room['id'] == $currentRoomId ? 'selected' : '') ?>>
                                                            <?= htmlspecialchars($room['room_name']) ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>

                                            <!-- Cupboard -->
                                            <div class="mb-3">
                                                <label class="form-label">Cupboard</label>
                                                <select id="cupboard<?= $modalId ?>" name="cupboard_name"
                                                    class="form-select cupboard-select" required>
                                                    <option value="">Select Cupboard</option>
                                                    <?php while ($cup = $cupboards->fetch_assoc()): ?>
                                                        <option value="<?= $cup['name'] ?>"
                                                            <?= ($cup['name'] == $row['cupboard_name'] ? 'selected' : '') ?>>
                                                            <?= htmlspecialchars($cup['name']) ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                            <button class="btn btn-outline-secondary" type="button"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                    <!-- Mark OUT Modal -->
                    <div class="modal fade" id="markOutModal" tabindex="-1" aria-labelledby="markOutLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="markOutForm" method="POST" action="../PhpFiles/update_file_status.php"
                                class="modal-content">
                                <input type="hidden" name="action" value="OUT">
                                <input type="hidden" name="file_id" id="out_file_id">

                                <div class="modal-header bg-warning-subtle">
                                    <h5 class="modal-title fw-bold" id="markOutLabel">Mark File as OUT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="reason" id="out_reason"
                                            placeholder="Reason for taking file" required
                                            style="height: 100px"></textarea>
                                        <label for="out_reason">Reason</label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger w-100">Mark as OUT</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

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
    <script>
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('shown.bs.modal', () => {
                gsap.from(modal.querySelector('.modal-content'), {
                    duration: 0.5,
                    y: -50,
                    opacity: 0,
                    ease: "power2.out"
                });
            });
        });

        // Office change → load rooms
        document.querySelectorAll('.office-select').forEach(officeSelect => {
            officeSelect.addEventListener('change', function () {
                const modalId = this.getAttribute('data-id');
                const officeId = this.value;

                const roomSelect = document.getElementById(`room${modalId}`);
                const cupboardSelect = document.getElementById(`cupboard${modalId}`);

                roomSelect.innerHTML = '<option>Loading...</option>';
                roomSelect.disabled = true;
                cupboardSelect.innerHTML = '<option>Select Cupboard</option>';
                cupboardSelect.disabled = true;

                if (officeId) {
                    fetch('../PhpFiles/get_rooms.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: `office_id=${officeId}`
                    })
                        .then(res => res.text())
                        .then(data => {
                            roomSelect.innerHTML = data;
                            roomSelect.disabled = false;
                        });
                }
            });
        });

        const markOutModal = document.getElementById('markOutModal');

        markOutModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;  // the clicked link
            const fileId = button.getAttribute('data-file-id');
            markOutModal.querySelector('#out_file_id').value = fileId;
        });


        // Room change → load cupboards
        document.querySelectorAll('.room-select').forEach(roomSelect => {
            roomSelect.addEventListener('change', function () {
                const modalId = this.getAttribute('data-id');
                const roomId = this.value;  // now this is the numeric ID

                const cupboardSelect = document.getElementById(`cupboard${modalId}`);
                cupboardSelect.innerHTML = '<option>Loading...</option>';
                cupboardSelect.disabled = true;

                if (roomId) {
                    fetch('../PhpFiles/get_cupboards.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: `room_name=${encodeURIComponent(roomId)}`
                    })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                cupboardSelect.innerHTML = data.options;
                                cupboardSelect.disabled = false;
                            } else {
                                alert(data.message || 'Failed to load cupboards.');
                                cupboardSelect.innerHTML = '<option value="">Select Cupboard</option>';
                                cupboardSelect.disabled = true;
                            }
                        })
                        .catch(err => {
                            console.error('Error loading cupboards:', err);
                            cupboardSelect.innerHTML = '<option value="">Select Cupboard</option>';
                            cupboardSelect.disabled = true;
                        });
                }
            });
        });


    </script>
    <script>
        async function submitMarkOut(event) {
            event.preventDefault();  // Prevent form default submission if used as event handler

            const fileId = document.getElementById('out_file_id').value;
            const reason = document.getElementById('out_reason').value.trim();

            if (!fileId) {
                alert('File ID is missing.');
                return;
            }

            if (!reason) {
                alert('Please provide a reason for taking the file.');
                return;
            }

            const formData = new FormData();
            formData.append('file_id', fileId);
            formData.append('action', 'OUT');
            formData.append('reason', reason);

            try {
                const response = await fetch('../PhpFiles/update_file_status.php', {
                    method: 'POST',
                    body: formData,
                });

                if (!response.ok) {
                    throw new Error(`Server error: ${response.status}`);
                }

                const data = await response.json();

                alert(data.message || 'No message received.');

                if (data.status === 'success') {
                    // Close modal programmatically (Bootstrap 5)
                    const markOutModal = document.getElementById('markOutModal');
                    const modalInstance = bootstrap.Modal.getInstance(markOutModal);
                    if (modalInstance) modalInstance.hide();

                    // Optional: Refresh page or update UI
                    // window.location.reload();
                }
            } catch (error) {
                alert('Error submitting OUT status: ' + error.message);
            }
        }

    </script>
    <script>
        async function markFileIn(fileId) {

            const formData = new FormData();
            formData.append('file_id', fileId);
            formData.append('action', 'IN');
            // No location change fields - keep current location as is

            try {
                const response = await fetch('../PhpFiles/update_file_status.php', {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();

                if (data.status === 'success') {
                    alert('File marked IN successfully.\nTo change the location, please use the Edit action.');
                    // Optional: refresh page or update UI here
                    window.location.reload();
                } else {
                    alert('Failed to mark IN: ' + data.message);
                }
            } catch (error) {
                window.location.reload();
            }
        }

    </script>

</body>

</html>