<?php
// Include database connection
include '../PhpFiles/connection.php';
?>

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
    <title>Edit Project</title>

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
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../vendors/choices/choices.min.css" rel="stylesheet" />
    <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet" />
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
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
            <div id="heading-gsap">
                <h3 class="mb-4">Edit Project </h3>
                <?php
                include '../PhpFiles/connection.php';
                $project_id = $_GET['project_id'];
                $query = "SELECT * FROM tbl_project WHERE id = {$project_id}";
                $result = mysqli_query($conn, $query) or die("Query Unsuccessful");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>
                        <form action="../PhpFiles/handle_edit_project.php" method="POST" enctype="multipart/form-data">

                            <div class="row g-3">
                                <!-- Project Title -->
                                <div class="col-md-6">
                                    <input type="hidden" id="project_id" name="project_id" value="<?php echo $row['id'] ?>">
                                    <label class="form-label">Project Title <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter project title"
                                        id="project_title" name="project_title" value="<?php echo $row['project_title'] ?>" readonly>
                                </div>

                                <!-- Project Type Dropdown -->
                                <div class="col-md-6">
                                    <label class="form-label">Project Type <span style="color: red;">*</span></label>
                                    <?php
                                    $query1 = "SELECT * FROM tbl_project_type";
                                    $result1 = mysqli_query($conn, $query1) or die("Query Unsuccessful");

                                    if (mysqli_num_rows($result1) > 0) {
                                        echo '<select class="form-select" name="project_type">';

                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                            $select = ($row['project_type'] == $row1['id']) ? 'SELECTED' : '';
                                            echo "<option value='{$row1['id']}' {$select}>{$row1['type']}</option>";
                                        }

                                        echo '</select>';
                                    }
                                    ?>
                                </div>

                                <!-- Project Manager Dropdown -->
                                <div class="col-md-6">
                                    <label class="form-label">Project Manager <span style="color: red;">*</span></label>
                                    <?php
                                    $sql_manager = "SELECT id, f_name, l_name FROM tbl_emp";
                                    $result_manager = mysqli_query($conn, $sql_manager) or die("Query Failed: Fetching Managers");

                                    echo '<select class="form-select" name="project_manager" required>';
                                    echo '<option disabled>Select Manager</option>';

                                    if (mysqli_num_rows($result_manager) > 0) {
                                        while ($manager = mysqli_fetch_assoc($result_manager)) {
                                            $manager_id = $manager['id'];
                                            $manager_name = $manager['f_name'] . ' ' . $manager['l_name'];

                                            $selected = ($row['project_manager'] == $manager_id) ? 'selected' : '';
                                            echo "<option value='{$manager_id}' {$selected}>{$manager_name}</option>";
                                        }
                                    } else {
                                        echo '<option disabled>No Managers Found</option>';
                                    }
                                    echo '</select>';
                                    ?>
                                </div>

                                <!-- Project Client Dropdown -->
                                <div class="col-md-6">
                                    <label class="form-label">Project Client <span style="color: red;">*</span></label>
                                    <?php
                                    $sql_client = "SELECT id, f_name, l_name FROM tbl_client";
                                    $result_client = mysqli_query($conn, $sql_client) or die("Query Failed: Fetching Clients");

                                    echo '<select class="form-select" name="project_client" required>';
                                    echo '<option disabled>Select Client</option>';

                                    if (mysqli_num_rows($result_client) > 0) {
                                        while ($client = mysqli_fetch_assoc($result_client)) {
                                            $client_id = $client['id'];
                                            $client_name = $client['f_name'] . ' ' . $client['l_name'];

                                            $selected = ($row['project_client'] == $client_id) ? 'selected' : '';
                                            echo "<option value='{$client_id}' {$selected}>{$client_name}</option>";
                                        }
                                    } else {
                                        echo '<option disabled>No Clients Found</option>';
                                    }
                                    echo '</select>';
                                    ?>
                                </div>

                                <div id="file-list" class="mb-3">
                                    <label class="form-label">Files in Project Folder</label>
                                    <div class="file-list">
                                        <?php
                                        $project_folder = '../Dims/DimsV2/uploads/project/' . $row['project_title']; // project directory

                                        // Check if directory exists
                                        if (is_dir($project_folder)) {
                                            // Open the directory and get all files
                                            $files = scandir($project_folder);

                                            // Filter out '.' and '..'
                                            $files = array_diff($files, array('.', '..'));

                                            if (!empty($files)) {
                                                foreach ($files as $file) {
                                                    $file_path = $project_folder . '/' . $file;
                                                    echo '<div class="file-item d-flex justify-content-between align-items-center mb-2">';
                                                    echo '<span>' . $file . '</span>';
                                                    echo '<button type="button" class="btn btn-danger btn-sm remove-file" data-file="' . $file . '">Remove</button>';
                                                    echo '</div>';
                                                }
                                            } else {
                                                echo '<p>No files found in this project folder.</p>';
                                            }
                                        } else {
                                            echo '<p>Project folder does not exist.</p>';
                                        }
                                        ?>
                                    </div>
                                </div>

                                <!-- File Upload Section -->
                                <div class="mb-3">
                                    <label class="form-label">Add Files</label>
                                    <input type="file" name="project_files[]" id="file-upload" class="form-control" multiple>
                                </div>
                            </div>

                            <!-- Project Description -->
                            <div class="col-12">
                                <label class="form-label">Project Description</label>
                                <textarea class="form-control" rows="4" placeholder="Enter description..."
                                    name="project_desc"><?php echo htmlspecialchars($row['project_description']); ?></textarea>
                            </div>

                            <!-- Start and End Date of Project -->
                            <label class="form-label" for="timepicker2">Select Time Range</label>
                            <?php
                            $start_date = date('d/m/Y', strtotime($row['project_start_date']));
                            $end_date = date('d/m/Y', strtotime($row['project_end_date']));
                            $range_value = $start_date . ' to ' . $end_date;
                            ?>
                            <input class="form-control datetimepicker" id="timepicker2" type="text"
                                name="project_date_range"
                                value="<?php echo $range_value; ?>"
                                placeholder="d/m/y to d/m/y"
                                data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' />

                            <!-- Submit Button -->
                            <div class="col-12 text-end">
                                <button class="btn btn-primary" type="submit" value="update">Submit</button>
                                <button class="btn btn-secondary" type="reset">Clear</button>
                            </div>
            </div>
            </form>
            <br><br>


    <?php }  // Curly braces of while condition above the form tag
                }   //curly braces of if condition above theform tag
    ?>





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

    <!-- <script>
    document.querySelectorAll('.remove-file').forEach(button => {
        button.addEventListener('click', function() {
            const fileName = this.getAttribute('data-file');
            const projectName = document.getElementById('project_title').value.trim(); // You can store the project name in a custom attribute

            alert("Preparing to remove file: " + fileName + " from project: " + projectName);

            if (confirm(`Are you sure you want to remove the file: ${fileName} from project: ${projectName}?`)) {
                alert("User confirmed the file removal.");

                const xhr = new XMLHttpRequest();
                xhr.open("POST", "../PhpFiles/delete_project_file.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        console.log("Response status:", xhr.status);
                        console.log("Response text:", xhr.responseText);
                        
                        if (xhr.status === 200) {
                            const response = JSON.parse(xhr.responseText);
                            console.log(response);

                            if (response.success) {
                                // alert("File removed successfully.");
                                window.location.replace(window.location.href);  // Try replacing the page
                            } else {
                                alert("Error: Unable to remove the file. Response: " + response.error);
                            }
                        } else {
                            alert("Error: AJAX request failed with status: " + xhr.status);
                        }
                    }
                };

                xhr.send(`action=delete_file&project_name=${encodeURIComponent(projectName)}&file_name=${encodeURIComponent(fileName)}`);
            } else {
                alert("File removal was canceled.");
            }
        });
    });
