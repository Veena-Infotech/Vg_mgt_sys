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
  <title>Task Page</title>

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
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
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
  <link href="../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
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
    <!-- <a class="nav-link lh-1 pe-0 show" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true">
      <div class="avatar avatar-l ">
        <img class="rounded-circle " src="../../assets/img/team/40x40/57.webp" alt="">
      </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border show" aria-labelledby="navbarDropdownUser" data-bs-popper="static">
      <div class="card position-relative border-0">
        <div class="card-body p-0">
          <div class="text-center pt-4 pb-3">
            <div class="avatar avatar-xl ">
              <img class="rounded-circle " src="../../assets/img/team/72x72/57.webp" alt="">
            </div>
            <h6 class="mt-2 text-body-emphasis">Neav panjwani</h6>
          </div>
          
          <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
        </div>
        
        <div class="overflow-auto scrollbar" style="height: 10rem;">
          <ul class="nav d-flex flex-column mb-2 pb-1">
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2 text-body align-bottom">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg><span>Profile</span></a></li>
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart me-2 text-body align-bottom">
                  <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                  <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                </svg>Dashboard</a></li>
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock me-2 text-body align-bottom">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>Posts &amp; Activity</a></li>
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-2 text-body align-bottom">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>Settings &amp; Privacy </a></li>
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle me-2 text-body align-bottom">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                  <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>Help Center</a></li>
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 text-body align-bottom">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>Language</a></li>
          </ul>
        </div>
        <div class="card-footer p-0 border-top border-translucent">
          <ul class="nav d-flex flex-column my-3">
            <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus me-2 text-body align-bottom">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="8.5" cy="7" r="4"></circle>
                  <line x1="20" y1="8" x2="20" y2="14"></line>
                  <line x1="23" y1="11" x2="17" y2="11"></line>
                </svg>Add another account</a></li>
          </ul>
          <hr>
          <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out me-2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
              </svg>Sign out</a></div>
          <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>•<a class="text-body-quaternary mx-1" href="#!">Terms</a>•<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
        </div>
      </div>
    </div> -->
    <div class="content">
      <div class="content">
        <div class="mb-9" style="margin-top: -7%;">
          <div class="border-bottom border-translucent mx-n4 mx-lg-n6 px-4 px-lg-6 pb-5">
            <div class="row justify-content-between gy-4">
              <div class="col-auto">
                <h2>Boards <span class="text-body-tertiary fw-semibold"></span></h2>
              </div>
              <div class="col-auto d-flex flex-wrap gap-2"><button class="btn px-4 btn-phoenix-primary d-flex"><span class="fa-solid fa-filter me-1"></span><span>Filter</span></button><select class="form-select w-auto" id="select-deals">
                  <option>Sort by - Last visited</option>
                  <option>Sort by - Name (A - Z)</option>
                  <option>Sort by - Name (Z - A)</option>
                  <option>Sort by - Category</option>
                  <option> Sort by - Date created</option>
                </select>
                <div class="search-box">
                  <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap gap-3 border-bottom border-translucent mx-n4 mx-lg-n6 px-4 px-lg-6 py-5"><a class="btn btn-primary px-3 px-sm-5 px-md-10" href="../../VgmsModules/pms/add_project.php"><span class="fas fa-plus me-2"></span>Create New Project</a></div>

          <!-- This is the slider start -->
          <?php
            include '../PhpFiles/connection.php'; // Database connection


            // Get all statuses
            $status_sql = "SELECT * FROM tbl_project_status";
            $status_result = mysqli_query($conn, $status_sql);

            while ($status = mysqli_fetch_assoc($status_result)) {
              $status_id = $status['id'];
              $status_name = $status['status_name'];
              $badge_color = $status['bagde_color'];
  

            // Start a new row for each status
          ?>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 py-5 border-bottom border-translucent">
            <h4 style="color: <?php echo $badge_color; ?>"><h4 style="color: <?php echo $badge_color; ?>"></h4>
            <p class="mb-4">Projects with status "<?php echo htmlspecialchars($status_name); ?>"</p>
            <div class="swiper-theme-container kanban-boards-slider">
              <div class="swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":24,"speed":800,"breakpoints":{"576":{"slidesPerView":2},"1200":{"slidesPerView":3},"1540":{"slidesPerView":4}}}'>
                <div class="swiper-wrapper">
                  
                    <!-- This is the card start -->
                  
                      <?php
                        include '../PhpFiles/connection.php';    // Database connection file

                        $sql = "
                          SELECT 
                            p.id,
                            p.project_title,
                            CONCAT(c.f_name, ' ', c.l_name) AS client_name,
                            COUNT(DISTINCT t.id) AS task_count,
                            COUNT(DISTINCT pe.emp_id) AS team_member_count,
                            p.project_end_date
                          FROM tbl_project p
                          LEFT JOIN tbl_client c ON p.project_client = c.id
                          LEFT JOIN tbl_tasks t ON t.project_id = p.id
                          LEFT JOIN tbl_project_emp pe ON pe.project_id = p.id
                          WHERE p.project_status = $status_id
                          GROUP BY p.id, p.project_title, c.f_name, c.l_name, p.project_end_date
                        ";


                          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                      if (mysqli_num_rows($result) > 0) {
                        while ($project = mysqli_fetch_assoc($result)) {
                      ?>
                  <div class="swiper-slide"><a class="text-decoration-none" href="../../VgmsModules/pms/view_task.php?project_id=<?php echo $project['id']; ?>">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="../../assets/img/kanban/board-2.png" style="height: 128px;" alt="" />
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/5.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/6.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/7.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/8.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/9.webp" alt="" />
                            </div>
                          </div>
                        </div>
                        <!-- this is the card end -->
                      
                       <div class="card-body d-flex flex-column justify-content-between gap-4">
                          <div>
                            <h3 class="text-body mb-1"><?php echo htmlspecialchars($project['project_title']); ?></h3>
                            <p class="text-body-tertiary mb-4"><?php echo htmlspecialchars($project['client_name']); ?></p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <h5 class="text-body mb-1"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>
                                <?php echo (int)$project['task_count']; ?> Tasks
                            </h5>
                            <h5 class="text-body mb-1"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>
                              <?php echo (int)$project['team_member_count']; ?> Members
                            </h5>
                          </div>
                            <h5 class="text-body mt-2 text-start"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>
                              <?php echo (!empty($project['project_end_date']) ? date('d M Y', strtotime($project['project_end_date'])) : 'No deadline'); ?>
                            </h5>
                          
                        </div>
                      </div>
                    </a></div>
                  <?php
                        } // End of while loop
                      } else {
                        echo "<p class='text-muted ps-3'>No projects under \"$status_name\".</p>";
                      }
                  ?>
                  <div class="swiper-slide"><a class="btn btn-phoenix-primary d-flex flex-center h-100 w-100 fs-7 fw-semibold text-truncate" href="create-kanban-board.html"><span class="fa-solid fa-plus-circle fs-8 me-2"></span>Create New Board</a></div>
                </div>
              </div>
              <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right fs-11"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left fs-11"></span></div>
              </div>
            </div>
          </div>
          <?php
              } // End of status while loop
          ?>
          <!-- This is the slider end -->

          
          <!-- <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 py-5 border-bottom border-translucent">
            <h4>Private Boards</h4>
            <p class="mb-4">Your eyes only</p>
            <div class="swiper-theme-container kanban-boards-slider">
              <div class="swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":24,"speed":800,"breakpoints":{"576":{"slidesPerView":2},"1200":{"slidesPerView":3},"1540":{"slidesPerView":4}}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><a class="text-decoration-none" href="../../VgmsModules/pms/view_task.php">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="../../assets/img/kanban/board-9.png" style="height: 128px;" alt="" />
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/31.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/32.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/33.webp" alt="" />
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="../../assets/img/team/34.webp" alt="" />
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Inventory update</h3>
                            <p class="text-body-tertiary mb-4">Shipping Process</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>68</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>31</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>14</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="btn btn-phoenix-primary d-flex flex-center h-100 w-100 fs-7 fw-semibold text-truncate" href="create-kanban-board.html"><span class="fa-solid fa-plus-circle fs-8 me-2"></span>Create New Board</a></div>
                </div>
              </div>
              <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right fs-11"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left fs-11"></span></div>
              </div>
            </div>
          </div> -->
          <div class="text-center"><button class="btn btn-phoenix-primary mt-4"><span class="fa-solid fa-box-archive me-2"></span>Open Archive</button></div>
        </div>

      </div>
      <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
        <div class="modal-dialog">
          <div class="modal-content mt-15 rounded-pill">
            <div class="modal-body p-0">
              <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                  <div class="scrollbar-overlay" style="max-height: 30rem;">
                    <div class="list pb-3">
                      <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                      <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../e-commerce/landing/product-details.html">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../e-commerce/landing/product-details.html">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="../../assets/img/team/40x40/10.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                          <div class="avatar avatar-l  me-2 text-body">
                            <img class="rounded-circle " src="../../assets/img/team/40x40/12.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                      <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="text-center">
                      <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
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






  </main>


  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
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
          <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label></div>
        </div>
      </div>


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
      <script src="../../assets/js/phoenix.js"></script>
      <script src="../../vendors/swiper/swiper-bundle.min.js"></script>





      </script>



</body>


<!-- Mirrored from 3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>