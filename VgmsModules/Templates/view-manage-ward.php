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
  <title>Manage Ward</title>

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
      <div class="row g-0 justify-content-between align-items-center h-100">

        <!-- Title -->
        <div style="width: 100%; text-align: center; margin: 20px 0;">
          <h3 style="margin: 0;">View/Manage Ward</h3>
        </div>
        <hr>

        <!-- ADD Ward Button & Modal -->
        <div>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addWardModal">
            ADD
          </button>

          <!-- Add Ward Modal -->
          <div class="modal fade" id="addWardModal" tabindex="-1" aria-labelledby="addWardLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="addWardLabel">Add Ward Name</h5>
                  <button type="button" class="btn-close p-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <form id="addWardForm" method="post">
                    <div class="mb-3">
                      <label for="ward_name" class="form-label">Name of the Ward</label>
                      <input type="text" class="form-control" id="ward_name" name="ward_name" placeholder="Enter Ward Name" required>
                    </div>
                    <input type="hidden" name="action" value="add_ward">
                  </form>
                </div>

                <div class="modal-footer">
                  <button class="btn btn-primary" name="add_btn" type="submit" form="addWardForm">ADD</button>
                  <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- add data operation -->
                     <?php
                     include '../PhpFiles/connection.php';

                     if(isset($_POST['add_btn'])){
                     $ward_name = $_POST['ward_name'];

                    //  Generate unique id
                    $uid = uniqid('ward_',true);

                     $query = "INSERT INTO `tbl_ward_details` (`uid`, `ward_name`, `is_active`) VALUES ('$uid', '$ward_name', 'Yes')";
                     $result = mysqli_query($conn, $query) or die("Query Unsuccesssful".mysqli_error($conn));
                     if($result){
                        echo '<script> alert("Data added successfully"); window.location.href = "view-manage-ward.php" </script>';
                     }else{
                        echo '<script> alert("Failed : '.mysqli_error($conn).'"); window.locaion.href = "view-manage-ward.php" </script>';
                     }
                    }
                     ?>

        <!-- Table Section -->
        <div id="tableWrapper" style="width: 100%; padding-top: 20px;"
          data-list='{"valueNames": ["id", "name"], "page": 5, "pagination": true}'>

          <!-- Search -->
          <div class="search-box mb-3 mx-auto">
            <form class="position-relative">
              <input class="form-control form-control-sm search-input search" type="search" placeholder="Search" aria-label="Search">
              <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <!-- <path fill="currentColor"
                  d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
               -->
              </svg>
            </form>
          </div>

          <!-- Table -->
          <div class="table-responsive">
            <table class="table table-striped table-sm fs-9 mb-0">
              <thead>
                <tr>
                  <th class="border-top border-translucent ps-3" data-sort="id">Id</th>
                  <th class="border-top" data-sort="name">Ward Name</th>
                  <th class="border-top">Edit</th>
                  <th class="border-top">Action</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                                include '../PhpFiles/connection.php';
                                $query = "SELECT * FROM tbl_ward_details";
                                $result = mysqli_query($conn, $query) or die("Query Unsuccessful".mysqli_error($conn));
                                if($result){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<tr>
                                    <td class="align-middle ps-3 id">'.$row['id'].'</td>
                                    <td class="align-middle name">'.$row['ward_name'].'</td>
                                    <td class="align-middle">
                                        <button class="btn btn-sm btn-outline-primary editWardBtn"
        data-bs-toggle="modal"
        data-bs-target="#editWardModal"
        data-id='.$row['id'].'
        data-ward_name="'.htmlspecialchars($row['ward_name'], ENT_QUOTES).'"
        style="border: none;">🖉</button>
                                    </td>
                                    <td class="align-middle">
                                         <input type="checkbox" class="form-check-input active-checkbox"
         data-id="' . $row['id'] . '" ' . ($row['is_active'] === 'Yes' ? 'checked' : '') . '>
                                    </td>
                                </tr>';
                                    }
                                }
                                ?>
              </tbody>
            </table>
          </div>
          <!-- checkbox -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const builderId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view-manage-ward.php', {
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

                         <!-- checkbox -->
                        <?php
                        include '../PhpFiles/connection.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['is_active'])) {
                            $id = $_POST['id'];
                            $is_active = ($_POST['is_active'] === 'Yes') ? 'Yes' : 'No';

                            $stmt = $conn->prepare("UPDATE tbl_ward_details SET is_active = ? WHERE id = ?");
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


          <!-- Pagination -->
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

        <!-- Edit Ward Modal -->
        <div class="modal fade" id="editWardModal" tabindex="-1" aria-labelledby="editWardLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="editWardLabel">Edit Ward</h5>
                <button type="button" class="btn-close p-1" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <form id="editWardForm" method="post">
                  <div class="mb-3">
                    <label for="edit_ward_name" class="form-label">Name of the Ward</label>
                    <input class="form-control" type="text" id="edit_ward_name" name="edit_ward_name" placeholder="Enter Ward Name" required>
                  </div>
                  <input type="hidden" id="edit_id" name="edit_id">
                </form>
              </div>

              <div class="modal-footer">
                <button class="btn btn-primary" name="edit_ward_btn" type="submit" form="editWardForm">EDIT</button>
                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- edit -->
                <?php
include '../PhpFiles/connection.php';

if (isset($_POST['edit_ward_btn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['edit_id']);
    $ward_name = mysqli_real_escape_string($conn, $_POST['edit_ward_name']);

    $query = "UPDATE tbl_ward_details SET ward_name = '$ward_name' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Ward updated successfully'); window.location.href = 'view-manage-ward.php';</script>";
    } else {
        echo "<script>alert('Update failed: " . mysqli_error($conn) . "'); window.location.href = 'view-manage-ward.php' </script>";
    }
}
?>
<!-- edit form data display-->
 <script>
 document.addEventListener('DOMContentLoaded', function () {
  const editButtons = document.querySelectorAll('.editWardBtn');

  editButtons.forEach(button => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');
      const wardName = button.getAttribute('data-ward_name');

      document.getElementById('edit_id').value = id;
      document.getElementById('edit_ward_name').value = wardName;
    });
  });
});

 </script>
      <br>

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





  </script>



</body>




</html>