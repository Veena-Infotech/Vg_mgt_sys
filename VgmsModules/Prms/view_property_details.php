<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- =================================a==============-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>View Property</title>

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
        .error-popup {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: none;
        }

        .error-popup.show {
            display: block;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            color: #721c24;
            float: right;
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        @media (max-width: 767.98px) {
            .row>[class*="col-"] {
                margin-bottom: 15px !important;
            }
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

            <h3 class="mb-4">Add Property </h3>

            <div class="radio-buttons d-flex gap-3">
                <label>
                    <input type="radio" name="toggle" value="add-society" onclick="toggleForm()" checked>
                    PROPERTY TYPE SOCIETY
                </label>
                <label>
                    <input type="radio" name="toggle" value="land-lord" onclick="toggleForm()">
                    PROPERTY TYPE LANDLORD
                </label>
            </div>
            <div id="add-society" class="form-section active">
                <div class="content">
                    <!-- view leads table  -->
                    <div class="row g-0 justify-content-between align-items-center">

                        <div>
                            <div class="scrollbar">
                                <ul class="nav nav-underline fs-9 flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                                    <li class="nav-item me-3" role="presentation">
                                        <a class="nav-link text-nowrap active" id="orders-tab" data-bs-toggle="tab"
                                            href="#tab-orders" role="tab" aria-controls="tab-orders"
                                            aria-selected="true">
                                            <i class="fa-solid fa-landmark me-2"></i>
                                            Add Society
                                        </a>

                                    </li>
                                    <li class="nav-item me-3" role="presentation">
                                        <a class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab"
                                            href="#tab-reviews" role="tab" aria-controls="tab-reviews"
                                            aria-selected="false">
                                            <i class="fa-solid fa-star"></i>
                                            Members Directory
                                        </a>
                                    </li>
                                    <li class="nav-item me-3" role="presentation">
                                        <a class="nav-link text-nowrap" id="wishlist-tab" data-bs-toggle="tab"
                                            href="#tab-wishlist" role="tab" aria-controls="tab-wishlist"
                                            aria-selected="false">
                                            <i class="fa-solid fa-heart"></i>
                                            Committee Details
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <div class="tab-content" id="profileTabContent">
                                <div class="tab-pane fade show active" id="tab-orders" role="tabpanel"
                                    aria-labelledby="orders-tab">
                                    <div class="border-top border-bottom border-translucent" id="profileOrdersTable"
                                        data-list="{&quot;valueNames&quot;:[&quot;order&quot;,&quot;status&quot;,&quot;delivery&quot;,&quot;date&quot;,&quot;total&quot;],&quot;page&quot;:6,&quot;pagination&quot;:true}">
                                        <div class="table-responsive scrollbar">
                                            <form method="post">
                                                <div class="container">
                                                    <!-- Add Society Title -->
                                                    
                                                    <div style="width: 100%;  margin: 20px 0;">
                                                        <h3 style="margin: 0;">Society Details</h3>
                                                    </div>
                                                    <br>

                                                    <!-- Hidden Society ID -->
                                                    <input type="hidden" id="society-id" name="society-id"
                                                        value="Auto-generated ID" />

                                                    <!-- CTS Number -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="society-name">Society Name
                                                            </label>
                                                            <input class="form-control" id="society-name"
                                                                name="society-name" type="text"
                                                                placeholder="Enter Society Name" required readonly />
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="cts-number">CTS
                                                                Number</label>
                                                            <input class="form-control" id="cts-number"
                                                                name="cts-number" type="text"
                                                                placeholder="Enter CTS Number" readonly />
                                                        </div>
                                                    </div>

                                                    <!-- Village, Taluka, and District Section -->
                                                    <div class="row mb-3">
                                                        <!-- District -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="district">District</label>
                                                            <input list="districts" id="district" name="district"
                                                                class="form-control"  readonly placeholder="Enter District Name" />

                                                        </div>

                                                        <!-- Taluka -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="taluka">Taluka</label>
                                                            <input type="text" class="form-select" id="taluka"
                                                                name="taluka" placeholder="Enter Taluka Name" readonly>

                                                            </input>
                                                        </div>

                                                        <!-- Village -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="village">Village</label>
                                                            <input class="form-select" id="village" name="village"
                                                                placeholder="Enter Village Name" readonly>

                                                            </input>
                                                        </div>
                                                    </div>

                                                    <!-- Ward Dropdown -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="ward">Ward</label>
                                                            <input type="text" class="form-select" id="ward" name="ward"
                                                                placeholder="Enter Ward Name" readonly>


                                                            </input>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="society-address">Society
                                                                Address</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="society-address"
                                                                    name="society-address" rows="3"
                                                                    placeholder="Enter Society Address"
                                                                    readonly></textarea>

                                                            </div>
                                                        </div>

                                                    </div>




                                                    <!-- Plot Holding dtype Dropdown -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="plot-holding-size">Plot
                                                                Holding Type</label>
                                                            <input type="text" class="form-select"
                                                                id="plot-holding-size" name="plot-holding-type"
                                                                placeholder="Enter Plot holding size" readonly>

                                                            </input>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="select-lead" class="form-label">Select Lead
                                                            </label>
                                                            <input type="text" class="form-select" id="select-lead"
                                                                name="plot-holding-type" readonly placeholder="Select lead Name">

                                                            </input>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="number-of-units">Number of
                                                                Units</label>
                                                            <input type="number" id="number-of-units"
                                                                name="number-of-units" placeholder="Enter No of Units"
                                                                class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)" readonly>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="number-of-tenants">Number of
                                                                Tenants</label>
                                                            <input type="number" id="number-of-tenants"
                                                                name="number-of-tenants" placeholder="Number of Tenants
                                                                "
                                                                class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-end">
                                                        <!-- Input Field: As per Physical -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="physical-area">As per Physical
                                                                </label>
                                                            <input type="number" id="physical-area" name="physical-area"
                                                                placeholder="As per Physical" class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)" readonly>
                                                        </div>

                                                        <!-- Input Field: As per PR Card -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="pr-card-area">As per PR
                                                                Card</label>
                                                            <input type="number" id="pr-card-area" name="pr-card-area"
                                                                placeholder="As per PR Card" class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)" readonly>
                                                        </div>

                                                        <!-- Dropdown: Units -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="unit-selection">Unit</label>
                                                            <input type="text" id="unit-selection" name="unit-selection"
                                                                placeholder="Unit" class="form-select" readonly >

                                                            </input>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label"
                                                                for="plot-holding-scheme">Scheme</label>
                                                            <input type="text" class="form-select"
                                                                id="plot-holding-scheme" name="plot-holding-scheme"
                                                                placeholder="Scheme" readonly>



                                                            </input>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label"
                                                                for="plot-holding-reservation">Reservation</label>
                                                            <input class="form-select" id="plot-holding-reservation"
                                                                name="plot-holding-reservation" readonly placeholder="Reservation">

                                                            </input>
                                                        </div>

                                                    </div>




                                                </div>
                                            </form>


                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                                    aria-labelledby="reviews-tab">
                                    <div class="border-y" id="profileRatingTable"
                                        data-list="{&quot;valueNames&quot;:[&quot;product&quot;,&quot;rating&quot;,&quot;review&quot;,&quot;status&quot;,&quot;date&quot;],&quot;page&quot;:6,&quot;pagination&quot;:true}">
                                        <div class="table-responsive scrollbar">
                                            <!-- Members Directory Section -->
                                            <div class="members-directory" id="your-wrapper-id">
                                                <div style="width: 100%;  margin: 20px 0;">
                                                    <h3 style="margin: 0;">Members Directory</h3>
                                                </div>
                                                <!-- SEARCH BOX -->
                                                <div class="w-100 mb-3">
                                                    <div class="input-group input-group-sm">
                                                        <input class="search form-control" type="search"
                                                            placeholder="Search by any field..." aria-label="Search" />
                                                    </div>
                                                </div>

                                                <br>

                                                <!-- Data Table -->
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-sm fs-9 mb-0">
                                                        <thead class="text-center">
                                                            <tr>
                                                                <th class="sort border-top border-translucent px-3 py-3"
                                                                    style="width: 7%;" data-sort="serial">Serial No</th>
                                                                <th class="sort border-top px-3 py-3 text-start"
                                                                    style="width: 25%;" data-sort="society">Society Name
                                                                </th>
                                                                <th class="sort border-top px-3 py-3" style="width: 8%;"
                                                                    data-sort="flat">Flat No</th>
                                                                <th class="sort border-top px-3 py-3 text-start"
                                                                    style="width: 15%;" data-sort="primary">Primary
                                                                    Owner</th>
                                                                <th class="sort border-top px-3 py-3 text-start"
                                                                    style="width: 15%;" data-sort="associate">Associate
                                                                    Owner</th>
                                                                <th class="sort border-top px-3 py-3 text-start"
                                                                    style="width: 10%;" data-sort="joint">Joint Owner
                                                                </th>
                                                                <th class="sort border-top px-3 py-3"
                                                                    style="width: 10%;" data-sort="contact">Contact No
                                                                </th>
                                                                <th class="sort border-top px-3 py-3 text-start"
                                                                    style="width: 20%;" data-sort="email">Email ID</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody class="list">
                                                            <tr>
                                                                <td class="serial py-3 px-2 text-center"
                                                                    data-serial="1">1</td>
                                                                <td class="society py-3 px-2 text-start"
                                                                    data-society="Green Valley Residency">Green Valley
                                                                    Residency</td>
                                                                <td class="flat py-3 px-2 text-center"
                                                                    data-flat="A-101">A-101</td>
                                                                <td class="primary py-3 px-2 text-start"
                                                                    data-primary="Rajesh Mehta">Rajesh Mehta</td>
                                                                <td class="associate py-3 px-2 text-start"
                                                                    data-associate="Sunita Mehta">Sunita Mehta</td>
                                                                <td class="joint py-3 px-2 text-start"
                                                                    data-joint="Aryan Mehta">Aryan Mehta</td>
                                                                <td class="contact py-3 px-2 text-center"
                                                                    data-contact="9876543210">9876543210</td>
                                                                <td class="email py-3 px-2 text-start"
                                                                    data-email="rajesh.mehta@example.com">
                                                                    rajesh.mehta@example.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="serial py-3 px-2 text-center"
                                                                    data-serial="2">2</td>
                                                                <td class="society py-3 px-2 text-start"
                                                                    data-society="Blue Orchid Apartments">Blue Orchid
                                                                    Apartments</td>
                                                                <td class="flat py-3 px-2 text-center"
                                                                    data-flat="B-204">B-204</td>
                                                                <td class="primary py-3 px-2 text-start"
                                                                    data-primary="Anjali Sharma">Anjali Sharma</td>
                                                                <td class="associate py-3 px-2 text-start"
                                                                    data-associate="—">—</td>
                                                                <td class="joint py-3 px-2 text-start" data-joint="—">—
                                                                </td>
                                                                <td class="contact py-3 px-2 text-center"
                                                                    data-contact="9123456789">9123456789</td>
                                                                <td class="email py-3 px-2 text-start"
                                                                    data-email="anjali.sharma@example.com">
                                                                    anjali.sharma@example.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                    <div class="d-flex justify-content-end mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <button class="page-link" data-list-pagination="prev"
                                                                aria-label="Previous">
                                                                <span class="fas fa-chevron-left"></span>
                                                            </button>
                                                            <ul class="mb-0 pagination pagination-sm px-2"></ul>
                                                            <button class="page-link pe-0" data-list-pagination="next"
                                                                aria-label="Next">
                                                                <span class="fas fa-chevron-right"></span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-wishlist" role="tabpanel"
                                    aria-labelledby="wishlist-tab">
                                    <div class="border-y border-translucent" id="productWishlistTable"
                                        data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                                        <div class="table-responsive scrollbar">
                                            <!-- Title -->
                                            <div style="width: 100%;  margin: 20px 0;">
                                                <h3 style="margin: 0;">Committee Details</h3>
                                            </div>





                                            <!-- List.js Wrapper with correct data-list config -->
                                            <div id="committeeTable"
                                                data-list='{"valueNames":["srno","name","role","phone","email","start","end"], "page": 5, "pagination": true}'>
                                                <!-- Search Box -->
                                                <div class="mb-3">
                                                    <input class="form-control search width-100%" type="search"
                                                        placeholder="Search by any field..." aria-label="Search">
                                                </div>
                                                <br>
                                                <hr>

                                                <table class="table table-striped fs--1 mb-0">
                                                    <thead class="bg-200 text-900 text-center">
                                                        <tr>
                                                            <th class="sort" data-sort="srno">Sr No</th>
                                                            <th class="sort" data-sort="name">Committee Member Name</th>
                                                            <th class="sort" data-sort="role">Role</th>
                                                            <th class="sort" data-sort="phone">Phone Number</th>
                                                            <th class="sort" data-sort="email">Email Address</th>
                                                            <th class="sort" data-sort="start">Term Start Date</th>
                                                            <th class="sort" data-sort="end">Term End Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list text-center">
                                                        <tr>
                                                            <td class="srno">1</td>
                                                            <td class="name">Ravi Sharma</td>
                                                            <td class="role">Chairman</td>
                                                            <td class="phone">9876543210</td>
                                                            <td class="email">ravi@example.com</td>
                                                            <td class="start">2024-01-01</td>
                                                            <td class="end">2026-01-01</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="srno">2</td>
                                                            <td class="name">Neha Patel</td>
                                                            <td class="role">Secretary</td>
                                                            <td class="phone">9123456780</td>
                                                            <td class="email">neha@example.com</td>
                                                            <td class="start">2023-06-01</td>
                                                            <td class="end">2025-06-01</td>
                                                        </tr>
                                                    </tbody>
                                                </table>


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

                                        </div>
                                    </div>
                                </div>




                            </div>


                        </div>
                    </div>
                </div>
            </div>



            <div id="land-lord" class="form-section content">
                <form method="post">
                    <h3 class="mb-4">Landlord Details</h3>
                    <!-- Landlord Name -->
                    <div class="mb-3">
                        <label for="landlord-name" class="form-label">Landlord Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="landlord-name" name="landlord_name" class="form-control"
                            placeholder="Enter Landlord Name" required readonly>
                    </div>
                    <!-- Email -->
                    <div class="row">
                        <div class="mb-3 col-md-12 col-lg-6 col-sm-12">
                            <label for="landlord-email" class="form-label">Email </label>
                            <input type="email" id="landlord-email" name="landlord_email" class="form-control"
                                placeholder="Enter Email" readonly>
                        </div>
                        <!-- Phone Number -->
                        <div class="mb-3 col-md-12 col-lg-6  col-sm-12">
                            <label for="landlord-phone" class="form-label">Phone Number </label>
                            <input type="tel" id="phone" name="phone" pattern="(\+91)?[6-9][0-9]{9}" required
                                class="form-control" placeholder="Enter Mobile Number" readonly />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- District -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="district">District</label>
                            <input list="districts" id="dist" name="district" class="form-control" readonly placeholder="Enter District" />

                        </div>


                        <!-- Taluka -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="taluka">Taluka</label>
                            <input type="text" class="form-select" id="talukass" name="taluka" placeholder="Enter Taluka" readonly>
                        </div>

                        <!-- Village -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="village">Village</label>
                            <input type="text" class="form-select" id="villagess" name="village" placeholder="Enter Village"
                                readonly>
                        </div>

                    </div>


                    <div class="row mb-3">
                        <div class="col-12 col-md-12 col-sm-12">
                            <label class="form-label" for="society-address">Society
                                Address</label>
                            <div class="input-group">
                                <textarea class="form-control" id="society-address" name="society-address" rows="3"
                                    placeholder="Enter Society Address" readonly></textarea>

                            </div>
                        </div>
                    </div>
                    <!-- Dropdown -->
                    <div class="mb-3">
                        <label for="property-type" class="form-label">Property Type </label>
                        <input type="text" id="property-type" name="property_type" class="form-select" required readonly
                            placeholder="Enter Property type">
                    </div>

                    <!-- Structure Options -->
                    <div id="structure-options" class="mb-3" style="display: none;">
                        <label for="structure-type" class="form-label">Structure Type</label>
                        <select id="structure-type" name="structure_type" class="form-select">
                            <option value="" disabled selected>Select Structure Type</option>
                            <option value="private">Private</option>
                            <option value="public">Multiple Buildings</option>
                            <option value="society">Society</option>
                        </select>
                    </div>

                    <!-- Private Inputs -->
                    <div id="private-options" class="row g-3 mb-3" style="display: none;">
                        <div class="col-md-6">
                            <label for="private-floors" class="form-label">Number of Floors</label>
                            <input type="number" id="private-floors" name="private_floors" class="form-control"
                                placeholder="Enter Number of Floors">
                        </div>
                        <div class="col-md-6">
                            <label for="private-units" class="form-label">Number of Units</label>
                            <input type="number" id="private-units" name="private_units" class="form-control"
                                placeholder="Enter Number of Units">
                        </div>
                    </div>

                    <!-- Public Inputs -->
                    <div id="public-options" class="row g-3 mb-3" style="display: none;">
                        <div class="col-md-6">
                            <label for="public-wings" class="form-label">Number of Wings</label>
                            <input type="number" id="public-wings" name="public_wings" class="form-control"
                                placeholder="Enter Number of Wings">
                        </div>
                        <div class="col-md-6">
                            <label for="public-floors" class="form-label">Number of Floors</label>
                            <input type="number" id="public-floors" name="public_floors" class="form-control"
                                placeholder="Enter Number of Floors">
                        </div>
                    </div>

                    <!-- Society Inputs -->
                    <div id="society-options" class="mb-3" style="display: none;">
                        <label for="society-units" class="form-label">Number of Units</label>
                        <input type="number" id="society-units" name="society_units" class="form-control"
                            placeholder="Enter Number of Units">
                    </div>

                    
                </form>




                <script>
                    // DOM Elements
                    const propertyType = document.getElementById('property-type');
                    const structureOptions = document.getElementById('structure-options');
                    const structureType = document.getElementById('structure-type');
                    const privateOptions = document.getElementById('private-options');
                    const publicOptions = document.getElementById('public-options');
                    const societyOptions = document.getElementById('society-options');

                    // Event Listeners
                    propertyType.addEventListener('change', function () {
                        structureOptions.style.display = this.value === 'structure' ? 'block' : 'none';
                        resetStructureOptions();
                    });

                    structureType.addEventListener('change', function () {
                        resetStructureOptions();
                        if (this.value === 'private') {
                            privateOptions.style.display = 'flex';
                        } else if (this.value === 'public') {
                            publicOptions.style.display = 'flex';
                        } else if (this.value === 'society') {
                            societyOptions.style.display = 'block';
                        }
                    });

                    function resetStructureOptions() {
                        privateOptions.style.display = 'none';
                        publicOptions.style.display = 'none';
                        societyOptions.style.display = 'none';
                    }
                </script>



            </div>
            <?php include("../../Components/footer.php"); ?>
        </div>













        <script>
            // Show the popup on page load if there is an error
            window.onload = function () {
                const errorPopup = document.getElementById('errorPopup');
                if (errorPopup) {
                    errorPopup.classList.add('show');
                }
            };

            // Function to close the popup
            function closePopup() {
                const errorPopup = document.getElementById('errorPopup');
                if (errorPopup) {
                    errorPopup.classList.remove('show');
                }
            }
        </script>


    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <script>
        function toggleForm() {
            const selectedValue = document.querySelector('input[name="toggle"]:checked').value;

            document.getElementById('add-society').classList.remove('active');
            document.getElementById('land-lord').classList.remove('active');

            if (selectedValue === 'add-society') {
                document.getElementById('add-society').classList.add('active');
            } else {
                document.getElementById('land-lord').classList.add('active');
            }
        }
    </script>

    <script>
        //bootstrap tab api
        document.addEventListener('DOMContentLoaded', () => {
            // Add event listeners for all Next buttons
            document.querySelectorAll('button[id^="next-tab"]').forEach((button) => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent any default form submission or action

                    // Get the current tab's parent element
                    const currentTab = e.target.closest('.tab-pane');
                    const currentTabLink = document.querySelector(`a[href="#${currentTab.id}"]`);

                    // Find the next tab link
                    const nextTabLink = currentTabLink.parentElement.nextElementSibling?.querySelector('.nav-link');
                    if (nextTabLink) {
                        // Switch to the next tab
                        nextTabLink.click();
                    } else {
                        console.log('No next tab available.');
                    }
                });
            });
        });
    </script>
    <!-- ===============================================-->
    <!--    JavaScripts-->

    <!-- ===============================================-->
    <!--Dropdown for contacted-to--->


    <!-- Script to validate the start date and end date of the committee members -->
    <script>
        // Get the input fields
        const termStart = document.getElementById('term-start');
        const termEnd = document.getElementById('term-end');

        // Add event listeners to validate the dates
        termStart.addEventListener('change', validateDates);
        termEnd.addEventListener('change', validateDates);

        function validateDates() {
            const startDate = new Date(termStart.value);
            const endDate = new Date(termEnd.value);

            if (termEnd.value && startDate > endDate) {
                alert('Term End Date cannot be earlier than Term Start Date.');
                termEnd.value = ''; // Clear the invalid date
            }
        }
    </script>
    <!--  -->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../vendors/leaflet/leaflet.js"></script>
    <script src="../../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
    <script src="../../../vendors/echarts/echarts.min.js"></script>
    <script src="../../../assets/js/ecommerce-dashboard.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap 5 (no jQuery needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>






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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script>
        const options = {
            valueNames: ['serial', 'society', 'flat', 'primary', 'associate', 'joint', 'contact', 'email'],
            page: 5, // Change as needed
            pagination: true
        };

        const userList = new List('your-wrapper-id', options);

    </script>
    <script>
        const committeeList = new List('committeeTable', {
            valueNames: ['srno', 'name', 'role', 'phone', 'email', 'start', 'end'],
            page: 5,
            pagination: true
        });
    </script>





</body>




</html>