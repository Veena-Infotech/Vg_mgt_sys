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
    <title>Payment</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
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
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <?php include '../../Components/navbar.php'; ?>
        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                navbarDefault?.remove();
                navbarVertical?.remove();
                dualNav.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'dual');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                navbarVertical?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTopSlim.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarTopSlim?.remove();
                dualNav?.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                topNavSlim?.remove();
                navbarVertical?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTop.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarDefault?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'combo');
            } else {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
            }
        </script>

        <?php
include '../PhpFiles/connection.php';

$meeting_id = $_GET['meeting_id'] ?? 0;

$query = "SELECT mh.amount, v.id AS visitor_id, c.f_name, c.l_name
          FROM tbl_meeting_history mh
          JOIN tbl_visitor v ON mh.visitor_id = v.id
          JOIN tbl_client c ON v.reference_id = c.id
          WHERE mh.id = $meeting_id";

$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

        <div class="content d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="container mb-4" style="max-width: 480px;">
                <div class="card shadow-sm border-0 rounded-4 w-100">
                    <div class="card-header bg-primary text-white rounded-top-4 text-center py-3">
                        <h3 class="mb-0 fw-bold" style="font-size: 1.8rem;">Payment Details</h3>
                    </div>
                    <div class="card-body px-4 py-4">

                        <!-- User info -->
                        <div class="mb-4 text-center">
                            <h4 class="fw-bold mb-1" id="userName" style="font-size: 1.4rem;">John Doe</h4>
                            <p class="text-muted mb-1" id="paymentDate" style="font-size: 1rem;">Date: 2025-06-05</p>
                            <p class="text-muted mb-3" id="paymentTime" style="font-size: 1rem;">Time: 14:30</p>
                        </div>

                        <!-- QR Code -->
                        <div class="d-flex justify-content-center my-3">
                            <div id="qrCode"></div>
                        </div>

                        <!-- Amount to pay -->
                        <div class="mb-4 text-center">
                            <h5 class="text-uppercase mb-2" style="color:rgb(168, 168, 168); font-size: 1.1rem;">Amount to Pay
                            </h5>
                            <p class="fw-bold text-primary" id="paymentAmount" style="font-size: 2.5rem;">₹ 1500</p>
                        </div>

                        
            <!-- Paid By Cash -->
<form action="../PhpFiles/make_payment.php" method="POST" class="mb-2">
    <input type="hidden" name="meeting_id" value="<?php echo htmlspecialchars($meeting_id); ?>">
    <input type="hidden" name="amount" value="<?php echo htmlspecialchars($data['amount']); ?>">
    <input type="hidden" name="type" value="Cash">
    <button type="submit" class="btn btn-primary btn-lg rounded-pill w-100 fw-bold">Paid By Cash</button>
</form>

<!-- Row for Payment Denied and Success -->
<div class="row g-2">
    <!-- Payment Denied -->
    <div class="col-6">
        <form action="../PhpFiles/make_payment.php" method="POST">
            <input type="hidden" name="meeting_id" value="<?php echo htmlspecialchars($meeting_id); ?>">
            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($data['amount']); ?>">
            <input type="hidden" name="type" value="Denied">
            <button type="submit" class="btn btn-danger btn-lg rounded-pill w-100 fw-bold">Payment Denied</button>
        </form>
    </div>

    <!-- Payment Success -->
    <div class="col-6">
        <form action="../PhpFiles/make_payment.php" method="POST">
            <input type="hidden" name="meeting_id" value="<?php echo htmlspecialchars($meeting_id); ?>">
            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($data['amount']); ?>">
            <input type="hidden" name="type" value="Online">
            <button type="submit" class="btn btn-success btn-lg rounded-pill w-100 fw-bold">Payment Success</button>
        </form>
    </div>
</div>




                    </div>
                </div>
            </div>

            <?php include("../../Components/footer.php"); ?>
        </div>







    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->

    <!-- ===============================================-->
    <!--Dropdown for contacted-to--->

    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/leaflet/leaflet.js"></script>
    <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../assets/js/ecommerce-dashboard.js"></script>


    <!-- Add this library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const upiId = '7666491809@fam'; // replace with your real UPI ID
            const payeeName = 'The Veena Group';
            
            const currency = 'INR';

            const upiUri = `upi://pay?pa=${encodeURIComponent(upiId)}&pn=${encodeURIComponent(payeeName)}&am=${encodeURIComponent(amount)}&cu=${encodeURIComponent(currency)}`;

            // Generate QR Code
            new QRCode(document.getElementById("qrCode"), {
                text: upiUri,
                width: 200,
                height: 200,
                correctLevel: QRCode.CorrectLevel.H
            });
        });
    </script>

    <script>
    const meetingId = <?php echo json_encode($meeting_id); ?>;
    const amount = <?php echo json_encode($data['amount']); ?>;
    const userName = <?php echo json_encode($data['f_name'] . ' ' . $data['l_name']); ?>;
</script>

    
        <script>
    document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("userName").innerText = userName;
    document.getElementById("paymentAmount").innerText = "₹ " + amount;

    const now = new Date();
    document.getElementById("paymentDate").innerText = "Date: " + now.toLocaleDateString();
    document.getElementById("paymentTime").innerText = "Time: " + now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    function handlePayment(paymentType) {
        fetch("../PhpFiles/make_payment.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/JSON"
            },
            body: new URLSearchParams({
                meeting_id: meetingId,
                payment_type: paymentType,
                amount: amount
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert("Payment recorded as " + paymentType);
            } else {
                alert("Error: " + data.error);
            }
        });
    }

    document.querySelector(".btn-primary").addEventListener("click", () => handlePayment("Cash"));
    document.querySelector(".btn-success").addEventListener("click", () => handlePayment("Online"));
    document.querySelector(".btn-danger").addEventListener("click", () => alert("Payment Denied"));
});

</script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





</body>




</html>