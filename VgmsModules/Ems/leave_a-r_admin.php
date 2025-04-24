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
  <title>Leave accept and reject admin</title>

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

        


<main class="main" id="top">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <!-- Title Section -->
          <div class="text-center mb-5">
            <i class="bi bi-clipboard-check" style="font-size: 2.5rem; color: #0d6efd;"></i>
            <h2 class="fw-bold mt-2">Leave Requests Management</h2>
            <p class="text-muted">Approve or reject employee leave requests with ease.</p>
          </div>

          <!-- Leave Requests Table -->
          <table class="table table-bordered table-hover">
            <thead class="table-light">
              <tr>
                <th scope="col">Employee Name</th>
                <th scope="col">Leave Type</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Reason</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Sample Leave Request Row -->
              <tr id="leaveRequest1">
                <td>Jane Doe</td>
                <td>Casual Leave</td>
                <td>2025-05-01</td>
                <td>2025-05-03</td>
                <td>Personal matter</td>
                <td>
                  <div class="d-flex justify-content-start">
                    <button class="btn btn-outline-success me-3" id="approveBtn1">
                      <i class="bi bi-check-circle me-1"></i> Approve
                    </button>
                    <button class="btn btn-outline-danger" id="rejectBtn1">
                      <i class="bi bi-x-circle me-1"></i> Reject
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Another Sample Leave Request Row -->
              <tr id="leaveRequest2">
                <td>John Smith</td>
                <td>Sick Leave</td>
                <td>2025-05-05</td>
                <td>2025-05-07</td>
                <td>Medical leave</td>
                <td>
                  <div class="d-flex justify-content-start">
                    <button class="btn btn-outline-success me-3" id="approveBtn2">
                      <i class="bi bi-check-circle me-1"></i> Approve
                    </button>
                    <button class="btn btn-outline-danger" id="rejectBtn2">
                      <i class="bi bi-x-circle me-1"></i> Reject
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </main>

  <!-- Modal for Confirmation (Approve) -->
  <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="approveModalLabel">Confirm Approval</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to approve this leave request?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-outline-success" id="confirmApprove">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Confirmation (Reject) -->
  <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rejectModalLabel">Confirm Rejection</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to reject this leave request?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-outline-danger" id="confirmReject">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript for Bootstrap, GSAP, and Modal functionality -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script>
    // GSAP Animations
    gsap.from("table tbody tr", {
      opacity: 0,
      y: 30,
      duration: 1,
      stagger: 0.2,
      ease: "power2.out"
    });

    // Button Click Handlers for Approve and Reject actions
    document.getElementById('approveBtn1').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('approveModal'));
      modal.show();
      document.getElementById('confirmApprove').onclick = function() {
        gsap.to('#leaveRequest1', {
          backgroundColor: '#d4edda',
          duration: 0.5,
          onComplete: () => alert('Leave Approved for Jane Doe')
        });
        modal.hide();
      };
    });

    document.getElementById('rejectBtn1').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
      modal.show();
      document.getElementById('confirmReject').onclick = function() {
        gsap.to('#leaveRequest1', {
          backgroundColor: '#f8d7da',
          duration: 0.5,
          onComplete: () => alert('Leave Rejected for Jane Doe')
        });
        modal.hide();
      };
    });

    document.getElementById('approveBtn2').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('approveModal'));
      modal.show();
      document.getElementById('confirmApprove').onclick = function() {
        gsap.to('#leaveRequest2', {
          backgroundColor: '#d4edda',
          duration: 0.5,
          onComplete: () => alert('Leave Approved for John Smith')
        });
        modal.hide();
      };
    });

    document.getElementById('rejectBtn2').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
      modal.show();
      document.getElementById('confirmReject').onclick = function() {
        gsap.to('#leaveRequest2', {
          backgroundColor: '#f8d7da',
          duration: 0.5,
          onComplete: () => alert('Leave Rejected for John Smith')
        });
        modal.hide();
      };
    });
  </script>

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
  <!-- you js code goes here -->
</body>



</html>