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
    <title>Manage Project</title>

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
        <div class="content">
            <div class="container-xl">
                <!-- Manage Project Header -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <h3 class="mb-0">Manage Projects</h3>
                    <a href="add_project.php" class="btn btn-primary">Add New Project</a>
                </div>
                <!-- Filter and Search Section -->
                <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                    <!-- Search Bar -->
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search by project name" />
                    </div>

                    <!-- Filter Options -->
                    <div class="col-md-3 d-flex justify-content-end">
                        <!-- Project Type Filter -->
                        <select class="form-select me-2" id="filterType">
                            <option value="">Select Project Type</option>
                            <option value="Design">Design</option>
                            <option value="Development">Development</option>
                            <!-- Add more project types as needed -->
                        </select>

                        <!-- Status Filter -->
                        <select class="form-select" id="projectStatusFilter">
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Completed">Completed</option>
                            <option value="On Hold">On Hold</option>
                            <!-- Add more statuses as needed -->
                        </select>
                    </div>
                </div>
                <br>
                <hr class="hr">
                <br>
                <!-- Project List Table -->
                <div class="card mt-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Status</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="projectTableBody">
                                <!-- Project Row 1 -->
                                <tr>
                                    <td>Project 1</td>
                                    <td>Active</td>
                                    <td>01-10-2025</td>
                                    <td>31-12-2025</td>
                                    <td>Design</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Project Row 2 -->
                                <tr>
                                    <td>Project 2</td>
                                    <td>Completed</td>
                                    <td>01-06-2025</td>
                                    <td>30-09-2025</td>
                                    <td>Development</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Project Row 3 -->
                                <tr>
                                    <td>Project 3</td>
                                    <td>Active</td>
                                    <td>01-06-2025</td>
                                    <td>30-09-2025</td>
                                    <td>Design</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Project Row 4 -->
                                <tr>
                                    <td>Project 4</td>
                                    <td>Completed</td>
                                    <td>01-06-2025</td>
                                    <td>30-09-2025</td>
                                    <td>Design</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Project Row 5 -->
                                <tr>
                                    <td>Project 5</td>
                                    <td>Completed</td>
                                    <td>01-06-2025</td>
                                    <td>30-09-2025</td>
                                    <td>Development</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Project Row 6 -->
                                <tr>
                                    <td>Project 6</td>
                                    <td>Active</td>
                                    <td>01-06-2025</td>
                                    <td>30-09-2025</td>
                                    <td>Design</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Project Row 7 -->
                                <tr>
                                    <td>Project 7</td>
                                    <td>Active</td>
                                    <td>01-06-2025</td>
                                    <td>30-09-2025</td>
                                    <td>Development</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- More project rows can be added here -->
                            </tbody>
                        </table>
                    </div>


                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                        <span class="d-none d-sm-inline-block ms-3">1 to 5 Items of 6</span>

                        <div class="d-flex align-items-center">

                            <!-- Prev Button -->
                            <button class="page-link me-2 prev" data-list-pagination="prev" style="border-radius: 5px;">
                                <i class="fas fa-chevron-left"></i>
                            </button>


                            <!-- Pagination Numbers -->
                            <ul class="pagination mb-0">
                                <li class="page-item active mx-1">
                                    <button class="page page-link" type="button" data-i="1" data-page="5">1</button>
                                </li>
                                <li class="page-item mx-1">
                                    <button class="page page-link" type="button" data-i="2" data-page="5">2</button>
                                </li>


                            </ul>

                            <!-- Next Button -->
                            <button class="page-link ms-2 next" data-list-pagination="next" style="border-radius: 5px;">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Modal for Editing Project -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="editProjectName" placeholder="Project Name" required
                                        type="text">
                                    <label for="editProjectName">Project Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="editProjectStatus" aria-label="Status">
                                        <option selected disabled>Choose status</option>
                                        <option>Active</option>
                                        <option>Completed</option>
                                        <option>On Hold</option>
                                    </select>
                                    <label for="editProjectStatus">Status</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="editStartDate" type="date">
                                    <label for="editStartDate">Start Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="editEndDate" type="date">
                                    <label for="editEndDate">End Date</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
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
            const statusFilter = document.getElementById('projectStatusFilter').value.toLowerCase();
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
        document.getElementById('projectStatusFilter').addEventListener('change', filterProjects);
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
        // Update rows when filters are applied
        function filterProjects() {
            const statusFilter = document.getElementById('projectStatusFilter').value.toLowerCase();
            const typeFilter = document.getElementById('filterType').value.toLowerCase();

            // Filter rows based on status and project type
            filteredRows = Array.from(rows).filter(row => {
                const status = row.querySelector('td:nth-child(2)').textContent.toLowerCase(); // Status column
                const type = row.querySelector('td:nth-child(5)').textContent.toLowerCase(); // Project Type column (adjust if needed)

                const matchesStatus = statusFilter ? status.includes(statusFilter) : true;
                const matchesType = typeFilter ? type.includes(typeFilter) : true;

                return matchesStatus && matchesType;
            });

            // Reset pagination
            currentPage = 1;
            showPage(currentPage);
        }

        // Listen to changes in filter dropdowns
        document.getElementById('projectStatusFilter').addEventListener('change', filterProjects);
        document.getElementById('filterType').addEventListener('change', filterProjects);
    </script>









</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>