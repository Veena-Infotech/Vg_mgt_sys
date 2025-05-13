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
    <title>Phoenix</title>

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
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

  <style>
    /* body {
      padding: 20px;
      background: #fff;
    }

    @media print {
      @page {
        size: A4;
        margin: 20mm;
      }

      body {
        margin-top: 100px;
      }
    } */

    table.custom-table th,
    table.custom-table td {
      border: 1px solid #000 !important;
      vertical-align: middle;
      color: #000 !important;
    }

    .table-title {
      font-weight: bold;
      text-align: center;
      font-size: 1.25rem;
      padding: 12px;
      border: 2px solid #000;
    }

    .spacer-row td {
      height: 20px;
      border: none !important;
      margin-left: 1px;
    }
  </style>
  <style>
    .custom-table td,
    .custom-table th {
      vertical-align: middle;
      text-align: left;
      font-size: 14px;
    }

    .col-1 {
      width: 35%;
    }

    .col-2 {
      width: 15%;
    }

    .col-3 {
      width: 15%;
      border-left: none;
    }

    /* Wider */
    .col-4 {
      width: 20%;
    }

    /* Slightly narrower */
    .col-5 {
      width: 15%;
    }

    .table-title {
      text-align: center;
      font-weight: bold;
      background-color: #f0f0f0;
    }

    @media (max-width: 768px) {

      .custom-table td,
      .custom-table th {
        font-size: 12px;
      }
    }

    @font-face {
      font-family: 'BriceSemiBold';
      src: url('../../assets/fonts/brice-semi-expanded-semi-bold.otf') format('opentype');
    }

    .mid-head {
      font-family: 'BriceSemiBold', sans-serif;
    }
  </style>
  <style>
    .p-16-8 {
      padding: 16px 8px !important;
    }
  </style>

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
      <section class="container-fluid  py-4">
        <!-- Title and Subtitle -->
        <div id="headerSection" class="text-start mb-4">
          <h1 class="fw-bold">Payslip Generator</h1>
          <p class="lead">Generate and download your monthly salary slip</p>
        </div>

        <hr class="hr" />

        <!-- Dropdowns and Download Button -->
        <div id="filterSection" class="d-flex justify-content-between align-items-center flex-wrap my-4">
          <div class="d-flex flex-row gap-3">

            <select class="form-select" name="month" aria-label="Select Month">
              <option selected>Select Month</option>
              <option value="Jan">January</option>
              <option value="Feb">February</option>
              <option value="Mar">March</option>
              <!-- Add more months -->
            </select>
          </div>
          <button id="downloadBtn" class="btn btn-outline-primary mt-3 mt-md-0">Download PDF</button>
        </div>

        <!-- Payslip Container -->
        <div id="payslipContent" style="width: 794px; max-width: 794px; margin: auto;"
          class="rounded bg-white px-5 pt-5 pb-4 mb-4 min-vh-75">
          <div class="container-fluid px-3">
            <div class="text-center mb-3">
              <img src="/VG_MGT_SYS/assets/img/logos/logo.png" alt="Logo" class="img-fluid">
            </div>

            <table class="table table-bordered custom-table w-100">
              <tbody>
                <!-- Company Addresses -->
                <tr>
                  <td colspan="3" class="p-16-8">Regd. Office: 604 Veena Velocity, Veena Nagar, LBS Marg, Mulund West,
                    Mumbai - 400080
                  </td>
                  <td colspan="2" class="p-16-8">Branch Office: Veena Velocity, 8th Floor, Veena Nagar Phase II, LBS
                    Marg, Mulund West,
                    Mumbai - 400080</td>
                </tr>
                <!-- Contact Info -->
                <tr>
                  <td colspan="3" class="p-16-8">Contact: +91 9820535000 | Email: veenagroup@gmail.com</td>
                  <td colspan="2" class="p-16-8">GST No: 27AAFCV5197A1Z0</td>
                </tr>

                <!-- Employee Details -->
                <tr>
                  <td class="col-1 p-16-8">Employee ID</td>
                  <td class="col-2" colspan="2"></td>
                  <td class="col-4">Base Salary</td>
                  <td class="col-5"></td>
                </tr>
                <tr>
                  <td class="p-16-8">Employee Name</td>
                  <td colspan="2"></td>
                  <td>Per Day</td>
                  <td></td>
                </tr>
                <tr>
                  <td class="p-16-8">Venture</td>
                  <td colspan="2"></td>
                  <td>No. of Days in Month / Present</td>
                  <td colspan="2" class="p-16-8">31 / 25</td>
                </tr>
                <tr>
                  <td class="p-16-8">Designation</td>
                  <td colspan="2"></td>
                  <td>Leaves</td>
                  <td></td>
                </tr>
                <tr>
                  <td class="p-16-8">Contact</td>
                  <td colspan="2"></td>
                  <td>Late Remark</td>
                  <td></td>
                </tr>

                <!-- Title -->
                <tr>
                  <td colspan="5" class="table-title text-center fw-bold fs-7 mid-head">Salary Slip for the Month of
                    March
                    2025
                  </td>
                </tr>

                <!-- Earnings & Deductions -->
                <tr>
                  <th colspan="3">Earnings</th>
                  <th colspan="2">Deductions</th>
                </tr>
                <tr>
                  <td class="p-16-8">Base Salary</td>
                  <td>20,000</td>
                  <td class="col-2"></td>
                  <td>Profession Tax</td>
                  <td class="p-16-8">200</td>
                </tr>
                <tr>
                  <td class="p-16-8">HRA</td>
                  <td>10,000</td>
                  <td></td>
                  <td>Income Tax</td>
                  <td class="p-16-8">-</td>
                </tr>
                <tr>
                  <td class="p-16-8">Travel Allowance</td>
                  <td>1,000</td>
                  <td></td>
                  <td>Loan EMI</td>
                  <td class="p-16-8">5,000</td>
                </tr>
                <tr>
                  <td class="p-16-8">Extra Working Days</td>
                  <td>-</td>
                  <td></td>
                  <td>Advance Salary</td>
                  <td class="p-16-8">2,500</td>
                </tr>
                <tr>
                  <td class="p-16-8">Special Allowances</td>
                  <td>19,000</td>
                  <td></td>
                  <td>Other Deduction</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td class="p-16-8">Overtime</td>
                  <td>-</td>
                  <td></td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <th class="p-16-8">Total</th>
                  <th>50,000</th>
                  <td></td>
                  <th>Total</th>
                  <th>7,700</th>
                </tr>
                <tr>
                  <th colspan="4">Net Payable</th>
                  <th>36,123</th>
                </tr>

                <!-- Spacer -->
                <tr class="spacer-row">
                  <td colspan="3"></td>
                  <td colspan="2" rowspan="2" class="text-end"></td>
                </tr>

                <!-- Payment Date -->
                <tr>
                  <td></td>
                  <td class="text-end"></td>
                  <td class="text-end"></td>

                </tr>

                <tr>
                  <td class="p-16-8">Date of Payment:</td>
                  <td class="text-end"></td>
                  <td class="text-end"></td>
                  <td colspan="2" class="text-end p-16-8">Authorised Signatory</td>
                </tr>
                <!-- Signature -->
              </tbody>
            </table>
          </div>
        </div>

        <!-- Issue Reporting Section -->
        <div id="issueSection" class="text-center">
          <p>Found some issue? Let the admin know about it.</p>
          <button class="btn btn-outline-danger">Send Message to Admin</button>
        </div>
      </section>
      <?php include '../../Components/footer.php'; ?>
    </div>

    </div>


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <!-- <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
            <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
      </div>
      <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
          <h5 class="setting-panel-item-title">Color Scheme</h5>
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/auto.png" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">RTL </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Change text direction</p>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Toggle support chat</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Navigation Type</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
          <p class="text-warning-dark font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update navigation type in this page</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
          <p class="text-warning-dark font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance in this page</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
          <p class="text-warning-dark font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update horizontal navbar shape in this page</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
          <p class="text-warning-dark font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update horizontal navbar appearance in this page</p>
        </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a> -->

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

  <!-- GSAP Animations -->
  <script>
    gsap.from("#headerSection", {
      y: -50,
      opacity: 0,
      duration: 1
    });

    gsap.from("#filterSection", {
      y: 50,
      opacity: 0,
      duration: 1,
      delay: 0.3
    });

    gsap.from("#payslipContent", {
      scale: 0.8,
      opacity: 0,
      duration: 1,
      delay: 0.6
    });

    gsap.from("#issueSection", {
      y: 30,
      opacity: 0,
      duration: 1,
      delay: 0.9
    });
  </script>

  <!-- Download Functionality -->
  <script>
    document.getElementById("downloadBtn").addEventListener("click", async () => {
      const payslip = document.getElementById("payslipContent");
      const watermark = payslip.querySelector(".watermark-pdf-img");

      // Scroll to top to prevent clipping
      window.scrollTo({ top: 0, behavior: "instant" });

      // Temporarily hide watermark
      if (watermark) watermark.style.display = "none";

      // Wait for DOM to reflect changes
      await new Promise(resolve => setTimeout(resolve, 100));

      // Capture the payslip as canvas
      html2canvas(payslip, {
        scale: 2, // High quality
        backgroundColor: "#ffffff",
        useCORS: true
      }).then(async canvas => {
        if (watermark) watermark.style.display = "block"; // Re-show watermark

        const imgData = canvas.toDataURL("image/png");

        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF({
          orientation: "portrait",
          unit: "pt",
          format: "a4"
        });

        const pdfWidth = pdf.internal.pageSize.getWidth();   // ~595.28
        const pdfHeight = pdf.internal.pageSize.getHeight(); // ~841.89

        // Resize canvas content to fit A4 exactly (inside margins)
        // Resize canvas content to fit A4 exactly (inside margins)
        const margin = 20; // 20pt margin
        const contentMaxWidth = pdfWidth + 10 * 2;
        const contentMaxHeight = pdfHeight - margin * 2;

        let imgWidth = contentMaxWidth;
        let imgHeight = (canvas.height * imgWidth) / canvas.width;

        // If height overflows, adjust both width and height again
        if (imgHeight > contentMaxHeight) {
          imgHeight = contentMaxHeight;
          imgWidth = (canvas.width * imgHeight) / canvas.height;
        }

        // Center the image
        const positionX = (pdfWidth - imgWidth) / 2;
        const positionY = (pdfHeight - imgHeight) / 2;


        // Optional watermark in center
        if (watermark) {
          const watermarkSrc = watermark.getAttribute("src");
          const watermarkSize = 250;
          pdf.addImage(
            watermarkSrc,
            "PNG",
            (pdfWidth - watermarkSize) / 2,
            (pdfHeight - watermarkSize) / 2,
            watermarkSize,
            watermarkSize,
            undefined,
            "NONE",
            0.05
          );
        }

        // Draw the canvas image into PDF
        pdf.addImage(
          imgData,
          "PNG",
          positionX,
          positionY,
          imgWidth,
          imgHeight
        );


        // Use selected month as file name
        const monthSelect = document.querySelectorAll("select")[1];
        const selectedMonth = monthSelect ? monthSelect.value : "default-month";
        pdf.save(`pay-slip-${selectedMonth}.pdf`);

        // Re-hide watermark (if needed)
        if (watermark) watermark.style.display = "none";
      }).catch(err => {
        console.error("Error generating PDF:", err);
        alert("An error occurred while generating the PDF. Please try again.");
      });
    });
  </script>


  <!-- html2canvas -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

  <!-- jsPDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

</body>



</html>