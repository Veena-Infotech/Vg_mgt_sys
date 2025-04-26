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
            <div class="card shadow-none border mb-3" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-body mb-0" data-anchor="data-anchor">Meeting Notes</h4>
                        </div>
                        <div class="col col-md-auto">
                            <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button
                                    class="btn btn-link px-2 text-body copy-code-btn" type="button"><span
                                        class="fas fa-copy me-1"></span>Copy Code</button><a
                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse"
                                    href="#ajax-table-code" role="button" aria-controls="ajax-table-code"
                                    aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a
                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2"
                                        data-feather="eye"></span>Hide code</a></nav>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="collapse code-collapse" id="ajax-table-code">
                        <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-list&quot; id=&quot;advanceAjaxTable&quot;&gt;
  &lt;div class=&quot;table-responsive scrollbar mb-3&quot;&gt;
    &lt;table class=&quot;table table-sm fs-9 mb-0 overflow-hidden&quot;&gt;
      &lt;thead class=&quot;text-body&quot;&gt;
        &lt;tr&gt;
          &lt;th class=&quot;sort ps-3 pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;orderId&quot; style=&quot;min-width: 4.5rem;&quot;&gt;Order&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;customer&quot; style=&quot;min-width: 8.5rem&quot;&gt;Customer&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap pe-7&quot; data-sort=&quot;date&quot;&gt;Date&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;address&quot; style=&quot;min-width: 12.5rem;&quot;&gt;Ship To&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap&quot; data-sort=&quot;deliveryType&quot; style=&quot;min-width: 7rem&quot;&gt;Delivery Type&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap text-center&quot; data-sort=&quot;status&quot;&gt;Status&lt;/th&gt;
          &lt;th class=&quot;sort pe-1 align-middle white-space-nowrap text-end&quot; data-sort=&quot;amount&quot;&gt;Amount&lt;/th&gt;
          &lt;th class=&quot;no-sort&quot;&gt;&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody class=&quot;list&quot;&gt;&lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex justify-content-center mt-3&quot;&gt;&lt;button class=&quot;page-link&quot; data-list-pagination=&quot;prev&quot;&gt;&lt;span class=&quot;fas fa-chevron-left&quot;&gt;&lt;/span&gt;&lt;/button&gt;
    &lt;ul class=&quot;mb-0 pagination&quot;&gt;&lt;/ul&gt;&lt;button class=&quot;page-link pe-0&quot; data-list-pagination=&quot;next&quot;&gt;&lt;span class=&quot;fas fa-chevron-right&quot;&gt; &lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;p-3&quot;&gt;
  &lt;h4 class=&quot;mb-3&quot;&gt;How to use&lt;/h4&gt;
  &lt;p&gt;If you are using Gulp based workflow, follow these easy steps:&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Give your table a unique ID.&lt;/li&gt;
    &lt;li&gt;Use the &lt;code&gt;advanceAjaxTableInit() &lt;/code&gt;function from &lt;code&gt;src/js/theme/advance-ajax-table.js &lt;/code&gt;in a new JS file and update the ID.&lt;/li&gt;
    &lt;li&gt;Import the file on &lt;code&gt;src/js/phoenix.js&lt;/code&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;p&gt;If you are not using Gulp based workflow:&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Give your table a unique ID.&lt;/li&gt;
    &lt;li&gt;Find the &lt;code&gt;advanceAjaxTableInit() &lt;/code&gt;function from &lt;code&gt;theme.js, &lt;/code&gt;copy the code, and update the ID in a new function.&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                        <div class="table-list" id="advanceAjaxTable">
                            <div class="table-responsive scrollbar mb-3">
                                <table class="table table-sm fs-9 mb-0 overflow-hidden">
                                    <thead class="text-body">
                                        <tr>
                                            <th class="sort ps-3 pe-1 align-middle white-space-nowrap"
                                                data-sort="orderId" style="min-width: 4.5rem;">Order</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap" data-sort="customer"
                                                style="min-width: 8.5rem">Customer</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">
                                                Date</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address"
                                                style="min-width: 12.5rem;">Ship To</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap"
                                                data-sort="deliveryType" style="min-width: 7rem">Delivery Type</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap text-center"
                                                data-sort="status">Status</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap text-end"
                                                data-sort="amount">Amount</th>
                                            <th class="no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list"></tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-3"><button class="page-link"
                                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                            </div>
                        </div>

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