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
    <title>Manage Leads</title>

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
            <div class="container-xl" id="heading-gsap">
                <!-- Manage Leads Header -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <h3 class="mb-0">Manage Leads</h3>
                    <a href="add_lead.php" class="btn btn-primary">Add New Lead</a>
                </div>
                <!-- Filter and Search Section -->
                <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                    <!-- Search Bar -->
                    <!-- Search Bar -->
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search by lead name" />
                    </div>


                    <!-- Filter Options -->
                    <div class="col-md-3 d-flex justify-content-end">
                        <!-- Lead Type Filter -->
                        <select class="form-select me-2" id="filterType">
                            <option value="">Select Lead Type</option>
                            <option value="Cold">Cold</option>
                            <option value="Warm">Warm</option>
                            <option value="Hot">Hot</option>
                        </select>

                        <!-- Status Filter -->
                        <select class="form-select" id="leadStatusFilter">
                            <option value="">Select Status</option>
                            <option value="New">New</option>
                            <option value="Contacted">Contacted</option>
                            <option value="Converted">Converted</option>
                            <option value="Unresponsive">Unresponsive</option>
                        </select>
                    </div>
                </div>
                <br>
                <hr class="hr">
                <br>
                <!-- Lead List Table -->
                <div class="card mt-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>Lead Name</th>
                                    <th>Status</th>
                                    <th>Source</th>
                                    <th>Contact Date</th>
                                    <th>Lead Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="leadTableBody">
                                <!-- Sample Lead Row 1 -->
                                <tr>
                                    <td>Lead 1</td>
                                    <td>New</td>
                                    <td>Website</td>
                                    <td>01-05-2025</td>
                                    <td>Hot</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Sample Lead Row 2 -->
                                <tr>
                                    <td>Lead 2</td>
                                    <td>Contacted</td>
                                    <td>Referral</td>
                                    <td>02-05-2025</td>
                                    <td>Cold</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lead 3</td>
                                    <td>Contacted</td>
                                    <td>Referral</td>
                                    <td>05-05-2025</td>
                                    <td>Cold</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                
                                <!-- More lead rows can be added here -->
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

        <!-- Modal for Editing Lead -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Lead</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="editLeadName" placeholder="Lead Name" required
                                        type="text">
                                    <label for="editLeadName">Lead Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="editLeadStatus" aria-label="Status">
                                        <option selected disabled>Choose status</option>
                                        <option>New</option>
                                        <option>Contacted</option>
                                        <option>Converted</option>
                                        <option>Unresponsive</option>
                                    </select>
                                    <label for="editLeadStatus">Status</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="editContactDate" type="date">
                                    <label for="editContactDate">Contact Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="editLeadSource" type="text">
                                    <label for="editLeadSource">Source</label>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>






    </script>

    <script>
        // Pagination & Filtering Logic for manage_leads.php

        const rowsPerPage = 5;
        let rows = document.querySelectorAll('#leadTableBody tr');
        let filteredRows = Array.from(rows); // Initialize with all rows
        let currentPage = 1;

        // Pagination and buttons
        const pageButtons = document.querySelectorAll('.page');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');

        // Update pagination UI
        function updatePaginationUI() {
            pageButtons.forEach(btn => {
                btn.parentElement.classList.toggle('active', parseInt(btn.getAttribute('data-i')) === currentPage);
            });

            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === Math.ceil(filteredRows.length / rowsPerPage);
        }

        // Show page based on current page
        function showPage(page) {
            currentPage = page;

            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            rows.forEach(row => row.style.display = 'none');
            filteredRows.slice(start, end).forEach(row => row.style.display = '');

            updatePaginationUI();
        }

        // Filter leads based on filters
        function filterLeads() {
            const statusFilter = document.getElementById('leadStatusFilter').value.toLowerCase();
            const typeFilter = document.getElementById('filterType').value.toLowerCase();

            filteredRows = Array.from(rows).filter(row => {
                const status = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const type = row.querySelector('td:nth-child(5)').textContent.toLowerCase();

                const matchesStatus = statusFilter ? status.includes(statusFilter) : true;
                const matchesType = typeFilter ? type.includes(typeFilter) : true;

                return matchesStatus && matchesType;
            });

            currentPage = 1;
            showPage(currentPage);
        }

        // Event listeners for filtering
        document.getElementById('leadStatusFilter').addEventListener('change', filterLeads);
        document.getElementById('filterType').addEventListener('change', filterLeads);

        // Page number buttons functionality
        pageButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const pageNum = parseInt(btn.getAttribute('data-i'));
                if (pageNum !== currentPage) {
                    showPage(pageNum);
                }
            });
        });

        // Prev/Next button functionality
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < Math.ceil(filteredRows.length / rowsPerPage)) {
                showPage(currentPage + 1);
            }
        });

        // Search Functionality
        document.getElementById('searchInput').addEventListener('input', function () {
            const searchQuery = this.value.toLowerCase();

            // Filter rows based on search input
            filteredRows = Array.from(rows).filter(row => {
                const leadName = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                return leadName.includes(searchQuery);
            });

            currentPage = 1; // Reset to the first page after search
            showPage(currentPage);
        });

        // Initialize the page
        showPage(1);

    </script>










</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>