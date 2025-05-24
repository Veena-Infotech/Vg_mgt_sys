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
    <title>Products</title>

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
        .custom-checkbox {
            position: relative;
            display: inline-block;
            width: 16px;
            height: 16px;
        }

        .custom-checkbox input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 16px;
            width: 16px;
            background-color: #f8f9fa;
            border: 2px solid #007bff;
            border-radius: 3px;
            transition: all 0.2s ease-in-out;
        }

        .custom-checkbox input:checked~.checkmark {
            background-color: #007bff;
            transform: scale(1.1);
        }

        .checkmark::after {
            content: "";
            position: absolute;
            display: none;
            left: 4px;
            top: 1px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .custom-checkbox input:checked~.checkmark::after {
            display: block;
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
        <div class="content">
            <!-- view leads table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">
                <!-- Container for the Title -->
                <div style="width: 100%; text-align: center; margin: 20px 0;">
                    <h3 style="margin: 0;">View/Manage Products</h3>
                </div>
                <hr>
                <!-- button to add Agencies Name -->
                <div>
                    <!-- ADD Button -->
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#verticallyCentered">
                        ADD
                    </button>
                    <div class="modal fade" id="verticallyCentered" tabindex="-1"
                        aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="verticallyCenteredModalLabel">Add Product</h5>
                                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form id="add_product_form" method="post">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="Enter Name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="family" class="form-label">Family</label>
                                            <input class="form-control" type="text" id="family" name="family"
                                                placeholder="Enter Family" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="code" class="form-label">Code</label>
                                            <input class="form-control" type="text" id="code" name="code"
                                                placeholder="Enter Code" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="sku" class="form-label">SKU</label>
                                            <input class="form-control" type="text" id="sku" name="sku"
                                                placeholder="Enter SKU" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"
                                                placeholder="Enter Description"></textarea>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="active" name="active"
                                                value="1">
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>

                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" form="add_product_form"
                                        name="add_product_btn">Add</button>
                                    <button class="btn btn-outline-primary" type="button"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
                <!-- Container for the Table -->
                <div id="tableExample3"
                    data-list="{&quot;valueNames&quot;:[&quot;id&quot;,&quot;name&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}"
                    style="width: 100%; padding-top: 20px;">
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search"
                                id="search-box" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                </path>
                            </svg>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-3 py-3" data-sort="name">Name</th>
                                        <th class="sort border-top ps-3 py-3" data-sort="class">Class</th>
                                        <th class="sort border-top ps-3 py-3" data-sort="code">Code</th>
                                        <th class="sort border-top ps-3 py-3" data-sort="description">Description</th>
                                        <th class="sort border-top ps-3 py-3" data-sort="family">Family</th>
                                        <th class="sort border-top ps-3 py-3" data-sort="edit">Edit</th>
                                        <th class="sort border-top ps-3 py-3" data-sort="active">Active</th>
                                    </tr>
                                </thead>

                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="name py-3 px-2" data-name="Name1">Name1</td>
                                    <td class="class py-3 px-2" data-class="Class A">Class A</td>
                                    <td class="code py-3 px-2" data-code="C001">C001</td>
                                    <td class="description py-3 px-2" data-description="Sample description 1">Sample description 1
                                    </td>
                                    <td class="family py-3 px-2" data-family="Family ABC">Family1</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn py-3 px-2" data-bs-toggle="modal"
                                            data-bs-target="#editAgency" data-name="Name1" data-class="Class A"
                                            data-code="C001" data-description="Sample description 1"
                                            data-family="Family ABC" style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td class="ps-5 py-3 px-2">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" data-name="Name1" data-active="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name py-3 px-2" data-name="Name2">Name2</td>
                                    <td class="class py-3 px-2" data-class="Class B">Class B</td>
                                    <td class="code py-3 px-2" data-code="C002">C002</td>
                                    <td class="description py-3 px-2" data-description="Sample description 2">Sample description 2
                                    </td>
                                    <td class="family py-3 px-2" data-family="Family XYZ">Family2</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn py-3 px-2" data-bs-toggle="modal"
                                            data-bs-target="#editAgency" data-name="Name2" data-class="Class B"
                                            data-code="C002" data-description="Sample description 2"
                                            data-family="Family XYZ" style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td class="ps-5 py-3 px-2">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" data-name="Name2" data-active="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name py-3 px-2" data-name="Name3">Name3</td>
                                    <td class="class py-3 px-2" data-class="Class C">Class C</td>
                                    <td class="code py-3 px-2" data-code="C003">C003</td>
                                    <td class="description py-3 px-2" data-description="Sample description 3">Sample description 3
                                    </td>
                                    <td class="family py-3 px-2" data-family="Family LMN">Family3</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn py-3 px-2" data-bs-toggle="modal"
                                            data-bs-target="#editAgency" data-name="Name3" data-class="Class C"
                                            data-code="C003" data-description="Sample description 3"
                                            data-family="Family LMN" style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td class="ps-5 py-3 px-2">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" data-name="Name3" data-active="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                </tr>






                            </tbody>



                        </table>
                    </div>
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
                <!-- Edit Modal -->
                <!-- Add/Edit Modal -->
                <div class="modal fade" id="editAgency" tabindex="-1" aria-labelledby="editAgencyLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="editAgencyForm" method="POST">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAgencyLabel">Edit Item</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="edit_id" name="edit_id">

                                    <div class="mb-3">
                                        <label for="edit_name" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="edit_name" name="edit_name"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_class" class="form-label">Class</label>
                                        <input class="form-control" type="text" id="edit_class" name="edit_class"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_code" class="form-label">Code</label>
                                        <input class="form-control" type="text" id="edit_code" name="edit_code"
                                            required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="edit_description" class="form-label">Description</label>
                                        <textarea class="form-control" id="edit_description" name="edit_description"
                                            rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_family" class="form-label">Family</label>
                                        <input class="form-control" type="text" id="edit_family" name="edit_family"
                                            required>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="edit_active"
                                            name="edit_active" value="1">
                                        <label class="form-check-label" for="edit_active">Active</label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="update_item" class="btn btn-primary">Save
                                        Changes</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>







                <!-- delete operation -->

            </div>
            <footer>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
            </footer>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".edit-btn").forEach(function (btn) {
                btn.addEventListener("click", function () {
                    const row = btn.closest("tr");
                    const id = row.querySelector(".id").textContent.trim();
                    const name = row.querySelector(".name").textContent.trim();
                    const email = row.querySelector(".email").textContent.trim();
                    const company = row.querySelector(".company").textContent.trim();

                    document.getElementById("edit_id").value = id;
                    document.getElementById("edit_name").value = name;
                    document.getElementById("edit_email").value = email;
                    document.getElementById("edit_company").value = company;
                });
            });
        });
    </script>


    <script>
        document.getElementById(' search-box').addEventListener('input', function () {
            const
                searchValue = this.value.toLowerCase().trim(); const
                    rows = document.querySelectorAll('#data-table tbody tr'); rows.forEach(row => {
                        const id = row.querySelector('.id')?.textContent.toLowerCase() || '';
                        const company = row.querySelector('.company')?.textContent.toLowerCase() ||
                            '';
                        const name = row.querySelector('.name')?.textContent.toLowerCase() || '';
                        const email = row.querySelector('.email')?.textContent.toLowerCase() || '';

                        const isMatch =
                            id.includes(searchValue) ||
                            company.includes(searchValue) ||
                            name.includes(searchValue) ||
                            email.includes(searchValue);

                        row.style.display = isMatch ? '' : 'none';
                    });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const editModal = document.getElementById('editAgency');

            editModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget;

                // Extract info from data-* attributes
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const className = button.getAttribute('data-class');
                const code = button.getAttribute('data-code');
                const description = button.getAttribute('data-description');
                const family = button.getAttribute('data-family');
                const active = button.getAttribute('data-active');

                // Update modal fields
                editModal.querySelector('#edit_id').value = id || '';
                editModal.querySelector('#edit_name').value = name || '';
                editModal.querySelector('#edit_class').value = className || '';
                editModal.querySelector('#edit_code').value = code || '';
                editModal.querySelector('#edit_description').value = description || '';
                editModal.querySelector('#edit_family').value = family || '';

                // Checkbox: set checked based on active (assumes "1" means active)
                const activeCheckbox = editModal.querySelector('#edit_active');
                activeCheckbox.checked = active === '1';
            });
        });

    </script>





    </script>



</body>


<!-- Mirrored from 3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>