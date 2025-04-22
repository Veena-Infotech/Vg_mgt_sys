<?php
include("../php/connection.php");

// SQL query to fetch all rows from the `tbl_customer` table
$sql = "SELECT * FROM tbl_customer";
$customer_result = $conn->query($sql);

$sql = "SELECT * FROM tbl_employee";
$employee_result = $conn->query($sql);

// Code to fetch and retrive values
// if ($customer_result->num_rows > 0) {
//     // Output data of each row
//     while($row = $customer_result->fetch_assoc()) {
//       echo "<script> alert('1 results') </script>";
//     }
// } else {
//     echo "<script> alert('0 results') </script>";
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['project_id'])) {
  $project_id = htmlspecialchars($_POST['project_id']); // Sanitize the input
  echo "<script>alert('Project ID: {$project_id}');</script>";
} else {
  $project_id = $_GET['project_id'];
}


// Fetch employee image
// Example: Fetching employee details using mysqli
$employee_id = 1; // Replace with the actual ID or dynamically get it
$query = "SELECT * FROM tbl_employee WHERE id = ?";
$stmt = $conn->prepare($query);

// Bind the parameter
$stmt->bind_param("i", $employee_id); // 'i' denotes the type is integer
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch the employee details
$employee = $result->fetch_assoc(); // No arguments needed here

// Check if employee data is fetched
if ($employee) {
  // Process the employee data
  // echo "<img src='data:image/jpeg;base64," . base64_encode($employee['image']) . "' alt='Employee Image'>";
  // Add other details as needed
} else {
  echo "No employee found.";
}

// Close the statement
$stmt->close();


// Assuming you already have a database connection in $conn


// Prepare the select query
$query = "SELECT * FROM tbl_projects WHERE project_id = '$project_id'";
$result = mysqli_query($conn, $query);

// Check if project exists and display the project name in an alert
if ($result) {
  $project = mysqli_fetch_assoc($result);
  if ($project) {
    // fetch the name
    $project_name = htmlspecialchars($project['project_name']);

    // fetch the status
    $status = $project['project_status'];

    // Determine the class based on the project status
    switch ($status) {
      case 'success':
        $badgeClass = 'badge-phoenix-success';
        break;
      case 'in_progress':
        $badgeClass = 'badge-phoenix-primary';
        break;
      case 'pending':
        $badgeClass = 'badge-phoenix-secondary';
        break;
      case 'halted':
        $badgeClass = 'badge-phoenix-danger';
        break;
      default:
        $badgeClass = 'badge-phoenix-default'; // Fallback class
        break;
    }

    // Fetch project type
    $project_type = htmlspecialchars($project['project_type']);


    // Fetch the customer name
    // Assuming you have already fetched project details and stored it in $project
    $customer_id = $project['customer_id']; // Get customer_id from the project details

    // Fetch client name using the customer_id
    $query = "SELECT CONCAT(f_name, ' ', l_name) AS client_name FROM tbl_customer WHERE customer_id = '$customer_id'";
    $result = mysqli_query($conn, $query);
    $client = mysqli_fetch_assoc($result);
    $client_name = htmlspecialchars($client['client_name']);

    // Fetch the budget
    $budget = htmlspecialchars($project['budget']);

    // Fetch the start date and end date
    $start_date = $project['start_date'];
    $end_date = $project['end_date'];


    // Fetch the task and progress
    $query = "SELECT COUNT(*) as total_tasks, 
    SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed_tasks 
FROM tbl_tasks WHERE project_id = '$project_id'";
    $result = mysqli_query($conn, $query);
    $task_data = mysqli_fetch_assoc($result);

    // Calculate progress
    $total_tasks = $task_data['total_tasks'];
    $completed_tasks = $task_data['completed_tasks'];
    $progress_percentage = $total_tasks > 0 ? ($completed_tasks / $total_tasks) * 100 : 0;


    // Fetch Desription
    $description = htmlspecialchars($project['description']);

    // Fetch the link
    // $link = htmlspecialchars($project['link']);
    $project_link = htmlspecialchars($project['project_document']);

    // Check if the link starts with 'http://' or 'https://', if not, prepend 'http://'
    if (!preg_match("~^(?:f|ht)tps?://~i", $project_link)) {
      $project_link = "http://" . $project_link;
    }
  } else {
    echo "<script>alert('Project not found.');</script>";
  }
} else {
  echo "<script>alert('Error executing query.');</script>";
}

