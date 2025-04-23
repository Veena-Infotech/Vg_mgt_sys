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
  <script src="assets/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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

 <style>
    .content-body {
        background-color: #f8f9fa;
        padding-top: 0rem;
    }

    input.form-control,
    textarea.form-control,
    select.form-select {
        border: 1px solid #495057;
        /* Darker border */
        box-shadow: none;
    }

    input.form-control:focus,
    textarea.form-control:focus,
    select.form-select:focus {
        border-color: #495057;
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
        /* Subtle focus */
    }

    #video,
    #capturedImage {
        width: 160px;
        height: 120px;
        object-fit: cover;
    }
</style> 

<body>
 <div class="content-body" onload="startcamera()" style="padding-top:  0rem;">
        
        <div class="Col-lg-12">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                            <div class="d-flex justify-content-center">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab"
                                        class="nav-link active show">New Registration</a>
                                    </li>
                                    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab"
                                        class="nav-link">Existing Registration</a>
                                    </li>
                                </ul>
                            </div>
                                <div class="tab-content">
                                    <div id="my-posts" class="tab-pane fade active show">
                                        <div class="container mt-5">
                                            <div class="row justify-content-center">
                                                <div class="col-md-7">
                                                    <div class="card border-0 shadow-lg rounded-4 bg-white" style="min-height: 600px;">
                                                        <div class="card-body p-5">
                                                            <h3 class="text-center mb-4 text-primary fw-bold">New Visitor Registration</h3>
                                                            <form>
                                                                <div class="form-floating mb-4">
                                                                    <input type="text" class="form-control rounded-3" id="name" placeholder="John Doe" required style="border: 1px solid #dcdcdc;">
                                                
                                                                    <label for="name">Full Name</label>
                                                                    <span class="fas fa-user position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></span>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <input type="email" class="form-control rounded-3" id="email" placeholder="johndoe@example.com" required style="border: 1px solid #dcdcdc;">
                                                                    <label for="email">Email</label>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <input type="tel" class="form-control rounded-3" id="phone" placeholder="123-456-7890" required style="border: 1px solid #dcdcdc;">
                                                                    <label for="phone">Phone Number</label>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <select class="form-select rounded-3" id="whomToMeet" required style="border: 1px solid #dcdcdc;">
                                                                    <option selected disabled>Choose...</option>
                                                                    <option value="1">Manager</option>
                                                                    <option value="2">HR</option>
                                                                    <option value="3">Receptionist</option>
                                                                    </select>
                                                                    <label for="whomToMeet">Whom to Meet?</label>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <textarea class="form-control rounded-3" placeholder="Reason for meeting" id="reason" style="height: 200px; border: 1px solid #dcdcdc;" required></textarea>
                                                                    <label for="reason">Reason to Meet</label>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <label class="d-block mb-2">Capture Image</label>
                                                                    <div class="row justify-content-center align-items-start text-center">
                                                                    <div class="col-auto">
                                                                    <video id="video" class="border rounded-3 shadow-sm"></video>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm mt-2" id="captureBtn">Capture</button>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <img id="capturedImage" class="rounded-3 d-none border mt-md-0 mt-2" alt="Captured Image">
                                                                </div>
                                                                </div>
                                                                    <canvas id="canvas" class="d-none"></canvas>
                                                                </div>
                                                                <div class="d-grid">
                                                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">Register</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="about-me" class="tab-pane fade"> 
                                        <div class="container mt-5">
                                            <div class="row justify-content-center">
                                            <div class="col-md-7">
                                                <div class="card border-0 shadow-lg rounded-4 bg-white" style="min-height: 600px;">
                                                    <div class="card-body p-5">
                                                        <h3 class="text-center mb-4 text-primary fw-bold">Existing Visitor Registration</h3>
                                                        <form>
                                                                <div class="form-floating mb-4">
                                                                    <select class="form-select rounded-3" id="visitorName" required style="border: 1px solid #dcdcdc;">
                                                                        <option selected disabled>Choose...</option>
                                                                        <option value="Mr Aakash">Mr Aakash</option>
                                                                        <option value="Mr Kartik">Mr Kartik</option>
                                                                        <option value="Mr Omkar">Mr Omkar</option>
                                                                    </select>
                                                                    <label for="visitorName">Visitors</label>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <select class="form-select rounded-3" id="whomToMeet" required style="border: 1px solid #dcdcdc;">
                                                                        <option selected disabled>Choose...</option>
                                                                        <option value="1">Manager</option>
                                                                        <option value="2">HR</option>
                                                                        <option value="3">Receptionist</option>
                                                                    </select>
                                                                    <label for="whomToMeet">Whom to Meet?</label>
                                                                </div>
                                                                <div class="form-floating mb-4">
                                                                    <textarea class="form-control rounded-3" placeholder="Reason for meeting" id="reason" style="height: 200px; border: 1px solid #dcdcdc;" required></textarea>
                                                                    <label for="reason">Reason to Meet</label>
                                                                </div>
                                                                <div class="d-grid">
                                                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">Update</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById("video");
            const canvas = document.getElementById("canvas");
            const captureBtn = document.getElementById("captureBtn");
            const capturedImage = document.getElementById("capturedImage");
            let stream = null;

            // Function to start the camera
            async function startCamera() {
                try {
                    stream = await navigator.mediaDevices.getUserMedia({
                        video: true
                    });
                    video.srcObject = stream;
                    video.play();
                } catch (error) {
                    console.error("Camera Error: ", error);
                    alert("Camera access denied! Enable it in browser settings.");
                }
            }

            // Capture Image
            captureBtn.addEventListener("click", function() {
                if (!stream) {
                    alert("Camera not started. Please allow access.");
                    return;
                }

                const context = canvas.getContext("2d");
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                // Convert captured image to base64
                const imageDataUrl = canvas.toDataURL("image/png");

                // Display captured image
                capturedImage.src = imageDataUrl;
                capturedImage.classList.remove("d-none");
            });

            // Start camera when the page loads
            startCamera();
        });
    </script> 
    <script src="vendors/popper/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/anchorjs/anchor.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="vendors/lodash/lodash.min.js"></script>
  <script src="vendors/list.js/list.min.js"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script src="vendors/dayjs/dayjs.min.js"></script>
  <script src="assets/js/phoenix.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script>
    function animateSection(sectionId) {
        const tabLinks = document.querySelectorAll(".nav-tabs .nav-link");
        tabLinks.forEach(tab => tab.style.opacity = 0); // Hide individual tabs

        const tl = gsap.timeline({
            onComplete: () => {
                // Animate each tab link one by one after form animation
                gsap.fromTo(".nav-tabs .nav-link", {
                    opacity: 0,
                    y: 10
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.3,
                    ease: "power2.out"
                });
            }
        });

        // Animate card body
        tl.from(`${sectionId} .card-body`, {
            opacity: 0,
            scale: 0.8,
            duration: 1.0,
            ease: "power2.out",
        }, 0);

        // Animate form inputs
        tl.from(`${sectionId} .form-floating`, {
            opacity: 0,
            y: 20,
            duration: 0.8,
            stagger: 0.2,
            delay: 0.3,
            ease: "power2.out",
        }, 0.8);

        // Animate button
        tl.from(`${sectionId} .d-grid button`, {
            opacity: 0,
            y: 30,
            duration: 0.6,
            delay: 0.2,
            ease: "power2.out",
        }, 1.5);
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Hide tab links initially
        document.querySelectorAll(".nav-tabs .nav-link").forEach(tab => {
            tab.style.opacity = 0;
        });

        // Animate the currently visible form on load
        if (document.querySelector("#my-posts").classList.contains("show")) {
            animateSection("#my-posts");
        } else if (document.querySelector("#about-me").classList.contains("show")) {
            animateSection("#about-me");
        }

        // Animate on tab change
        const tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');
        tabLinks.forEach(link => {
            link.addEventListener("shown.bs.tab", function (e) {
                const targetId = e.target.getAttribute("href");
                animateSection(targetId);
            });
        });
    });
</script>



</body>