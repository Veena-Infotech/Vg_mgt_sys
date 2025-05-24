<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Room Manager</title>
  <link rel="shortcut icon" href="../../assets/img/favicons/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/theme.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
</head>
<body>
<main class="main" id="top">
  <?php include '../../Components/navbar.php'; ?>
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