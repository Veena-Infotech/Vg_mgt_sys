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
    <title>Registration Form</title>

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
        <div class="container shadow-lg rounded-4 p-4 mt-4">
    <h2 class="text-center mb-4 fw-bold text-primary">Veena Group Employee Onboarding</h2>
    
    <div class="progress mb-4 rounded-pill">
      <div id="progress-bar" class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 0%"></div>
    </div>

    <form id="onboardingForm" enctype="multipart/form-data">

      <!-- STEP TEMPLATE START -->
      <!-- Repeat this template per section with unique content -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">1. Personal Information</h5>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label">Full Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Salutation</label>
            <select class="form-select"><option>Mr.</option><option>Ms.</option><option>Mrs.</option><option>Dr.</option><option>Other</option></select></div>
          <div class="col-md-6"><label class="form-label">Father's Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Mother's Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Marital Status</label>
            <select class="form-select"><option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option></select></div>
          <div class="col-md-6"><label class="form-label">Spouse’s Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Date of Birth</label><input type="date" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Gender</label>
            <select class="form-select"><option>Male</option><option>Female</option><option>Other</option></select></div>
        </div>
        <div class="d-flex justify-content-end mt-4">
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 2. Contact Details -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">2. Contact Details</h5>
        <div class="mb-3"><label class="form-label">Primary Contact Number</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Alternative Contact Number</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Personal Email ID</label><input type="email" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Official Email ID</label><input type="email" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Current Residential Address</label><textarea class="form-control"></textarea></div>
        <div class="mb-3"><label class="form-label">Permanent Residential Address</label><textarea class="form-control"></textarea></div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 3. Identity and Banking Details -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">3. Identity and Banking Details</h5>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label">Aadhar Card Number</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">PAN Card Number</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Bank Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Bank Account Number</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">IFSC Code</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Branch Name & Address</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Do you have a UPI ID?</label>
            <select class="form-select"><option>Yes</option><option>No</option></select></div>
          <div class="col-md-6"><label class="form-label">If Yes, Enter UPI ID</label><input type="text" class="form-control"></div>
        </div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 4. Emergency & Nominee Details -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">4. Emergency & Nominee Details</h5>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label">Emergency Contact Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Emergency Relationship</label>
            <select class="form-select"><option>Father</option><option>Mother</option><option>Spouse</option><option>Other</option></select></div>
          <div class="col-md-6"><label class="form-label">Emergency Contact Number</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Nominee Name</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Nominee Relationship</label>
            <select class="form-select"><option>Spouse</option><option>Parent</option><option>Child</option><option>Other</option></select></div>
        </div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 5. Educational Background -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">5. Educational Background</h5>
        <div class="mb-3"><label class="form-label">Highest Educational Qualification</label>
          <select class="form-select"><option>10th</option><option>12th</option><option>Diploma</option><option>Bachelor’s</option><option>Master’s</option><option>PhD</option></select></div>
        <div class="mb-3"><label class="form-label">Institution Name</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Year of Passing</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Upload Education Certificates</label><input type="file" class="form-control"></div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 6. Employment History -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">6. Employment History</h5>
        <div class="mb-3"><label class="form-label">Have you worked previously?</label>
          <select class="form-select"><option>Yes</option><option>No</option></select></div>
        <div class="mb-3"><label class="form-label">Previous Employer Name</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Previous Job Role</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Employment Period</label><input type="text" class="form-control" placeholder="Start Date - End Date"></div>
        <div class="mb-3"><label class="form-label">Reason for Leaving</label><textarea class="form-control"></textarea></div>
        <div class="mb-3"><label class="form-label">Upload Documents</label><input type="file" class="form-control"></div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 7. Current Employment at WINA Group -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">7. Current Employment at WINA Group</h5>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label">Date of Joining</label><input type="date" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Current Job Role</label><input type="text" class="form-control"></div>
          <div class="col-md-4"><label class="form-label">Current Salary (CTC)</label><input type="text" class="form-control"></div>
          <div class="col-md-4"><label class="form-label">In-Hand Salary</label><input type="text" class="form-control"></div>
          <div class="col-md-4"><label class="form-label">Conveyance</label><input type="text" class="form-control"></div>
          <div class="col-md-6"><label class="form-label">Company Loan or Advance?</label>
            <select class="form-select"><option>Yes</option><option>No</option></select></div>
          <div class="col-md-6"><label class="form-label">If Yes, Loan Amount & Repayment</label><input type="text" class="form-control"></div>
        </div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 8. Work Policies & Leaves -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">8. Work Policies & Leaves</h5>
        <div class="mb-3"><label class="form-label">Official Work Timing</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Weekly Off Day</label>
          <select class="form-select"><option>Sunday</option><option>Saturday</option><option>Rotational</option></select></div>
        <div class="mb-3"><label class="form-label">Annual Leave Entitlement</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Leave Application Process</label><textarea class="form-control"></textarea></div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="button" class="btn btn-outline-primary next">Next</button>
        </div>
      </div>

      <!-- 9. Compliance -->
      <div class="step">
        <h5 class="fw-semibold text-secondary">9. Company Compliance & Declaration</h5>
        <div class="mb-3"><label class="form-label">Agree to Policies?</label>
          <select class="form-select"><option>Yes</option><option>No</option></select></div>
        <div class="mb-3"><label class="form-label">Willing to Provide Documents?</label>
          <select class="form-select"><option>Yes</option><option>No</option></select></div>
        <div class="mb-3"><label class="form-label">Any Additional Comments</label><textarea class="form-control"></textarea></div>
        <div class="d-flex justify-content-between mt-4">
          <button type="button" class="btn btn-outline-primary prev">Back</button>
          <button type="submit" class="btn btn-outline-success">Submit</button>
        </div>
      </div>

    </form>
  </div>


 <script>
    const steps = document.querySelectorAll('.step');
    const nextBtns = document.querySelectorAll('.next');
    const prevBtns = document.querySelectorAll('.prev');
    const progress = document.getElementById('progress-bar');
    let current = 0;

    function showStep(i) {
      steps.forEach((step, index) => step.style.display = 'none');
      steps[i].style.display = 'block';
      gsap.fromTo(steps[i], {opacity: 0, y: 50}, {opacity: 1, y: 0, duration: 0.5});
      progress.style.width = `${(i + 1) / steps.length * 100}%`;
    }

    nextBtns.forEach(btn => btn.addEventListener('click', () => {
      if (current < steps.length - 1) {
        current++;
        showStep(current);
      }
    }));

    prevBtns.forEach(btn => btn.addEventListener('click', () => {
      if (current > 0) {
        current--;
        showStep(current);
      }
    }));

    showStep(current);
  </script>


            <!-- Footer -->
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





    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>