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
    <title>Starter code</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>




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
    <style>
        /* Ensure individual scrolling for each section */
        .scrollable-container {
            max-height: 500px; /* Adjust height as needed */
            overflow-y: auto; /* Enable vertical scroll */
            padding: 10px;
        }
        .visitor {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
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
      <div class="container mt-4">
        <h1 class="mb-4 fw-bold">Lobby Management</h1>

        <div class="row">
            <!-- Waiting Queue -->
            <div class="col-md-4">
                <h4>Waiting Queue</h4>
                <div class="scrollable-container" id="waiting-queue">
                    <?php
                    $waitingVisitors = [
                        ["name" => "Mushraf", "time" => "10:00 AM", "reason" => "Meeting with HR"],
                        ["name" => "Vinit", "time" => "10:30 AM", "reason" => "Meeting with IT"],
                    ];
                    foreach ($waitingVisitors as $visitor) {
                        echo '
                        <div class="card visitor">
                            <div class="card-body animate-entry">
                                <strong>' . $visitor['name'] . '</strong><br>
                                <small>' . $visitor['time'] . ' | ' . $visitor['reason'] . '</small><br>
                                <button class="btn btn-sm btn-subtle-primary mt-2 btn-action" onclick="moveToNext(this)">Move to Next</button>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>

            <!-- In Meeting -->
            <div class="col-md-4">
                <h4>In Meeting</h4>
                <div class="scrollable-container" id="next-in-line">
                    <?php
                    $nextVisitors = [
                        ["name" => "Visitor 12", "time" => "11:00 AM", "reason" => "Meeting with HR"],
                        ["name" => "Visitor 13", "time" => "11:30 AM", "reason" => "Meeting with IT"],
                        ["name" => "Visitor 14", "time" => "12:00 PM", "reason" => "Meeting with CEO"],
                    ];
                    foreach ($nextVisitors as $visitor) {
                        echo '
                        <div class="card visitor">
                            <div class="card-body animate-entry">
                                <strong>' . $visitor['name'] . '</strong><br>
                                <small>' . $visitor['time'] . ' | ' . $visitor['reason'] . '</small><br>
                                <button class="btn btn-sm btn-subtle-success mt-2 btn-action" onclick="moveToCompleted(this)">Complete</button>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Completed Meetings -->
            <div class="col-md-4">
                <h4>Completed Meetings</h4>
                <div class="scrollable-container" id="completed">
                    <?php
                    $completedVisitors = [];
                    foreach ($completedVisitors as $visitor) {
                        echo '
                        <div class="card visitor">
                            <div class="card-body animate-entry">
                                <strong>' . $visitor['name'] . '</strong><br>
                                <small>' . $visitor['time'] . ' | ' . $visitor['reason'] . '</small><br>
                                <button class="btn btn-sm btn-subtle-danger mt-2 btn-action" onclick="removeCard(this)">Remove</button>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // GSAP animation trigger function
        function animateNewVisitorCard(node) {
            if (node.classList && node.classList.contains('visitor')) {
                gsap.from(node, {
                    opacity: 0,
                    y: 30,
                    duration: 0.5,
                    ease: "power2.out"
                });
            }
        }

        // Function to observe a container and animate new children
        function observeContainer(containerId) {
            const container = document.getElementById(containerId);
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    mutation.addedNodes.forEach((node) => {
                        animateNewVisitorCard(node);
                    });
                });
            });

            observer.observe(container, { childList: true, subtree: false });
        }

        // Start observing all three containers
        observeContainer('waiting-queue');
        observeContainer('next-in-line');
        observeContainer('completed');

        // Move visitor from Waiting to In Meeting
        function moveToNext(button) {
            const card = button.closest('.card.visitor');
            const targetContainer = document.getElementById('next-in-line');

            // Change button for next action
            button.textContent = "Complete";
            button.classList.remove('btn-subtle-primary');
            button.classList.add('btn-subtle-success');
            button.setAttribute('onclick', 'moveToCompleted(this)');

            targetContainer.appendChild(card);
        }

        // Move visitor from In Meeting to Completed
        function moveToCompleted(button) {
            const card = button.closest('.card.visitor');
            const targetContainer = document.getElementById('completed');

            // Change button for next action
            button.textContent = "Remove";
            button.classList.remove('btn-subtle-success');
            button.classList.add('btn-subtle-danger');
            button.setAttribute('onclick', 'removeCard(this)');

            targetContainer.appendChild(card);
        }

        // Remove card from DOM
        function removeCard(button) {
            const card = button.closest('.card.visitor');
            card.remove();
        }
    </script>
            <!-- Footer -->
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

</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>