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
    <div class="flex-grow-1 d-flex flex-column">
      <div class="d-flex justify-content-between align-items-start p-3 border-bottom">
        <div>
          <h4 class="mb-0">File Manager</h4>
          <small>Organize and access your files easily</small>
        </div>
        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#locationModal">+ Room/Area</button>
      </div>
      <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <select id="roomFilter" class="form-select w-auto">
            <option value="all">All Rooms</option>
            <?php
            include '../Phpfiles/connection.php';
            $office_id = isset($_GET['office_id']) ? intval($_GET['office_id']) : 0;
            $sql = $office_id ? "SELECT room_name FROM tbl_rooms WHERE office_id = $office_id" : "SELECT room_name FROM tbl_rooms";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<option value="' . htmlspecialchars($row['room_name']) . '">' . htmlspecialchars($row['room_name']) . '</option>';
              }
            }
            ?>
          </select>
        </div>
        <div id="locationList" class="row g-3">
          <?php
          $sql = $office_id ? "SELECT * FROM tbl_rooms WHERE office_id = $office_id" : "SELECT * FROM tbl_rooms";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4 location-card" data-room="' . htmlspecialchars($row['room_name']) . '">
                      <div class="card text-center h-100">
                        <div class="card-body d-flex flex-column justify-content-center">
                          <i class="bi bi-folder-fill display-4 text-secondary"></i>
                          <h5 class="card-title mt-2">' . htmlspecialchars($row['room_name']) . '</h5>
                          <a href="index_table.php?id=' . $row['id'] . '"><button class="btn btn-outline-secondary btn-sm mt-2">Open</button></a>
                        </div>
                      </div>
                    </div>';
            }
          } else {
            echo '<div class="col-12 text-center">No rooms available</div>';
          }
          ?>
        </div>
      </div>
      <!-- Add Room Modal -->
      <div class="modal fade mt-2" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content border-0">
            <div class="modal-header">
              <h5 class="modal-title" id="locationModalLabel">Add Room/Area</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="addLocationForm">
              <div class="modal-body">
                <input type="text" id="locationInput" class="form-control" placeholder="Enter room name" required>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php include("../../Components/footer.php"); ?>
    </div>
  </div>
</main>

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
  document.addEventListener("DOMContentLoaded", function () {
    const locationList = document.getElementById('locationList');
    const addLocationForm = document.getElementById('addLocationForm');
    const locationInput = document.getElementById('locationInput');
    const locationModalEl = document.getElementById('locationModal');
    const locationModal = new bootstrap.Modal(locationModalEl);
    const officeId = new URLSearchParams(window.location.search).get("office_id");

    // Animate header
    gsap.from(".border-bottom", { opacity: 1, y: -20, duration: 0.6, ease: "power2.out" });
    gsap.from(".location-card", { opacity: 0, y: 20, duration: 0.6, stagger: 0.1 });

    locationModalEl.addEventListener('shown.bs.modal', () => {
      gsap.from("#locationModal .modal-content", { opacity: 1, y: -40, duration: 0.4, ease: "power2.out" });
    });

    addLocationForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const name = locationInput.value.trim();
      if (!name || !officeId) return alert("Room name or office ID missing.");

      fetch('../Phpfiles/add_room.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ room_name: name, office_id: officeId })
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          const newLocation = document.createElement('div');
          newLocation.className = 'col-md-4 location-card';
          newLocation.dataset.room = name;
          newLocation.innerHTML = `
            <div class="card text-center h-100">
              <div class="card-body d-flex flex-column justify-content-center">
                <i class="bi bi-folder-fill display-4 text-secondary"></i>
                <h5 class="card-title mt-2">${name}</h5>
                <a href="index_table.php?id=${data.room_id}">
                  <button class="btn btn-outline-secondary btn-sm mt-2">Open</button>
                </a>
              </div>
            </div>`;
          locationList.appendChild(newLocation);
          gsap.from(newLocation, { scale: 0.8, opacity: 1, duration: 0.5, ease: "back.out(1.7)" });
          locationInput.value = '';
          locationModal.hide();
        } else {
          alert(data.message || "Error saving room.");
        }
      })
      .catch(err => {
        console.error("Request failed:", err);
        alert("Could not add room.");
      });
    });

    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));
    document.getElementById('roomFilter').addEventListener('change', function () {
      const value = this.value;
      document.querySelectorAll('.location-card').forEach(card => {
        const match = value === 'all' || card.dataset.room === value;
        card.classList.toggle('d-none', !match);
        if (match) gsap.fromTo(card, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5 });
      });
    });
  });
</script>
</body>
</html>