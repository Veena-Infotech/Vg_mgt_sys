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
    <title>View Society</title>

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
        #tableExample2 .search-box {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* left align everything */
            gap: 10px;
            /* space between button and search input */
            max-width: 600px;
            /* optional, adjust width */
            margin: 0 auto 1rem auto;
            /* vertical spacing */
        }

        #tableExample2 .search-box form {
            flex-grow: 1;
            margin-bottom: 0;
            position: relative;
        }

        #tableExample2 .search-box-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
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
        <div class="content" id="heading-gsap">
            <div class="row g-0 justify-content-between align-items-center">
                <div class="container">
                    <div style="width: 100%; text-align: center; margin: 20px 0;">
                        <h3 style="margin: 0;">Society Details</h3>
                    </div>
                    <!-- <form method="POST">
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label for="ward" class="form-label">Select Wards</label>
                                <select class="form-select" id="ward" name="ward">
                                    <option>All Wards</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="district" class="form-label">Select District</label>
                                <select class="form-select" id="district" name="district">
                                    <option value="">All Districts</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="taluka" class="form-label">Select Taluka</label>
                                <select class="form-select" id="taluka" name="taluka">
                                    <option value="">All Talukas</option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="range" class="form-label">Select Range</label>
                            <div id="range" data-nouislider='{
                        "start": [10, 90],
                        "connect": true,
                        "range": {
                            "min": 0,
                            "max": 100
                        },
                        "tooltips": true
                    }'></div>
                            <input type="hidden" id="range-value" name="range" value="10,90" />
                        </div>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form> -->

                    <div id="tableExample2"
                        data-list='{"valueNames":["name","cts","address","ward","unit"],"page":5,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
                        <div class="search-box mb-3 mx-auto">
                            <a href="/Vg_mgt_sys/VgmsModules/Prms/add_property.php" >
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#verticallyCentered">
                                    ADD +
                                </button>
                            </a>

                            <form class="position-relative">
                                <input class="form-control search-input search form-control-sm" type="search"
                                    id="search-box" placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>


                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm fs-9 mb-0" id="data-table">
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-3" data-sort="name">Name</th>
                                        <th class="sort border-top border-translucent ps-3" data-sort="ward">Ward</th>
                                        <th class="sort border-top border-translucent ps-3" data-sort="unit">Unit</th>
                                        <th class="sort border-top" data-sort="address">Address</th>
                                        <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php
                                    include '../PhpFiles/connection.php';

                                    $query = "SELECT s.*, ward_name
FROM tbl_society_details AS s
INNER JOIN tbl_ward_details AS w ON s.ward = w.id";
// $query = "SELECT * FROM tbl_society_details";
                                    $result = mysqli_query($conn, $query) or die("Query unsuccessful".mysqli_error($conn));
                                    if($result){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo '<tr>
                                        <td class="align-middle ps-3 name society_name">'.$row['society_name'].'</td>
                                        <td class="align-middle cts ward">'.$row['ward_name'].'</td>
                                        <td class="align-middle address unit">'.$row['unit'].'</td>
                                        <td class="align-middle address">'.$row['address'].'</td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm btn-reveal fs-10 open-action-modal"
                                                    data-id="'.$row['id'].'" data-bs-toggle="modal" data-bs-target="#actionModal">
                                                    <span class="fas fa-ellipsis-h fs-10"></span>
                                                </button>

                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item"
                                                        href="society-details.php?soc_id=1">View</a>
                                                    <a class="dropdown-item" href="edit-society.php?soc_id=1">Edit
                                                        Society Details</a>
                                                    <a class="dropdown-item"
                                                        href="edit-members-directory.php?soc_id=1">Edit Members
                                                        Directory</a>
                                                    <a class="dropdown-item"
                                                        href="edit-committe-details.php?soc_id=1">Edit Committee
                                                        Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- Common Action Modal -->
                            <div class="modal fade" id="actionModal" tabindex="-1" aria-labelledby="actionModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="actionModalLabel">Select Action</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex flex-column gap-2">
                                            <a id="viewLink" class="btn btn-outline-primary btn-sm">View</a>
                                            <a id="editSocietyLink" href=""
                                                class="btn btn-outline-secondary btn-sm">Edit Society Details</a>
                                            <a id="editMembersLink" href="#"
                                                class="btn btn-outline-secondary btn-sm">Edit Members Directory</a>
                                            <a id="editCommitteeLink" href="#"
                                                class="btn btn-outline-secondary btn-sm">Edit Committee Details</a>
                                            <hr>
                                            <a href="/Vg_mgt_sys/VgmsModules/Templates/view_proposal.php"
                                                class="btn btn-outline-danger btn-sm">Inactive</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            <button class="page-link disabled" data-list-pagination="prev" disabled="">
                                <svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chevron-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <!-- <path fill="currentColor"
                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                    </path> -->
                                </svg>
                            </button>
                            <ul class="mb-0 pagination">
                                <li class="active"><button class="page" type="button" data-i="1"
                                        data-page="5">1</button></li>
                                <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                                <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                                <li class="disabled"><button class="page" type="button">...</button></li>
                                <li><button class="page" type="button" data-i="9" data-page="5">9</button></li>
                            </ul>
                            <button class="page-link pe-0" data-list-pagination="next">
                                <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <!-- <path fill="currentColor"
                                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                    </path> -->
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/list.js@2.3.1/dist/list.min.js"></script>
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
        document.querySelectorAll('.open-action-modal').forEach(button => {
            button.addEventListener('click', () => {
                const socId = button.getAttribute('data-id');

                // Update modal links dynamically
                document.getElementById('viewLink').href = `society-details.php?soc_id=${socId}`;
                document.getElementById('editSocietyLink').href = `edit-society.php?soc_id=${socId}`;
                document.getElementById('editMembersLink').href = `edit-members-directory.php?soc_id=${socId}`;
                document.getElementById('editCommitteeLink').href = `edit-committe-details.php?soc_id=${socId}`;
            });
        });
    </script>




    <script>
        document.getElementById('search-box').addEventListener('input', function () {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('#data-table tbody tr');

            rows.forEach(row => {
                const society_name = row.querySelector('.society_name')?.textContent.toLowerCase() || '';
                const ward = row.querySelector('.ward')?.textContent.toLowerCase() || '';
                const unit = row.querySelector('.unit')?.textContent.toLowerCase() || '';
                const address = row.querySelector('.address')?.textContent.toLowerCase() || '';

                if (society_name.includes(searchValue) || ward.includes(searchValue) || unit.includes(searchValue) || address.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>




</body>




</html>