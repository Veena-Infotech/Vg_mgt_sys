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
  <title>Vms | Meeting Notes</title>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
  <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
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

        <!-- Container for the Title -->
        <div style="width: 100%; text-align: center; margin: 20px 0;">
          <h3 style="margin: 0;">Meeting Notes</h3>
        </div>
        <hr>


        <div id="tableExample3" data-list="{&quot;valueNames&quot;:[&quot;id&quot;,&quot;name&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}" style="width: 100%; padding-top: 20px;">

          <div class="mb-3 d-flex justify-content-center">
            <form class="position-relative w-100" style="max-width: 400px;">
              <input
                id="searchInput"
                type="search"
                class="form-control form-control-sm ps-5"
                placeholder="Search"
                aria-label="Search" />
              <span class="position-absolute top-50 start-0 translate-middle-y ps-3 text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 512 512" aria-hidden="true">
                  <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 
        12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 
        0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 
        0-288 144 144 0 1 0 0 288z" />
                </svg>
              </span>
            </form>
          </div>



          <div class="table-responsive">
            <table class="table table-striped table-sm fs-9 mb-0 ">
              <thead>
                <tr>
                  <th class="sort border-top border-translucent ps-3" data-sort="id">Meeting I'D</th>
                  <th class="sort border-top" data-sort="name">Visitor Name</th>
                  <th class="sort border-top" data-sort="name">Employe's Name</th>
                  <th class="sort border-top" data-sort="name">Meeting Date & Time</th>
                  <th class="sort border-top" data-sort="name">Upload File</th>
                  <th class="sort border-top" data-sort="name">Amount (If Applicable)</th>
                  <th class="sort border-top" data-sort="name">Additional Comments</th>
                  <th class="sort border-top" data-sort="name">Discussion Summary</th>
                  <th class="sort text-end align-middle pe-0 border-top" scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <td class="align-middle ps-3">#1001</td>
                  <td class="align-middle">Amit Sharma</td>
                  <td class="align-middle">Ravi Mehta</td>
                  <td class="align-middle">16/05/2025 10:00 AM</td>
                  <td class="align-middle">
                    <input class="form-check-input" type="checkbox" value="" />
                  </td>
                  <td class="align-middle">₹0</td>
                  <td class="align-middle">Wants project collaboration</td>
                  <td class="align-middle">Discussed tech partnership details</td>
                  <td class="align-middle text-end pe-0">
                    <div class="btn-reveal-trigger position-static">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs-10"></span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">View</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Archive</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="align-middle ps-3">#1002</td>
                  <td class="align-middle">Sneha Roy</td>
                  <td class="align-middle">Anjali Sinha</td>
                  <td class="align-middle">16/05/2025 12:30 PM</td>
                  <td class="align-middle">
                    <input class="form-check-input" type="checkbox" value="" />
                  </td>
                  <td class="align-middle">₹50</td>
                  <td class="align-middle">Training session request</td>
                  <td class="align-middle">Scheduled workshop and topic finalised</td>
                  <td class="align-middle text-end pe-0">
                    <div class="btn-reveal-trigger position-static">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs-10"></span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">View</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Archive</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="align-middle ps-3">#1003</td>
                  <td class="align-middle">Rahul Dev</td>
                  <td class="align-middle">Sunil Joshi</td>
                  <td class="align-middle">16/05/2025 3:00 PM</td>
                  <td class="align-middle">
                    <input class="form-check-input" type="checkbox" value="" />
                  </td>
                  <td class="align-middle">₹0</td>
                  <td class="align-middle">Feedback on services</td>
                  <td class="align-middle">Issues with delivery addressed</td>
                  <td class="align-middle text-end pe-0">
                    <div class="btn-reveal-trigger position-static">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs-10"></span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">View</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Archive</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="align-middle ps-3">#1004</td>
                  <td class="align-middle">Priya Khatri</td>
                  <td class="align-middle">Manoj Sharma</td>
                  <td class="align-middle">16/05/2025 4:15 PM</td>
                  <td class="align-middle">
                    <input class="form-check-input" type="checkbox" value="" />
                  </td>
                  <td class="align-middle">₹30</td>
                  <td class="align-middle">Wants printed brochure</td>
                  <td class="align-middle">Brochure shared via email</td>
                  <td class="align-middle text-end pe-0">
                    <div class="btn-reveal-trigger position-static">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs-10"></span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">View</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Archive</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="align-middle ps-3">#1005</td>
                  <td class="align-middle">Karan Desai</td>
                  <td class="align-middle">Neha Batra</td>
                  <td class="align-middle">16/05/2025 5:30 PM</td>
                  <td class="align-middle">
                    <input class="form-check-input" type="checkbox" value="" />
                  </td>
                  <td class="align-middle">₹75</td>
                  <td class="align-middle">Client wants proposal & NDA</td>
                  <td class="align-middle">Proposal sent, NDA signed</td>
                  <td class="align-middle text-end pe-0">
                    <div class="btn-reveal-trigger position-static">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs-10"></span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">View</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Archive</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>

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

        <!-- ✅ Edit Meeting Modal -->
        <div class="modal fade modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- widened modal -->
            <div class="modal-content">
              <form id="editMeetingForm">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit Meeting</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <input type="hidden" id="editMeetingId" name="meetingId">

                  <!-- Row: Visitor & Employee Name -->
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Visitor Name</label>
                      <input type="text" class="form-control" id="editVisitor" name="visitor">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Employee Name</label>
                      <input type="text" class="form-control" id="editEmployee" name="employee">
                    </div>
                  </div>

                  <!-- Row: DateTime & Amount -->
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Meeting Date & Time</label>
                      <input type="datetime-local" class="form-control" id="editDateTime" name="datetime">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Amount (₹)</label>
                      <div class="input-group">
                        <span class="input-group-text">₹</span>
                        <input class="form-control" type="number" id="editAmount" name="amount" />
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>

                  <!-- Upload File Checkbox -->
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="editFileUpload" name="fileUploaded">
                      <label class="form-check-label" for="editFileUpload">
                        Upload File Submitted?
                      </label>
                    </div>
                  </div>

                  <!-- Row: Comments & Summary -->
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Additional Comments</label>
                      <textarea class="form-control" rows="3" id="editComments" name="comments"></textarea>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Discussion Summary</label>
                      <textarea class="form-control" rows="3" id="editSummary" name="summary"></textarea>
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>

              </form>
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
  <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
  <script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
      const query = this.value.toLowerCase();
      const rows = document.querySelectorAll('tbody.list tr');

      rows.forEach(row => {
        const rowText = row.textContent.toLowerCase();
        row.style.display = rowText.includes(query) ? '' : 'none';
      });
    });
  </script>




  </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>