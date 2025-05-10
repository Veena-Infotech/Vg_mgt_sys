<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Phoenix</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="vendors/simplebar/simplebar.min.js"></script>
  <script src="../../assets/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <style>
    .step {
      display: none;
    }

    .step.active {
      display: block;
    }
  </style>
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
    <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
      <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../..assets/img/bg/37.png);"></div>
      <!--/.bg-holder-->
      <div class="row flex-center position-relative min-vh-100 g-0 py-5">
        <div class="col-11 col-sm-10 col-xl-8">
          <div class="card border border-translucent auth-card">
            <div class="card-body pe-md-0">
              <div class="row align-items-center gx-0 gy-7">
                <div
                  class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                  <div class="bg-holder" style="background-image:url(../../assets/img/bg/38.png);"></div>
                  <!--/.bg-holder-->
                  <div
                    class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                    <h3 class="mb-3 text-body-emphasis fs-7">Veena Group Access Hub</h3>
                    <p class="text-body-tertiary">Whether you're driving innovation with us or
                      expanding your vision —
                      this is where your journey moves forward.</p>
                    <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                      <li class="d-flex align-items-center"><span
                          class="uil uil-check-circle text-success me-2"></span><span
                          class="text-body-tertiary fw-semibold">Innovative</span></li>
                      <li class="d-flex align-items-center"><span
                          class="uil uil-check-circle text-success me-2"></span><span
                          class="text-body-tertiary fw-semibold">Reliable</span></li>
                      <li class="d-flex align-items-center"><span
                          class="uil uil-check-circle text-success me-2"></span><span
                          class="text-body-tertiary fw-semibold">Secure</span></li>
                    </ul>
                  </div>
                  <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img
                      class="auth-title-box-img d-dark-none"
                      src="../../assets/img/spot-illustrations/auth.png" alt="" /><img
                      class="auth-title-box-img d-light-none"
                      src="../../assets/img/spot-illustrations/auth-dark.png" alt="" /></div>
                </div>
                <div class="col mx-auto">
                  <div class="auth-form-box p-4 text-center rounded shadow">
                    <div class="text-center mb-1"><a
                        class="d-flex flex-center text-decoration-none mb-4" href="index.html">
                        <div class="w-300" style="max-width: 300px;">
                          <img src="../../assets/img/logos/logo.png" alt="phoenix"
                            class="img-fluid" />
                        </div>
                      </a>
                    </div>
                    <div class="text-center">
                      <h4 class="text-body-highlight mb-1">Forgot your password?</h4>
                      <hr class="hr">
                      <br>
                    </div>

                    <!-- STEP 1: Email -->
                    <div class="step active" id="step1">
                      <p class="text-body-tertiary mb-4">
                        "Select a name and an OTP will be sent to that email"
                      </p>
                      <div class="mb-3">
                        <select class="form-select" id="nameDropdown">
                          <option selected disabled>Select Name</option>

                          <?php
                          include '../PhpFiles/connection.php'; // your DB connection

                          $sql = "SELECT * FROM tbl_emp";
                          $result = $conn->query($sql);

                          if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo '<option value="' . htmlspecialchars($row['official_email']) . '">' . htmlspecialchars($row['f_name']) . '</option>';
                            }
                          } else {
                            echo '<option disabled>No employees found</option>';
                          }


                          ?>
                        </select>
                      </div>
                      <button class="btn btn-primary w-100" onclick="sendOTP()">Send OTP</button>
                    </div>

                    <!-- STEP 2: OTP -->
                    <div class="step" id="step2">
                      <p class="text-body-tertiary mb-4">"Please enter the OTP sent to your email"
                      </p>
                      <input class="form-control mb-3" id="otpInput" type="text" placeholder="Enter OTP" />
                      <button class="btn btn-primary w-100" onclick="verifyOTP()">Verify OTP</button>



                    </div>

                    <!-- STEP 3: New Password -->
                    <div class="step" id="step3">
                      <p class="text-body-tertiary mb-4">"Create your new password"</p>
                      <input id="newPassword" class="form-control mb-3" type="password" placeholder="New Password" />
                      <input id="confirmPassword" class="form-control mb-3" type="password" placeholder="Confirm Password" />
                      <button class="btn btn-success w-100" onclick="resetPassword()">Reset Password</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->


  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/popper/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/anchorjs/anchor.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="vendors/lodash/lodash.min.js"></script>
  <script src="vendors/list.js/list.min.js"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script src="vendors/dayjs/dayjs.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script>
    let currentStep = 1;

    function goToStep(stepNum) {
      const current = document.querySelector(`#step${currentStep}`);
      const next = document.querySelector(`#step${stepNum}`);

      // Animate current step out
      gsap.to(current, {
        opacity: 0,
        y: -20,
        duration: 0.4,
        onComplete: () => {
          current.classList.remove('active');
          current.style.opacity = 1;
          current.style.transform = '';

          // Show next step
          next.classList.add('active');
          gsap.fromTo(next, {
            opacity: 0,
            y: 20
          }, {
            opacity: 1,
            y: 0,
            duration: 0.5
          });

          currentStep = stepNum;
        }
      });
    }
  </script>
  <script>
    // Existing goToStep function stays unchanged...

    window.addEventListener('DOMContentLoaded', () => {
      // Main card zoom-in
      gsap.from(".auth-card", {
        scale: 0.8,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
      });

      // Logo zoom-in
      gsap.from(".auth-form-box img", {
        scale: 0,
        opacity: 0,
        delay: 0.2,
        duration: 0.8,
        ease: "back.out(1.7)"
      });

      // Auth heading and paragraph
      gsap.from(".auth-title-box h3, .auth-title-box p", {
        x: -50,
        opacity: 0,
        delay: 0.4,
        duration: 0.8,
        stagger: 0.2,
        ease: "power3.out"
      });

      // List items with checkmarks
      gsap.from(".auth-title-box li", {
        x: -30,
        opacity: 0,
        delay: 0.6,
        duration: 0.6,
        stagger: 0.15,
        ease: "power2.out"
      });

      // Step-wise container fade-in
      gsap.from(".step", {
        opacity: 0,
        y: 20,
        duration: 0.6,
        delay: 0.8,
        ease: "power2.out"
      });

      // Animate all form inputs
      gsap.from("input.form-control", {
        opacity: 0,
        y: 20,
        delay: 0.9,
        duration: 0.4,
        stagger: 0.1,
        ease: "power2.out"
      });

      // Animate all form icons
      gsap.from(".form-icon", {
        opacity: 0,
        scale: 0.3,
        delay: 1.1,
        duration: 0.4,
        stagger: 0.1,
        ease: "back.out(1.7)"
      });

      // Animate labels and spans
      gsap.from("label, span", {
        opacity: 0,
        y: 10,
        delay: 1.2,
        duration: 0.4,
        stagger: 0.1,
        ease: "power2.out"
      });

      // Animate all buttons
      gsap.from("button", {
        opacity: 0,
        scale: 0.95,
        delay: 1.3,
        duration: 0.4,
        stagger: 0.2,
        ease: "back.out(1.4)"
      });

      // Animate the background image containers
      gsap.from(".bg-holder", {
        opacity: 0,
        scale: 1.05,
        duration: 1.2,
        ease: "power1.out"
      });
    });

    document.getElementById('nameDropdown').addEventListener('change', function() {
      const name = this.value;

      fetch('get_email.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'name=' + encodeURIComponent(name)
        })
        .then(response => response.text())
        .then(email => {
          // document.getElementById('nameDropdown').value = email;

          // Automatically trigger sending the OTP (optional)
          sendOTP();
          console.log(email);
        })
        .catch(error => {
          console.error('Error fetching email:', error);
        });
    });

    function verifyOTP() {
      const otp = document.getElementById("otpInput").value;

      fetch('verify_otp.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'otp=' + encodeURIComponent(otp)
        })
        .then(response => response.text())
        .then(result => {
          if (result.trim() === 'success') {
            goToStep(3);
          } else if (result.trim() === 'expired') {
            alert("OTP expired. Please try again.");
          } else {
            alert("Invalid OTP. Please try again.");
          }
        });
    }


    // Send OTP to the fetched email
    function sendOTP() {
      const email = document.getElementById('nameDropdown').value;

      if (!email) {
        alert('Please select a name to get an email address first.');
        return;
      }

      fetch('send_otp.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'email=' + encodeURIComponent(email)
        })
        .then(response => response.text())
        .then(message => {
          alert('OTP sent Successfully')
          goToStep(2);
        })
        .catch(error => {
          console.error('Error sending OTP:', error);
        });
    }


    function resetPassword() {
      const newPassword = document.getElementById('newPassword').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      if (newPassword !== confirmPassword) {
        alert("Passwords do not match.");
        return;
      }

      if (newPassword.length < 6) {
        alert("Password must be at least 6 characters.");
        return;
      }

      fetch('reset_password.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'password=' + encodeURIComponent(newPassword)
        })
        .then(response => response.text())
        .then(result => {
          if (result.trim() === 'success') {
            alert("Password successfully reset!");
            // Optionally redirect to login
          } else {
            alert("Error resetting password: " + result);
          }
        });
    }
  </script>

</body>

</html>