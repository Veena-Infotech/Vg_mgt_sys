<?php

include("../PhpFiles/connection.php");
$emp_id = isset($_GET['emp_id']) ? intval($_GET['emp_id']) : null;

$sql = "SELECT applied_on, from_date, to_date, leave_type, document_name, status 
            FROM tbl_leaves WHERE applied_by = 1 ORDER BY applied_on DESC";
if ($emp_id) {
  // Fetch leaves for specific employee
  $sql = "SELECT applied_on, from_date, to_date, leave_type, document_name, status 
            FROM tbl_leaves WHERE applied_by = 1 ORDER BY applied_on DESC";
} else {
  // Fetch all leaves
  $sql = "SELECT applied_on, from_date, to_date, leave_type, document_name, status 
            FROM tbl_leaves ORDER BY applied_on DESC";
}

$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>leave history</title>

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
  <link href="../../vendors/choices/choices.min.css" rel="stylesheet" />

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    <!-- change this to your navbar code link should be replaced properly -->
    <?php include_once('../../Components/navbar.php'); ?>
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
      <!-- your main contents goes here  with footer . -->


      <div class="container py-5">
        <div class="text-start mb-4">
          <h1 class="display-6 fw-bold">Leave History</h1>
          <p class="text-muted">View leave records for employees (Admin Access Only)</p>
          <hr class="hr">
        </div>

        <?php
        include '../PhpFiles/connection.php';

        // Fetch employee names
        $employeeOptions = "";
        $sql = "SELECT id, f_name, m_name, l_name FROM tbl_emp ORDER BY f_name";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          $fullName = trim($row['f_name'] . ' ' . $row['m_name'] . ' ' . $row['l_name']);
          $employeeOptions .= "<option value='" . $row['id'] . "'>" . htmlspecialchars($fullName) . "</option>";
        }
        ?>


      </div>

      <!-- Rest of the table code (unchanged logic) -->
      <div id="tableExample3" data-list="{&quot;valueNames&quot;:[&quot;apply&quot;,&quot;from&quot;,&quot;to&quot;,&quot;type&quot;,&quot;proof&quot;,&quot;status&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
        <!-- Dropdown and Search aligned horizontally -->
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
          <div class="form-floating" style="width: 250px;">
            <select class="form-select" id="employeeSelect" name="employee">
              <option selected disabled>Choose an employee</option>
              <?= $employeeOptions ?>
            </select>
            <label for="employeeSelect">Select Employee</label>
          </div>

          <!-- Search Box -->
          <div class="search-box" style="width: 250px;">
            <form class="position-relative">
              <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
              <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
              </svg>
            </form>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm fs-9 mb-0">
            <thead>
              <tr>
                <th class="sort border-top border-translucent ps-3" data-sort="apply">Applied On</th>
                <th class="sort border-top" data-sort="from">From</th>
                <th class="sort border-top" data-sort="to">To</th>
                <th class="sort border-top" data-sort="type">Type</th>
                <th class="sort border-top" data-sort="proof">Proof</th>
                <th class="sort text-end align-middle pe-0 border-top" data-sort="status">Status</th>
              </tr>
            </thead>
            <tbody id="leaveTableBody" class="list">
              <?php

              $emp_id = isset($_GET['emp_id']) ? intval($_GET['emp_id']) : null;

              if ($emp_id) {
                // Fetch leaves for specific employee
                $sql = "SELECT applied_on, from_date, to_date, leave_type, document_name, status 
            FROM tbl_leaves WHERE applied_by = $emp_id ORDER BY applied_on DESC";
              } else {
                // Fetch all leaves
                $sql = "SELECT applied_on, from_date, to_date, leave_type, document_name, status 
            FROM tbl_leaves ORDER BY applied_on DESC";
              }

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>
                <td class='apply align-middle ps-3'>" . htmlspecialchars($row['applied_on']) . "</td>
                <td class='from align-middle'>" . htmlspecialchars($row['from_date']) . "</td>
                <td class='to align-middle'>" . htmlspecialchars($row['to_date']) . "</td>
                <td class='type align-middle'>" . htmlspecialchars($row['leave_type']) . "</td>
                <td class='proof align-middle'>
                  <a href='../uploads/leavesProof/" . htmlspecialchars($row['document_name']) . "' target='_blank'>Proof</a>
                  (" . htmlspecialchars($row['document_name']) . ")
                </td>
                <td class='status align-middle text-end py-3 pe-3'>" . htmlspecialchars($row['status']) . "</td>
              </tr>";
                }
              } else {
                echo "<tr><td colspan='6' class='text-center'>No leave history found.</td></tr>";
              }
              ?>
            </tbody>



          </table>
        </div>
        <div class="d-flex justify-content-between mt-3">
          <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of </span>43</span>
          <div class="d-flex">
            <button class="page-link disabled" data-list-pagination="prev" disabled="">
              <svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
              </svg>
            </button>
            <ul class="mb-0 pagination">
              <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li>
              <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
              <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
              <li class="disabled"><button class="page" type="button">...</button></li>
            </ul>
            <button class="page-link pe-0" data-list-pagination="next">
              <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
              </svg>
            </button>
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
  <script src="../../vendors/popper/popper.min.js"></script>
  <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../vendors/is/is.min.js"></script>
  <script src="../../vendors/fontawesome/all.min.js"></script>
  <script src="../../vendors/lodash/lodash.min.js"></script>
  <script src="../../vendors/list.js/list.min.js"></script>
  <script src="../../vendors/feather-icons/feather.min.js"></script>
  <script src="../../vendors/dayjs/dayjs.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script src="../../vendors/choices/choices.min.js"></script>
  <!-- you js code goes here -->


  <!-- GSAP Animation Script -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script>
    // Page entrance animation
    gsap.from(".container", {
      opacity: 0,
      y: 30,
      duration: 1,
      ease: "power2.out"
    });






    // Load table with animation
    document.getElementById("loadHistory").addEventListener("click", () => {
      const table = document.getElementById("historyTable");
      table.style.display = "block";
      gsap.fromTo(table, {
        opacity: 0,
        y: 20
      }, {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: "power2.out"
      });
    });
  </script>







<script>
  document.getElementById('employeeSelect').addEventListener('change', function() {
    const empId = this.value;
    if(empId) {
      // Reload page with ?emp_id=empId
      window.location.href = window.location.pathname + '?emp_id=' + empId;
    }
  });

  // Optionally pre-select dropdown based on $emp_id from PHP
  <?php if ($emp_id): ?>
    document.getElementById('employeeSelect').value = <?= json_encode($emp_id) ?>;
  <?php endif; ?>
</script>


</body>

</html>