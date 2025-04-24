<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leave Request Management</title>

  <!-- Bootstrap and GSAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

  <!-- Favicon and Theme -->
  <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
  <main class="main" id="top">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <!-- Title Section -->
          <div class="text-center mb-5">
            <i class="bi bi-clipboard-check" style="font-size: 2.5rem; color: #0d6efd;"></i>
            <h2 class="fw-bold mt-2">Leave Requests Management</h2>
            <p class="text-muted">Approve or reject employee leave requests with ease.</p>
          </div>

          <!-- Leave Requests Table -->
          <table class="table table-bordered table-hover">
            <thead class="table-light">
              <tr>
                <th scope="col">Employee Name</th>
                <th scope="col">Leave Type</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Reason</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Sample Leave Request Row -->
              <tr id="leaveRequest1">
                <td>Jane Doe</td>
                <td>Casual Leave</td>
                <td>2025-05-01</td>
                <td>2025-05-03</td>
                <td>Personal matter</td>
                <td>
                  <div class="d-flex justify-content-start">
                    <button class="btn btn-outline-success me-3" id="approveBtn1">
                      <i class="bi bi-check-circle me-1"></i> Approve
                    </button>
                    <button class="btn btn-outline-danger" id="rejectBtn1">
                      <i class="bi bi-x-circle me-1"></i> Reject
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Another Sample Leave Request Row -->
              <tr id="leaveRequest2">
                <td>John Smith</td>
                <td>Sick Leave</td>
                <td>2025-05-05</td>
                <td>2025-05-07</td>
                <td>Medical leave</td>
                <td>
                  <div class="d-flex justify-content-start">
                    <button class="btn btn-outline-success me-3" id="approveBtn2">
                      <i class="bi bi-check-circle me-1"></i> Approve
                    </button>
                    <button class="btn btn-outline-danger" id="rejectBtn2">
                      <i class="bi bi-x-circle me-1"></i> Reject
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
      <p class="text-muted">Leave Management System &copy; 2025</p>
    </footer>
  </main>

  <!-- Modal for Confirmation (Approve) -->
  <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="approveModalLabel">Confirm Approval</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to approve this leave request?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-outline-success" id="confirmApprove">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Confirmation (Reject) -->
  <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rejectModalLabel">Confirm Rejection</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to reject this leave request?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-outline-danger" id="confirmReject">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript for Bootstrap, GSAP, and Modal functionality -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // GSAP Animations
    gsap.from("table tbody tr", {
      opacity: 0,
      y: 30,
      duration: 1,
      stagger: 0.2,
      ease: "power2.out"
    });

    // Button Click Handlers for Approve and Reject actions
    document.getElementById('approveBtn1').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('approveModal'));
      modal.show();
      document.getElementById('confirmApprove').onclick = function() {
        gsap.to('#leaveRequest1', {
          backgroundColor: '#d4edda',
          duration: 0.5,
          onComplete: () => alert('Leave Approved for Jane Doe')
        });
        modal.hide();
      };
    });

    document.getElementById('rejectBtn1').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
      modal.show();
      document.getElementById('confirmReject').onclick = function() {
        gsap.to('#leaveRequest1', {
          backgroundColor: '#f8d7da',
          duration: 0.5,
          onComplete: () => alert('Leave Rejected for Jane Doe')
        });
        modal.hide();
      };
    });

    document.getElementById('approveBtn2').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('approveModal'));
      modal.show();
      document.getElementById('confirmApprove').onclick = function() {
        gsap.to('#leaveRequest2', {
          backgroundColor: '#d4edda',
          duration: 0.5,
          onComplete: () => alert('Leave Approved for John Smith')
        });
        modal.hide();
      };
    });

    document.getElementById('rejectBtn2').addEventListener('click', function() {
      const modal = new bootstrap.Modal(document.getElementById('rejectModal'));
      modal.show();
      document.getElementById('confirmReject').onclick = function() {
        gsap.to('#leaveRequest2', {
          backgroundColor: '#f8d7da',
          duration: 0.5,
          onComplete: () => alert('Leave Rejected for John Smith')
        });
        modal.hide();
      };
    });
  </script>
</body>
</html>
