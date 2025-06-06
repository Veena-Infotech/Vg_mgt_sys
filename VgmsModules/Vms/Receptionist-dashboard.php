
<?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
    <div id="successPopup" style="
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #d4edda;
        color: #155724;
        padding: 15px 25px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        font-size: 16px;
        z-index: 9999;
        display: none;
    ">
        Payment <?php echo htmlspecialchars($_GET['type']); ?>: Processed successfully!
    </div>
    <script>
        const popup = document.getElementById('successPopup');
        popup.style.display = 'block';
        setTimeout(() => {
            popup.style.display = 'none';
        }, 3000);
    </script>
<?php endif; ?>

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
      <h2 class="mb-1 lh-sm">Receptionist dashboard </h2>
      <p class="text-muted mb-4">Manage and monitor visitor appointments, employee meetings, and their current statuses in real time.</p>
      <hr class="hr" /><br>
      <div id="tableExample3"
        data-list='{"valueNames":["number", "name", "Empname", "meeting", "time"], "page":5, "pagination":true}'>
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3 class="mb-0">Meeting Details</h3>
          <div class="search-box me-auto" style="margin-left: 16rem;">
            <form class="position-relative">
              <input class="form-control search-input search form-control-sm" type="search" placeholder="Search"
                aria-label="Search">
              <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false"
                data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor"
                  d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                </path>
              </svg>
            </form>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-sm fs-9 mb-0">
            <thead>
              <tr>
                <th class="sort border-top border-translucent ps-3" data-sort="number">#</th>
                <th class="sort border-top border-translucent ps-3" data-sort="name">Visitor</th>
                <th class="sort border-top" data-sort="Empname">Employee</th>
                <th class="sort border-top" data-sort="meeting">Meeting Purpose</th>
                <th class="sort border-top" data-sort="time">Time</th>
                <th class="sort border-top" data-sort="status">Status</th>
                <th class="sort border-top" data-sort="payment">Payment</th>
                <th class="sort border-top" data-sort="payment_status"> Payment Status</th>
                <th class="sort text-end align-middle pe-3 border-top" scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody class="list">
              <?php
              include '../PhpFiles/connection.php';

              $today = date('Y-m-d');

              // Check if "view=all" is set in the URL, show all meetings, else show today's meetings
              if (isset($_GET['view']) && $_GET['view'] === 'all') {
                $sql = "SELECT m.id, CONCAT(v.f_name,' ', v.l_name) AS visitor_name, e.f_name AS emp_name, m.reason, m.time, m.meeting_status, m.amount, m.payment_status
                        FROM tbl_meeting_history m 
                        JOIN tbl_visitor v ON m.visitor_id = v.id 
                        JOIN tbl_emp e ON m.emp_id = e.id 
                        ORDER BY m.date DESC, m.time DESC";
                        
              } else {
                $sql = "SELECT m.id, 
                CONCAT(v.f_name,' ', v.l_name) AS visitor_name, e.f_name AS emp_name, m.reason, m.time, m.meeting_status, m.amount, m.payment_status
                        FROM tbl_meeting_history m 
                        JOIN tbl_visitor v ON m.visitor_id = v.id 
                        JOIN tbl_emp e ON m.emp_id = e.id 
                        WHERE m.date = '$today'
                        ORDER BY m.time DESC";
              }

              // Clone the same query used above, but only for counting rows
              if (isset($_GET['view']) && $_GET['view'] === 'all') {
                $count_query = "SELECT COUNT(*) AS total FROM tbl_meeting_history";
              } else {
                $count_query = "SELECT COUNT(*) AS total FROM tbl_meeting_history WHERE date = '$today'";
              }

              $count_result = mysqli_query($conn, $count_query);
              $count_row = mysqli_fetch_assoc($count_result);
              $total_items = $count_row['total'];

              
              $result = mysqli_query($conn, $sql);
              $counter = 1;

              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td class="align-middle ps-3 number"><?php echo $counter++; ?></td>
                  <td class="align-middle name"><?php echo htmlspecialchars($row['visitor_name']); ?></td>
                  <td class="align-middle Empname"><?php echo htmlspecialchars($row['emp_name']); ?></td>
                  <td class="align-middle meeting"><?php echo htmlspecialchars($row['reason']); ?></td>
                  <td class="align-middle time"><?php echo date("h:i A", strtotime($row['time'])); ?></td>

                  <td class="align-middle status">
                    <?php
                      $status = $row['meeting_status'];
                      $badge_class = match ($status) {
                        'Completed' => 'badge-phoenix-success',
                        'Rescheduled' => 'badge-phoenix-info',
                        'InProgress' => 'badge-phoenix-primary',
                        default => 'badge-phoenix-warning'
                      };
                    ?>
                    <div class="badge badge-phoenix fs-10 <?php echo $badge_class; ?>">
                      <span class="fw-bold"><?php echo htmlspecialchars($status); ?></span>
                    </div>
                  </td>

                  <td class="align-middle payment"><?php echo htmlspecialchars($row['amount']) ?? '—'; ?></td>
                  <td class="align-middle payment_status">
  <?php
    $payment_status = !empty($row['payment_status']) ? $row['payment_status'] : 'Unpaid';

    $payment_badge_class = match ($payment_status) {
      'Paid' => 'badge-phoenix-success',
      'Pending' => 'badge-phoenix-warning',
      'Unpaid' => 'badge-phoenix-danger', 
      default => 'badge-phoenix-secondary'
    };
  ?>
  <div class="badge badge-phoenix fs-10 <?php echo $payment_badge_class; ?>">
    <span class="fw-bold"><?php echo htmlspecialchars($payment_status); ?></span>
  </div>
