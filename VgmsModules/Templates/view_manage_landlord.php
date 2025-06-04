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
    <title>View Landlord</title>

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
            <!-- view leads table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">
                <!-- Container for the Title -->
                <div style="width: 100%; text-align: center; margin: 20px 0;">
                    <h3 style="margin: 0;">View/Manage Landlord</h3>
                </div>
                <hr>


                <!-- Container for the Table -->
                <div id="tableExample3"
                    data-list='{"valueNames":["id","name","contact","email","company"],"page":5,"pagination":true}'
                    style="width: 100%; padding-top: 20px;">

                    <!-- Add Button -->
                    <div class="d-flex  mb-3">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addLandlordModal">Add Landlord</button>
                    </div>

                    <!-- Search Bar -->
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search"
                                placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <!-- <path fill="currentColor"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                </path> -->
                            </svg>
                        </form>
                    </div>



                    <!-- Table Section -->
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0" id="LandlordTable">
                            <thead>
                                <tr>
                                    <th class="sort name border-top" data-sort="name">Landlord Name</th>
                                    <th class="sort contact border-top" data-sort="contact">Landlord Contact</th>
                                    <th class="sort email border-top" data-sort="email">Landlord Email</th>
                                    <th class="border-top">Edit</th>
                                    <th class="border-top">Active</th>
                                </tr>
                            </thead>

                            <tbody class="list" id="LandlordTableBody">
                                
                                    <?php
                                    include '../PhpFiles/connection.php';

                                    $query = "SELECT * FROM tbl_manage_landlord";
                                    $result = mysqli_query($conn, $query) or die("Query Unsuccessful".mysqli_error($conn));
                                    if($result){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo '
                                            <tr>
                                            <td class="name">'.$row['landlord_name'].'</td>
                                    <td class="contact">'.$row['contact_number'].'</td>
                                    <td class="email">'.$row['email'].'</td>
                                    <td class="align-middle">
                                      <button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editLandlordModal" 
        data-id="' . $row['id'] . '"
        data-name="' . htmlspecialchars($row['landlord_name'], ENT_QUOTES) . '"
        data-contact="' . htmlspecialchars($row['contact_number'], ENT_QUOTES) . '"
        data-email="' . htmlspecialchars($row['email'], ENT_QUOTES) . '"
        style="border: none;">
        🖉
      </button>

                                    </td>
                                    <td>
  <input type="checkbox" class="form-check-input active-checkbox"
         data-id="' . $row['id'] . '" ' . ($row['is_active'] === 'Yes' ? 'checked' : '') . '>
</td>
                                </tr>
                                ';
                                        }
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <!-- checkbox -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const LandlordId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view_manage_landlord.php', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/x-www-form-urlencoded'
                                                        },
                                                        body: `id=${LandlordId}&is_active=${isActive}`
                                                    })
                                                    .then(response => response.text())
                                                    .then(data => {
                                                        console.log('Update response:', data);
                                                    })
                                                    .catch(error => {
                                                        console.error('Error updating status:', error);
                                                    });
                                            });
                                        });
                                    });
                                </script>

                                
                        <!-- pagination -->
                        <div class="d-flex justify-content-end mt-3">
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
                    </div>

                    <!-- Add Landlord Modal -->
                    <div class="modal fade" id="addLandlordModal" tabindex="-1" aria-labelledby="addLandlordModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="addLandlordForm" method="POST">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Landlord</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="Landlord_name" class="form-label">Landlord Name</label>
                                            <input type="text" class="form-control" id="Landlord_name" placeholder="Enter Landlord Name" name="Landlord_name" required >
                                        </div>
                                        <div class="mb-3">
                                            <label for="Landlord_contact" class="form-label">Landlord Contact</label>
                                            <input type="tel" class="form-control" id="Landlord_contact" name="Landlord_contact"
                                                pattern="[0-9]{10}" maxlength="10" placeholder="Enter Landlord contact" oninput="validateMobile(this)" required>

                                        </div>
                                        <div class="mb-3">
                                            <label for="Landlord_email" class="form-label">Landlord Email</label>
                                            <input type="email" class="form-control" id="Landlord_email" placeholder="Enter Landlord Email" name="Landlord_email" required>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" type="submit" id="addLandlordBtn" name="add-landlord">Add</button>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

<?php
include '../PhpFiles/connection.php';

