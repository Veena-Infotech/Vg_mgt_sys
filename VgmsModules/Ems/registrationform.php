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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../../unicons.iconscout.com/release/v4.0.8/css/line.css"> -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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
      <div class="container shadow-lg rounded-4 p-4 mt-4 mb-2">
        <h2 class="mb-1 fw-bold text-primary">Veena Group Employee Onboarding</h2>

        <div class="progress mb-4 rounded-pill">
          <div id="progress-bar" class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 0%">
          </div>
        </div>

        <!-- //id="onboardingForm"; -->
        <form id="registerForm" onsubmit="return validate(event)">

          <!-- STEP TEMPLATE START -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">1. Personal Information</h5>
            <div class="row g-3">

              <div class="col-md-6">
                <label class="form-label">Salutation</label>
                <select class="form-select" name="salutation" required>
                  <option value="">Select</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Dr.">Dr.</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="col-md-6">
                <label class="form-label">First Name</label>
                <input type="text" id="f_name" class="form-control" name="f_name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Middle Name</label>
                <input type="text" id="m_name" class="form-control" name="m_name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Name</label>
                <input type="text" id="l_name" class="form-control" name="l_name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Father's Name</label>
                <input type="text" id="fatherName" class="form-control" name="fatherName" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Mother's Name</label>
                <input type="text" id="motherName" class="form-control" name="motherName" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Marital Status</label>
                <select class="form-select" name="maritalStatus" required>
                  <option value="">Select</option>
                  <option>Single</option>
                  <option>Married</option>
                  <option>Divorced</option>
                  <option>Widowed</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Spouse’s Name</label>
                <input type="text" id="spouseName" class="form-control" name="spouseName">
              </div>
              <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" id="dob" class="form-control" name="dob" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender" required>
                  <option value="">Select</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <button type="button" class="btn btn-outline-primary next">Next</button>
            </div>
          </div>
          <!-- STEP TEMPLATE END -->


          <!-- 2. Contact Details -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">2. Contact Details</h5>
            <div class="mb-3">
              <label class="form-label">Primary Contact Number</label>
              <input type="text" id="primary_phone_no" class="form-control" name="primary_phone_no" required
                title="Please enter a valid 10-digit phone number.">
            </div>
            <div class="mb-3">
              <label class="form-label">Alternative Contact Number</label>
              <input type="text" id="alternative_phone_no" class="form-control" name="alternative_phone_no" required
                title="Please enter a valid 10-digit phone number.">
            </div>
            <div class="mb-3">
              <label class="form-label">Personal Email ID</label>
              <input type="email" id="personalEmail" class="form-control" name="personalEmail" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Official Email ID</label>
              <input type="email" id="officialEmail" class="form-control" name="officialEmail">
            </div>
            <div class="mb-3">
              <label class="form-label">Current Residential Address</label>
              <textarea class="form-control" id="currentAddress" name="currentAddress" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Permanent Residential Address</label>
              <textarea class="form-control" id="permanentAddress" name="permanentAddress" required></textarea>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <!-- <button type="button" class="btn btn-outline-primary next" onclick="if(step2()) goToStep3();">Next</button> -->
              <!-- <button type="button" class="btn btn-outline-primary next" onclick="if (step2()) showStep(3)">Next</button> -->
              <button type="button" class="btn btn-outline-primary next" onclick="step2()">Next</button>

            </div>
          </div>



          <!-- 3. Identity and Banking Details -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">3. Identity and Banking Details</h5>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Aadhar Card Number</label>
                <input type="text" id="aadharcard_no" class="form-control" name="aadharcard_no" required
                  >
              </div>
              <div class="col-md-6">
                <label class="form-label">PAN Card Number</label>
                <input type="text" id="panCard" class="form-control" name="panCard" required
                   >
              </div>
              <div class="col-md-6">
                <label class="form-label">Bank Name</label>
                <input type="text" id="bankName" class="form-control" name="bankName" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Bank Account Number</label>
                <input type="text" id="bank_acc_no" class="form-control" name="bank_acc_no" required
                  >
              </div>
              <div class="col-md-6">
                <label class="form-label">IFSC Code</label>
                <input type="text" id="ifsc_code" class="form-control" name="ifsc_code" required
                  >
              </div>
              <div class="col-md-6">
                <label class="form-label">Branch Name</label>
                <input type="text" id="branchName" class="form-control" name="branchName" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Branch Address</label>
                <input type="text" id="branchAddress" class="form-control" name="branchAddress" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Do you have a UPI ID?</label>
                <select class="form-select" id="upiOption" name="upiOption" required>
                  <option value="">Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">If Yes, Enter UPI ID</label>
                <input type="text" id="upiId" class="form-control" name="upiId"s>
              </div>
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
              <div class="col-md-6">
                <label class="form-label">Emergency Contact Name</label>
                <input type="text" id="emergencyContactName" class="form-control" name="emergencyContactName" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Emergency Relationship</label>
                <select class="form-select" id="emergencyRelationship" name="emergencyRelationship" required>
                  <option value="">Select</option>
                  <option>Father</option>
                  <option>Mother</option>
                  <option>Spouse</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Emergency Contact Number</label>
                <input type="text" id="emergency_phone_no" class="form-control" name="emergency_phone_no" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nominee Name</label>
                <input type="text" id="nomineeName" class="form-control" name="nomineeName" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nominee Relationship</label>
                <select class="form-select" id="nomineeRelationship" name="nomineeRelationship">
                  <option value="">Select</option>
                  <option>Spouse</option>
                  <option>Parent</option>
                  <option>Child</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <button type="button" class="btn btn-outline-primary next">Next</button>
            </div>
          </div>



          <!-- 5. Educational Background -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">5. Educational Background</h5>
            <div class="mb-3">
              <label class="form-label">Highest Educational Qualification</label>
              <select class="form-select" name="highestQualification">
                <option>10th</option>
                <option>12th</option>
                <option>Diploma</option>
                <option>Bachelor’s</option>
                <option>Master’s</option>
                <option>PhD</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Institution Name</label>
              <input type="text" class="form-control" name="institutionName">
            </div>
            <div class="mb-3">
              <label class="form-label">Year of Passing</label>
              <input type="text" class="form-control" name="yearOfPassing">
            </div>
            <div class="mb-3">
              <label class="form-label">Upload Education Certificates</label>
              <input type="file" class="form-control" name="educationCertificates">
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <button type="button" class="btn btn-outline-primary next">Next</button>
            </div>
          </div>


          <!-- 6. Employment History -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">6. Employment History</h5>
            <div class="mb-3">
              <label class="form-label">Have you worked previously?</label>
              <select class="form-select" name="workedPreviously">
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Previous Employer Name</label>
              <input type="text" class="form-control" name="previousEmployerName">
            </div>
            <div class="mb-3">
              <label class="form-label">Previous Job Role</label>
              <input type="text" class="form-control" name="previousJobRole" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Employment Period</label>
              <input type="date" class="form-control" name="empPeriodStartDate" placeholder="Start Date"
                required>
              <input type="date" class="form-control" name="empPeriodEndDate" placeholder="End Date"
                required>
            </div>
            <div class="mb-3">
              <label class="form-label">Reason for Leaving</label>
              <textarea class="form-control" name="reasonForLeaving" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Upload Documents</label>
              <input type="file" class="form-control" name="employmentDocuments">
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <button type="button" class="btn btn-outline-primary next">Next</button>
            </div>
          </div>


          <!-- 7. Current Employment at WINA Group -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">7. Current Employment</h5>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Date of Joining</label>
                <input type="date" class="form-control" name="dateOfJoining">
              </div>
              <div class="col-md-6">
                <label class="form-label">Current Job Role</label>
                <input type="text" class="form-control" name="currentJobRole">
              </div>
              <div class="col-md-4">
                <label class="form-label">Current Salary (CTC)</label>
                <input type="text" class="form-control" name="currentSalary">
              </div>
              <div class="col-md-4">
                <label class="form-label">In-Hand Salary</label>
                <input type="text" class="form-control" name="inHandSalary">
              </div>
              <div class="col-md-4">
                <label class="form-label">Conveyance</label>
                <input type="text" class="form-control" name="conveyance">
              </div>
              <div class="col-md-6">
                <label class="form-label">Company Loan or Advance?</label>
                <select class="form-select" name="companyLoan">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">If Yes, Loan Amount & Repayment</label>
                <input type="text" class="form-control" name="loanAmountRepayment">
              </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <button type="button" class="btn btn-outline-primary next">Next</button>
            </div>
          </div>


          <!-- 8. Work Policies & Leaves -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">8. Work Policies & Leaves</h5>
            <div class="mb-3">
              <label class="form-label">Official Work Timing</label>
              <select class="form-select" name="workTiming">
                <option>9:00 AM - 6:00 PM</option>
                <option>10:00 AM - 7:00 PM</option>
                <option>11:00 AM - 8:00 PM</option>
                <option>Flexible</option>
                <option>Other</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Weekly Off Day</label>
              <select class="form-select" name="offDay">
                <option>Sunday</option>
                <option>Saturday</option>
                <option>Rotational</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Annual Leave Entitlement</label>
              <input type="text" class="form-control" name="annualLeave">
            </div>
            <div class="mb-3">
              <label class="form-label">Leave Application Process</label>
              <textarea class="form-control" name="leaveApplicationProcess"></textarea>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <button type="button" class="btn btn-outline-primary next">Next</button>
            </div>
          </div>


          <!-- 9. Compliance -->
          <div class="step">
            <h5 class="fw-semibold text-secondary">9. Company Compliance & Declaration</h5>
            <div class="mb-3">
              <label class="form-label">Agree to Policies?</label>
              <select class="form-select" name="agreeToPolicies" required>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Willing to Provide Documents?</label>
              <select class="form-select" name="willingToProvideDocuments">
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Any Additional Comments</label>
              <textarea class="form-control" name="additionalComments"></textarea>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-outline-primary prev">Back</button>
              <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
          </div>

        </form>
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
  <!-- <script src="/Backend/validation.js"></script> -->

  <script>
    // function validate() {
    //   const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //   const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //   const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //   const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //   const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //   const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //   const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //   const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //   const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //   const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //   const primPhoneRegex = /^\d{10}$/;
    //   const altPhoneRegex = /^\d{10}$/;
    //   const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //   const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //   const aadharRegex = /^\d{12}$/;
    //   const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //   const bankAccRegex = /^\d+$/;
    //   const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //   const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //   const emergPhoneRegex = /^\d{10}$/;

    //   if (!primPhoneRegex.test(primary_phone_no)) {
    //     alert("Invalid input on Step 2. Please enter valid Phone Number.")
    //   }

    //   if (!altPhoneRegex.test(alternative_phone_no)) {
    //     alert("Invalid input on Step 2. Please enter valid Phone Number.")
    //   }

    //   if (!persEmailRegex.test(personalEmail)) {
    //     alert("Invalid input on Step 2. Please enter valid Email Id.")
    //   }

    //   if (!offEmailRegex.test(officialEmail)) {
    //     alert("Invalid input on Step 2. Please enter valid Email Id.")
    //   }

    //   if (!aadharRegex.test(aadharcard_no)) {
    //     alert("Invalid input on Step 2. Please enter valid Aadhar card number.")
    //   }

    //   if (!panRegex.test(panCard)) {
    //     alert("Invalid input on Step 2. Please enter valid Pan card number.")
    //   }

    //   if (!bankAccRegex.test(bank_acc_no)) {
    //     alert("Invalid input on Step 2. Please enter valid Bank Account number.")
    //   }

    //   if (!ifscRegex.test(ifsc_code)) {
    //     alert("Invalid input on Step 2. Please enter valid IFSC code.")
    //   }
    //   if (!upiRegex.test(upiId)) {
    //     alert("Invalid input on Step 2. Please enter valid UPI Id.")
    //   }
    //   if (!emergPhoneRegex.test(emergency_phone_no)) {
    //     alert("Invalid input on Step 2. Please enter valid Phone number.")
    //   }

    // }

    function validate(event) {
      event.preventDefault();

      const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
      const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
      const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
      const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
      const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
      const panCard = document.forms["registerForm"]["panCard"].value.trim();
      const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
      const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
      const upiId = document.forms["registerForm"]["upiId"].value.trim();
      const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

      const primPhoneRegex = /^\d{10}$/;
      const altPhoneRegex = /^\d{10}$/;
      const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const aadharRegex = /^\d{12}$/;
      const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
      const bankAccRegex = /^\d+$/;
      const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
      const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
      const emergPhoneRegex = /^\d{10}$/;

      if (!primPhoneRegex.test(primary_phone_no)) {
        alert("Invalid input on Step 2. Please enter valid Phone Number.");
        return false;
      }

      if (!altPhoneRegex.test(alternative_phone_no)) {
        alert("Invalid input on Step 2. Please enter valid Phone Number.");
        return false;
      }

      if (!persEmailRegex.test(personalEmail)) {
        alert("Invalid input on Step 2. Please enter valid Email Id.");
        return false;
      }

      if (!offEmailRegex.test(officialEmail)) {
        alert("Invalid input on Step 2. Please enter valid Email Id.");
        return false;
      }

      if (!aadharRegex.test(aadharcard_no)) {
        alert("Invalid input on Step 2. Please enter valid Aadhar card number.");
        return false;
      }

      if (!panRegex.test(panCard)) {
        alert("Invalid input on Step 2. Please enter valid Pan card number.");
        return false;
      }

      if (!bankAccRegex.test(bank_acc_no)) {
        alert("Invalid input on Step 2. Please enter valid Bank Account number.");
        return false;
      }

      if (!ifscRegex.test(ifsc_code)) {
        alert("Invalid input on Step 2. Please enter valid IFSC code.");
        return false;
      }

      if (!upiRegex.test(upiId)) {
        alert("Invalid input on Step 2. Please enter valid UPI Id.");
        return false;
      }

      if (!emergPhoneRegex.test(emergency_phone_no)) {
        alert("Invalid input on Step 2. Please enter valid Phone number.");
        return false;
      }

      // If all validations pass, allow the form to submit
      return true;
    }




    const steps = document.querySelectorAll('.step');
    const nextBtns = document.querySelectorAll('.next');
    const prevBtns = document.querySelectorAll('.prev');
    const progress = document.getElementById('progress-bar');
    let current = 0;

    function showStep(i) {
      steps.forEach((step, index) => step.style.display = 'none');
      steps[i].style.display = 'block';
      gsap.fromTo(steps[i], {
        opacity: 0,
        y: 50
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5
      });
      progress.style.width = `${(i + 1) / steps.length * 100}%`;
    }

    // Next button click
    nextBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        if (validateStep(currentStep)) {
          currentStep++;
          if (currentStep < steps.length) {
            showStep(currentStep);
          }
        } else {
          // Wait for 3 seconds, then remove is-invalid with a fade animation
          setTimeout(() => {
            const invalidInputs = steps[currentStep].querySelectorAll('.is-invalid');
            invalidInputs.forEach(input => {
              gsap.to(input, {
                borderColor: "#ced4da", // Bootstrap normal border color
                duration: 0.5,
                onComplete: () => {
                  input.classList.remove('is-invalid');
                }
              });
            });
          }, 3000);
        }
      });
    });



    prevBtns.forEach(btn => btn.addEventListener('click', () => {
      if (current > 0) {
        current--;
        showStep(current);
      }
    }));

    showStep(current);
  </script>
  <script>

    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('onboardingForm');
      const steps = document.querySelectorAll('.step');
      const nextBtns = document.querySelectorAll('.next');
      const prevBtns = document.querySelectorAll('.prev');
      let currentStep = 0;

      showStep(currentStep);

      // Show the current step and hide others
      function showStep(step) {
        steps.forEach((s, index) => {
          s.style.display = (index === step) ? 'block' : 'none';
        });
      }

      // Validate current step
      function validateStep(stepIndex) {
        let valid = true;
        const step = steps[stepIndex];
        const inputs = step.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
          const value = input.value.trim();
          const type = input.getAttribute('type');
          const isRequired = true; // You can later make some fields optional if needed

          if (isRequired && value === '') {
            input.classList.add('is-invalid');
            valid = false;
          } else {
            input.classList.remove('is-invalid');
          }

          // Specific validations
          if (type === 'email' && value !== '') {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(value)) {
              input.classList.add('is-invalid');
              valid = false;
            }
          }

          if (type === 'date' && value !== '') {
            const date = new Date(value);
            if (isNaN(date.getTime())) {
              input.classList.add('is-invalid');
              valid = false;
            }
          }

          if (input.closest('label')?.textContent?.includes('Contact Number') && value !== '') {
            if (!/^\d{10}$/.test(value)) {
              input.classList.add('is-invalid');
              valid = false;
            }
          }

          if (input.closest('label')?.textContent?.includes('Aadhar Card Number') && value !== '') {
            if (!/^\d{12}$/.test(value)) {
              input.classList.add('is-invalid');
              valid = false;
            }
          }

          if (input.closest('label')?.textContent?.includes('PAN Card Number') && value !== '') {
            if (!/[A-Z]{5}[0-9]{4}[A-Z]{1}/.test(value)) {
              input.classList.add('is-invalid');
              valid = false;
            }
          }

          if (type === 'file' && input.required && input.files.length === 0) {
            input.classList.add('is-invalid');
            valid = false;
          }

          // Conditional validations
          if (input.closest('label')?.textContent?.includes('Do you have a UPI ID?')) {
            const upiSelect = input;
            const upiInput = step.querySelector('input[type="text"][placeholder="Enter UPI ID"]') || step.querySelector('input[placeholder="If Yes, Enter UPI ID"]');
            if (upiSelect.value === 'Yes' && upiInput && upiInput.value.trim() === '') {
              upiInput.classList.add('is-invalid');
              valid = false;
            }
          }

        });

        return valid;
      }

      // Next button click
      nextBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          if (validateStep(currentStep)) {
            currentStep++;
            if (currentStep < steps.length) {
              showStep(currentStep);
            }
          } else {
            alert('Please fill all required fields correctly.');
          }
        });
      });

      // Previous button click
      prevBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          currentStep--;
          if (currentStep >= 0) {
            showStep(currentStep);
          }
        });
      });

      // Final form submit
      form.addEventListener('submit', function(e) {
        if (!validateStep(currentStep)) {
          e.preventDefault();
          alert('Please complete all required fields correctly before submitting.');
        }
      });
    });
  </script>



</body>




</html>