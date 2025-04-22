<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vertical Wizard Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: none;
      padding: 40px;
    }

    .form-step {
      display: none;
    }

    .form-step.active {
      display: block;
      animation: fadeIn 0.3s ease-in-out;
    }

    .step-indicator {
      list-style: none;
      padding-left: 0;
    }

    .step-indicator li {
      padding: 10px 15px;
      background-color: #e0e0e0;
      border-left: 5px solid transparent;
      margin-bottom: 5px;
      cursor: pointer;
    }

    .step-indicator li.active {
      background-color:#0b5ed7;
      color: white;
      border-left: 5px solid #0b5ed7;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center text-primary mb-4">Vertical Multi-Step Wizard Form</h2>
  <div class="row">
    <!-- Step Labels -->
    <div class="col-md-3">
      <ul class="step-indicator">
        <li class="active">Account Info</li>
        <li>Personal Info</li>
        <li>Contact Info</li>
        <li>Credentials</li>
        <li>Education</li>
      </ul>
    </div>

    <!-- Step Content -->
    <div class="col-md-9">
      <form id="wizardForm">

        <!-- Step 1 -->
        <div class="form-step active">
          <h4 class="mb-3">1. Account Information</h4>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">Middle Name</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">K Number</label>
              <input type="text" class="form-control" required />
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="form-step">
          <h4 class="mb-3">2. Personal Information</h4>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Gender</label>
              <select class="form-select" required>
                <option disabled selected>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Date of Birth</label>
              <input type="date" class="form-control" required />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary prev-step">Back</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="form-step">
          <h4 class="mb-3">3. Contact Information</h4>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Primary Email</label>
              <input type="email" class="form-control" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">Alternate Email</label>
              <input type="email" class="form-control" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Phone Number</label>
              <input type="tel" class="form-control" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">Alternate Phone Number</label>
              <input type="tel" class="form-control" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Position</label>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-6">
              <label class="form-label">Department</label>
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary prev-step">Back</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="form-step">
          <h4 class="mb-3">4. Credentials</h4>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">GitHub Email</label>
              <input type="email" class="form-control" />
            </div>
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" required />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary prev-step">Back</button>
            <button type="button" class="btn btn-primary next-step">Next</button>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="form-step">
          <h4 class="mb-3">5. Education</h4>
          <div class="mb-3">
            <label class="form-label">Education Email</label>
            <input type="email" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Education Password</label>
            <input type="password" class="form-control" required />
          </div>
          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary prev-step">Back</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<script>
  const steps = document.querySelectorAll('.form-step');
  const indicators = document.querySelectorAll('.step-indicator li');
  let currentStep = 0;

  function showStep(step) {
    steps.forEach((s, i) => {
      s.classList.toggle('active', i === step);
      indicators[i].classList.toggle('active', i === step);
    });
  }

  document.querySelectorAll('.next-step').forEach(button => {
    button.addEventListener('click', () => {
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      }
    });
  });

  document.querySelectorAll('.prev-step').forEach(button => {
    button.addEventListener('click', () => {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    });
  });

  document.getElementById('wizardForm').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Form submitted successfully!');
    currentStep = 0;
    showStep(currentStep);
  });

  // Initialize
  showStep(currentStep);
</script>

</body>
</html>
