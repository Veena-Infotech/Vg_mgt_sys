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
    <title>Tasks</title>

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
        <div class="content" id="heading-gsap">

            <div class="card shadow" id="taskFormCard">

                <div class="card-header text-white">
                    <h4 class="mb-0">Create / Assign Task</h4>
                </div>

                <div class="card-body">
                    <form id="taskForm">
                        <div class="row mb-3">
                            <!-- Task Name -->
                            <div class="col-md-6">
                                <label for="taskName" class="form-label">Task Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="taskName" placeholder="Enter task name"
                                    required>
                            </div>

                            <!-- Assigned To -->
                            <div class="col-md-6">
                                <label for="assignedTo" class="form-label">Assigned To <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="assignedTo" name="assignedTo[]" multiple required>
                                    <option value="aakash">Mr. Aakash</option>
                                    <option value="priya">Ms. Priya</option>
                                    <option value="om">Mr. Om</option>
                                    <option value="neha">Ms. Neha</option>
                                    <option value="rahul">Mr. Rahul</option>
                                </select>
                                <small class="form-text text-muted">Hold Ctrl (Windows) or Command (Mac) to select
                                    multiple users.</small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- Start Date -->
                            <div class="col-md-6">
                                <label for="startDate" class="form-label">Start Date <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="startDate" name="startDate" required>
                            </div>

                            <!-- Deadline -->
                            <div class="col-md-6">
                                <label for="deadline" class="form-label">Deadline <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="deadline" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- Task Status -->
                            <div class="col-md-6">
                                <label for="taskStatus" class="form-label">Task Status <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="taskStatus" required>
                                    <option value="">Select Status</option>
                                    <option value="To Do">To Do</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Blocked">Blocked</option>
                                </select>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="taskDescription" class="form-label">Task Description</label>
                            <textarea class="form-control" id="taskDescription" rows="4"
                                placeholder="Enter task description (optional)"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-success px-4">Create Task</button>
                        </div>
                    </form>
                </div>
            </div>

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





    </script>
    <script>


        const rowsPerPage = 5;
        let rows = document.querySelectorAll('#projectTableBody tr');
        let filteredRows = Array.from(rows); // Initialize with all rows
        let currentPage = 1;

        // Pagination and buttons
        const pageButtons = document.querySelectorAll('.page');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');

        // Function to update pagination UI (active button and enabling/disabling prev/next)
        function updatePaginationUI() {
            // Update active state of page buttons
            pageButtons.forEach(btn => {
                btn.parentElement.classList.toggle('active', parseInt(btn.getAttribute('data-i')) === currentPage);
            });

            // Disable prev button if on the first page
            prevBtn.disabled = currentPage === 1;

            // Disable next button if on the last page
            nextBtn.disabled = currentPage === Math.ceil(filteredRows.length / rowsPerPage);
        }

        // Function to show the table rows based on the current page
        function showPage(page) {
            currentPage = page;

            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            // Hide all rows
            rows.forEach(row => row.style.display = 'none');

            // Show filtered rows based on pagination
            filteredRows.slice(start, end).forEach(row => row.style.display = '');

            updatePaginationUI();
        }

        // Function to filter rows based on the selected type and status
        function filterProjects() {
            const statusFilter = document.getElementById('filterType').value.toLowerCase();
            const typeFilter = document.getElementById('filterType').value.toLowerCase();

            filteredRows = Array.from(rows).filter(row => {
                const status = row.querySelector('td:nth-child(2)').textContent.toLowerCase(); // Status column
                const type = row.querySelector('td:nth-child(5)').textContent.toLowerCase(); // Project Type column

                const matchesStatus = statusFilter ? status.includes(statusFilter) : true;
                const matchesType = typeFilter ? type.includes(typeFilter) : true;

                return matchesStatus && matchesType;
            });

            // Reset to the first page after filter
            currentPage = 1;
            showPage(currentPage);
        }

        // Listen to changes in filter dropdowns
        document.getElementById('filterType').addEventListener('change', filterProjects);
        document.getElementById('filterType').addEventListener('change', filterProjects);

        // Numbered buttons (1, 2, 3, etc.)
        pageButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const pageNum = parseInt(btn.getAttribute('data-i'));
                if (pageNum !== currentPage) { // To prevent redundant reload of the same page
                    showPage(pageNum);
                }
            });
        });

        // Prev button functionality
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        });

        // Next button functionality
        nextBtn.addEventListener('click', () => {
            if (currentPage < Math.ceil(filteredRows.length / rowsPerPage)) {
                showPage(currentPage + 1);
            }
        });

        // Initial load (show the first page)
        showPage(1);
    </script>
    <script>
        // Update rows when filters are applied (combined)
        function filterProjects() {
            const statusFilter = document.getElementById('projectStatusFilter').value.toLowerCase();
            const typeFilter = document.getElementById('filterType').value.toLowerCase();
            const searchQuery = document.getElementById('searchInput').value.toLowerCase(); // Get the search query

            // Filter rows based on search query, status, and project type
            filteredRows = Array.from(rows).filter(row => {
                const projectName = row.querySelector('td:nth-child(2)').textContent.toLowerCase(); // Task Name column
                const status = row.querySelector('td:nth-child(6)').textContent.toLowerCase(); // Status column
                const type = row.querySelector('td:nth-child(5)').textContent.toLowerCase(); // Project Type column

                const matchesSearch = projectName.includes(searchQuery); // Check if project name matches the search query
                const matchesStatus = statusFilter ? status.includes(statusFilter) : true;
                const matchesType = typeFilter ? type.includes(typeFilter) : true;

                return matchesSearch && matchesStatus && matchesType;
            });

            // Reset pagination to the first page after filter
            currentPage = 1;
            showPage(currentPage);
        }

        // Listen for changes in the search bar and filters
        document.getElementById('searchInput').addEventListener('input', filterProjects);
        document.getElementById('projectStatusFilter').addEventListener('change', filterProjects);
        document.getElementById('filterType').addEventListener('change', filterProjects);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script>
        gsap.from("#formCard", {
            opacity: 0,
            y: 60,
            duration: 1,
            ease: "power2.out"
        });
        function animateTableRows() {
            filteredRows.forEach((row, index) => {
                gsap.from(row, {
                    opacity: 0,
                    y: 20,
                    duration: 0.6,
                    delay: 0.2 * index, // stagger the animation slightly
                    ease: "power2.out"
                });
            });
        }
        animateTableRows();
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });

        gsap.from("#projectStatusFilter", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.7
        });

        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.7,
            ease: "power2.out",
            delay: 0.1
        });


    </script>










</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>