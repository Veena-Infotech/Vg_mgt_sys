<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Registration</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 40px 0;
      background: linear-gradient(135deg, #d0f0ff, #ffffff);
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      min-height: 100vh;
      overflow-y: auto;
    }

    .form-container {
      background: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 1000px;
      opacity: 0;
      transform: translateY(50px);
      margin: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #0077b6;
      opacity: 0;
    }

    .form-row {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .form-row .form-group {
      flex: 1 1 48%;
      display: flex;
      flex-direction: column;
      opacity: 0;
      margin-bottom: 20px;
    }

    .form-group{
        /* gap: 10px; */
        margin-left: 10px;
    }

    .form-group label {
      font-weight: 600;
      margin-bottom: 5px;
      color: #333;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus {
      border-color: #0077b6;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #0077b6;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transform: scale(1);
    }

    button:hover {
      background-color: #005f86;
    }

    .success-msg {
      display: none;
      text-align: center;
      margin-top: 10px;
      font-weight: bold;
      color: green;
    }

    @media (max-width: 600px) {
      .form-row .form-group {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>

  <div class="form-container" id="formContainer">
    <h2 id="formTitle">Employee Registration</h2>
    <form id="employeeForm">
      
      <div class="form-row">
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input type="text" id="fullName" name="fullName" required>
        </div>
        <div class="form-group">
          <label for="position">Position</label>
          <input type="text" id="position" name="position" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="email">Primary Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="alternate_email">Alternate Email</label>
          <input type="email" id="alternate_email" name="alternate_email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="github_email">GitHub Email (For VI)</label>
          <input type="email" id="github_email" name="github_email" required>
        </div>
        <div class="form-group">
          <label for="department">Department</label>
          <select id="department" name="department" required>
            <option value="">-- Select Department --</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option>
            <option value="IT">IT</option>
            <option value="Sales">Sales</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
          <label for="alternate_phone">Alternate Phone Number</label>
          <input type="tel" id="alternate_phone" name="alternate_phone" pattern="[0-9]{10}" required>
        </div>
      </div>

      <div class="form-group" style="opacity: 0;">
        <button type="submit" id="submitBtn">Register</button>
      </div>
    </form>
    <div class="success-msg" id="successMsg">Employee registered successfully!</div>
  </div>

  <script>
    // Animate form container
    gsap.to("#formContainer", {
      duration: 1,
      opacity: 1,
      y: 0,
      ease: "power3.out"
    });

    // Animate title
    gsap.to("#formTitle", {
      delay: 0.5,
      duration: 1,
      opacity: 1,
      y: -10,
      ease: "power2.out"
    });

    // Animate each form-group inside rows
    gsap.to(".form-group", {
      delay: 0.7,
      duration: 1,
      opacity: 1,
      y: -10,
      stagger: 0.15,
      ease: "power2.out"
    });

    // Button hover effect using GSAP
    const btn = document.getElementById("submitBtn");
    btn.addEventListener("mouseenter", () => {
      gsap.to(btn, { scale: 1.05, duration: 0.2 });
    });
    btn.addEventListener("mouseleave", () => {
      gsap.to(btn, { scale: 1, duration: 0.2 });
    });

    // Form submission animation
    document.getElementById("employeeForm").addEventListener("submit", function(e) {
      e.preventDefault();

      gsap.to("#formContainer", {
        duration: 0.4,
        y: -10,
        scale: 1.01,
        yoyo: true,
        repeat: 1,
        ease: "power1.inOut",
        onComplete: () => {
          document.getElementById("successMsg").style.display = "block";
          this.reset();
        }
      });
    });
  </script>

</body>
</html>
