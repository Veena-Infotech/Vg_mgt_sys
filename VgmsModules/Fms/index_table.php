<?php
include '../PhpFiles/connection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}

$roomId = $_GET['id'];

// Step 1: Get room name from tbl_rooms
$roomQuery = "SELECT room_name FROM tbl_rooms WHERE id = ?";
$stmt = $conn->prepare($roomQuery);
$stmt->bind_param("i", $roomId);
$stmt->execute();
$stmt->bind_result($room);
$stmt->fetch(); // Fetch the result from bind_result
$stmt->close(); // Always close the prepared statement

// Step 2: Get cupboards for this room
$cubboards = mysqli_query($conn, "SELECT * FROM shelves_cupboards WHERE room_name = '$room'");
if (!$cubboards) {
    die("Query failed: " . mysqli_error($conn));
}
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
            <div class="d-flex justify-content-between align-items-start p-3 border-bottom mb-3">
                <div>
                    <h4 class="mb-0">File Manager</h4>
                    <small>Organize and access your files easily</small>
                </div>
                <div>
                    <button class="btn btn-outline-primary me-2" data-bs-toggle="modal"
                        data-bs-target="#locationModal">+
                        File</button>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addCupboardModal">+
                        Shelf/Cupboard</button>
                </div>
            </div>

            <!-- Add Location Modal -->
            <div class="modal fade mt-2" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="locationModalLabel">Add Location</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form id="addLocationForm">
                            <div class="modal-body">
                                <input type="text" id="fileInput" class="form-control mb-3"
                                    placeholder="Enter file name" required>
                                <select name="cupboard" class="form-select" required>
                                    <option value="">-- Select --</option>
                                    <?php
                                    mysqli_data_seek($cubboards, 0); // reset result pointer
                                    while ($row = mysqli_fetch_assoc($cubboards)): ?>
                                        <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="addCupboardModal" tabindex="-1" aria-labelledby="addCupboardModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <form method="POST" action="add_cupboard.php" class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Shelf/Cupboard</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="roomname" value="<?= $room ?>">
                            <div class="mb-3">
                                <label class="form-label">Shelf/Cupboard Name</label>
                                <input type="text" name="cupboard_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="add_cupboard" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>



            <div id="tableExample3"
                data-list='{"valueNames":["room_name","cubboard_name","file_name",Added_By],"page":5,"pagination":true}'>
                <div class="search-box mb-3 mx-auto">
                    <form class="position-relative"><input class="form-control search-input search form-control-sm"
                            type="search" placeholder="Search" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="sort border-top border-translucent ps-3">srno</th>
                                <th class="sort border-top" data-sort="room_name">room_name</th>
                                <th class="sort border-top" data-sort="cubboard_name">cubboard_name</th>
                                <th class="sort border-top" data-sort="file_name">file_name</th>
                                <th class="sort border-top" data-sort="Added_On">Added_On</th>
                                <th class="sort border-top" data-sort="Added_By">Added_By</th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php
                            include '../PhpFiles/connection.php';

                            if (isset($_GET['id'])) {
                                $roomId = $_GET['id'];

                                // Step 1: Get room name from tbl_rooms
                                $roomQuery = "SELECT room_name FROM tbl_rooms WHERE id = ?";
                                $stmt = $conn->prepare($roomQuery);
                                $stmt->bind_param("i", $roomId);
                                $stmt->execute();
                                $stmt->bind_result($roomName);

                                if ($stmt->fetch()) {
                                    $stmt->close();

                                    // Step 2: Search for room name in tbl_fms
                                    $fmsQuery = "SELECT * FROM tbl_fms WHERE room_name = ?";
                                    $stmt = $conn->prepare($fmsQuery);
                                    $stmt->bind_param("s", $roomName);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $srno = 1; // Initialize serial number

                                    // Example of processing results
                                    while ($row = $result->fetch_assoc()) {
                                        // Do something with each $row
                                        echo '
                                             <tr>
                                <td class="align-middle ps-3">'.$srno.'</td>
                                <td class="align-middle ps-3 room_name">' . $row['room_name'] . '</td>
                                <td class="align-middle cupboard_name">' . $row['cupboard_name'] . '</td>
                                <td class="align-middle filename">' . $row['filename'] . '</td>
                                <td class="align-middle Added_On">' . $row['time'] . '</td>
                                <td class="align-middle Added_By">' . $row['added_by'] . '</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"> <a class="dropdown-item" href="#" onclick=\'openEditModal(' . json_encode($row) . ')\'>Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                        ';
                                        $srno++; // Increment serial number for each row
                                    }

                                    $stmt->close();
                                } else {
                                    echo "Room ID not found.";
                                }
                            } else {
                                echo "No ID passed in URL.";
                            }
                            ?>
                            <!-- <tr>
                                <td class="align-middle ps-3">1</td>
                                <td class="align-middle ps-3 room_name">Anna</td>
                                <td class="align-middle cubboard_name">anna@example.com</td>
                                <td class="align-middle file_name">18</td>
                                <td class="align-middle Added_On">18</td>
                                <td class="align-middle Added_By">18</td>
                                <td class="align-middle white-space-nowrap text-end pe-0">
                                    <div class="btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
                        data-list-info="data-list-info"></span>
                    <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                                class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                            data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include("../../Components/footer.php"); ?>
        </div>


        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="editForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit File Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="fms_id" id="fms_id">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

                            <div class="mb-3">
                                <label for="edit_location" class="form-label">Room</label>
                                <select class="form-select" name="room_name" id="edit_location" required>
                                    <option value="" disabled selected>Select Room</option>
                                    <?php
                                    $rooms = $conn->query("SELECT room_name FROM tbl_rooms");
                                    while ($r = $rooms->fetch_assoc()) {
                                        echo '<option value="' . htmlspecialchars($r['room_name']) . '">' . htmlspecialchars($r['room_name']) . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="edit_cubboard" class="form-label">Cubboard</label>
                                <select class="form-select" name="cubboard_name" id="edit_cubboard" required>
                                    <option value="" disabled selected>Select Cubboard</option>
                                    <?php
                                    $cubs = $conn->query("SELECT DISTINCT cubboard_name FROM tbl_fms");
                                    while ($c = $cubs->fetch_assoc()) {
                                        echo '<option value="' . htmlspecialchars($c['cubboard_name']) . '">' . htmlspecialchars($c['cubboard_name']) . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="edit_file" class="form-label">File Name</label>
                                <input type="text" class="form-control" name="file_name" id="edit_file" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function openEditModal(data) {
            document.getElementById('fms_id').value = data.id;
            document.getElementById('edit_location').value = data.room_name;
            document.getElementById('edit_cubboard').value = data.cubboard_name;
            document.getElementById('edit_file').value = data.file_name;

            let modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#editForm').on('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                $.ajax({
                    url: '../PhpFiles/update_fms.php', // your PHP file
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            alert(response.message); // or show it in the UI
                            window.location.reload(); // reload the page to see changes
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('An error occurred while updating.');
                    }
                });
            });
        });
    </script>
    <script>
        document.getElementById("addLocationForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const fileInput = document.getElementById("fileInput").value.trim();
            const cupboard = this.cupboard.value;
            const urlParams = new URLSearchParams(window.location.search);
            const roomId = urlParams.get("id"); // assuming the URL is like ?id=3

            if (!roomId) {
                alert("Room ID not found in URL!");
                return;
            }


            fetch("../PhpFiles/add_location.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    file_name: fileInput,
                    cupboard: cupboard,
                    room_id: roomId
                })

            })
                .then(res => res.json())
                .then(data => {
                    if (data.status === "success") {
                        alert("Location added successfully!");
                        this.reset();
                        bootstrap.Modal.getInstance(document.getElementById("locationModal")).hide();
                        window.location.reload(); // Reload the page to see changes
                    } else {
                        alert("Error: " + data.message);
                    }
                })
                .catch(err => {
                    console.error("AJAX Error:", err);
                    alert("Something went wrong.");
                });
        });
    </script>
    <script>
        document.querySelector("#addCupboardModal form").addEventListener("submit", function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch("../PhpFiles/add_cupboard.php", {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status === "success") {
                        alert("Cupboard added successfully!");
                        this.reset();
                        bootstrap.Modal.getInstance(document.getElementById("addCupboardModal")).hide();
                        window.location.reload(); // Reload the page to see changes

                        // Optionally refresh cupboard dropdown here
                    } else {
                        alert("Error: " + data.message);
                    }
                })
                .catch(err => {
                    console.error("AJAX Error:", err);
                    alert("Something went wrong.");
                });
        });
    </script>

</body>

</html>