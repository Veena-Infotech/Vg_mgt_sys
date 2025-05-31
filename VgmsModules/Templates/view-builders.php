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
    <title>PRMS | Manage Builders</title>

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
        <div class="content">
            <!-- view leads table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">
                <!-- Container for the Title -->
                <div style="width: 100%; text-align: center; margin: 20px 0;">
                    <h3 style="margin: 0;">Manage Builders</h3>
                </div>
                <hr>


                <!-- Container for the Table -->
                <div id="tableExample3"
                    data-list='{"valueNames":["id","name","contact","email","company"],"page":5,"pagination":true}'
                    style="width: 100%; padding-top: 20px;">

                    <!-- Add Button -->
                    <div class="d-flex  mb-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBuilderModal">Add Builder</button>
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
                        <table class="table table-striped table-sm fs-9 mb-0" id="builderTable">
                            <thead>
                                <tr>
                                    <th class="sort name border-top" data-sort="name">Builder Name</th>
                                    <th class="sort contact border-top" data-sort="contact">Builder Contact</th>
                                    <th class="sort email border-top" data-sort="email">Builder Email</th>
                                    <th class="sort company border-top" data-sort="company">Company Name</th>
                                    <th class="border-top">Edit</th>
                                    <th class="border-top">Active</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="builderTableBody">
                                <?php
                                // database connection
                                include '../PhpFiles/connection.php';

                                $query = "SELECT * FROM tbl_manage_builders";

                                $result = mysqli_query($conn, $query) or die("Query Unsuccessful" . mysqli_error($conn));
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                        <tr>
                                    <td class="name">' . $row['builder_name'] . '</td>
                                    <td class="contact">' . $row['builder_contact'] . '</td>
                                    <td class="email">' . $row['builder_email'] . '</td>
                                    <td class="company">' . $row['company_name'] . '</td>
                                    <td class="align-middle">
                                    <button class="btn btn-sm btn-outline-primary edit-btn"
    data-bs-toggle="modal"
    data-bs-target="#editBuilderModal"
    data-id=" ' . $row['id'] . '"
    data-name=" ' . htmlspecialchars($row['builder_name']) . '"
    data-contact=" ' . htmlspecialchars($row['builder_contact']) . '"
    data-email=" ' . htmlspecialchars($row['builder_email']) . '"
    data-company=" ' . htmlspecialchars($row['company_name']) . ' "
    style = "border:none;" >
    🖉
</button>

                                    </td>
                                   <td>
  <input type="checkbox" class="form-check-input active-checkbox"
         data-id="' . $row['id'] . '" ' . ($row['is_active'] === 'Yes' ? 'checked' : '') . '>
