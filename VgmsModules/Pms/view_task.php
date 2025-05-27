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
  <title>Task Kanban</title>

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
  <link href="../../vendors/glightbox/glightbox.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
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
  <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
  <link href="../../vendors/choices/choices.min.css" rel="stylesheet" />
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
    <div class="content kanban-content">
      <div class="kanban-header">
        <div class="row gx-0 justify-content-between justify-content-md-start">
          <div class="col-auto">
            <h3 class="me-2 mt-1">View Tasks</h3>
          </div>
          <div class="col-auto d-flex align-items-center">
            <button class="btn btn-primary ms-4 fs-10 px-3" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span
                class="fas fa-user-plus d-inline-block" style="min-width: 14px"></span><span
                class="d-none d-sm-inline ms-2" data-fa-transform="grow-4 down-1">Add task</span></button>
          </div>
          <div class="col-md-auto d-flex align-items-center ms-auto mt-2 mt-md-0">
            <ul class="nav w-100 fs-9">
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body ps-0 pe-2 px-xl-3 fw-bold"
                  href="#!" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span class="me-1 fas fa-search"
                    data-fa-transform="up-2" style="min-width: 14px"></span><span
                    class="d-none d-xxl-inline">Search</span></a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold"
                  href="#!"><span class="me-1 fas fa-filter" data-fa-transform="up-2"
                    style="min-width: 14px"></span><span class="d-none d-xxl-inline">Filter</span></a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold"
                  href="#!"><span class="me-1 fa-solid fa-right-left" data-fa-transform="up-2"
                    style="min-width: 14px"></span><span class="d-none d-xxl-inline">Export/import</span></a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold"
                  href="#!"><span class="me-1 fas fa-palette" data-fa-transform="up-2"
                    style="min-width: 14px"></span><span class="d-none d-xxl-inline">Modify</span></a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold"
                  href="#!"><span class="me-1 fa-solid fa-bars-staggered" data-fa-transform="up-2"
                    style="min-width: 14px"></span><span class="d-none d-xxl-inline">Gantt</span></a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold"
                  href="#!"><span class="me-1 fa-solid fa-calendar-days" data-fa-transform="up-2"
                    style="min-width: 14px"></span><span class="d-none d-xxl-inline">Calendar</span></a></li>
              <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold"
                  href="#!"><span class="me-1 fa-solid fa-box-archive" data-fa-transform="up-2"
                    style="min-width: 14px"></span><span class="d-none d-xxl-inline">Archive</span></a></li>
              <li class="nav-item ms-auto"><a
                  class="nav-link d-flex align-items-center pe-0 ps-1 ps-xl-3 text-body h-100"
                  data-phoenix-toggle="offcanvas" data-phoenix-target="#offcanvasKanban" href="#offcanvasKanban"
                  role="button"><span class="fa-solid fa-bars d-inline" data-fa-transform="up-2"
                    style="min-width: 14px"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="kanban-container scrollbar" data-kanban-container="data-kanban-container">
        <!-- <div></div> -->
        <!-- <div class="kanban-column scrollbar collapsed">
          <div class="kanban-column-header px-4 hover-actions-trigger">
            <div class="d-flex align-items-center border-bottom border-3 py-3 border-warning">
              <h5 class="mb-0 kanban-column-title">Unassaigned<span class="kanban-title-badge">3</span></h5>
              <div class="hover-actions-trigger"><button
                  class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button"
                  data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort all tasks</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Remove all tasks</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Import</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Duplicate column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Delete column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Archive column</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit title &amp; description</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                </div>
              </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span><span
                class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span>
            </div>
          </div>
          <div class="kanban-items-container" data-sortable="data-sortable">
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span
                        class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop
                    a new feature for the phoenix mobile app</p>
                  <div class="d-flex mt-2 align-items-center"></div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span
                        class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Conduct
                    user research to gather feedback on the latest product iteration</p>
                  <div class="d-flex mt-2 align-items-center"></div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span
                        class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Review
                    and approve marketing materials for the upcoming product launch</p>
                  <div class="d-flex mt-2 align-items-center"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0"
              data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span
                class="fas fa-plus text-white dark__text-gray-400"
                data-fa-transform="grow-4 down-1"></span></button><input
              class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
        </div> -->
        <?php
include '../PhpFiles/connection.php';

$project_id = isset($_GET['project_id']) ? intval($_GET['project_id']) : 0;

$sql = "
  SELECT 
    t.id,
    t.title,
    t.description,
    t.project_name,
    t.status_id,
    s.name AS status_name,
    c.category_name AS category_name,
    p.priority AS priority_name,
    CONCAT(e.f_name, ' ', e.m_name, ' ', e.l_name) AS employee_name
  FROM tbl_tasks t
  LEFT JOIN tbl_task_status s ON t.status_id = s.id
  LEFT JOIN tbl_category c ON t.task_category = c.id
  LEFT JOIN tbl_priority p ON t.priority = p.id
  LEFT JOIN tbl_emp e ON t.assigned_employee = e.id
  WHERE t.project_id = $project_id
";



$result = $conn->query($sql);
$tasks = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];

foreach ($tasks as $task) {
    if (empty($task['status_name'])) {
        echo "Missing status for task ID: {$task['id']}<br>";
    }
}
// 🧩 Group by status name
$groupedTasks = [];
foreach ($tasks as $task) {
  $status = $task['status_name'] ?: 'Unassigned';
  if (!isset($groupedTasks[$status])) {
    $groupedTasks[$status] = [];
  }
  $groupedTasks[$status][] = $task;
}


