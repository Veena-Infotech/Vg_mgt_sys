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
    <title>Analytics</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet">
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
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
            <div class="pb-6">
                <div class="row align-items-center justify-content-between g-3 mb-6">
                    <div class="col-12 col-md-auto">
                        <h2 class="mb-0">Analytics</h2>
                    </div>
                    <!-- <div class="col-12 col-md-auto">
                        <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                    </div> -->
                    <div class="mb-3" style="width: 20%;" ><label for="organizerSingle2" style="font-size: 12px;">Stage</label><select class="form-select" id="organizerSingle2" data-choices="data-choices" size="1" required="required" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select organizer...</option>
                            <option>Stage 1</option>
                            <option>Stage 2</option>
                            <option>Stage 3</option>
                            <option>Stage 4</option>
                        </select>
                        <div class="invalid-feedback">Please select one</div>
                    </div>
                </div>
                <div class="px-3 mb-6">
                    <div class="row justify-content-between">
                        <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 "><span class="uil fs-5 lh-1 uil-envelope text-primary"></span>
                            <h1 class="fs-5 pt-3">2,800</h1>
                            <p class="fs-9 mb-0">Total Emails</p>
                        </div>
                        <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end-md border-bottom pb-4 pb-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-upload text-info"></span>
                            <h1 class="fs-5 pt-3">1,866</h1>
                            <p class="fs-9 mb-0">Emails Sent</p>
                        </div>
                        <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-bottom-xxl-0 border-bottom border-end border-end-md-0 pb-4 pb-xxl-0 pt-4 pt-md-0"><span class="uil fs-5 lh-1 uil-envelopes text-primary"></span>
                            <h1 class="fs-5 pt-3">1,366</h1>
                            <p class="fs-9 mb-0">Emails Delivered</p>
                        </div>
                        <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-md border-end-xxl-0 border-bottom border-bottom-md-0 pb-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-open text-info"></span>
                            <h1 class="fs-5 pt-3">1,200</h1>
                            <p class="fs-9 mb-0">Emails Opened</p>
                        </div>
                        <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end border-end-xxl-0 pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-check text-success"></span>
                            <h1 class="fs-5 pt-3">900</h1>
                            <p class="fs-9 mb-0">Emails Clicked</p>
                        </div>
                        <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-block text-danger"></span>
                            <h1 class="fs-5 pt-3">500</h1>
                            <p class="fs-9 mb-0">Emails Bounce</p>
                        </div>
                    </div>
                </div>
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 pb-3 border-y">
                    <div class="row gx-6">
                        <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-5 mb-md-3 mb-lg-5 mb-xl-2 mb-xxl-3">
                            <div class="scrollbar">
                                <h3>Email Campaign Reports</h3>
                                <p class="text-body-tertiary">Paid and Verified for each piece of content</p>
                                <div class="echart-email-campaign-report echart-contacts-width"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-1 mb-sm-0">
                            <div class="row align-itms-center mb-5 mb-sm-2 mb-md-4">
                                <div class="col-sm-8 col-md-12 col-lg-8 col-xl-12 col-xxl-8 mb-xl-2 mb-xxl-0">
                                    <h3> Marketing Campaign Report</h3>
                                    <p class="text-body-tertiary mb-lg-0">According to the sales data.</p>
                                </div>
                                <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12 col-xxl-4"><select class="form-select form-select">
                                        <option>Ally Aagaard</option>
                                        <option>Alec Haag</option>
                                        <option>Aagaard</option>
                                    </select></div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-sm-8 col-md-12 col-lg-8 col-xl-12 col-xxl-8">
                                    <div class="echart-social-marketing-radar" style="min-height:320px; width:100%"></div>
                                </div>
                                <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12 col-xxl-4 d-flex justify-content-end-xxl mt-0">
                                    <div class="d-flex flex-1 justify-content-center d-sm-block d-md-flex d-lg-block d-xl-flex d-xxl-block">
                                        <div class="mb-4 me-6 me-sm-0 me-md-6 me-lg-0 me-xl-6 me-xxl-0">
                                            <div class="d-flex align-items-center mb-2">
                                                <h4 class="mb-0">15,000</h4><span class="badge badge-phoenix badge-phoenix-primary ms-2">+30.63%</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="fa-solid fa-circle text-warning-light me-2"></div>
                                                <h6 class="mb-0">Online Campaign</h6>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-2">
                                                <h4 class="mb-0">5,000</h4><span class="badge badge-phoenix badge-phoenix-danger ms-2">+13.52%</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="fa-solid fa-circle text-primary-light me-2"></div>
                                                <h6 class="mb-0">Offline Campaign</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-6 gy-7 gx-6">
                    <div class="col-12 col-md-6">
                        <div class="row justify-content-between mb-4">
                            <div class="col-12">
                                <h3>Sales Trends</h3>
                                <p class="text-body-tertiary">Updated inventory &amp; the sales report.</p>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="d-flex">
                                    <div class="fa-solid fa-circle text-info-light me-2"></div>
                                    <h6 class="mb-0 me-3 lh-base">Profit</h6>
                                </div>
                                <div class="d-flex">
                                    <div class="fa-solid fa-circle text-primary-lighter me-2"></div>
                                    <h6 class="mb-0 lh-base">Revenue</h6>
                                </div>
                            </div>
                        </div>
                        <div class="echart-sales-trends" style="height:270px; width:100%"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row justify-content-between mb-4">
                            <div class="col-auto">
                                <h3>Call Campaign Reports</h3>
                                <p class="text-body-tertiary">All call campaigns succeeded.</p>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="d-flex">
                                    <div class="fa-solid fa-circle text-primary me-2"></div>
                                    <h6 class="mb-0 me-3 lh-base">Campaign</h6>
                                </div>
                            </div>
                        </div>
                        <div class="echart-call-campaign" style="height:290px; width:100%"></div>
                    </div>
                </div>
            </div>

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
    <script src="../../vendors/dropzone/dropzone-min.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../assets/js/crm-analytics.js"></script>




    </script>



</body>




</html>