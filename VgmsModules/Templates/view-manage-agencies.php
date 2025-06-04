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
    <title>PRMS | View/Manage Agencies</title>

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
                    <h3 style="margin: 0;">View/Manage Agencies</h3>
                </div>
                <hr>

                <!-- button to add Agencies Name -->
                <div>

                    <!-- ADD Button -->

                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#verticallyCentered">
                        ADD
                    </button>

                    <div class="modal fade" id="verticallyCentered" tabindex="-1"
                        aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="verticallyCenteredModalLabel">Add Agency</h5>
                                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="add_agency" method="post">



                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Agent Name</label>
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Agent Name" required>

                                                <label for="email" class="form-label mt-3">Agency Email</label>
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Enter Agency Email" required>

                                                <label for="contact" class="form-label mt-3">Agency Contact</label>
                                                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter Agency contact" pattern="[0-9]{10}" maxlength="10" oninput="validateMobile(this)" required>

                                                <label for="company" class="form-label mt-3">Agency Name</label>
                                                <input class="form-control" type="text" id="company" name="company" placeholder="Enter Agency Name" required>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" form="add_agency" name="add_agency">ADD</button>
                                    <button class="btn btn-outline-primary" type="button"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add operation  -->
                    <?php
include '../PhpFiles/connection.php';

if (isset($_POST['add_agency'])) {
    $agency_name = mysqli_real_escape_string($conn, $_POST['name']);
    $agency_email = mysqli_real_escape_string($conn, $_POST['email']);
    $agency_contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);

    // Generate a unique alphanumeric UID
    $uid = uniqid('agencies_', true); // e.g. agencies_662022fb7855e.48901684

$query = "INSERT INTO `tbl_manage_agencies` (`uid`, `agencies_name`, `email`, `person_name`,`contact`,`is_active`) VALUES ('$uid', '$agency_name', '$agency_email', '$company','$agency_contact','1');";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Agency added successfully'); window.location.href='view-manage-agencies.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

                </div>

                <!-- Container for the Table -->
                <div id="tableExample3" data-list="{&quot;valueNames&quot;:[&quot;id&quot;,&quot;name&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}" style="width: 100%; padding-top: 20px;">
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search" id="search-box" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">

                            </svg>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-3" data-sort="id">Id</th>
                                    <th class="sort border-top" data-sort="name">Agencies Name</th>
                                    <th class="sort border-top" data-sort="name">Email</th>
                                    <th class="sort border-top" data-sort="name">contact</th>
                                    <th class="sort border-top" data-sort="name">Person name</th>
                                    <th class="sort border-top" data-sort="name">Edit</th>
                                    <th class="sort border-top" data-sort="name">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php
                                include '../PhpFiles/connection.php';

                                $query = "SELECT * FROM tbl_manage_agencies";
                                $result = mysqli_query($conn, $query) or die("Query Unsuccessful".mysqli_error($conn));
                                $count = 1;
                                if($result && mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '
                                        <tr>
                                    <td class="id">'.$count++.'</td>
                                    <td class="agencies_name">'.$row['agencies_name'].'</td>
                                    <td class="email">'.$row['email'].'</td>
                                    <td class="contact">'.$row['contact'].'</td>
                                    <td class="person_name">'.$row['person_name'].' </td>
                                    <td class="name">
                                             <button 
    class="btn btn-sm btn-outline-primary edit-btn"
    data-bs-toggle="modal"
    data-bs-target="#editAgency"
    data-id="'.$row['id'].'"
    data-person-name="'. htmlspecialchars($row['person_name'], ENT_QUOTES).'"
    data-email="'. htmlspecialchars($row['email'], ENT_QUOTES) .'"
    data-contact="'. htmlspecialchars($row['contact'], ENT_QUOTES).'"
    data-agencies-name=" '. htmlspecialchars($row['agencies_name'], ENT_QUOTES) .'"
    style="border: none;">
    🖉
</button>

                                    </td>
                                    <td class="name">
                                         <input type="checkbox" class="form-check-input active-checkbox"
         data-id="' . $row['id'] . '" ' . ($row['is_active'] === 'Yes' ? 'checked' : '') . '>
                                    </td>
                                </tr>
                                ';
                                    }
                                }
                                ?>
                            </tbody>
                            <!-- checkbox -->
 <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const agencyId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view-manage-agencies.php', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/x-www-form-urlencoded'
                                                        },
                                                        body: `id=${agencyId}&is_active=${isActive}`
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
                            <!-- checkbox -->
                    <?php
                        include '../PhpFiles/connection.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['is_active'])) {
                            $id = $_POST['id'];
                            $is_active = ($_POST['is_active'] === 'Yes') ? 'Yes' : 'No';

                            $stmt = $conn->prepare("UPDATE tbl_manage_agencies SET is_active = ? WHERE id = ?");
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

                        </table>
                    </div>


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

                <!-- Edit Modal -->
                <!-- <div class="modal fade" id="editAgency" tabindex="-1" aria-labelledby="editAgencyLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="editAgencyForm" method="POST">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAgencyLabel">Edit Agency</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" id="edit_id" name="edit_id">

                                    <div class="mb-3">
                                        <label for="edit_name" class="form-label">Name of the Person</label>
                                        <input class="form-control" type="text" id="edit_name" name="edit_name" placeholder="Enter Agent Name" required>

                                        <label for="edit_email" class="form-label mt-3">Agency Email</label>
                                        <input class="form-control" type="email" id="edit_email" name="edit_email" placeholder="Enter Agency Email" required>


                                        <label for="edit_contact" class="form-label">Agency Contact</label>
                                        <input type="tel" class="form-control" id="edit_contact" name="edit_contact" placeholder="Enter Agency contact" pattern="[0-9]{10}" maxlength="10" oninput="validateMobile(this)" required>



                                        <label for="edit_company" class="form-label mt-3">Agency Company Name</label>
                                        <input class="form-control" type="text" id="edit_agencies_name" name="edit_agencies_name" placeholder="Enter Agency Name" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="update_agency" class="btn btn-primary">Save Changes</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                
                        
                <div class="modal fade" id="editAgency" tabindex="-1" aria-labelledby="editAgencyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <form id="editAgencyForm" method="POST">

                <div class="modal-header">
                    <h5 class="modal-title" id="editAgencyLabel">Edit Agency</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="edit_id">

                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Name of the Person</label>
                        <input class="form-control" type="text" id="edit_name" name="edit_name" placeholder="Enter Agent Name" required>

                        <label for="edit_email" class="form-label mt-3">Agency Email</label>
                        <input class="form-control" type="email" id="edit_email" name="edit_email" placeholder="Enter Agency Email" required>

                        <label for="edit_contact" class="form-label mt-3">Agency Contact</label>
                        <input type="tel" class="form-control" id="edit_contact" name="edit_contact" placeholder="Enter Agency Contact" pattern="[0-9]{10}" maxlength="10" required>

                        <label for="edit_agencies_name" class="form-label mt-3">Agency Company Name</label>
                        <input class="form-control" type="text" id="edit_agencies_name" name="edit_agencies_name" placeholder="Enter Agency Name" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="update_agency" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>

            </form> -->

            <form id="editAgencyForm" method="POST">
    <div class="modal-header">
        <h5 class="modal-title" id="editAgencyLabel">Edit Agency</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <div class="modal-body">
        <input type="hidden" id="edit_id" name="edit_id">

        <div class="mb-3">
            <label for="edit_name" class="form-label">Name of the Person</label>
            <input type="text" class="form-control" id="edit_name" name="edit_name" required>

            <label for="edit_email" class="form-label mt-3">Agency Email</label>
            <input type="email" class="form-control" id="edit_email" name="edit_email" required>

            <label for="edit_contact" class="form-label mt-3">Agency Contact</label>
            <input type="tel" class="form-control" id="edit_contact" name="edit_contact" maxlength="10" required>

            <label for="edit_agencies_name" class="form-label mt-3">Agency Company Name</label>
            <input type="text" class="form-control" id="edit_agencies_name" name="edit_agencies_name" required>
        </div>
    </div>

    <div class="modal-footer">
        <button type="submit" name="update_agency" class="btn btn-primary">Save Changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    </div>