if (isset($_POST['add-landlord'])) {
    // Sanitize input
    $name = mysqli_real_escape_string($conn, $_POST['Landlord_name']);
    $contact = mysqli_real_escape_string($conn, $_POST['Landlord_contact']);
    $email = mysqli_real_escape_string($conn, $_POST['Landlord_email']);

    // Get next UID
    $uid = uniqid('landlord_',true);

    // Insert query
    $query = "INSERT INTO `tbl_manage_landlord` (`uid`, `landlord_name`, `contact_number`, `email`) 
              VALUES ('$uid', '$name', '$contact', '$email')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Added successfully'); window.location.href = 'view_manage_landlord.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

                    <!-- Edit Landlord Modal -->
                    <div class="modal fade" id="editLandlordModal" tabindex="-1" aria-labelledby="editLandlordModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="editLandlordForm" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLandlordModalLabel">Edit Landlord</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="edit_id" name="edit_id">

                                        <div class="mb-3">
                                            <label for="edit_name" class="form-label">Landlord Name</label>
                                            <input type="text" class="form-control" id="edit_name" placeholder="Enter Landlord Name" name="edit_name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="edit_contact" class="form-label">Landlord Contact</label>
                                            <input type="tel" class="form-control" id="edit_contact" placeholder="Enter Landlord contact" name="edit_contact" pattern="[0-9]{10}" maxlength="10" oninput="validateMobile(this)" required>

                                        </div>

                                        <div class="mb-3">
                                            <label for="edit_email" class="form-label">Landlord Email</label>
                                            <input type="email" class="form-control" id="edit_email" placeholder="Enter Landlord Email" name="edit_email" required>
                                        </div>

                                       
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="edit_Landlord">Save Changes</button>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
<!-- update operation -->
<?php
include '../PhpFiles/connection.php';

if (isset($_POST['edit_Landlord'])) {
    $id = intval($_POST['edit_id']); // Ensure ID is integer
    $name = mysqli_real_escape_string($conn, $_POST['edit_name']);
    $contact = mysqli_real_escape_string($conn, $_POST['edit_contact']);
    $email = mysqli_real_escape_string($conn, $_POST['edit_email']);

    $query = "UPDATE `tbl_manage_landlord` 
              SET `landlord_name` = '$name', 
                  `contact_number` = '$contact', 
                  `email` = '$email' 
              WHERE `id` = $id";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Updated successfully'); window.location.href = 'view_manage_landlord.php';</script>";
    } else {
        echo "<script>alert('Update failed: " . mysqli_error($conn) . "'); window.location.href = 'view_manage_landlord.php';</script>";
    }
}
?>
    <!-- update -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('edit_id').value = button.getAttribute('data-id');
            document.getElementById('edit_name').value = button.getAttribute('data-name');
            document.getElementById('edit_contact').value = button.getAttribute('data-contact');
            document.getElementById('edit_email').value = button.getAttribute('data-email');
        });
    });
});
</script>
                            </div>
                        </div>
                    </div>

                     <!-- checkbox -->
                                 <?php
                        include '../PhpFiles/connection.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['is_active'])) {
                            $id = $_POST['id'];
                            $is_active = ($_POST['is_active'] === 'Yes') ? 'Yes' : 'No';

                            $stmt = $conn->prepare("UPDATE tbl_manage_landlord SET is_active = ? WHERE id = ?");
                            $stmt->bind_param("si", $is_active, $id);

                            if ($stmt->execute()) {
                                echo "success";
                            } else {
                                echo "error: " . $stmt->error;
                            }

                            $stmt->close();
                            $conn->close();
                            exit(); // prevent rest of page from being echoed
                        }
                        ?>
                </div>
            </div>
            <footer>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
            </footer>
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
    <script>
        document.querySelectorAll('.open-action-modal').forEach(button => {
            button.addEventListener('click', () => {
                const socId = button.getAttribute('data-id');

                // Update modal links dynamically
                document.getElementById('viewLink').href = `society-details.php?soc_id=${socId}`;
                document.getElementById('editSocietyLink').href = `edit-society.php?soc_id=${socId}`;
                document.getElementById('editMembersLink').href = `edit-members-directory.php?soc_id=${socId}`;
                document.getElementById('editCommitteeLink').href = `edit-committe-details.php?soc_id=${socId}`;
            });
        });
    </script>

    <script>
        document.getElementById('search-box').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('#data-table tbody tr');

            rows.forEach(row => {
                const name = row.querySelector('.landlord')?.textContent.toLowerCase() || '';
                const phone = row.querySelector('.mobile')?.textContent.toLowerCase() || '';

                if (name.includes(searchValue) || phone.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        function validateMobile(input) {
            const value = input.value;
            if (!/^\d*$/.test(value)) {
                alert("Only numeric digits are allowed.");
                input.value = value.replace(/\D/g, '');
            } else if (value.length > 10) {
                alert("Please enter a valid 10-digit mobile number.");
                input.value = value.slice(0, 10);
            }
        }
    </script>





</body>




</html>