</td>
                                </tr>';
                                    }
                                }
                                ?>
                                <!-- checkbox -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const builderId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view-builders.php', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/x-www-form-urlencoded'
                                                        },
                                                        body: `id=${builderId}&is_active=${isActive}`
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


                            </tbody>
                        </table>
                        <?php
                        include '../PhpFiles/connection.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['is_active'])) {
                            $id = $_POST['id'];
                            $is_active = ($_POST['is_active'] === 'Yes') ? 'Yes' : 'No';

                            $stmt = $conn->prepare("UPDATE tbl_manage_builders SET is_active = ? WHERE id = ?");
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


                        <!-- <input class="form-check-input" type="checkbox" checked name="builder_active" 
                                    value="Yes" data-id=" '.$row['id'] .'   '.$row['is_active'] === 'Yes' .'
                                    "> -->
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

                    <!-- Add Builder Modal -->
                    <div class="modal fade" id="addBuilderModal" tabindex="-1" aria-labelledby="addBuilderModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="addBuilderForm" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Builder</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="builder_name" class="form-label">Builder Name</label>
                                            <input type="text" class="form-control" id="builder_name" placeholder="Enter Builder Name" name="builder_name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="builder_contact" class="form-label">Builder Contact</label>
                                            <input type="tel" class="form-control" id="builder_contact" placeholder="Enter Builder Contact" name="builder_contact"
                                                pattern="[0-9]{10}" maxlength="10" oninput="validateMobile(this)" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="builder_email" class="form-label">Builder Email</label>
                                            <input type="email" class="form-control" id="builder_email" placeholder="Enter Builder Email" name="builder_email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company_name" placeholder="Enter Builder Company Name" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" type="submit" id="addBuilderBtn" name="add_builder">Add</button>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- add-btn -->
                    <?php
                    include '../PhpFiles/connection.php';

                    if (isset($_POST['add_builder'])) {
                        $builder_name = mysqli_real_escape_string($conn, $_POST['builder_name']);
                        $builder_contact = mysqli_real_escape_string($conn, $_POST['builder_contact']);
                        $builder_email = mysqli_real_escape_string($conn, $_POST['builder_email']);
                        $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);

                        // Manually calculate next uid
                        $uid = uniqid('builder_',true);

                        $query = "INSERT INTO `tbl_manage_builders` (`uid`, `builder_name`, `builder_contact`, `builder_email`, `company_name`,`is_active`) VALUES ('$uid', '$builder_name', '$builder_contact', '$builder_email', '$company_name','1') ";

                        if (mysqli_query($conn, $query)) {
                            echo "<script>alert('Builder added successfully'); window.location.href='view-builders.php';</script>";
                        } else {
                            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
                        }
                    }
                    ?>
                    <!-- Edit Builder Modal -->
                    <div class="modal fade" id="editBuilderModal" tabindex="-1" aria-labelledby="editBuilderModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="editBuilderForm" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editBuilderModalLabel">Edit Builder</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="edit_id" name="edit_id">
                                        <div class="mb-3">
                                            <label for="edit_name" class="form-label">Builder Name</label>
                                            <input type="text" class="form-control" id="edit_name" name="edit_name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_contact" class="form-label">Builder Contact</label>
                                            <input type="tel" class="form-control" id="edit_contact" name="edit_contact" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_email" class="form-label">Builder Email</label>
                                            <input type="email" class="form-control" id="edit_email" name="edit_email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_company" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="edit_company" name="edit_company" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="edit_builder" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- edit -->
                    <?php
                    include '../PhpFiles/connection.php';

                    if (isset($_POST['edit_builder'])) {
                        $id = intval($_POST['edit_id']);
                        $name = mysqli_real_escape_string($conn, $_POST['edit_name']);
                        $contact = mysqli_real_escape_string($conn, $_POST['edit_contact']);
                        $email = mysqli_real_escape_string($conn, $_POST['edit_email']);
                        $company = mysqli_real_escape_string($conn, $_POST['edit_company']);

                        if ($id > 0) {
                            $query = "UPDATE tbl_manage_builders SET 
            builder_name = '$name', 
            builder_contact = '$contact', 
            builder_email = '$email', 
            company_name = '$company'
            WHERE id = $id";

                            if (mysqli_query($conn, $query)) {
                                echo "<script>alert('Builder updated successfully'); window.location.href='view-builders.php';</script>";
                            } else {
                                echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='view-builders.php';</script>";
                            }
                        } else {
                            echo "<script>alert('Invalid ID provided'); window.location.href='view-builders.php';</script>";
                        }
                    }
                    ?>

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
    <!-- Include List.js -->
    <!-- List.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <!-- Bootstrap Bundle with Popper (REQUIRED) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>




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

    <!-- <script>
function fillEditForm(id, name, contact, email, company) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_contact').value = contact;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_company').value = company;
}
</script> -->


    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('edit_id').value = button.getAttribute('data-id');
                document.getElementById('edit_name').value = button.getAttribute('data-name');
                document.getElementById('edit_contact').value = button.getAttribute('data-contact');
                document.getElementById('edit_email').value = button.getAttribute('data-email');
                document.getElementById('edit_company').value = button.getAttribute('data-company');

            });
        });
    </script>




</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>