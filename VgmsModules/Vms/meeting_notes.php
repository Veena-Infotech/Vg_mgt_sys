<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starter code</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../../assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="../../unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet">

  <!-- Stylesheets -->
  <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link href="../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
  <link href="../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
  <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
  <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
  <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">

  <!-- Theme Config -->
  <script src="../../assets/js/config.js"></script>
  <script>
    const { phoenixIsRTL, phoenixNavbarTopShape, phoenixNavbarPosition, phoenixNavbarTopStyle, phoenixNavbarVerticalStyle } = window.config.config;
    document.documentElement.setAttribute('dir', phoenixIsRTL ? 'rtl' : 'ltr');

    window.addEventListener("DOMContentLoaded", () => {
      const removeIfExists = id => document.querySelector(id)?.remove();
      if (phoenixNavbarPosition === 'dual-nav') {
        ['#topNavSlim', '#navbarTop', '#navbarTopSlim', '#navbarCombo', '#navbarComboSlim', '#navbarDefault', '.navbar-vertical'].forEach(removeIfExists);
        document.documentElement.setAttribute('data-navigation-type', 'dual');
      }
      // Further navbar logic can remain if needed
    });
  </script>
</head>

<body>
  <main class="main" id="top">
    <?php include '../../Components/navbar.php'; ?>
    
    <div class="content">
      <div class="card shadow-none border mb-3">
        <div class="card-header p-4 border-bottom bg-body">
          <div class="row g-3 justify-content-between align-items-center">
            <div class="col-12 col-md">
              <h4 class="text-body mb-0">Meeting Notes</h4>
            </div>
          </div>
        </div>

        <div class="card-body p-4">
          <div class="table-list" id="advanceAjaxTable">
            <div class="table-responsive scrollbar mb-3">
              <table class="table table-sm fs-9 mb-0 overflow-hidden">
                <thead class="text-body">
                  <tr>
                    <th class="sort ps-3 pe-1 align-middle" data-sort="orderId">Order</th>
                    <th class="sort pe-1 align-middle" data-sort="customer">Customer</th>
                    <th class="sort pe-1 align-middle" data-sort="date">Date</th>
                    <th class="sort pe-1 align-middle" data-sort="address">Ship To</th>
                    <th class="sort pe-1 align-middle" data-sort="deliveryType">Delivery Type</th>
                    <th class="sort pe-1 align-middle text-center" data-sort="status">Status</th>
                    <th class="sort pe-1 align-middle text-end" data-sort="amount">Amount</th>
                    <th class="no-sort"></th>
                  </tr>
                </thead>
                <tbody class="list"></tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
              <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="mb-0 pagination"></ul>
              <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>
      
      <?php include("../../Components/footer.php"); ?>
    </div>
  </main>

  <!-- JavaScript Dependencies -->
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
  <script src="../../vendors/echarts/echarts.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script src="../../assets/js/ecommerce-dashboard.js"></script>
</body>

</html>
