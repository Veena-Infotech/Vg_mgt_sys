<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-body d-flex align-items-center justify-content-center min-vh-100 position-relative overflow-hidden">

  <!-- Full-page background image -->
  <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
    <div class="bg-holder bg-auth-card-overlay w-100 h-100" style="background-image: url('assets/images/portfolio-1.jpg'); background-size: cover; background-position: center; filter: blur(4px);"></div>
  </div>
  <div class="container z-1 position-relative">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-9">
        <div class="card border-0 shadow-lg overflow-hidden">
          <div class="row g-0">
            <!-- Left Side -->
            <div class="col-md-6 d-none d-md-flex bg-primary-subtle text-primary-emphasis flex-column justify-content-center p-5">
              <div>
                <h2 class="fw-bold mb-4">Veena Group Access Hub</h2>
                <p class="mb-4">Whether you're driving innovation with us or expanding your vision — this is where your journey moves forward.</p>
                <ul class="list-unstyled fw-semibold">
                  <li class="mb-2">✔ Innovative</li>
                  <li class="mb-2">✔ Reliable</li>
                  <li>✔ Secure</li>
                </ul>
              </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-6 bg-body d-flex flex-column justify-content-center p-4 p-md-5">
              <div class="text-center mb-4">
                <img src="assets/images/logo.png" alt="phoenix" class="img-fluid mb-3" style="max-height: 60px;" />
                <h3 class="text-body-highlight fw-bold">Sign In</h3>
                <p class="text-body-secondary">Get access to your account</p>
              </div>

              <hr class="mb-4" />

              <form method="POST" action="Admin/php/login.php">

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" />
                  <label for="floatingEmail">Email address</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="d-grid mb-3">
                  <button class="btn btn-primary btn-lg" type="submit">Login</button>

                </div>

                <!-- Optional links -->
                <!-- <div class="text-center">
                  <a href="#" class="small">Forgot Password?</a> |
                  <a href="#" class="small">Create Account</a>
                </div> -->
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- GSAP Animations -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script>
    gsap.from(".card", {
      duration: 1,
      opacity: 0,
      y: 50,
      ease: "power3.out"
    });
    gsap.from(".bg-primary-subtle", {
      duration: 1,
      x: -100,
      opacity: 0,
      delay: 0.3,
      ease: "power2.out"
    });
    gsap.from(".bg-body", {
      duration: 1,
      x: 100,
      opacity: 0,
      delay: 0.4,
      ease: "power2.out"
    });
  </script>

</body>

</html>