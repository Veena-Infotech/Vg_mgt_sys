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

        <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
          <div class="form-floating" style="width: 250px;">
            <select class="form-select" id="employeeSelect">
              <option selected disabled>Choose an employee</option>
              <option>John Doe</option>
              <option>Jane Smith</option>
              <option>Rahul Kumar</option>
            </select>
            <label for="employeeSelect">Select Employee</label>
          </div>
          <div>
            <button class="btn btn-outline-primary mb-4 mt-4" id="loadHistory">Load History</button>
          </div>
        </div>
      </div>

      <div id="tableExample4"
        data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;payment&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true,&quot;filter&quot;:{&quot;key&quot;:&quot;payment&quot;}}">
        <div class="row justify-content-end g-0">
          <div class="table-responsive">
            <table class="table table-sm fs-9 mb-0">
              <thead>
                <tr class="bg-body-highlight">
                  <th class="sort border-top border-translucent ps-3" data-sort="date">Date</th>
                  <th class="sort border-top border-translucent" data-sort="leave-type">leave Type</th>
                  <th class="sort border-top border-translucent" data-sort="approved-by">Approved By</th>
                  <th class="sort border-top border-translucent text-end pe-3" data-sort="status">Status</th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <td class="align-middle ps-3 date">2025-19-06</td>
                  <td class="align-middle leave-type">casual</td>
                  <td class="align-middle approved-by">Manager A</td>
                  <td class="align-middle payment text-end py-3 pe-3">
                    <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="fw-bold">Accepted</span><svg class="svg-inline--fa fa-check ms-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="check" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                        </path>
                      </svg><!-- <span class="ms-1 fas fa-check"></span> Font Awesome fontawesome.com --></div>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle ps-3 date">2025-19-06</td>
                  <td class="align-middle leave-type">casual</td>
                  <td class="align-middle approved-by">Manager A</td>
                  <td class="align-middle payment text-end py-3 pe-3">
                    <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="fw-bold">Pending</span><svg class="svg-inline--fa fa-bars-staggered ms-1"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars-staggered" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                        </path>
                      </svg><!-- <span class="ms-1 fas fa-stream"></span> Font Awesome fontawesome.com --></div>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle ps-3 date">2025-19-06</td>
                  <td class="align-middle leave-type">casual</td>
                  <td class="align-middle approved-by">Manager A</td>
                  <td class="align-middle payment text-end py-3 pe-3">
                    <div class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span
                        class="fw-bold">Rejected</span><svg class="svg-inline--fa fa-ban ms-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="ban" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z">
                        </path>
                      </svg><!-- <span class="ms-1 fas fa-ban"></span> Font Awesome fontawesome.com --></div>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle ps-3 date">2025-19-06</td>
                  <td class="align-middle leave-type">casual</td>
                  <td class="align-middle approved-by">Manager A</td>
                  <td class="align-middle payment text-end py-3 pe-3">
                    <div class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="fw-bold">Accepted</span><svg class="svg-inline--fa fa-check ms-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="check" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                        </path>
                      </svg><!-- <span class="ms-1 fas fa-check"></span> Font Awesome fontawesome.com --></div>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle ps-3 date">2025-19-06</td>
                  <td class="align-middle leave-type">casual</td>
                  <td class="align-middle approved-by">Manager A</td>
                  <td class="align-middle payment text-end py-3 pe-3">
                    <div class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="fw-bold">Pending</span><svg class="svg-inline--fa fa-bars-staggered ms-1"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars-staggered" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                        </path>
                      </svg><!-- <span class="ms-1 fas fa-stream"></span> Font Awesome fontawesome.com --></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
              data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of </span>10</span>
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
              </ul><button class="page-link pe-0" data-list-pagination="next"><svg
                  class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                  data-fa-i2svg="">
                  <path fill="currentColor"
                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                  </path>
                </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
            </div>
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

    // Load history button animation
    document.getElementById("loadHistory").addEventListener("mouseover", () => {
      gsap.to("#loadHistory", {
        scale: 1.05,
        duration: 0.3,
        ease: "power2.out"
      });
    });

    document.getElementById("loadHistory").addEventListener("mouseout", () => {
      gsap.to("#loadHistory", {
        scale: 1,
        duration: 0.3,
        ease: "power2.out"
      });
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


    // Sample data for employees
    const employeeData = {
      'John Doe': [{
          date: '2025-19-06',
          leaveType: 'Casual',
          approvedBy: 'Manager A',
          status: 'Accepted'
        },
        {
          date: '2025-20-06',
          leaveType: 'Sick',
          approvedBy: 'Manager B',
          status: 'Pending'
        },
      ],
      'Jane Smith': [{
          date: '2025-21-06',
          leaveType: 'Casual',
          approvedBy: 'Manager C',
          status: 'Rejected'
        },
        {
          date: '2025-22-06',
          leaveType: 'Vacation',
          approvedBy: 'Manager A',
          status: 'Accepted'
        },
      ],
      'Rahul Kumar': [{
          date: '2025-23-06',
          leaveType: 'Maternity',
          approvedBy: 'Manager B',
          status: 'Pending'
        },
        {
          date: '2025-24-06',
          leaveType: 'Casual',
          approvedBy: 'Manager A',
          status: 'Rejected'
        },
      ]
    };

    // Function to update the table based on the selected employee
    function updateTableData(employeeName) {
      // Get the table body element
      const tableBody = document.querySelector('#tableExample4 tbody');
      // Clear existing rows
      tableBody.innerHTML = '';

      // Check if the employee data exists
      if (employeeData[employeeName]) {
        // Loop through the employee data and add rows to the table
        employeeData[employeeName].forEach(data => {
          const statusClass = data.status === 'Accepted' ? 'badge-phoenix-success' :
            data.status === 'Pending' ? 'badge-phoenix-warning' : 'badge-phoenix-secondary';

          const statusIcon = data.status === 'Accepted' ? 'check' :
            data.status === 'Pending' ? 'bars-staggered' : 'ban';

          const row = `
          <tr>
            <td class="align-middle ps-3 date">${data.date}</td>
            <td class="align-middle leave-type">${data.leaveType}</td>
            <td class="align-middle approved-by">${data.approvedBy}</td>
            <td class="align-middle payment text-end py-3 pe-3">
              <div class="badge ${statusClass} fs-10"><span class="fw-bold">${data.status}</span>
                <svg class="svg-inline--fa fa-${statusIcon} ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="${statusIcon}" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="..."></path>
                </svg>
              </div>
            </td>
          </tr>
        `;
          // Append new row to the table
          tableBody.insertAdjacentHTML('beforeend', row);
        });
      }
    }

    // Add event listener to employee select dropdown
    document.getElementById('employeeSelect').addEventListener('change', function() {
      const selectedEmployee = this.value;
      updateTableData(selectedEmployee);
    });

    // Initial load (e.g., default employee)
    document.addEventListener('DOMContentLoaded', function() {
      const defaultEmployee = document.getElementById('employeeSelect').value;
      if (defaultEmployee) {
        updateTableData(defaultEmployee);
      }
    });

    // Function to get badge class based on status
    function getStatusClass(status) {
      if (status === 'Accepted') return 'badge-phoenix-success';
      if (status === 'Pending') return 'badge-phoenix-warning';
      return 'badge-phoenix-secondary';
    }

    // Function to get status icon based on status
    function getStatusIcon(status) {
      if (status === 'Accepted') return '<svg class="svg-inline--fa fa-check ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>';
      if (status === 'Pending') return '<svg class="svg-inline--fa fa-bars-staggered ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars-staggered" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path></svg>';
      return '<svg class="svg-inline--fa fa-ban ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path></svg>';
    }

    // Event listener for filtering by status
    document.querySelector('[data-list-filter="data-list-filter"]').addEventListener('change', function() {
      const selectedStatus = this.value;
      const rows = document.querySelectorAll('#tableExample4 tbody .leave-row');

      rows.forEach(row => {
        const rowStatus = row.getAttribute('data-status');
        if (selectedStatus === "" || rowStatus === selectedStatus) {
          row.style.display = ''; // Show row
        } else {
          row.style.display = 'none'; // Hide row
        }
      });
    });

    // Initial load (e.g., default employee)
    document.addEventListener('DOMContentLoaded', function() {
      const defaultEmployee = document.getElementById('employeeSelect').value;
      if (defaultEmployee) {
        updateTableData(defaultEmployee);
      }
    });
  </script>
</body>

</html>