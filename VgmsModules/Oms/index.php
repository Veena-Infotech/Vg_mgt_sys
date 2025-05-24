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
    <title>OMS</title>

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
    <style>
        .action-menu {
            width: 150px;
            z-index: 1050;
        }
    </style>
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
        <div class="content mt-4" id="heading-gsap">
            <!-- Title and Add Product Button -->
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    <h2>Inventory Management</h2>
                    <p class="text-muted">Overview of all products</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="fas fa-plus me-1"></i> Add Product
                </button>
            </div>

            <hr>

            <!-- Search and Filter -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Search by product name...">
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="productTypeFilter">
                        <option value="">All Product Types</option>
                        <option value="Type 1">Type 1</option>
                        <option value="Type 2">Type 2</option>
                        <option value="Type 3">Type 3</option>
                        <!-- Add more types as needed -->
                    </select>
                </div>
            </div>

            <!-- Inventory Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Product Type</th>
                            <th>Quantity</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="inventoryTableBody">
                        <!-- Example Row 1 -->
                        <tr>
                            <td>1</td>
                            <td>Product A</td>
                            <td>Type 1</td>
                            <td>50</td>
                            <td>2025-05-09</td>
                            <td>
                                <button class="btn btn-sm" onclick="showCommonMenu(this)">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                            </td>
                        </tr>

                        <!-- Example Row 2 -->
                        <tr>
                            <td>2</td>
                            <td>Product B</td>
                            <td>Type 2</td>
                            <td>30</td>
                            <td>2025-05-08</td>
                            <td>
                                <button class="btn btn-sm" onclick="showCommonMenu(this)">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                            </td>
                        </tr>

                        <!-- Example Row 3 -->
                        <tr>
                            <td>3</td>
                            <td>Product C</td>
                            <td>Type 3</td>
                            <td>75</td>
                            <td>2025-05-07</td>
                            <td>
                                <button class="btn btn-sm" onclick="showCommonMenu(this)">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Product D</td>
                            <td>Type 2</td>
                            <td>75</td>
                            <td>2025-05-07</td>
                            <td>
                                <button class="btn btn-sm" onclick="showCommonMenu(this)">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Product E</td>
                            <td>Type 3</td>
                            <td>75</td>
                            <td>2025-05-07</td>
                            <td>
                                <button class="btn btn-sm" onclick="showCommonMenu(this)">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>

                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Product E</td>
                            <td>Type 3</td>
                            <td>75</td>
                            <td>2025-05-07</td>
                            <td>
                                <button class="btn btn-sm" onclick="showCommonMenu(this)">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>



                </table>
            </div>
            <div class="d-flex justify-content-center mt-3" id="paginationControls">
                <ul class="pagination">
                    <!-- Pagination items will be dynamically inserted here -->
                </ul>
            </div>
        </div>

        <!-- Add Product Modal -->
        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductLabel">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form Fields -->
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName">
                            </div>
                            <div class="mb-3">
                                <label for="productType" class="form-label">Product Type</label>
                                <select class="form-select" id="productType">
                                    <option value="">Select Type</option>
                                    <option value="Type 1">Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="productQty" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="productQty">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Product Modal -->
        <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProductLabel">Edit Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form Fields (Pre-filled) -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" value="Product A">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Type</label>
                                <select class="form-select">
                                    <option value="Type 1" selected>Type 1</option>
                                    <option value="Type 2">Type 2</option>
                                    <option value="Type 3">Type 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" class="form-control" value="50">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="restockProductModal" tabindex="-1" aria-labelledby="restockProductLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="restockProductLabel">Restock Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Read-only input for Product Name -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" value="Product Name" readonly>
                            </div>
                            <!-- Add Quantity input -->
                            <div class="mb-3">
                                <label class="form-label">Add Quantity</label>
                                <input type="number" class="form-control" min="1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Restock</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Action Options Modal -->
        <div id="commonActionMenu" class="action-menu d-none position-absolute bg-dark text-light rounded p-2">
            <button class="btn btn-warning btn-sm w-100 mb-1" data-bs-toggle="modal" data-bs-target="#editProductModal">
                <i class="fas fa-edit me-1"></i> Edit
            </button>
            <button class="btn btn-info btn-sm w-100 mb-1" data-bs-toggle="modal" data-bs-target="#restockProductModal">
                <i class="fas fa-plus-square me-1"></i> Restock
            </button>
            <button class="btn btn-danger btn-sm w-100">
                <i class="fas fa-trash-alt me-1"></i> Delete
            </button>
        </div>


        <!-- id="actionOptionsModal" tabindex="-1" aria-labelledby="actionOptionsLabel"
            aria-hidden="true" -->








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
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.querySelector('input[placeholder="Search by product name..."]');
            const tableRows = document.querySelectorAll("table tbody tr");

            searchInput.addEventListener("input", function () {
                const query = this.value.toLowerCase();

                tableRows.forEach(function (row) {
                    const nameCell = row.children[1]; // 2nd column: Product Name
                    const name = nameCell.textContent.toLowerCase();

                    if (name.includes(query)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterDropdown = document.getElementById("productTypeFilter");
            const tableRows = document.querySelectorAll("#inventoryTableBody tr");

            filterDropdown.addEventListener("change", function () {
                const selectedType = this.value.toLowerCase();

                tableRows.forEach(row => {
                    const productType = row.children[2].textContent.toLowerCase();

                    if (selectedType === "" || productType === selectedType) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const rowsPerPage = 5; // Number of rows to display per page
            const tableRows = document.querySelectorAll("#inventoryTableBody tr");
            const paginationControls = document.getElementById("paginationControls");
            const totalRows = tableRows.length;
            const totalPages = Math.ceil(totalRows / rowsPerPage);

            // Function to update the table display
            function updateTableDisplay(page) {
                const startIndex = (page - 1) * rowsPerPage;
                const endIndex = startIndex + rowsPerPage;

                tableRows.forEach((row, index) => {
                    if (index >= startIndex && index < endIndex) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }

            // Function to create pagination controls
            function createPaginationControls() {
                paginationControls.innerHTML = "";
                const ul = document.createElement("ul");
                ul.classList.add("pagination");

                // Previous Page Button
                const prevItem = document.createElement("li");
                prevItem.classList.add("page-item");
                prevItem.innerHTML = `<a class="page-link" href="#">Previous</a>`;
                prevItem.addEventListener("click", function () {
                    const activePage = document.querySelector(".page-item.active");
                    if (activePage && activePage.previousElementSibling) {
                        activePage.previousElementSibling.querySelector("a").click();
                    }
                });
                ul.appendChild(prevItem);

                // Page Buttons
                for (let i = 1; i <= totalPages; i++) {
                    const li = document.createElement("li");
                    li.classList.add("page-item");
                    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                    li.addEventListener("click", function () {
                        updateTableDisplay(i);
                        document.querySelectorAll(".page-item").forEach(item => item.classList.remove("active"));
                        li.classList.add("active");
                    });
                    ul.appendChild(li);
                }

                // Next Page Button
                const nextItem = document.createElement("li");
                nextItem.classList.add("page-item");
                nextItem.innerHTML = `<a class="page-link" href="#">Next</a>`;
                nextItem.addEventListener("click", function () {
                    const activePage = document.querySelector(".page-item.active");
                    if (activePage && activePage.nextElementSibling) {
                        activePage.nextElementSibling.querySelector("a").click();
                    }
                });
                ul.appendChild(nextItem);

                paginationControls.appendChild(ul);

                // Set the first page as active on page load (no active on Previous)
                const firstPageButton = document.querySelector(".pagination .page-item:nth-child(2)");
                firstPageButton.classList.add("active");  // Correct active page
                updateTableDisplay(1);  // Show first page by default
            }

            // Initialize the table with the first page and pagination
            createPaginationControls();
        });



    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.2
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>










</body>




</html>