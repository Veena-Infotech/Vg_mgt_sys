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
      <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

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
      <!-- Content Should be here  -->
      <!-- Here will be the Heading with the Calendar -->
      <!-- Font Awesome for calendar icon -->
      <!-- Font Awesome for calendar icon -->
      <!-- Font Awesome for calendar icon -->
      <!-- Font Awesome for calendar icon -->
      <!-- Font Awesome for calendar icon -->
      <!-- Font Awesome for calendar icon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

      <div
        style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; color: white; flex-wrap: wrap; padding-left: 0px;">

        <!-- Left: Welcome Text -->
        <h2 style="margin: 0; font-weight: 600;padding-bottom: 20px;">Welcome, Employee Name</h2>

        <!-- Right: Custom Date Display and Calendar Icon -->
        <div style="display: flex; align-items: center; font-size: 16px;">
          <span id="displayDate" style="margin-right: 8px;">Loading...</span>

          <!-- Hidden date input -->
          <input type="date" id="datePicker"
            style="opacity: 0; position: absolute; width: 1px; height: 1px; pointer-events: none;" />

          <!-- Calendar icon to trigger the input -->
          <i class="fa-solid fa-calendar-days" style="color: white; cursor: pointer; font-size: 18px;"
            onclick="document.getElementById('datePicker').showPicker();"></i>
        </div>
      </div>

      <script>
        const dateInput = document.getElementById("datePicker");
        const displaySpan = document.getElementById("displayDate");

        function formatCustomDate(dateStr) {
          const date = new Date(dateStr);
          const weekday = date.toLocaleDateString(undefined, { weekday: 'long' });
          const day = String(date.getDate()).padStart(2, '0');
          const year = date.getFullYear();
          return `${weekday} ${day} ${year}`;
        }

        // Set today's date by default
        const today = new Date().toISOString().split("T")[0];
        dateInput.value = today;
        displaySpan.textContent = formatCustomDate(today);

        // Update date on change
        dateInput.addEventListener("change", () => {
          if (dateInput.value) {
            displaySpan.textContent = formatCustomDate(dateInput.value);
          }
        });
      </script>



      <!-- To do list From Here -->
      <div class="mt 0 mx-lg-n4">
        <div class="row g-3">
          <div class="col-12 col-xl-6 col-xxl-7">
            <div class="card todo-list h-100">
              <div class="card-header border-bottom-0 pb-0">
                <div class="row justify-content-between align-items-center mb-4">
                  <div class="col-auto">
                    <h3 class="text-body-emphasis"> <a href="/view_tasks.php"
                        style="text-decoration: none; color: none;">To Do </a></h3>
                    <p class="mb-2 mb-md-0 mb-lg-2 text-body-tertiary">Task assigned to me</p>
                  </div>
                  <div class="col-auto w-100 w-md-auto">
                    <div class="row align-items-center g-0 justify-content-between">
                      <div class="col-12 col-sm-auto">
                        <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                          <form class="position-relative"><input class="form-control search-input search" type="search"
                              placeholder="Search tasks" aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                          </form>
                        </div>
                      </div>
                      <div class="col-auto d-flex">
                        <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span
                            class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p><button
                          class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span
                            class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body py-0 scrollbar to-do-list-body">
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-0"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Designing
                          the dungeon</label><span
                          class="badge badge-phoenix ms-auto fs-10 badge-phoenix-primary">DRAFT</span></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            12:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-1"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Hiring
                          a motion graphic designer</label><span
                          class="badge badge-phoenix ms-auto fs-10 badge-phoenix-warning">URGENT</span></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>2</a><a
                          class="text-warning fw-bold fs-10 me-2" href="#!"><span class="fas fa-tasks me-1"></span>3</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            12:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-2"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily
                          Meetings Purpose, participants</label><span
                          class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON PROCESS</span></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>4</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Dec, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            05:00 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-3"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Finalizing
                          the geometric shapes</label></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            12:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-4"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily
                          meeting with team members</label></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">1 Nov, 2021</p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            12:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-5"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily
                          Standup Meetings</label></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">13 Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            10:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-6"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Procrastinate
                          for a month</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON
                          PROCESS</span></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            12:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-7"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">warming
                          up</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">CLOSE</span>
                      </div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            12:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top border-bottom"><input
                    class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                    type="checkbox" id="checkbox-todo-8"
                    data-event-propagation-prevent="data-event-propagation-prevent" />
                  <div
                    class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                          class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Make
                          ready for release</label></div>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                      <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2"
                          href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">2o Nov, 2021
                        </p>
                        <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                          <p
                            class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                            1:00 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                    data-event-propagation-prevent="data-event-propagation-prevent">
                    <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-edit"></span></button><button
                        class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                        data-event-propagation-prevent="data-event-propagation-prevent"><span
                          class="fas fa-trash"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer border-0"><a class="fw-bold fs-9 mt-4" href="#!"><span
                    class="fas fa-plus me-1"></span>Add new task</a></div>
            </div>
          </div>
          <!-- Footer -->
          <?php include("../../Components/footer.php"); ?>
        </div>
      </div>



      <!-- Attendence Chart From here -->
      <!-- Area Line Chart Card aligned to top-right -->
      <div class="Graph" style="margin-bottom: 100px; align-items: left;">

        <div style="position: absolute; top: 167px; right: 100px; z-index: 1000; width: 500px; max-width: 100%;">
          <div class="card shadow-none border" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0" data-anchor="data-anchor">Attendence tracking</h4>
                </div>

              </div>
            </div>
            <div class="card-body p-0">
              <div class="collapse code-collapse" id="basic-area-line-chart-code">
                <pre class="scrollbar" style="max-height:420px">
<code class="language-html">&lt;div class=&quot;echart-area-line-chart-example&quot; style=&quot;min-height:300px&quot;&gt;&lt;/div&gt;</code></pre>
              </div>
              <div class="p-4 code-to-copy">
                <div class="echart-area-line-chart-example" style="min-height:300px"></div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Recent Notification -->
      <div class="recent-notification">
        <div class="mt-3 mx-lg-n4">
          <div class="row g-3">
            <div class="col-12 col-xl-6 col-xxl-7">
              <div class="card todo-list h-100">
                <div class="card-header border-bottom-0 pb-0">
                  <div class="row justify-content-between align-items-center mb-4">
                    <div class="col-auto">
                      <h3 class="text-body-emphasis">Recent Notification</h3>
                    </div>
                    <div class="col-auto w-100 w-md-auto">
                      <div class="row align-items-center g-0 justify-content-between">
                        <div class="col-12 col-sm-auto">
                          <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body py-0 scrollbar to-do-list-body">
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="../assets/img/team/40x40/30.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:41 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
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
  <script src="../../vendors/popper/popper.min.js"></script>
  <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../vendors/is/is.min.js"></script>
  <script src="../../vendors/fontawesome/all.min.js"></script>
  <script src="../../vendors/lodash/lodash.min.js"></script>
  <script src="../../vendors/list.js/list.min.js"></script>
  <script src="../../vendors/feather-icons/feather.min.js"></script>
  <script src="../../vendors/dayjs/dayjs.min.js"></script>
  <script src="../../vendors/echarts/echarts.min.js"></script>
  <script src="../../vendors/prism/prism.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script src="../../assets/js/echarts-example.js"></script>
  </script>
</body>
<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>