// Close the result set
mysqli_free_result($result);

// Close the statement
$stmt = null;


// Fetch the data for task completed graph
$query = "SELECT DATE(last_updated) as date, COUNT(*) as completed_count 
          FROM tbl_tasks 
          WHERE project_id = ? AND status = 'completed' 
          GROUP BY DATE(last_updated) 
          ORDER BY DATE(last_updated)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $project_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$completed_data = [];
while ($row = mysqli_fetch_assoc($result)) {
  $completed_data[] = $row;
}



$dates = [];
$counts = [];

foreach ($completed_data as $data) {
  $dates[] = $data['date'];
  $counts[] = (int)$data['completed_count']; // Convert to integer
}


// Fetch the details of emp imagee and other details
// Fetch employee data for the project
$sql = "SELECT e.id, e.f_name, e.l_name, e.image
        FROM project_team_members ptm
        JOIN tbl_employee e ON ptm.employee_id = e.id
        WHERE ptm.project_id = $project_id";

$result = $conn->query($sql);


// Code for activity data fetching
$sql = "SELECT tbl_activity.activity_id, tbl_activity.date_time, tbl_activity.title, CONCAT(tbl_employee.f_name, ' ', tbl_employee.l_name) AS employee_name, tbl_projects.project_name, tbl_activity.description
        FROM tbl_activity
        JOIN tbl_employee ON tbl_activity.employee_id = tbl_employee.id
        JOIN tbl_projects ON tbl_activity.project_id = tbl_projects.project_id
        WHERE tbl_activity.project_id = $project_id
        ORDER BY tbl_activity.date_time DESC";




$result_activity = $conn->query($sql);

?>




<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">


