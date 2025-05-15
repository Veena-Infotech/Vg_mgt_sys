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
    <title>Cases</title>

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
                    <h3 style="margin: 0;">View/Manage Price Books</h3>
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
                                    <h5 class="modal-title" id="verticallyCenteredModalLabel">Add Cases</h5>
                                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form id="add_case_form" method="post">
            
                                        <!-- Case Info Section -->
                                        <h6>Case Info</h6>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="" selected disabled>Select Status</option>
                                                <option value="Open">Open</option>
                                                <option value="Closed">Closed</option>
                                                <option value="Pending">Pending</option>
                                                <!-- add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="origin" class="form-label">Origin</label>
                                            <select class="form-select" id="origin" name="origin" required>
                                                <option value="" selected disabled>Select Origin</option>
                                                <option value="Email">Email</option>
                                                <option value="Phone">Phone</option>
                                                <option value="Web">Web</option>
                                                <!-- add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="priority" class="form-label">Priority</label>
                                            <select class="form-select" id="priority" name="priority" required>
                                                <option value="" selected disabled>Select Priority</option>
                                                <option value="Low">Low</option>
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="owner" class="form-label">Owner</label>
                                            <input class="form-control" type="text" id="owner" name="owner"
                                                placeholder="Enter Owner Name" required>
                                        </div>

<br>
                                        <!-- Contact Info Section -->
                                        <h6>Contact Info</h6>

                                        <div class="mb-3">
                                            <label for="contact_info" class="form-label">Contact</label>
                                            <select class="form-select" id="contact_info" name="contact_info" required>
                                                <option value="" selected disabled>Select Contact</option>
                                                <option value="Contact 1">Contact 1</option>
                                                <option value="Contact 2">Contact 2</option>
                                                <!-- replace or add real contacts -->
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="account" class="form-label">Account</label>
                                            <select class="form-select" id="account" name="account" required>
                                                <option value="" selected disabled>Select Account</option>
                                                <option value="Account 1">Account 1</option>
                                                <option value="Account 2">Account 2</option>
                                                <!-- replace or add real accounts -->
                                            </select>
                                        </div>
<br>
                                        <!-- Description Section -->
                                        <h6>Description</h6>

                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input class="form-control" type="text" id="subject" name="subject"
                                                placeholder="Enter Subject" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"
                                                placeholder="Enter Description"></textarea>
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
                                <tr>
                                    <th class="sort border-top border-translucent ps-3 py-3" data-sort="case_number">
                                        Case #</th>
                                    <th class="sort border-top py-3" data-sort="subject">Subject</th>
                                    <th class="sort border-top py-3" data-sort="status">Status</th>
                                    <th class="sort border-top py-3" data-sort="opened_time">Opened Time</th>
                                    <th class="sort border-top py-3" data-sort="owner">Owner</th>
                                    <th class="sort border-top py-3" data-sort="edit">Edit</th>
                                    <th class="sort border-top py-3" data-sort="active">Active</th>
                                </tr>
                            </thead>
                            <tbody class="list">

                                <tr>
                                    <td class="case_number py-3 px-2" data-case-number="12345">12345</td>
                                    <td class="subject py-3 px-2" data-subject="Issue with login">Issue with login</td>
                                    <td class="status py-3 px-2" data-status="Open">Open</td>
                                    <td class="opened_time py-3 px-2" data-opened-time="2025-05-10 09:30 AM">2025-05-10
                                        09:30 AM</td>
                                    <td class="owner py-3 px-2" data-owner="John Doe">John Doe</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editCase" data-case-number="12345"
                                            data-subject="Issue with login" data-status="Open"
                                            data-opened-time="2025-05-10 09:30 AM" data-owner="John Doe"
                                            style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td class="ps-3 py-3 px-2">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" data-case-number="12345">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="case_number py-3 px-2" data-case-number="12346">12346</td>
                                    <td class="subject py-3 px-2" data-subject="Payment not processed">Payment not
                                        processed</td>
                                    <td class="status py-3 px-2" data-status="Closed">Closed</td>
                                    <td class="opened_time py-3 px-2" data-opened-time="2025-04-22 02:15 PM">2025-04-22
                                        02:15 PM</td>
                                    <td class="owner py-3 px-2" data-owner="Jane Smith">Jane Smith</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editCase" data-case-number="12346"
                                            data-subject="Payment not processed" data-status="Closed"
                                            data-opened-time="2025-04-22 02:15 PM" data-owner="Jane Smith"
                                            style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td class="ps-3 py-3 px-2">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" data-case-number="12346">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                </tr>
                                

                                <tr>
                                    <td class="case_number py-3 px-2" data-case-number="12347">12347</td>
                                    <td class="subject py-3 px-2" data-subject="Bug in checkout">Bug in checkout</td>
                                    <td class="status py-3 px-2" data-status="In Progress">In Progress</td>
                                    <td class="opened_time py-3 px-2" data-opened-time="2025-05-01 11:00 AM">2025-05-01
                                        11:00 AM</td>
                                    <td class="owner py-3 px-2" data-owner="Mike Johnson">Mike Johnson</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editCase" data-case-number="12347"
                                            data-subject="Bug in checkout" data-status="In Progress"
                                            data-opened-time="2025-05-01 11:00 AM" data-owner="Mike Johnson"
                                            style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td class="ps-3 py-3 px-2">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" data-case-number="12347">
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
                <div class="modal fade" id="editCase" tabindex="-1" aria-labelledby="editCaseLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCaseLabel">Edit Case</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editCaseForm">
                                    <div class="mb-3">
                                        <label for="caseNumber" class="form-label">Case #</label>
                                        <input type="text" class="form-control" id="caseNumber" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caseSubject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="caseSubject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="caseStatus" class="form-label">Status</label>
                                        <select class="form-select" id="caseStatus">
                                            <option>Open</option>
                                            <option>In Progress</option>
                                            <option>Closed</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caseOpenedTime" class="form-label">Opened Time</label>
                                        <input type="text" class="form-control" id="caseOpenedTime">
                                    </div>
                                    <div class="mb-3">
                                        <label for="caseOwner" class="form-label">Owner</label>
                                        <input type="text" class="form-control" id="caseOwner">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="caseActive">
                                        <label class="form-check-label" for="caseActive">
                                            Active
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="saveCaseChanges">Save changes</button>
                            </div>
                        </div>
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


    </script>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var options = {
                valueNames: ['case_number', 'subject', 'status', 'owner'],
                page: 5,
                pagination: true
            };

            var caseList = new List('tableExample3', options);

            // Connect your search box with List.js search
            var searchBox = document.getElementById('search-box');
            searchBox.addEventListener('keyup', function () {
                caseList.search(searchBox.value);
            });
        });

    </script>








    <script>
        const editCaseModal = document.getElementById('editCase');
        editCaseModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;

            const caseNumber = button.getAttribute('data-case-number');
            const subject = button.getAttribute('data-subject');
            const status = button.getAttribute('data-status');
            const openedTime = button.getAttribute('data-opened-time');
            const owner = button.getAttribute('data-owner');
            const active = button.closest('tr').querySelector('input[type="checkbox"]').checked;

            editCaseModal.querySelector('#caseNumber').value = caseNumber;
            editCaseModal.querySelector('#caseSubject').value = subject;
            editCaseModal.querySelector('#caseStatus').value = status;
            editCaseModal.querySelector('#caseOpenedTime').value = openedTime;
            editCaseModal.querySelector('#caseOwner').value = owner;
            editCaseModal.querySelector('#caseActive').checked = active;
        });

    </script>






    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>