</td>


                  <td class="align-middle text-end pe-3">
                    <div class="btn-reveal-trigger d-inline-block">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                      <form method="POST" action="../PhpFiles/update_status.php">
                        <input type="hidden" name="meeting_id" value="<?php echo $row['id']; ?>">
                          <?php
                            $allStatuses = ['Scheduled', 'InProgress', 'Completed', 'Rescheduled'];
                            foreach ($allStatuses as $option) {
                              if ($option !== $status) {
                                echo "<button class='dropdown-item' type='submit' name='status' value='$option'>Move to $option</button>";
                              }
                            }
                          ?>
                      </form>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="payment.php?meeting_id=<?php echo $row['id']; ?>">Receive Payment</a>
                      </div>
                    </div>
                  </td>

                </tr>

                <?php
              }
                ?>

            </tbody>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-between mt-3">
        <span class="d-none d-sm-inline-block" data-list-info="data-list-info">
          1 to <?php echo min(5, $total_items); ?> 
          <span class="text-body-tertiary"> Items of </span> 
          <?php echo $total_items; ?>
        </span>

          <a href="../Vms/MeetingHistory.php">View History</a>

          <div class="d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg
                class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                </path>
              </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
            <ul class="mb-0 pagination">
              <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li>
              <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
              <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
              <li class="disabled"><button class="page" type="button">...</button></li>
            </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right"
                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                <path fill="currentColor"
                  d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                </path>
              </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
  <script>
    // Animate dashboard heading
    gsap.from(".content h2", {
      y: -50,
      opacity: 0,
      duration: 1,
      ease: "power2.out"
    });

    // Animate subheading
    gsap.from(".content h3", {
      y: -30,
      opacity: 0,
      delay: 0.3,
      duration: 1
    });

    // Animate search box
    gsap.from(".search-box", {
      scale: 0.8,
      opacity: 0,
      delay: 0.5,
      duration: 0.8
    });

    // ✅ Animate table header (thead)
    gsap.from("thead", {
      opacity: 0,
      y: -20,
      duration: 0.6,
      delay: 0.7,
      ease: "power2.out"
    });

    // ✅ Animate table rows with opacity and clip-path
    gsap.from("tbody.list tr", {
      opacity: 0,
      clipPath: "inset(0 0 100% 0)",
      duration: 0.6,
      stagger: 0.1,
      delay: 0.8,
      ease: "power2.out"
    });

    // Animate badge status
    gsap.from(".badge", {
      scale: 0,
      opacity: 0,
      duration: 0.5,
      delay: 1,
      stagger: 0.2,
      ease: "back.out(1.7)"
    });
  </script>






  </script>



</body>




</html>