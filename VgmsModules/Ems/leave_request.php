<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Enhanced Leave Request Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="text-center mb-4">
          <i class="bi bi-clipboard-check" style="font-size: 2.5rem; color: #0d6efd;"></i>
          <h2 class="fw-bold mt-2">Leave Request Form</h2>
          <p class="text-muted">Submit your time-off request with the form below.</p>
        </div>

        <div class="border rounded shadow-sm bg-white p-4" id="formCard">
          <form id="leaveForm">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person-fill me-1"></i>Employee Name</label>
                <input type="text" class="form-control" placeholder="Please enter your name" required>
              </div>

              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-card-list me-1"></i>Leave Type</label>
                <select class="form-select" required>
                  <option selected disabled value="">Select type</option>
                  <option>Casual Leave</option>
                  <option>Sick Leave</option>
                  <option>Earned Leave</option>
                </select>
              </div>

              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-calendar-event me-1"></i>From Date</label>
                <input type="date" class="form-control" required>
              </div>

              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-calendar-check me-1"></i>To Date</label>
                <input type="date" class="form-control" required>
              </div>

              <div class="col-12">
                <label class="form-label"><i class="bi bi-pencil-square me-1"></i>Reason</label>
                <textarea class="form-control" rows="3" placeholder="Write your reason here..." required></textarea>
              </div>

              <div class="col-12 mt-3">
                <button type="submit" class="btn btn-outline-primary w-100">
                  <i class="bi bi-send-check me-1"></i>Submit Request
                </button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script>
    gsap.from("#formCard", {
      opacity: 0,
      y: 60,
      duration: 1,
      ease: "power2.out"
    });
  </script>
</body>
</html>