</script> -->

    <script>
        document.querySelectorAll('.remove-file').forEach(button => {
            button.addEventListener('click', function() {
                const fileName = this.getAttribute('data-file');
                const projectName = document.getElementById('project_title').value.trim(); // You can store the project name in a custom attribute
                const projectId = document.getElementById('project_id').value.trim(); // Assuming the project ID is in a hidden input field with ID 'project_id'

                // Alert before asking for confirmation
                alert("Preparing to remove file: " + fileName + " from project: " + projectName);

                // Ask for confirmation before deletion
                if (confirm(`Are you sure you want to remove the file: ${fileName} from project: ${projectName}?`)) {
                    alert("User confirmed the file removal.");

                    // Create a new form dynamically
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '../PhpFiles/delete_project_file.php'; // Your server-side PHP file

                    // Create hidden inputs for the form data
                    const projectIdInput = document.createElement('input');
                    projectIdInput.type = 'hidden';
                    projectIdInput.name = 'project_id';
                    projectIdInput.value = projectId;
                    form.appendChild(projectIdInput);

                    const projectTitleInput = document.createElement('input');
                    projectTitleInput.type = 'hidden';
                    projectTitleInput.name = 'project_title';
                    projectTitleInput.value = projectName;
                    form.appendChild(projectTitleInput);

                    const fileNameInput = document.createElement('input');
                    fileNameInput.type = 'hidden';
                    fileNameInput.name = 'file_name';
                    fileNameInput.value = fileName;
                    form.appendChild(fileNameInput);

                    // Append the form to the body and submit it
                    document.body.appendChild(form);
                    form.submit();

                    // Reload the page after form submission to reflect the change
                    alert("File is being removed. Page will reload.");

                    // location.reload();
                } else {
                    alert("File removal was canceled.");
                }
            });
        });
    </script>




    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/dropzone/dropzone-min.js"></script>
    <script src="../../vendors/leaflet/leaflet.js"></script>
    <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../assets/js/ecommerce-dashboard.js"></script>





    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="../../vendors/choices/choices.min.js"></script>
    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.7,
            ease: "power2.out",
            delay: 0.7
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>


    <!-- // Script for document handling -->






</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>