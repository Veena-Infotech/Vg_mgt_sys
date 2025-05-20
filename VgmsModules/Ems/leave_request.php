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
  <title>Leave request</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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
      <div class="container py-5">
        <!-- Left-Aligned Title Section with Icon -->
        <div class="mb-4 text-start">
          <h2 class="fw-bold d-flex align-items-center gap-2">
            <!-- <i class="bi bi-clipboard-check" style="color: #0d6efd;"></i> -->
            Leave Request Form
          </h2>
          <p class="text-muted ms-1">Submit your time-off request with the form below.</p>
        </div>
        <hr class="hr">

        <!-- Centered Form Section -->
        <div class="row justify-content-center mt-4">
          <div class="col-md-10 col-lg-8">
            <div class="border rounded shadow-sm p-4" id="formCard">
              <form id="leaveForm" method="post" action="../PhpFiles/apply_leave.php" enctype="multipart/form-data">
                <div class="row g-3">
                  <!-- Leave Type -->
                  <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-card-list me-1"></i>Leave Type</label>
                    <select class="form-select" name="leaveType" id="leaveType" required>
                      <option selected disabled value="">Select type</option>
                      <option value="casual">Casual Leave</option>
                      <option value="sick">Sick Leave</option>
                      <option value="emergency">Emergency Leave</option>
                      <option value="earned">Earned Leave</option>
                    </select>
                  </div>

                  <!-- From Date -->
                  <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-calendar-event me-1"></i>From Date</label>
                    <input type="date" class="form-control" name="fromDate" id="fromDate" required>
                  </div>

                  <!-- To Date -->
                  <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-calendar-check me-1"></i>To Date</label>
                    <input type="date" class="form-control" name="toDate" id="toDate" required>
                  </div>

                  <!-- Earned Leave Specific Date -->
                  <div class="col-md-6 d-none" id="earnedDateWrapper">
                    <label class="form-label"><i class="bi bi-calendar-week me-1"></i>Earned For Which Date</label>
                    <input type="date" class="form-control" name="earnedForDate" id="earnedForDate">
                  </div>

                  <!-- Reason -->
                  <div class="col-12">
                    <label class="form-label"><i class="bi bi-pencil-square me-1"></i>Reason</label>
                    <textarea class="form-control" name="leaveReason" rows="3" placeholder="Write your reason here..." required></textarea>
                  </div>

                  <div class="col-12 d-none" id="documentWrapper">
                    <label class="form-label"><i class="bi bi-file-earmark-arrow-up me-1"></i> Upload Supporting Document</label>
                    <input type="file" class="form-control" name="supportingDocument" id="supportingDocument">
                    <small class="text-muted">Required if leave date is in the past</small>
                  </div>


                  <!-- Submit -->
                  <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-outline-primary w-100">
                      <i class="bi bi-send-check me-1"></i>Submit Request
                    </button>
                  </div>
                </div>
              </form>

              <!-- Script for conditional behavior -->
              <script>
                const leaveType = document.getElementById('leaveType');
                const fromDate = document.getElementById('fromDate');
                const toDate = document.getElementById('toDate');
                const earnedWrapper = document.getElementById('earnedDateWrapper'); // ✅ Fixed here
                const earnedForDate = document.getElementById('earnedForDate');
                const documentWrapper = document.getElementById('documentWrapper');
                const supportingDocument = document.getElementById('supportingDocument');


                function setEarnedDateMax() {
                  const today = new Date();
                  today.setDate(today.getDate() - 1);
                  earnedForDate.max = today.toISOString().split('T')[0];
                  earnedForDate.removeAttribute('min');
                }

                function checkDocumentRequired() {
                  const selectedDate = new Date(fromDate.value);
                  const today = new Date();
                  today.setHours(0, 0, 0, 0);

                  if ((leaveType.value === 'sick' || leaveType.value === 'emergency') && selectedDate < today) {
                    supportingDocument.required = true;
                  } else {
                    supportingDocument.required = false;
                  }
                }

                function updateDateConstraints() {
                  const today = new Date();
                  today.setHours(0, 0, 0, 0);
                  const leave = leaveType.value;

                  // Handle earned leave
                  if (leave === 'earned') {
                    earnedWrapper.classList.remove('d-none');
                    setEarnedDateMax();
                    toDate.readOnly = true;
                    if (fromDate.value) {
                      toDate.value = fromDate.value;
                    }
                  } else {
                    earnedWrapper.classList.add('d-none');
                    earnedForDate.value = '';
                    toDate.readOnly = false;
                    toDate.value = '';
                  }

                  // Set fromDate constraints
                  if (leave === 'casual') {
                    const casualMin = new Date(today);
                    casualMin.setDate(casualMin.getDate() + 7);
                    fromDate.min = casualMin.toISOString().split('T')[0];
                  } else if (leave === 'sick' || leave === 'emergency') {
                    fromDate.removeAttribute('min');
                  } else {
                    fromDate.min = today.toISOString().split('T')[0];
                  }

                  // Show/hide document field
                  if (leave === 'sick' || leave === 'emergency') {
                    documentWrapper.classList.remove('d-none');
                    checkDocumentRequired();
                  } else {
                    documentWrapper.classList.add('d-none');
                    supportingDocument.required = false;
                  }
                }

                // On leave type change
                leaveType.addEventListener('change', updateDateConstraints);

                // On from date change
                fromDate.addEventListener('change', () => {
                  if (leaveType.value === 'earned') {
                    toDate.value = fromDate.value;
                  } else {
                    toDate.min = fromDate.value;
                  }
                  checkDocumentRequired();
                });
              </script>



            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>

    <!-- Footer -->
    <?php include("../../Components/footer.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script>
      gsap.from("#formCard", {
        opacity: 0,
        y: 60,
        duration: 1,
        ease: "power2.out"
      });
    </script>

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


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>