<!-- Mirrored from prium.github.io/phoenix/v1.19.0/apps/project-management/create-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:33:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  include '../Components/logo.html';
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="../vendors/simplebar/simplebar.min.js"></script>
  <script src="../assets/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="../vendors/choices/choices.min.css" rel="stylesheet">
  <link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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

    <!-- ===============================================-->
    <!--    Include the Navigation bar-->
    <!-- ===============================================-->
    <?php include '../Components/navbar.html'; ?>

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
      <div class="row gx-6 gy-3 mb-4 align-items-center">
        <div class="row g-0">
          <div class="col-12 col-xxl-8 px-0 bg-body">
            <div class="px-4 px-lg-6 pt-6 pb-9">
              <div class="mb-5">
                <div class="d-flex justify-content-between">
                  <?php echo '<h2 class="text-body-emphasis fw-bolder mb-2">' . htmlspecialchars($project['project_name']) . '</h2>'; ?>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div>
                <?php echo "<span class='badge badge-phoenix $badgeClass'>$status<span class='ms-1 uil uil-stopwatch'></span></span>"; ?>
                <!-- <span class="badge badge-phoenix badge-phoenix-primary">Ongoing<span class="ms-1 uil uil-stopwatch"></span></span> -->
              </div>
              <div class="row gx-0 gx-sm-5 gy-8 mb-8">
                <div class="col-12 col-xl-3 col-xxl-4 pe-xl-0">
                  <div class="mb-4 mb-xl-7">
                    <div class="row gx-0 gx-sm-7">
                      <div class="col-12 col-sm-auto">
                        <table class="lh-sm mb-4 mb-sm-0 mb-xl-4">
                          <tbody>
                            <tr>
                              <td class="py-1" colspan="2">
                                <div class="d-flex"><span class="fa-solid fa-earth-americas me-2 text-body-tertiary fs-9"></span>
                                  <?php echo "<h5 class='text-body'>$project_type</h5>"; ?>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="align-top py-1">
                                <div class="d-flex"><span class="fa-solid fa-user me-2 text-body-tertiary fs-9"></span>
                                  <h5 class="text-body mb-0 text-nowrap">Client :</h5>
                                </div>
                              </td>
                              <td class="ps-1 py-1">
                                <form method="post" action="customer-details.php"> <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"><button type="submit" class="dropdown-item" href="#!" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal">
                                    <?php
                                    // Assuming you have the employee information fetched already
                                    if ($employee['is_temp_admin'] == 1) {
                                      // Show the client name if the employee is a temp admin
                                      echo " $client_name ";
                                    } else {
                                      // Show "Classified" if the employee is not a temp admin
                                      echo "Classified";
                                    }
                                    ?>

                                  </button></form>
                              </td>
                            </tr>
                            <tr>
                              <td class="align-top py-1">
                                <div class="d-flex"><span class="fa-regular fa-credit-card me-2 text-body-tertiary fs-9"></span>
                                  <h5 class="text-body mb-0 text-nowrap">Budget : </h5>
                                </div>
                              </td>
                              <?php
                              // Assuming you have fetched the employee data from tbl_employee into a variable like $employee
                              // and $employee['is_temp_admin'] holds the is_temp_admin value for the current employee.

                              if ($employee['is_temp_admin'] == 1) {
                                // Show the budget if the employee is a temp admin
                                echo "<td class='fw-bold ps-1 py-1 text-body-highlight'> $budget </td>";
                              } else {
                                // Show "Classified" if the employee is not a temp admin
                                echo "<td class='fw-bold ps-1 py-1 text-body-highlight'> Classified </td>";
                              }
                              ?>

                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-12 col-sm-auto">
                        <table class="lh-sm">
                          <tbody>
                            <tr>
                              <td class="align-top py-1 text-body text-nowrap fw-bold">Started : </td>
                              <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                <?php
                                // Assuming you have already fetched project details and stored it in $project

                                echo htmlspecialchars(date('dS M, Y', strtotime($start_date)));
                                ?>
                              </td>
                            </tr>
                            <tr>
                              <td class="align-top py-1 text-body text-nowrap fw-bold">Deadline :</td>
                              <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                <?php
                                // Assuming you have already fetched project details and stored it in $project

                                echo htmlspecialchars(date('dS M, Y', strtotime($end_date)));
                                ?>
                              </td>
                            </tr>
                            <tr>
                              <td class="align-top py-1 text-body text-nowrap fw-bold">Progress :</td>
                              <?php echo '<td class="text-warning fw-semibold ps-3">' . round($progress_percentage) . '%</td>'; ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex align-items-center"><span class="fa-solid fa-list-check me-2 text-body-tertiary fs-9"></span>
                      <?php echo '<h5 class="text-body-emphasis mb-0 me-2">' . htmlspecialchars($total_tasks) . '<span class="text-body fw-normal ms-2">tasks</span></h5>'; ?><a class="fw-bold fs-9 mt-1" href="#!">See tasks<span class="fa-solid fa-chevron-right me-2 fs-10"></span></a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-9 col-xxl-8">
                  <div class="row flex-between-center mb-3 g-3">
                    <div class="col-auto">
                      <h4 class="text-body-emphasis">Task completed over time</h4>
                      <p class="text-body-tertiary mb-0">Hard works done across all projects</p>
                    </div>
                  </div>
                  <div class="echart-completed-task-chart" id="echart-completed-task-chart" style="min-height:200px;width:100%"></div>
                </div>
                <div class="col-12 col-sm-12 col-xl-6 col-xl-3 col-xxl-2">
                  <div class="mb-5">
                    <h4 class="text-body-emphasis">Task Status</h4>
                  </div>
                  <div id="task-status-chart" class="echart-top-coupons mb-5" style="height:250px;width:100%;"></div>
                </div>
                <div class="col-12 col-sm-7 col-lg-8 col-xl-5">
                  <h4 class="text-body-emphasis mb-4">Team members</h4>
                  <div class="d-flex mb-8">
                    <?php
                    if ($result->num_rows > 0) {
                      // Loop through each employee
                      while ($employee = $result->fetch_assoc()) {
                    ?>
                        <div class="dropdown">
                          <a class="dropdown-toggle dropdown-caret-none d-inline-block outline-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-xl me-1">
                              <img class="rounded-circle" style="width: 150px; height:150px;" src="data:image/jpeg;base64,<?php echo base64_encode($employee['image']); ?>" />
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url('data:image/jpeg;base64,<?php echo base64_encode($employee['image']); ?>'); background-size: cover;"></div>

                              <div class="p-3">
                                <div class="text-end">
                                  <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl mb-2"></div>
                                  <h4 style="color: black;"><?php echo htmlspecialchars($employee['f_name'] . ' ' . $employee['l_name']); ?></h4>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@<?php echo htmlspecialchars($employee['f_name']); ?></p>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details</a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign</a></div>
                          </div>
                        </div>
                    <?php
                      }
                    } else {
                      echo "No employees assigned to this project.";
                    }

                    ?>


                  </div>
                  <!-- <h4 class="text-body-emphasis mb-4">Tags</h4><span class="badge badge-tag me-2 mb-1">Unused_brain</span><span class="badge badge-tag me-2 mb-1">Machine</span><span class="badge badge-tag me-2 mb-1">Coding</span><span class="badge badge-tag me-2 mb-1">Meseeks</span><span class="badge badge-tag me-2 mb-1">Smithpeople</span><span class="badge badge-tag me-2 mb-1">Rick</span><span class="badge badge-tag me-2 mb-1">Biology</span><span class="badge badge-tag me-2 mb-1">Neurology</span><span class="badge badge-tag me-2 mb-1">Brainlessness</span><span class="badge badge-tag me-2 mb-1">Stupidity</span><span class="badge badge-tag me-2 mb-1">Jerry</span><span class="badge badge-tag me-2 mb-1">Not _the_mouse</span> -->
                </div>
              </div>
              <h3 class="text-body-emphasis mb-4">Project Description</h3>
              <?php echo "<p class='text-body-secondary mb-4'> $description </p>" ?>
            </div>
          </div>
          <div class="col-12 col-xxl-4 px-0 border-start-xxl border-top-sm">
            <div class="bg-light dark__bg-gray-1100 h-100">
              <div class="p-4 p-lg-6">
                <h3 class="text-body-highlight mb-4 fw-bold">Recent activity</h3>



                <?php if ($result_activity->num_rows > 0) { ?>
  <!-- Timeline container starts here -->
  <div class="timeline-vertical timeline-with-details" style="max-height: 400px; overflow-y: auto;">
    
    <?php
    // Counter to see how many times the loop runs
    $counter = 0;

    // Loop through each activity and create the timeline items dynamically
    while ($row = $result_activity->fetch_assoc()) {
      $date_time = date('M d, Y h:i A', strtotime($row['date_time']));
      $title = $row['title'];
      $employee_name = $row['employee_name'];
      $project_name = $row['project_name'];
      $description = $row['description'];

      // Increment the counter to track the number of rows
      $counter++;
      // echo "<p>Loop iteration: " . $counter . "</p>"; // Debugging output

    ?>

      <!-- Timeline item starts here -->
      <div class="timeline-item position-relative">
        <div class="row g-md-3">
          <div class="col-12 col-md-auto d-flex">
            <div class="timeline-item-date order-1 order-md-0 me-md-4">
              <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end"><?php echo $date_time; ?></p>
            </div>
            <div class="timeline-item-bar position-md-relative me-3 me-md-0">
              <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                <span class="fa-solid fa-dove text-primary-dark fs-10"></span>
              </div>
              <span class="timeline-bar border-end border-dashed"></span>
            </div>
          </div>
          <div class="col">
            <div class="timeline-item-content ps-6 ps-md-3">
              <h5 class="fs-9 lh-sm"><?php echo $title ?></h5>
              <p class="fs-9">by <a class="fw-semibold" href="#!"><?php echo $employee_name ?></a></p>
              <p class="fs-9">in <a class="fw-semibold" href="#!"><?php echo $project_name ?></a></p>
              <p class="fs-9 text-body-secondary mb-5"><?php echo $description ?></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Timeline item ends here -->

    <?php } ?>

  </div>
  <!-- Timeline container ends here -->

  <!-- Output how many records were found -->
  <p>Total activities found: <?php echo $counter; ?></p> <!-- Debugging output -->

<?php } else {
  echo "<p>No activity found.</p>";
} ?>


              </div>
              <div class="px-4 px-lg-6">
                <h4 class="mb-3">Files</h4>
              </div>
              <div class="border-top px-4 px-lg-6 py-4 ">
                <div class="me-n3">
                  <div class="d-flex flex-between-center">
                    <div>
                      <div class="d-flex align-items-center mb-1 flex-wrap"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                        <p class="text-body-highlight mb-0 lh-1">
                          <a href="<?php echo htmlspecialchars($project_link); ?>" target="_blank">Project Link</a>
                        </p>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include '../Components/footer.html'; ?>
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
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-body-emphasis">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
            <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
            </div>
          </div>
          <div class="card-body chat p-0">
            <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
              <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                </a></div>
              <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="../../assets/img/team/30.webp" alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
          </div>
        </div>
      </div><button class="btn btn-support-chat p-0 border border-translucent"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
    </div>
  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

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
          <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/nav-combo-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png" alt="" /></span><span class="label-text"> Combo</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual nav</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
    </div>
  </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center px-2 py-1">
      <div class="position-relative rounded-start" style="height:34px;width:28px">
        <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                </svg></span></span></span></div>
      </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
  </a>

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="../vendors/popper/popper.min.js"></script>
  <script src="../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../vendors/anchorjs/anchor.min.js"></script>
  <script src="../vendors/is/is.min.js"></script>
  <script src="../vendors/fontawesome/all.min.js"></script>
  <script src="../vendors/lodash/lodash.min.js"></script>
  <script src="../vendors/list.js/list.min.js"></script>
  <script src="../vendors/feather-icons/feather.min.js"></script>
  <script src="../vendors/dayjs/dayjs.min.js"></script>
  <script src="../vendors/choices/choices.min.js"></script>
  <script src="../vendors/flatpickr/flatpickr.min.js"></script>
  <script src="../assets/js/phoenix.js"></script>


  <!-- code for redirecting if new customer has to be added -->
  <script>
    function handleSelectChange(select) {
      //for adding customer
      if (select.value === "add-customer") {
        window.location.href = "add-customers.php";
      }
    }

    function handleEmployeeSelect(select) {
      if (select.value === "add-employee") {
        window.location.href = "add-employee.php";
      }
    }



    // Code for calculating the number of days 
    // Initialize Flatpickr on the inputs
    const startDatePicker = flatpickr("#floatingInputStartDate", {
      dateFormat: "Y-m-d",
      onChange: calculateTotalDays
    });

    const endDatePicker = flatpickr("#floatingInputEndDate", {
      dateFormat: "Y-m-d",
      onChange: calculateTotalDays
    });

    // Function to calculate the difference in days
    function calculateTotalDays() {
      const startDate = document.getElementById('floatingInputStartDate').value;
      const endDate = document.getElementById('floatingInputEndDate').value;
      const totalDaysField = document.getElementById('totalDays');

      if (startDate && endDate) {
        // Convert to Date objects
        const start = new Date(startDate);
        const end = new Date(endDate);

        // Calculate the difference in time
        const diffTime = Math.abs(end - start);

        // Calculate the difference in days
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

        // Update the total days field
        totalDaysField.value = diffDays;
      } else {
        totalDaysField.value = ''; // Reset if either date is missing
      }
    }
  </script>


  <!-- Top graph for tasks complted -->
  <?php
  // Get the current year and month
  $currentYear = date('Y');
  $currentMonth = date('m');

  // Fetch the data for the task completed graph for the current month
  $query = "SELECT DAY(last_updated) as day, COUNT(*) as completed_count 
          FROM tbl_tasks 
          WHERE project_id = ? AND status = 'completed' 
          AND YEAR(last_updated) = ? AND MONTH(last_updated) = ?
          GROUP BY DAY(last_updated) 
          ORDER BY DAY(last_updated)";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, 'iii', $project_id, $currentYear, $currentMonth);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  // Initialize an array with 0 for each day of the current month
  $daysInMonth = date('t');  // Get total number of days in the current month
  $monthlyData = array_fill(0, $daysInMonth, 0);

  // Fill in the actual data from the database query
  while ($row = mysqli_fetch_assoc($result)) {
    $day = (int)$row['day']; // The day of the month (1, 2, 3, ..., 31)
    $monthlyData[$day - 1] = (int)$row['completed_count']; // Assign the completed count to the respective day
  }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
  <script>
    // Pass the PHP data (task counts for each day) to JavaScript
    var monthlyData = <?php echo json_encode($monthlyData); ?>;

    // Function to draw the monthly chart
    function drawMonthlyChart(monthlyData) {
      var daysInMonth = <?php echo $daysInMonth; ?>; // Get total days in the current month from PHP
      var days = Array.from({
        length: daysInMonth
      }, (_, i) => i + 1); // Generate days from 1 to last day

      var chart = echarts.init(document.getElementById('echart-completed-task-chart'));

      var option = {
        title: {
          text: 'Completed Tasks Over Time (Current Month)'
        },
        tooltip: {
          trigger: 'axis',
          formatter: function(params) {
            var data = params[0];
            return `Day ${data.name}: ${data.data} tasks`; // Customize the tooltip to show day and amount
          }
        },
        xAxis: {
          type: 'category',
          data: days // Days of the month
        },
        yAxis: {
          type: 'value',
          minInterval: 1, // Ensure integer values on y-axis
          axisLabel: {
            formatter: '{value} tasks' // Add label for the y-axis
          }
        },
        series: [{
          data: monthlyData, // Data from PHP for each day of the month
          type: 'line',
          smooth: true,
          itemStyle: {
            color: '#4CAF50' // Line color
          }
        }]
      };

      chart.setOption(option);
    }

    // Call the function to draw the chart
    drawMonthlyChart(monthlyData);
  </script>


  <!-- Graph for task status -->
  <script>
    // Function to fetch task data for the given project ID
    function fetchTaskStatusData(projectId) {
      console.log(`Fetching task data for project ID: ${projectId}`); // Debugging message

      return fetch(`../php/fetch-task-status.php?project_id=${projectId}`)
        .then(response => {
          if (!response.ok) {
            throw new Error(`Network response was not ok: ${response.statusText}`);
          }
          return response.json();
        })
        .then(data => {
          console.log('Task data fetched:', data); // Debugging message
          return {
            statuses: ['Not Started', 'In Progress', 'Testing', 'Completed', 'Halted'],
            counts: [data.not_started, data.in_progress, data.testing, data.completed, data.halted]
          };
        })
        .catch(error => {
          console.error('Error fetching task data:', error); // Handle any errors
        });
    }

    function renderTaskStatusChart(projectId) {
      // Get the container element for the chart
      var chartDom = document.getElementById('task-status-chart');
      var myChart = echarts.init(chartDom);
      var option;

      // Fetch task status data based on project ID
      fetchTaskStatusData(projectId).then(taskData => {
        option = {
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'shadow'
            }
          },
          xAxis: {
            type: 'category',
            data: taskData.statuses
          },
          yAxis: {
            type: 'value'
          },
          series: [{
            name: 'Tasks',
            type: 'bar',
            data: taskData.counts
          }]
        };

        // Use the specified chart configuration item and data to show the chart
        option && myChart.setOption(option);
      });
    }

    // Call the render function with the specific project ID (replace with your dynamic project ID)
    const projectId = <?php echo $project_id; ?>; // Correct PHP to JS embedding
    renderTaskStatusChart(projectId);
  </script>


</body>


<!-- Mirrored from prium.github.io/phoenix/v1.19.0/apps/project-management/create-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:33:18 GMT -->

</html>