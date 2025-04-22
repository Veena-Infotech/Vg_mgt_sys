<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Employee Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Added jQuery -->
  <style>
    body {
      background-color: transparent;
      color: #ffffff;
      font-family: 'Segoe UI', sans-serif;
    }

    .table thead {
      color: #000000;
      background-color: transparent;
    }

    .table,
    .table th,
    .table td {
      border: 1px solid #444;
    }

    .table tbody tr:hover {
      background-color: #1a1f26;
      transition: background 0.3s ease-in-out;
    }

    .btn-primary {
      background-color: #2f81f7;
      border: none;
    }

    .btn-primary:hover {
      background-color: #1f6feb;
    }

    .card {
      background-color: #161b22;
      border: none;
    }

    .form-control,
    .form-select {
      background-color: #0d1117;
      color: #ffffff;
      border-color: #30363d;
    }

    .form-control::placeholder {
      color: #8b949e;
    }

    .table-dark-custom th,
    .table-dark-custom td {
      vertical-align: middle;
    }

    .rounded-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container mt-5" id="dashboard">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Employees List</h2>
    <button class="btn btn-primary">+ Add New Employee</button>
  </div>

  <div class="input-group mb-3 w-50 ">
    <input type="text" class="form-control bg-transparent" placeholder="Search by name" id="searchInput">
  </div>

  <div class="table-responsive">
    <table class="table table-hover table-borderless table-dark-custom">
      <thead>
        <tr>
          <th>Profile</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Designation</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="employeeTable">
        <!-- Employee data will be inserted here dynamically -->
      </tbody>
    </table>
  </div>
</div>

<script>
  // Animate dashboard content on load with increased animation
  gsap.from("#dashboard", {
    opacity: 0,
    y: 80, // Increased the vertical movement
    duration: 2, // Increased duration for slower, more noticeable animation
    ease: "power4.out", // Made the easing effect smoother
    delay: 0.5 // Added delay before animation starts
  });

  // Basic search filter
  document.getElementById("searchInput").addEventListener("input", function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll("#employeeTable tr");

    rows.forEach(row => {
      const name = row.cells[1].textContent.toLowerCase();
      row.style.display = name.includes(filter) ? "" : "none";
    });
  });

  // Fetch employee data from payrollms.php
  $(document).ready(function () {
    $.ajax({
      url: 'payrollms.php',
      method: 'GET',
      dataType: 'json',
      success: function (data) {
        let employeeRows = '';
        data.forEach(employee => {
          employeeRows += `
            <tr>
              <td><img src="${employee.profile}" class="rounded-avatar" alt="Profile"></td>
              <td>${employee.name}</td>
              <td>${employee.email}</td>
              <td>${employee.phone}</td>
              <td>${employee.designation}</td>
              <td>${employee.address}</td>
              <td><button class="btn btn-sm btn-outline-light">...</button></td>
            </tr>
          `;
        });
        $('#employeeTable').html(employeeRows);
      },
      error: function (err) {
        console.error("Error fetching employee data: ", err);
      }
    });
  });
</script>

</body>
</html>
