<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Starter code</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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
    <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    

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
                                            <td><span class="badge bg-success text-white">In-progress</span></td>
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
                                            <td><span class="badge bg-success text-white">In-progress</span></td>
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
                                            <td><span class="badge bg-warning text-dark">Waiting</span></td>
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
                                            <td><span class="badge bg-warning text-dark">Waiting</span></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
     <script>

document.getElementById('searchInput').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const rowText = row.innerText.toLowerCase();
            row.style.display = rowText.includes(filter) ? '' : 'none';
        });
    });

    // Wait until the DOM is fully loaded before applying animations
    document.addEventListener("DOMContentLoaded", function() {
        // Animate the title "Receptionist Dashboard" from the bottom
        gsap.from(".content-body h3", {
            opacity: 0,
            y: 30,  // Changes to appear from below
            duration: 1,
            ease: "power3.out"
        });

        // Animate each row appearing one by one with a delay
        const rows = document.querySelectorAll("tbody tr");
        rows.forEach((row, index) => {
            gsap.from(row, {
                opacity: 0,
                y: 20,
                duration: 0.6,
                delay: index * 0.3, // Adds delay between each row
                ease: "power3.out"
            });
        });

        // Animate the "Meeting Schedule" text and date from below
        gsap.from(".card-header h4, .card-header h5", {
            opacity: 0,
            y: 30,  // Changes to appear from below
            duration: 1,
            delay: rows.length * 0.3 + 1, // Delay to show after rows
            ease: "power3.out"
        });

        // Animate the "Search Input" box
        gsap.from("#searchInput", {
            opacity: 0,
            x: -50,
            duration: 1,
            delay: rows.length * 0.3 + 1.2, // Delay to show after "Meeting Schedule"
            ease: "power3.out"
        });
    });
</script>

</body>
  </html>