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
    <title>PMS | Manage Competitors</title>

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
                    <h3 style="margin: 0;">Manage Competitors</h3>
                </div>
                <hr>


                <!-- Container for the Table -->
                <!-- Main Container -->
                <div id="tableExample3"
                    data-list='{"valueNames":["name","contact","email","company"],"page":5,"pagination":true}'
                    style="width: 100%; padding-top: 20px;">

                    <!-- Search Box -->
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                            </svg>
                        </form>
                    </div>

                    <!-- Add Button -->
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addCompetitorModal">Add Competitor</button>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort name border-top" data-sort="name">Competitor Name</th>
                                    <th class="sort contact border-top" data-sort="contact">Contact</th>
                                    <th class="sort email border-top" data-sort="email">Email</th>
                                    <th class="sort company border-top" data-sort="company">Company</th>
                                    <th class="border-top">Edit</th>
                                    <th class="border-top">Remove</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="competitorTableBody">
                                <!-- Populated dynamically -->
                                <tr>
                                    <td class="name">Alpha Builders</td>
                                    <td class="contact">9876543210</td>
                                    <td class="email">alpha@example.com</td>
                                    <td class="company">Alpha Constructions</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="1" data-name="Alpha Builders" data-contact="9876543210" data-email="alpha@example.com" data-company="Alpha Constructions" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Beta Constructions</td>
                                    <td class="contact">9123456789</td>
                                    <td class="email">beta@example.com</td>
                                    <td class="company">Beta Group</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="7" data-name="Theta Developers" data-contact="9776655443" data-email="theta@example.com" data-company="Theta Realty" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Gamma Realty</td>
                                    <td class="contact">9988776655</td>
                                    <td class="email">gamma@example.com</td>
                                    <td class="company">Gamma Developers</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="3" data-name="Gamma Realty" data-contact="9988776655" data-email="gamma@example.com" data-company="Gamma Developers" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Delta Infra</td>
                                    <td class="contact">9001122334</td>
                                    <td class="email">delta@example.com</td>
                                    <td class="company">Delta Builders</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="4" data-name="Delta Infra" data-contact="9001122334" data-email="delta@example.com" data-company="Delta Builders" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Epsilon Estates</td>
                                    <td class="contact">8899001122</td>
                                    <td class="email">epsilon@example.com</td>
                                    <td class="company">Epsilon Infra</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="5" data-name="Epsilon Estates" data-contact="8899001122" data-email="epsilon@example.com" data-company="Epsilon Infra" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Zeta Homes</td>
                                    <td class="contact">9112233445</td>
                                    <td class="email">zeta@example.com</td>
                                    <td class="company">Zeta Constructions</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="6" data-name="Zeta Homes" data-contact="9112233445" data-email="zeta@example.com" data-company="Zeta Constructions" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Theta Developers</td>
                                    <td class="contact">9776655443</td>
                                    <td class="email">theta@example.com</td>
                                    <td class="company">Theta Realty</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="7" data-name="Theta Developers" data-contact="9776655443" data-email="theta@example.com" data-company="Theta Realty" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Iota Builders</td>
                                    <td class="contact">9344556677</td>
                                    <td class="email">iota@example.com</td>
                                    <td class="company">Iota Estates</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="7" data-name="Theta Developers" data-contact="9776655443" data-email="theta@example.com" data-company="Theta Realty" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Kappa Group</td>
                                    <td class="contact">9088776655</td>
                                    <td class="email">kappa@example.com</td>
                                    <td class="company">Kappa Constructions</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="7" data-name="Theta Developers" data-contact="9776655443" data-email="theta@example.com" data-company="Theta Realty" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>
                                <tr>
                                    <td class="name">Lambda Estates</td>
                                    <td class="contact">9011223344</td>
                                    <td class="email">lambda@example.com</td>
                                    <td class="company">Lambda Group</td>
                                    <td><button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editCompetitorModal" data-id="7" data-name="Theta Developers" data-contact="9776655443" data-email="theta@example.com" data-company="Theta Realty" style="border: none;">🖉</button></td>
                                    <td><button class="btn btn-sm btn-outline-danger" style="border: none;">🗑</button></td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- <div class="pagination-container text-center">
                            <ul class="pagination"></ul>
                        </div> -->
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

                    <!-- Add Modal -->
                    <div class="modal fade" id="addCompetitorModal" tabindex="-1" aria-labelledby="addCompetitorModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="addCompetitorForm" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Competitor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="action" value="add">
                                        <div class="mb-3">
                                            <label for="competitor_name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="competitor_name" name="competitor_name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="competitor_contact" class="form-label">Contact</label>
                                            <input type="text" class="form-control" id="competitor_contact" name="competitor_contact" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="competitor_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="competitor_email" name="competitor_email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label">Company</label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" type="submit">Add</button>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editCompetitorModal" tabindex="-1" aria-labelledby="editCompetitorModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="editCompetitorForm" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Competitor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="edit_id" name="edit_id">
                                        <div class="mb-3">
                                            <label for="edit_name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="edit_name" name="edit_name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_contact" class="form-label">Contact</label>
                                            <input type="text" class="form-control" id="edit_contact" name="edit_contact" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="edit_email" name="edit_email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_company" class="form-label">Company</label>
                                            <input type="text" class="form-control" id="edit_company" name="edit_company" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
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
        $(document).ready(function() {
            // Listen for the modal to be shown
            $('#editCompetitorModal').on('show.bs.modal', function(event) {
                // Get the triggering element (the link that was clicked)
                var button = $(event.relatedTarget);

                // Retrieve data attributes from the button
                var id = button.data('id');
                var name = button.data('name');
                var contact = button.data('contact');
                var email = button.data('email');
                var company = button.data('company');

                // Populate the modal fields with the data
                $('#edit_id').val(id);
                $('#edit_name').val(name);
                $('#edit_contact').val(contact);
                $('#edit_email').val(email);
                $('#edit_company').val(company);
            });
        });
    </script>




    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>