?>

        
        <?php foreach ($groupedTasks as $status => $tasksInStatus): ?>
        <div class="kanban-column scrollbar">
          <div class="kanban-column-header px-4 hover-actions-trigger">
            <div class="d-flex align-items-center border-bottom border-3 py-3 border-300">
              <h5 class="mb-0 kanban-column-title">
                <?= htmlspecialchars($status) ?>
                <span class="kanban-title-badge">
                  <?= count($tasksInStatus) ?>
                </span>
              </h5>
              <div class="hover-actions-trigger"><button
                  class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button"
                  data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort all tasks</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Remove all tasks</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Import</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Duplicate column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Delete column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Archive column</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit title &amp; description</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                </div>
                </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span><span
                class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span>
            </div>
          </div>
          <div class="kanban-items-container" data-sortable="data-sortable">
            <?php foreach ($tasksInStatus as $task): ?>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                    <div class="bg-holder" style="background-image:url(../../assets/img/kanban/1.jpg);"></div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-danger">
                      <span>
                        <?= htmlspecialchars($task['category_name']) ?>
                      </span><span
                        class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p
                    class="mb-0 stretched-link"
                    data-bs-toggle="modal"
                    data-bs-target="#KanbanItemDetailsModal"
                    data-id="<?= $task['id'] ?>"
                    data-title="<?= htmlspecialchars($task['title']) ?>"
                    data-description="<?= htmlspecialchars($task['description']) ?>"
                    data-project="<?= htmlspecialchars($task['project_name']) ?>"
                    data-status="<?= htmlspecialchars($task['status_name']) ?>"
                    data-priority="<?= htmlspecialchars($task['priority_name']) ?>"
                    data-category="<?= htmlspecialchars($task['category_name']) ?>"
                    data-employee="<?= htmlspecialchars($task['employee_name']) ?>"
                    >
                    <?= htmlspecialchars($task['title']) ?>
                  </p>
                  <div class="d-flex mt-2 align-items-center">
                    <P class="fs-9 mb-0">
                      <?= htmlspecialchars($task['description']) ?>
                    </P>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0"
              data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span
                class="fas fa-plus text-white dark__text-gray-400"
                data-fa-transform="grow-4 down-1"></span></button><input
              class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
        </div>
        <?php endforeach; ?>
        <div class="kanban-column scrollbar position-relative bg-transparent">
          <div class="d-flex h-100 flex-center fw-bold bg-body-hover"><a
              class="text-decoration-none stretched-link text-body-secondary" href="#!">
              <div class="circle-btn bg-body-secondary mx-auto"><span class="fas fa-plus"
                  data-fa-transform="shrink-2"></span></div><span>Add another list</span>
            </a></div>
        </div>
      </div>
        <!--div class="kanban-column scrollbar">
          <div class="kanban-column-header px-4 hover-actions-trigger">
            <div class="d-flex align-items-center border-bottom border-3 py-3 border-primary">
              <h5 class="mb-0 kanban-column-title">Doing<span class="kanban-title-badge">4</span></h5>
              <div class="hover-actions-trigger"><button
                  class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button"
                  data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort all tasks</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Remove all tasks</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Import</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Duplicate column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Delete column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Archive column</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit title &amp; description</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                </div>
              </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span><span
                class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span>
            </div>
          </div>
          <div class="kanban-items-container" data-sortable="data-sortable">
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span
                        class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Create
                    wireframes for a new phoenix landing page design</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span
                        class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan
                      25</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <div class="avatar-name rounded-circle text-warning bg-warning-subtle"><span>R</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span
                        class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Set up
                    and configure a new software tool for the marketing team</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa fa-check-square fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>5/34</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span
                        class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Draft
                    and send a press release to announce a new partnership</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span
                        class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan
                      25</p>
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                    <div class="bg-holder" style="background-image:url(../../assets/img/kanban/glass.jpg);"></div>
                    </.bg-holder>
                  </div>
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span
                        class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Conduct
                    a security audit of the phoenix web applications</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span
                        class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan
                      25</p>
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0"
              data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span
                class="fas fa-plus text-white dark__text-gray-400"
                data-fa-transform="grow-4 down-1"></span></button><input
              class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
        </div-->
        <!--div class="kanban-column scrollbar">
          <div class="kanban-column-header px-4 hover-actions-trigger">
            <div class="d-flex align-items-center border-bottom border-3 py-3 border-info">
              <h5 class="mb-0 kanban-column-title">Review<span class="kanban-title-badge">4</span></h5>
              <div class="hover-actions-trigger"><button
                  class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button"
                  data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort all tasks</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Remove all tasks</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Import</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Duplicate column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Delete column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Archive column</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit title &amp; description</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                </div>
              </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span><span
                class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span>
            </div>
          </div>
          <div class="kanban-items-container" data-sortable="data-sortable">
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span
                        class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Design
                    and develop a new logo for the phoenix</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span
                        class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Create
                    a fresh visual identity for Phoenix with a new logo design</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa fa-check-square fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>5/34</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span
                        class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">
                    Identify best software vendors for company-wide system through comprehensive research and evaluation
                  </p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                    <div class="bg-holder" style="background-image:url(../../assets/img/kanban/wall.jpg);"></div>
                    </.bg-holder>
                  </div>
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span
                        class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Write
                    and edit copy for a new email marketing campaign</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0"
              data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span
                class="fas fa-plus text-white dark__text-gray-400"
                data-fa-transform="grow-4 down-1"></span></button><input
              class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
        </div-->
        <!--div class="kanban-column scrollbar">
          <div class="kanban-column-header px-4 hover-actions-trigger">
            <div class="d-flex align-items-center border-bottom border-3 py-3 border-success">
              <h5 class="mb-0 kanban-column-title">Release<span class="kanban-title-badge">3</span></h5>
              <div class="hover-actions-trigger"><button
                  class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button"
                  data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Sort all tasks</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Remove all tasks</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Import</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Duplicate column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Delete column</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Archive column</span></a>
                  <hr class="my-2" /><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit title &amp; description</span></a><a
                    class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                    href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                </div>
              </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span><span
                class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon"
                data-kanban-collapse="data-kanban-collapse"></span>
            </div>
          </div>
          <div class="kanban-items-container" data-sortable="data-sortable">
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span
                        class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Improve
                    Phoenix website usability through user testing</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                    <div class="bg-holder" style="background-image:url(../../assets/img/kanban/home.jpg);"></div>
                    </.bg-holder>
                  </div>
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span
                        class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop
                    and deliver a training program for new employees</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
              <div class="card sortable-item hover-actions-trigger">
                <div class="card-body py-3 px-3">
                  <div class="kanban-status mb-1 position-relative lh-1"><span
                      class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem"
                      data-fa-transform="shrink-1 down-3"></span><span
                      class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span
                        class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2"
                        style="height:7.8px;width:7.8px;"></span></span><button
                      class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button"
                      data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90"
                        data-fa-transform="shrink-2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Duplicate</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to top</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Jump to bottom</span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Print/Download</span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                      <hr class="my-2" /><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined"
                        href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a
                        class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger"
                        href="#!"><span>Delete</span></a>
                    </div>
                  </div>
                  <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">
                    Organize and lead a brainstorming session to generate new product ideas</p>
                  <div class="d-flex mt-2 align-items-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span
                        class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    <div class="avatar-group ms-auto">
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/57.webp" alt="" />
                      </div>
                      <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                        <img class="rounded-circle " src="../../assets/img/team/25.webp" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0"
              data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span
                class="fas fa-plus text-white dark__text-gray-400"
                data-fa-transform="grow-4 down-1"></span></button><input
              class="form-control search-input rounded-3 px-3" placeholder="Add new task" /></div>
        </div-->
        
      
      <div class="phoenix-offcanvas phoenix-offcanvas-end bg-body-highlight position-fixed outline-none" tabindex="-1"
        id="offcanvasKanban" style="max-width: 445px">
        <div class="offcanvas-header justify-content-between">
          <h3 class="offcanvas-title">Phoenix Kanban</h3><button class="btn p-1 fw-bolder" type="button"
            data-phoenix-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
        </div>
        <div class="offcanvas-body">
          <h4 class="text-body-highlight fw-semibold mb-0 mt-6">Admins </h4>
          <div class="d-flex align-items-center mt-3">
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-xl  me-3 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/14.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/14.webp"
                          alt="" /></div>
                      <h6 class="text-white">Sasha Blaus</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="flex-1"><a class="text-decoration-none text-body-highlight lh-1 fw-semibold" href="#!">Sasha
                Blaus</a>
              <h6 class="mb-0 lh-1 text-body-highlight fw-semibold">@potatogirl</h6>
            </div>
          </div>
          <h4 class="text-body-highlight fw-semibold mb-0 mt-5 mb-3">Members</h4>
          <div class="d-flex">
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/33.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/33.webp"
                          alt="" /></div>
                      <h6 class="text-white">Tyrion Lannister</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/30.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/30.webp"
                          alt="" /></div>
                      <h6 class="text-white">Milind Mikuja</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/31.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/31.webp"
                          alt="" /></div>
                      <h6 class="text-white">Stanly Drinkwater</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/60.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/60.webp"
                          alt="" /></div>
                      <h6 class="text-white">Josef Stravinsky</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/65.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/65.webp"
                          alt="" /></div>
                      <h6 class="text-white">Igor Borvibson</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
          </div>
          <h4 class="text-body-highlight fw-semibold mb-0 mt-3 mb-3">Guests</h4>
          <div class="d-flex">
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/2.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/2.webp" alt="" />
                      </div>
                      <h6 class="text-white">Tyrion Lannister</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/3.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/3.webp" alt="" />
                      </div>
                      <h6 class="text-white">Milind Mikuja</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/4.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/4.webp" alt="" />
                      </div>
                      <h6 class="text-white">Stanly Drinkwater</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                  <img class="rounded-circle " src="../../assets/img/team/5.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                <div class="position-relative">
                  <div class="bg-holder z-n1"
                    style="background-image:url(../../assets/img/bg/bg-32.png);background-size: auto;"></div>
                  <!--/.bg-holder-->
                  <div class="p-3">
                    <div class="text-end"><button class="btn p-0 me-2"><span
                          class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span
                          class="fa-solid fa-ellipsis text-white"></span></button></div>
                    <div class="text-center">
                      <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img
                          class="rounded-circle border border-light-subtle" src="../../assets/img/team/5.webp" alt="" />
                      </div>
                      <h6 class="text-white">Josef Stravinsky</h6>
                      <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                      <div class="d-flex flex-center mb-3">
                        <h6 class="text-white mb-0">224 <span
                            class="fw-normal text-light text-opacity-75">connections</span></h6><span
                          class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                        <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-body-emphasis">
                  <div class="p-3 border-bottom border-translucent">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-phone"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                            class="fa-solid fa-message"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                            class="fa-solid fa-video"></span></button></div><button
                        class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send
                        Email</button>
                    </div>
                  </div>
                  <ul class="nav d-flex flex-column py-3 border-bottom">
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span
                          class="text-body-highlight flex-1">Assigned Projects</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span
                          class="me-2 text-body" data-feather="pie-chart"></span><span
                          class="text-body-highlight flex-1">View activiy</span><span
                          class="fa-solid fa-chevron-right fs-11"></span></a></li>
                  </ul>
                </div>
                <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none"
                    href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger"
                    href="#!">Unassign </a></div>
              </div>
            </div>
          </div>
          <h4 class="text-body-highlight fw-semibold mb-0 mt-7 mb-3 border-bottom border-translucent pb-3">Description
            <span class="fas fa-pencil text-body fs-9 ms-3 cursor-pointer" data-fa-transform="up-2"></span>
          </h4>
          <p>Phoenix is a rich and complex symbol that continues to capture the imagination of people across cultures
            and time periods. Whether seen as a symbol of hope, renewal, or mystery, the Phoenix remains an enduring
            icon of the human spirit.</p>
          <ul class="list-unstyled mb-0">
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Board Setting</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Duplicate Board</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Manage Labels</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Go to Archive</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Print</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Export As</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Integrations</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Privacy Settings</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom"
                href="#!"><span>Automation</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
            <li><a
                class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3 text-danger pb-0 pb-0"
                href="#!"><span>Leave Board</span></a></li>
          </ul>
        </div>
      </div>
      <div class="phoenix-offcanvas-backdrop" data-phoenix-backdrop="data-phoenix-backdrop"></div>
      <?php include_once('../../Components/footer.php'); ?>
    </div>
    <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
      data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
      <div class="modal-dialog">
        <div class="modal-content mt-15 rounded-pill">
          <div class="modal-body p-0">
            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                  class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search"
                  placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
              <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                        class="text-body-quaternary">results</span></h6>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Recently Searched </h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left"
                              data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left"
                              data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                        href="../e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3"
                            src="../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                              class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB
                              Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center"
                        href="../e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid"
                            src="../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                              class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body"
                              data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body"
                              data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span
                              class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library
                            MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span
                              class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature
                            MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body"
                              data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                        href="../../pages/members.html">
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
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                      Related Searches</h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span
                              class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search
                            in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body"
                              data-fa-transform="shrink-2"></span> Store MacBook″</div>
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
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-body-emphasis">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                class="fa-solid fa-circle text-success fs-11"></span></h5>
            <div class="btn-reveal-trigger"><button
                class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button"
                id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                aria-expanded="false" data-bs-reference="parent"><span
                  class="fas fa-ellipsis-h text-body"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                  class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in
                  chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report
                  to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
            </div>
          </div>
          <div class="card-body chat p-0">
            <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
              <div class="text-end mt-6"><a
                  class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">I need help with something</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a
                  class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a
                  class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a
                  class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                  href="#!">
                  <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span
                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a></div>
              <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online"><img
                    class="rounded-circle border border-3 border-light-subtle" src="../../assets/img/team/30.webp"
                    alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email
                  within 24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input
                class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text"
                placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file"
                accept="image/*" id="supportChatPhotos" /><label
                class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span
                  class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file"
                id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span
                class="fa-solid fa-paper-plane fs-9"></span></button>
          </div>
        </div>
        <!-- </div><button class="btn btn-support-chat p-0 border border-translucent"><span
          class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span
          class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span
            class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span
          class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span
          class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
    </div> -->
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  
  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
      <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
        <div>
          <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
          <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
        </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
            class="fas fa-times fs-8"> </span></button>
      </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
          class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
      <div class="setting-panel-item mt-0">
        <h5 class="setting-panel-item-title">Color Scheme</h5>
        <div class="row gx-2">
          <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
              value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/default-light.png" alt="" /></span><span
                class="label-text">Light</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
              value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                Dark</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio"
              value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label>
          </div>
        </div>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">RTL </h5>
          <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox"
              data-theme-control="phoenixIsRTL" /></div>
        </div>
        <p class="mb-0 text-body-tertiary">Change text direction</p>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
          <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox"
              data-theme-control="phoenixSupportChat" /></div>
        </div>
        <p class="mb-0 text-body-tertiary">Toggle support chat</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Navigation Type</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio"
              value="vertical" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/default-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png"
                  alt="" /></span><span class="label-text">Vertical</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
              value="horizontal" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text"> Horizontal</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio"
              value="combo" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/nav-combo-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png"
                  alt="" /></span><span class="label-text"> Combo</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio"
              value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/dual-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png"
                  alt="" /></span><span class="label-text"> Dual nav</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
              value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img
                class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none">
                Default</span><span class="label-text d-light-none">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
              value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img
                class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none">
                Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
              value="default" data-theme-control="phoenixNavbarTopShape" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim"
              data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img
                  class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-slim.png"
                  alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                  src="../../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text">
                Slim</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
              value="default" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-darker.png"
                  alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
              value="darker" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-lighter.png"
                  alt="" /></span><span class="label-text d-dark-none">Darker</span><span
                class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary"
        href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase
        template</a>
    </div>
  </div>
  <a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <!-- <div class="card-body d-flex align-items-center px-2 py-1">
      <div class="position-relative rounded-start" style="height:34px;width:28px">
        <div class="settings-popover"><span class="ripple"><span
              class="fa-spin position-absolute all-0 d-flex flex-center"><span
                class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20"
                  viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                    fill="#2A7BE4"></path>
                </svg></span></span></span></div>
      </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div> -->
  </a>
  <?php
      if (isset($_GET['project_id']) && is_numeric($_GET['project_id'])) {
        $project_id = (int) $_GET['project_id'];
      } else {
          echo "Invalid project ID.";
          exit;
        }
  ?>

  <div class="modal fade" id="kanbanAddTask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- added the from tag and name attribute -->
        <form action="../../VgmsModules/PhpFiles/handle_add_task.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="novalidate" class="dropzone dropzone-multiple p-0" id="dropzone-multiple" data-dropzone="data-dropzone">
          <div class="modal-body">
            <h3>Edit Task</h3>
            <div class="row gx-3 gy-4">
              <hr>
              <div class="col-sm-6 col-md-12" style="margin-top: -1%;">
                <label class="form-label" style="margin-left: -1%;">Task Title </label>
                <div class="form-floating"><input class="form-control" id="kanbanTaskTitle" type="text"
                    placeholder="title" value="" /><label for="kanbanTaskTitle">Title</label></div>
              </div>
              <div class="col-12 gy-4">
                <label class="form-label" style="margin-left: -1%;">Description </label>
                <div class="form-floating"><textarea class="form-control" id="floatingProjectDescription"
                    placeholder="Leave a comment here" style="height: 128px"></textarea><label
                    for="floatingProjectDescription">ADD A DESCRIPTION</label></div>
              </div>

              <div class="col-sm-4" style="width: 50%;">
                <!-- <div class="form-floating"><select class="form-select" id="TaskType">
                    <option selected="selected">Phoenix</option>
                    <option value="2">Boreas</option>
                    <option value="3">Erebus</option>
                  </select><label for="TaskType">BORAD TYPE</label></div> -->
                <label class="form-label">Project Name<span style="color: red;">*</span></label>
                <input type="text" class="form-control" placeholder="Enter project title"
                  name="project_name">

              </div>
              <div class="col-sm-4" style="width: 50%;">
                <!-- <div class="form-floating"><select class="form-select" id="KanbanColumnType">
                    <option selected="selected">Unassigned</option>
                    <option value="2">To do</option>
                    <option value="3">Doing</option>
                    <option value="3">Review</option>
                    <option value="3">Release</option>
                  </select><label for="KanbanColumnType">COLUMN</label></div> -->
                <label class="form-label" for="timepicker2">Select Time Range</label>
                <input class="form-control datetimepicker flatpickr-input" id="timepicker2" type="text" name="time_range" placeholder="d/m/y to d/m/y" data-options="{&quot;mode&quot;:&quot;range&quot;,&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">

              </div>
              <!-- to add some field  -->
              <!-- <div class="col-sm-4">
                <div class="form-floating"><select class="form-select" id="KanbanPlaceNumber">
                    <option selected="selected">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                  </select><label for="KanbanPlaceNumber">PLACE</label></div>
              </div> -->
              <div class="col-sm-12">
                <div class="mb-3"><label for="organizerMultiple2">Assigned Employee</label><select class="form-select" id="organizerMultiple2" data-choices="data-choices" multiple="multiple" size="1" name="organizerMultiple" required="required" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">Select employee...</option>
                    <option>Massachusetts Institute of Technology</option>
                    <option>University of Chicago</option>
                    <option>GSAS Open Labs At Harvard</option>
                    <option>California Institute of Technology</option>
                  </select>
                  <div class="invalid-feedback">Please select one or multiple</div>
                </div>
              </div>
              <div class="col-sm-4" style="width: 50%; margin-top:-0.5% ; ">
                <label for="organizerSingle" style="font-size : 12px;">Task Category</label>
                <div class="s">
                  <select class="form-select" id="organizerSingle" name="task_category" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">Select organizer...</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4" style="width: 50%; margin-top:-0.5% ;">
                <div class="mb-3"><label for="organizerSingle2" style="font-size : 12px">PRIORITY</label>
                  <select class="form-select" id="organizerSingle2" data-choices="data-choices" name="organizerSingle" size="1" required="required" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">Low (Default)</option>
                    <option>High</option>
                    <option>Medium</option>
                    <option>semi Urgent</option>
                    <option>Urgent</option>
                  </select>
                  <div class="invalid-feedback">Please select one</div>
                </div>
              </div>
              <!-- <div class="col-sm-12">
                  <div class="form-floating"><select class="form-select" id="KanbanPriorityLavel">
                      <option selected="selected">Low (Default)</option>
                      <option value="2">High</option>
                      <option value="2">Medium</option>
                      <option value="2">Urgent</option>
                    </select><label for="KanbanPriorityLavel">PRIORITY</label></div>
                </div> -->
              <!-- <div class="col-sm-12">
                  <div class="form-floating"><select class="form-select" id="KanbanCategoryType">
                      <option selected="selected">UNASSIGNED (Default)</option>
                      <option value="2">Feature</option>
                      <option value="2">Bug</option>
                      <option value="2">Issue</option>
                    </select><label for="KanbanCategoryType">CATEGORY</label></div>
                </div> -->
              <div class="col-sm-12" style="margin-top: -1%;">
                <div class="mb-3"><label for="organizerMultiple2" style="font-size : 12px">Tags</label>
                  <select class="form-select" id="organizerMultiple2" data-choices="data-choices" multiple="multiple" size="1" name="tagsMultiple" required="required" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">Select organizer...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  <div class="invalid-feedback">Please select one or multiple</div>
                </div>
              </div>

            </div>
          </div>
          <!-- image -->
          <div class="col-12 gy-4" style="margin-top: -1%;">
            <div class="dropzone dropzone-multiple bg-transparent p-0" id="Kanbandropzone"
              data-dropzone="data-dropzone"
              data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
              <div class="fallback"><input type="file" name="file" /></div>
              <div class="dz-message py-3" data-dz-message="data-dz-message">
                <div class="dz-message-text text-center text-body-secondary"><img class="mb-2"
                    src="../../assets/img/icons/image-icon.png" width="24" alt="" /><br />Add cover image </div>
              </div>
              <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                  <div class="border border-dashed p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                      src="../../assets/img/icons/file.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                  <div class="flex-1 d-flex flex-between-center">
                    <div>
                      <h6 data-dz-name="data-dz-name"></h6>
                      <div class="d-flex align-items-center">
                        <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                      </div><span class="fs-10 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                    </div>
                    <div class="dropdown"><button
                        class="btn btn-link text-body-tertiary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                          class="fas fa-ellipsis-h"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a
                          class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- file upload -->
          <div class="dropzone dropzone-multiple p-0" id="dropzone-multiple" data-dropzone="data-dropzone" style="margin-top: 1%;">
            <label class="form-label">Upload File <span style="color: red;">*</span></label>
            <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
            <div class="dz-message" data-dz-message="data-dz-message"><img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" style="margin-left:38%" />Drop your files here</div>
            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
              <div class="d-flex mb-3 pb-3 border-bottom border-translucent media">
                <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image" src="../../assets/img/icons/file.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                <div class="flex-1 d-flex flex-between-center">
                  <div>
                    <h6 data-dz-name="data-dz-name"></h6>
                    <div class="d-flex align-items-center">
                      <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                    </div><span class="fs-10 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                  </div>
                  <div class="dropdown"><button class="btn btn-link text-body-tertiary btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove"><span style="color: red; font-size:30px;">...</a></button>
                    <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="modal-footer justify-content-between"><button class="btn p-1" type="button" data-bs-dismiss="modal"
              aria-label="Close" value="refresh"><span class="fas fa-times fs-10 me-1"
                data-fa-transform="up-1"></span>Close</button><button class="btn btn-primary px-6" type="close"
              data-bs-dismiss="modal" value="submit">Done</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="KanbanItemDetailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
      <div class="modal-content overflow-hidden">
        <div class="modal-body p-0">
          <div class="position-relative" style="height:200px; width:100%">
            <div class="bg-holder" style="background-image:url(../../assets/img/kanban/modal-bg.jpg);"></div>
            <!--/.bg-holder-->
          </div>
          <div class="row gy-4 py-0 gx-0">
            <div class="col-lg-8 col-12">
              <div class="row mt-0 gy-4 pb-3 gx-0 px-3">
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">TITLE </h6>
                </div>
                <div class="col-8 col-sm-9">
                  <h4 class="mb-0 text-body-emphasis lh-sm" id="modal-title"></h4>
                </div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">DESCRIPTION </h6>
                </div>
                <div class="col-8 col-sm-9">
                  <P class="fs-9 mb-0" id="modal-description"></P>
                </div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">PROJECT NAME </h6>
                </div>
                <div class="col-8 col-sm-9">
                  <P class="mb-0 text-body-emphasis fw-semibold" id="modal-project"></P>
                </div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">STATUS</h6>
                </div>
                <div class="col-8 col-sm-9">
                  <P class="mb-0 text-body-emphasis fw-semibold d-inline-block kanban-column-underline-warning" id="modal-status">
                  </P>
                </div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">ASSAIGNED TO </h6>
                </div>
                <div class="col-8 col-sm-9">
                  <P class="mb-0 text-body-emphasis fw-semibold" id="modal-employee"></P>
                </div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">PRIORITY </h6>
                </div>
                <div class="col-8 col-sm-9">
                  <P class="mb-0 text-body-emphasis fw-semibold" id="modal-priority"><span class="fa fa-circle m text-warning"
                      data-fa-transform="shrink-6 down-1" ></span>
                  </P>
                </div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">CATEGORY </h6>
                </div>
                <div class="col-8 col-sm-9"><span
                    class="badge badge-phoenix fs-10 badge-phoenix-danger" id="modal-category"><span>
                   </span><span
                      class="ms-1 fas fa-bug item.icon" data-fa-transform="up-2"
                      style="height:7.8px;width:7.8px;"></span></span></div>
                <div class="col-4 col-sm-3">
                  <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">ATTACHMENTS </h6>
                </div>
                <div class="col-8 col-sm-9">
                  <div class="border-bottom border-translucent d-flex flex-row pb-3"><a
                      href="../../assets/img/kanban/a1.jpg" data-gallery="gallery-kanban-attachment"> <img
                        class="rounded-3" src="../../assets/img/kanban/a1.jpg" width="64" height="64" alt="" /></a>
                    <div class="flex-1 ms-3 d-flex flex-column">
                      <h5 class="lh-sm">Silly_sight_1.png</h5>
                      <p class="lh-1 fs-9 text-body-tertiary fw-medium mb-0">21st Decemver, 12:56 PM</p>
                      <div class="d-flex mt-auto"><button class="btn p-0 fs-8 text-body-tertiary me-3"><span
                            class="fas fa-comment" data-fa-transform="shrink-4"></span></button><button
                          class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-trash"
                            data-fa-transform="shrink-4"></span></button><button
                          class="btn p-0 fs-8 text-body-tertiary"><span class="fas fa-pencil"
                            data-fa-transform="shrink-4"></span></button></div>
                    </div>
                  </div>
                  <div class="border-bottom border-translucent d-flex flex-row pb-3 mt-3">
                    <div class="border border-translucent rounded-3 flex-center d-flex"
                      style="width:64px; height: 64px">
                      <div class="fa-solid fa-file-zipper fa-2x text-body-quaternary text-opacity-75"></div>
                    </div>
                    <div class="flex-1 ms-3 d-flex flex-column">
                      <h5 class="lh-sm">All_images.zip</h5>
                      <p class="lh-1 fs-9 text-body-tertiary fw-medium mb-0">21st Decemver, 12:56 PM</p>
                      <div class="d-flex text-body-tertiary mt-auto"><button
                          class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-comment"
                            data-fa-transform="shrink-4"></span></button><button
                          class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-trash"
                            data-fa-transform="shrink-4"></span></button><button
                          class="btn p-0 fs-8 text-body-tertiary"><span class="fas fa-pencil"
                            data-fa-transform="shrink-4"></span></button></div>
                    </div>
                  </div><button class="btn btn-link ps-0"><span class="fas fa-plus me-2"
                      data-fa-transform="shrink-3"></span>Add an Attachment</button>
                </div>
              </div>
            </div>
            

            <div class="col-lg-4 border-start-lg">
              <div class="scrollbar" style="max-height: 667px;">
                <div class="px-3">
                  <h5 class="mb-3 mt-4">Actions</h5>
                  <ul class="nav flex-column flex-sm-row flex-lg-column list-unstyled">
                    <li class="kanban-action-item lh-sm nav-item me-2">
                      <a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link"
                        href="#"
                        id="changeStatusTrigger"
                        data-task-id=""
                        data-current-status=""
                        >
                        <span class="me-2 fa-solid fa-file-export"></span>Change status
                      </a>
                   </li>

                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-clone"></span>Duplicate</a></li>
                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-share-nodes"></span>Share</a></li>
                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-square-plus"></span>Create template</a></li>
                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-arrows-up-to-line"></span>Jump to top</a></li>
                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-box-archive"></span>Move to Archive</a></li>
                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-trash-can"></span>Move to Trash</a></li>
                    <li class="kanban-action-item lh-sm nav-item me-2"><a
                        class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span
                          class="me-2 fa-solid fa-download"></span>Print/Download</a></li>
                  </ul>
                  <h5 class="mt-6">Activities</h5>
                  <div class="d-flex border-bottom ">
                    <div class="pt-3 text-warning"><span
                        class="border border-translucent rounded-pill p-1 fas fa-random"
                        data-fa-transform="shrink-4"></span></div>
                    <div class="activity-item ps-2 py-3">
                      <p class="mb-1 fs-9"><span class="fw-bold"> Alfen Loebe </span> Moved the task <a href="#!">"the
                          standard chunk" </a>from <span class="fw-bold">Doing</span> to <span class="fw-bold">To
                          Do</span></p>
                      <div class="d-flex">
                        <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                        <p class="mb-0 fs-9">Aughst 7,2022</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex border-bottom ">
                    <div class="pt-3 text-info"><span
                        class="border border-translucent rounded-pill p-1 fa-solid fa-paperclip"
                        data-fa-transform="shrink-4"></span></div>
                    <div class="activity-item ps-2 py-3">
                      <p class="mb-1 fs-9"><span class="fw-bold"> Jessie Samson </span> Attached image3.png to the task
                        <a href="#!">"the standard chunk" </a>
                      </p>
                      <div class="d-flex">
                        <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                        <p class="mb-0 fs-9">Aughst 7,2022</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex border-bottom ">
                    <div class="pt-3 text-info"><span class="border border-translucent rounded-pill p-1 fas fa-plus"
                        data-fa-transform="shrink-4"></span></div>
                    <div class="activity-item ps-2 py-3">
                      <p class="mb-1 fs-9"><span class="fw-bold"> Alfen Loebe </span> Moved the task <a href="#!">"the
                          standard chunk" </a>from <span class="fw-bold">Doing</span> to <span class="fw-bold">To
                          Do</span></p>
                      <div class="d-flex">
                        <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                        <p class="mb-0 fs-9">Aughst 7,2022</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex  ">
                    <div class="pt-3 text-primary"><span
                        class="border border-translucent rounded-pill p-1 fas fa-random"
                        data-fa-transform="shrink-4"></span></div>
                    <div class="activity-item ps-2 py-3">
                      <p class="mb-1 fs-9"><span class="fw-bold"> Alfen Loebe </span> Moved the task <a href="#!">"the
                          standard chunk" </a>from <span class="fw-bold">Doing</span> to <span class="fw-bold">To
                          Do</span></p>
                      <div class="d-flex">
                        <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                        <p class="mb-0 fs-9">Aughst 7,2022</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between"><button class="btn p-1" type="button" data-bs-dismiss="modal"
            aria-label="Close"><span class="fas fa-times fs-10 me-1"
              data-fa-transform="up-1"></span>Close</button><button class="btn btn-phoenix-primary px-6" type="button"
            data-bs-target="#kanbanAddTask" data-bs-toggle="modal">Edit<span class="fas fa-edit ms-2"
              data-fa-transform="shrink-3"></span></button></div>
      </div>
    </div>
  </div>
  
  

  <!--Fetching the task status from the database-->
  <?php
    $statusQuery = "SELECT id, name FROM tbl_task_status";
    $statusResult = $conn->query($statusQuery);
    $statuses = $statusResult ? $statusResult->fetch_all(MYSQLI_ASSOC) : [];
  ?>

  
  <script>
    /**
    * Script to manage task status changes from the Kanban Task Detail Modal.
    *
    * Features:
    * - Dynamically fills task details in the modal when opened.
    * - Updates the "Change Status" button with the correct task ID and current status.
    * - Opens a second modal with a dropdown of available statuses when "Change Status" is clicked.
    * - Sends an AJAX POST request to update the task's status in the database via PHP.
    * - Reloads the page on successful update to reflect the status change.
    *
    * Dependencies:
    * - Bootstrap 5 (for modals)
    * - PHP backend: update_task_status.php
    */

   const allStatuses = <?= json_encode($statuses) ?>;

   document.addEventListener('DOMContentLoaded', function () {
    const detailsModal = document.getElementById('KanbanItemDetailsModal');
    const statusSelect = document.getElementById('statusSelect');
    const updateBtn = document.getElementById('confirmChangeStatusBtn');
    let currentTaskId = null;

   detailsModal.addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;

    // Set modal content
    document.getElementById('modal-title').textContent = trigger.getAttribute('data-title');
    document.getElementById('modal-description').textContent = trigger.getAttribute('data-description');
    document.getElementById('modal-project').textContent = trigger.getAttribute('data-project');
    document.getElementById('modal-status').textContent = trigger.getAttribute('data-status');
    document.getElementById('modal-priority').textContent = trigger.getAttribute('data-priority');
    document.getElementById('modal-category').textContent = trigger.getAttribute('data-category');
    document.getElementById('modal-employee').textContent = trigger.getAttribute('data-employee');

    // Update global taskId
    currentTaskId = trigger.getAttribute('data-id');
    const currentStatus = trigger.getAttribute('data-status');

    // Update Change Status button in sidebar
    const changeBtn = document.getElementById('changeStatusTrigger');
    if (changeBtn) {
      changeBtn.setAttribute('data-task-id', currentTaskId);
      changeBtn.setAttribute('data-current-status', currentStatus);

      // Remove previous click listeners to avoid duplicates
      const newBtn = changeBtn.cloneNode(true);
      changeBtn.parentNode.replaceChild(newBtn, changeBtn);

      // Add click event to trigger status modal
      newBtn.addEventListener('click', function (e) {
        e.preventDefault();

        const selectedStatus = this.getAttribute('data-current-status');
        statusSelect.innerHTML = '';

        allStatuses.forEach(status => {
          const opt = document.createElement('option');
          opt.value = status.id;
          opt.textContent = status.name;
          if (status.name === selectedStatus) opt.selected = true;
          statusSelect.appendChild(opt);
        });

        new bootstrap.Modal(document.getElementById('changeStatusModal')).show();
      });
    }
   });
   function switchTheme(mode) {
    // mode should be "light" or "dark"
    document.body.setAttribute("data-bs-theme", mode);
    localStorage.setItem("theme", mode); // store preference
  }
   updateBtn.addEventListener('click', function () {
    const selectedStatusId = statusSelect.value;
    if (!currentTaskId || !selectedStatusId) return;

    fetch('../PhpFiles/update_task_status.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: `task_id=${currentTaskId}&status_id=${selectedStatusId}`
    })
      .then(res => res.text())
      .then(response => {
        if (response.trim() === 'success') {
          //alert('Status updated!');
          location.reload();
        } else {
          alert('Error updating: ' + response);
        }
      });
    });
   });
  </script>


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
  <script src="../../vendors/sortablejs/Sortable.min.js"></script>
  <script src="../../vendors/dropzone/dropzone-min.js"></script>
  <script src="../../vendors/glightbox/glightbox.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script src="../../vendors/choices/choices.min.js"></script>
  <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
  <!-- Bootstrap 5.3 JS Bundle (includes Popper for tooltips, modals, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Modal to select and update task status -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-sm">
      <div class="modal-header">
        <h5 class="modal-title fw-semibold" id="changeStatusModalLabel">Update Task Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 pb-0">
        <div class="mb-3">
          <label for="statusSelect" class="form-label fw-bold small text-uppercase">Select New Status</label>
          <select class="form-select rounded-3 py-2" id="statusSelect"></select>
        </div>
      </div>
      <div class="modal-footer border-0 px-4 pb-4 pt-0">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary px-4" id="confirmChangeStatusBtn">Save Changes</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>