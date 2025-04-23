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


    <body>

    <div class="content-body">

        <div class="container-fluid">
            <h3 class="mb-4"><strong>Receptionist Dashboard</strong></h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="card-title mb-1">Meeting Schedule</h4>
                                <h5 class="mb-3">11 April 2025</h5>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="searchInput" placeholder="Search meetings...">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th style="width:80px;"><strong>#</strong></th>
                                            <th><strong>Visitor</strong></th>
                                            <th><strong>Employee</strong></th>
                                            <th><strong>Meeting Purpose</strong></th>
                                            <th><strong>Time</strong></th>
                                            <th><strong>Status</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>01</strong></td>
                                            <td>Mr. Aakash</td>
                                            <td>Mr. Raj</td>
                                            <td>Official Visit</td>
                                            <td>1.00 PM</td>
                                            <td><span class="badge light badge-success">In-progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="min-width: 150px;">
                                                        <li><a class="dropdown-item" href="#">Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                                        <li><a class="dropdown-item" href="#">Reschedule</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>02</strong></td>
                                            <td>Mr. Vijay</td>
                                            <td>Mr. Kartik</td>
                                            <td>Performance Review</td>
                                            <td>2.00 PM</td>
                                            <td><span class="badge light badge-success">In-progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="min-width: 150px;">
                                                        <li><a class="dropdown-item" href="#">Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                                        <li><a class="dropdown-item" href="#">Reschedule</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>03</strong></td>
                                            <td>Mr. Rajat</td>
                                            <td>Mr. Yashraj</td>
                                            <td>Business Discussion</td>
                                            <td>3.00 PM</td>
                                            <td><span class="badge light badge-warning">Waiting</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="min-width: 150px;">
                                                        <li><a class="dropdown-item" href="#">Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                                        <li><a class="dropdown-item" href="#">Reschedule</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>04</strong></td>
                                            <td>Mr. Aakash</td>
                                            <td>Mr. Raj</td>
                                            <td>Official Visit</td>
                                            <td>4.00 PM</td>
                                            <td><span class="badge light badge-warning">Waiting</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="min-width: 150px;">
                                                        <li><a class="dropdown-item" href="#">Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                                        <li><a class="dropdown-item" href="#">Reschedule</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    // Fade in title and subtitle
    gsap.from(["h3", "h4", "h5"], {
        opacity: 0,
        y: 20,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out"
    });

    // Animate the card (Receptionist Dashboard)
    gsap.from(".card", {
        opacity: 0,
        scale: 0.98,
        duration: 0.8,
        delay: 1,
        ease: "power2.out"
    });

    // Animate table rows (slightly slower)
    const rowDelay = 1.9;
    const rowDuration = 0.6;
    const rowStagger = 0.3;
    const rowCount = document.querySelectorAll(".table tbody tr").length;
    const totalRowTime = rowDuration + rowStagger * (rowCount - 1);

    gsap.from(".table tbody tr", {
        opacity: 0,
        y: 30,
        duration: rowDuration,
        delay: rowDelay,
        stagger: rowStagger,
        ease: "power1.out"
    });

    const afterRowsDelay = rowDelay + totalRowTime;

    // Animate meeting schedule (quick after rows)
    gsap.from(".card-header", {
        opacity: 0,
        y: 20,
        duration: 0.6,
        delay: afterRowsDelay + 0.2,
        ease: "power2.out"
    });

    // Animate search box shortly after meeting schedule
    gsap.from("#searchInput", {
        opacity: 0,
        x: 30,
        duration: 0.6,
        delay: afterRowsDelay + 0.9,
        ease: "power2.out"
    });

    // Animate badges based on status
    gsap.from(".badge", {
        opacity: 0,
        scale: 0.8,
        duration: 0.6,
        stagger: 0.2,
        delay: afterRowsDelay + 1.4,
        ease: "power1.out",
        backgroundColor: "#d3d3d3",
        to: { backgroundColor: "#76c7c0" },
        onStart: function () {
            const badges = document.querySelectorAll('.badge');
            badges.forEach(badge => {
                if (badge.textContent.includes("In-progress")) {
                    gsap.to(badge, { backgroundColor: "#28a745", duration: 0.4 });
                } else if (badge.textContent.includes("Waiting")) {
                    gsap.to(badge, { backgroundColor: "#ffc107", duration: 0.4 });
                }
            });
        }
    });

    // Instant hover effect with GSAP using grey border (no background change)
    const rows = document.querySelectorAll(".table tbody tr");
    rows.forEach(row => {
        row.addEventListener("mouseenter", () => {
            gsap.set(row, {
                boxShadow: "0 0 10px 2px grey"  // Grey border on hover
            });
        });
        row.addEventListener("mouseleave", () => {
            gsap.set(row, {
                boxShadow: "none"  // Remove the grey border when not hovering
            });
        });
    });
</script> 



</body>
  </html>