</form>




            <!-- Update operation -->
<?php
                    include '../PhpFiles/connection.php';

                    if (isset($_POST['update_agency'])) {
                        $id = intval($_POST['edit_id']);
                        $person_name = mysqli_real_escape_string($conn, $_POST['edit_name']);
                        $contact = mysqli_real_escape_string($conn, $_POST['edit_contact']);
                        $email = mysqli_real_escape_string($conn, $_POST['edit_email']);
                        $company = mysqli_real_escape_string($conn, $_POST['edit_agencies_name']);

                        if ($id > 0) {
                            $query = "UPDATE tbl_manage_agencies SET 
            agencies_name = '$company', 
            contact = '$contact', 
            email = '$email', 
            person_name = '$person_name'
            WHERE id = $id";

                            if (mysqli_query($conn, $query)) {
                                echo "<script>alert('Builder updated successfully'); window.location.href='view-manage-agencies.php';</script>";
                            } else {
                                echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='view-manage-agencies.php';</script>";
                            }
                        } else {
                            echo "<script>alert('Invalid ID provided'); window.location.href='view-manage-agencies.php';</script>";
                        }
                    } 
            
                    ?>
                        
        </div>
    </div>
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

<!-- displaying the data in edit form -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // Add event delegation in case pagination changes DOM
  document.body.addEventListener("click", function (e) {
    if (e.target.classList.contains("edit-btn")) {
      const btn = e.target;

      // Read data attributes
      const id = btn.getAttribute("data-id");
      const name = btn.getAttribute("data-person-name");
      const email = btn.getAttribute("data-email");
      const contact = btn.getAttribute("data-contact");
      const agency = btn.getAttribute("data-agencies-name");

      // Populate modal fields
      document.getElementById("edit_id").value = id;
      document.getElementById("edit_name").value = name;
      document.getElementById("edit_email").value = email;
      document.getElementById("edit_contact").value = contact;
      document.getElementById("edit_agencies_name").value = agency;
    }
  });
});
</script>

<!-- search -->
    <script>
        document.getElementById('search-box').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll('#data-table tbody tr');

            rows.forEach(row => {
                const id = row.querySelector('.id')?.textContent.toLowerCase() || '';
                const company = row.querySelector('.company')?.textContent.toLowerCase() || '';
                const name = row.querySelector('.name')?.textContent.toLowerCase() || '';
                const email = row.querySelector('.email')?.textContent.toLowerCase() || '';

                const isMatch =
                    id.includes(searchValue) ||
                    company.includes(searchValue) ||
                    name.includes(searchValue) ||
                    email.includes(searchValue);

                row.style.display = isMatch ? '' : 'none';
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