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
    <title>Lms | QuickTest</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
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
        <div class="content">

            <!-- view QuickTests table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">

                <!-- Container for the Title -->
                <div style="width: 100%; text-align: center; margin: 20px 0;">
                    <h3 style="margin: 0;">Quick Test </h3>
                </div>
                <hr>

                <!-- ADD Button -->
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addQuickTestModal">
                        ADD
                    </button>
                </div>

                <!-- Container for the Table -->
                <div id="tableExample3" data-list='{"valueNames":["name","message","category","channel"],"page":5,"pagination":true}' style="width: 100%; padding-top: 20px;">
                    <!-- Search -->
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search" id="search-box" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"></svg>
                        </form>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top ps-3" data-sort="name">Name</th>
                                    <th class="sort border-top" data-sort="message">Message</th>
                                    <th class="sort border-top" data-sort="category">Category</th>
                                    <th class="sort border-top" data-sort="channel">Channel</th>
                                    <th class="border-top">Channel Inclusion</th>
                                    <th class="border-top">Edit</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="name">Ankit Mehra</td>
                                    <td class="message">Please process the invoice soon.</td>
                                    <td class="category">Finance</td>
                                    <td class="channel">Email</td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="channel_inclusion" checked>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editQuickTestModal" style="border: none;">🖉</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Priya Sharma</td>
                                    <td class="message">Share client feedback report.</td>
                                    <td class="category">Operations</td>
                                    <td class="channel">WhatsApp</td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="channel_inclusion">
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editQuickTestModal" style="border: none;">🖉</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Rahul Verma</td>
                                    <td class="message">Follow up with sales team.</td>
                                    <td class="category">Sales</td>
                                    <td class="channel">SMS</td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="channel_inclusion" checked>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editQuickTestModal" style="border: none;">🖉</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
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





                <!-- Add QuickTest Modal -->
                <div class="modal fade" id="addQuickTestModal" tabindex="-1" aria-labelledby="addQuickTestModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form id="addQuickTestForm" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add QuickTest</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Text Details Section -->
                                    <div class="mb-6">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="QuickTest_name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="QuickTest_name" name="QuickTest[name]" placeholder="Enter Name" required>
                                            </div>
                                            <div class="col">
                                                <label for="QuickTest_category" class="form-label">Category</label>
                                                <select class="form-select" id="organizerSingle" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="">Select category...</option>
                                                    <option>category 1</option>
                                                    <option>category 2</option>
                                                    <option>category 3</option>
                                                    <option>category 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="QuickTest_channel" class="form-label">Channel</label>
                                                <select class="form-select" id="organizerSingle" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="">Select Channel...</option>
                                                    <option>Channel 1</option>
                                                    <option>Channel 2</option>
                                                    <option>Channel 3</option>
                                                    <option>Channel 4</option>
                                                </select>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <div class="form-check mt-4">
                                                    <input class="form-check-input" type="checkbox" id="QuickTest_included" name="QuickTest[included]">
                                                    <label class="form-check-label" for="QuickTest_included">Included</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="QuickTest_message" class="form-label">Message</label>
                                            <textarea class="form-control" id="QuickTest_message" name="QuickTest[message]" rows="4" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" id="addQuickTestBtn" name="add">Add</button>
                                    <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




                <!-- Edit Modal -->
                <div class="modal fade" id="editQuickTestModal" tabindex="-1" aria-labelledby="editQuickTestModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form id="editQuickTestForm" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit QuickTest</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Text Details Section -->

                                    <div class="mb-6">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="edit_QuickTest_name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="edit_QuickTest_name" name="QuickTest[name]" placeholder="Enter Name" required>
                                            </div>
                                            <div class="col">
                                                <label for="edit_QuickTest_category" class="form-label">Category</label>
                                                <select class="form-select" id="edit_QuickTest_category" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="">Select category...</option>
                                                    <option>category 1</option>
                                                    <option>category 2</option>
                                                    <option>category 3</option>
                                                    <option>category 4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="edit_QuickTest_channel" class="form-label">Channel</label>
                                                <select class="form-select" id="edit_QuickTest_channel" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="">Select Channel...</option>
                                                    <option>Channel 1</option>
                                                    <option>Channel 2</option>
                                                    <option>Channel 3</option>
                                                    <option>Channel 4</option>
                                                </select>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <div class="form-check mt-4">
                                                    <input class="form-check-input" type="checkbox" id="edit_QuickTest_included" name="QuickTest[included]">
                                                    <label class="form-check-label" for="edit_QuickTest_included">Included</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="edit_QuickTest_message" class="form-label">Message</label>
                                            <textarea class="form-control" id="edit_QuickTest_message" name="QuickTest[message]" rows="4" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" id="editQuickTestBtn" name="edit">Save</button>
                                    <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




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
    <!--Dropdown for QuickTested-to--->

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
    <script src="../../vendors/choices/choices.min.js"></script>





    </script>



</body>


<!-- Mirrored from 3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>