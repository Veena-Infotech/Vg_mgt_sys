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
    <title>Lms | Contacts</title>

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

            <!-- view contacts table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">

                <!-- Container for the Title -->
                <div style="width: 100%; text-align: center; margin: 20px 0;">
                    <h3 style="margin: 0;">Contacts </h3>
                </div>
                <hr>

                <!-- ADD Button -->
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addcontactModal">
                        ADD
                    </button>
                </div>

                <!-- Container for the Table -->
                <div id="tableExample3" data-list='{"valueNames":["name","account","phone","email","owner"],"page":5,"pagination":true}' style="width: 100%; padding-top: 20px;">
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search" id="search-box" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"></svg>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top ps-3" data-sort="name">Name</th>
                                    <th class="sort border-top" data-sort="account">Account</th>
                                    <th class="sort border-top" data-sort="phone">Phone</th>
                                    <th class="sort border-top" data-sort="email">Email</th>
                                    <th class="sort border-top" data-sort="owner">Owner</th>
                                    <th class="border-top">Edit</th>
                                    <th class="border-top">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="name">Ankit Mehra</td>
                                    <td class="account">Skyline Services</td>
                                    <td class="phone">9876543210</td>
                                    <td class="email">ankit@skyline.com</td>
                                    <td class="owner">Rahul</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editAgency" style="border: none;">🖉</button>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" checked>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Priya Sharma</td>
                                    <td class="account">Urban Connect</td>
                                    <td class="phone">9123456789</td>
                                    <td class="email">priya@urbanconnect.in</td>
                                    <td class="owner">Neha</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editAgency" style="border: none;">🖉</button>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Rahul Verma</td>
                                    <td class="account">Vertex Solutions</td>
                                    <td class="phone">9988776655</td>
                                    <td class="email">rahul@vertex.com</td>
                                    <td class="owner">Divya</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editAgency" style="border: none;">🖉</button>
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" checked>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- pagination -->
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



                <!-- Add contact Modal -->
                <div class="modal fade" id="addcontactModal" tabindex="-1" aria-labelledby="addcontactModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form id="addcontactForm" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- About Section -->
                                    <p class="modal-title" style="margin-left: -0.5%;">About</p>
                                    <hr style="margin-top: -1%">
                                    <div class="mb-6">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="contact_name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="contact_name" placeholder="Enter Name" name="contact[name]" required>
                                            </div>
                                            <div class="col">
                                                <label for="contact_account" class="form-label">Account</label>
                                                <input type="text" class="form-control" id="contact_account" placeholder="Enter Account" name="contact[account]">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="contact_reports_to" class="form-label">Reports To</label>
                                                <input type="text" class="form-control" id="contact_reports_to" placeholder="Enter Reporting Person" name="contact[reports_to]">
                                            </div>
                                            <div class="col">
                                                <label for="contact_title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="contact_title" placeholder="Enter Title" name="contact[title]">
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <label class="form-label" for="contact_description">Description</label>
                                            <textarea class="form-control" id="contact_description" rows="3" name="contact[description]" placeholder="Enter Description"></textarea>
                                        </div>
                                    </div>

                                    <!-- Contact Section -->
                                    <div style="margin-top: -4%;">
                                        <p class="modal-title" style="margin-left: -0.5%;">Contact</p>
                                        <hr style="margin-top: -1%">

                                        <div class="mb-6">
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="contact_phone" class="form-label">Phone</label>
                                                    <input type="tel" class="form-control" id="edit_contact" name="edit_contact" placeholder="Enter Agency contact" pattern="[0-9]{10}" maxlength="10" oninput="validateMobile(this)" required>
                                                </div>
                                                <div class="col">
                                                    <label for="contact_email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="contact_email" placeholder="Enter Email" name="contact[email]" required>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label" for="contact_address">Mailing Address</label>
                                                <textarea class="form-control" id="contact_address" rows="3" name="contact[address]" placeholder="Enter Mailing Address"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" id="addcontactBtn" name="add">Add</button>
                                    <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- Edit Modal -->
                <div class="modal fade" id="editAgency" tabindex="-1" aria-labelledby="editcontactModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form id="editcontactForm" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <!-- About Section -->
                                    <p class="modal-title" style="margin-left: -0.5%;">About</p>
                                    <hr style="margin-top: -1%">
                                    <div class="mb-6">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="edit_contact_name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="edit_contact_name" placeholder="Enter Name" name="contact[name]" required>
                                            </div>
                                            <div class="col">
                                                <label for="edit_contact_account" class="form-label">Account</label>
                                                <input type="text" class="form-control" id="edit_contact_account" placeholder="Enter Account" name="contact[account]">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="edit_contact_reports_to" class="form-label">Reports To</label>
                                                <input type="text" class="form-control" id="edit_contact_reports_to" placeholder="Enter Reporting Person" name="contact[reports_to]">
                                            </div>
                                            <div class="col">
                                                <label for="edit_contact_title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="edit_contact_title" placeholder="Enter Title" name="contact[title]" required>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <label class="form-label" for="edit_contact_description">Description</label>
                                            <textarea class="form-control" id="edit_contact_description" rows="3" name="contact[description]" placeholder="Enter Description"></textarea>
                                        </div>
                                    </div>

                                    <!-- Contact Section -->
                                    <div style="margin-top: -4%;">
                                        <p class="modal-title" style="margin-left: -0.5%;">Contact</p>
                                        <hr style="margin-top: -1%">

                                        <div class="mb-6">
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="edit_contact_phone" class="form-label">Phone</label>
                                                    <input type="tel" class="form-control" id="edit_contact_phone" placeholder="Enter Phone" name="contact[phone]"
                                                        pattern="[0-9]{10}" maxlength="10" oninput="validateMobile(this)" required>
                                                </div>
                                                <div class="col">
                                                    <label for="edit_contact_email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="edit_contact_email" placeholder="Enter Email" name="contact[email]" required>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label" for="edit_contact_address">Mailing Address</label>
                                                <textarea class="form-control" id="edit_contact_address" rows="3" name="contact[address]" placeholder="Enter Mailing Address"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" id="editcontactBtn" name="edit">Save Changes</button>
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
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".edit-btn").forEach(function(btn) {
                btn.addEventListener("click", function() {
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
        document.getElementById('search-box').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll('#data-table tbody tr');

            rows.forEach(row => {
                const id = row.querySelector('.id')?.textContent.toLowerCase() || '';
                const company = row.querySelector('.company')?.textContent.toLowerCase() || '';
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


    <!-- edit functionally  -->
    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const email = button.getAttribute('data-email');
                const company = button.getAttribute('data-company');

                document.getElementById('edit_id').value = id;
                document.getElementById('edit_name').value = name;
                document.getElementById('edit_email').value = email;
                document.getElementById('edit_company').value = company;
            });
        });
    </script>

    <script>
        function validateMobile(input) {
            const value = input.value;
            if (!/^\d*$/.test(value)) {
                alert("Only numeric digits are allowed.");
                input.value = value.replace(/\D/g, '');
            } else if (value.length > 10) {
                alert("Please enter a valid 10-digit mobile number.");
                input.value = value.slice(0, 10);
            }
        }
    </script>




    </script>



</body>


<!-- Mirrored from 3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>