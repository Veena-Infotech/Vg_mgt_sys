<?php
include '../PhpFiles/connection.php';

?>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>




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
        <div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card visitor">
                            <div class="card-body">
                                <h1 class="mb-4 fw-bold">Lobby Management</h1>

                                <div class="row g-4">
                                    <!-- Waiting Queue -->
                                    <?php
                                    // Fetch all scheduled meetings
                                    $sql = "SELECT 
                                            m.id, m.emp_id AS meeting_id, 
                                            CONCAT(v.f_name, ' ', v.l_name) AS visitor_name, 
                                            CONCAT(e.f_name, ' ', e.m_name, ' ', e.l_name) AS employee_name
                                            FROM tbl_meeting_history m
                                            JOIN tbl_visitor v ON m.visitor_id = v.id
                                            JOIN tbl_emp e ON m.emp_id = e.id
                                            WHERE m.meeting_status = 'Scheduled'";


                                    $result = $conn->query($sql);
                                    ?>

                                    <div class="col-md-3">
                                        <h4>Waiting Queue</h4>
                                        <div style="height: 400px; overflow-y: auto;">
                                        <div class="d-flex flex-column gap-1" id="waiting-queue">
                                            <?php
                                            if ($result && $result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    // Customize display content as needed
                                                    $visitorName = htmlspecialchars($row['visitor_name']);
                                                    $employeeName = htmlspecialchars($row['employee_name']); // assuming you have this or join it
                                                    $meetingInfo = "$visitorName : Meeting with $employeeName";

                                                    echo '
                                                        <div class="card visitor">
                                                            <div class="card-body animate-entry">
                                                                ' . $meetingInfo . '<br>

                                                                <form method="POST" action="../PhpFiles/update_status.php">
                                                                    <input type="hidden" name="meeting_id" value="' . $row['id'] . '">

                                                                    <button type="submit" name="status" value="InProgress" class="btn btn-sm btn-primary mt-2 btn-action">Move to Next</button>
                                                                    <button type="submit" name="status" value="Rescheduled" class="btn btn-sm btn-warning mt-2 btn-action">Reschedule</button>
                                                                </form>
                                                            </div>
                                                        </div>';
                                                }
                                            } else {
                                                echo "<p>No scheduled meetings.</p>";
                                            }

                                            ?>
                                        </div>
                                        </div>
                                    </div>


                                    <!-- Next in Line -->
                                    <div class="col-md-3">
                                        <h4>In Meeting</h4>
                                        <div style="height: 400px; overflow-y: auto;">
                                        <div class="d-flex flex-column gap-1" id="next-in-line">
                                            <?php
                                            // Fetch all In Progress meetings
                                            $sql = "SELECT 
                                            m.id, m.emp_id AS meeting_id, 
                                            CONCAT(v.f_name, ' ', v.l_name) AS visitor_name, 
                                            CONCAT(e.f_name, ' ', e.m_name, ' ', e.l_name) AS employee_name
                                            FROM tbl_meeting_history m
                                            JOIN tbl_visitor v ON m.visitor_id = v.id
                                            JOIN tbl_emp e ON m.emp_id = e.id
                                            WHERE m.meeting_status = 'InProgress'";


                                            $result = $conn->query($sql);
                                            if ($result && $result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $visitorName = htmlspecialchars($row['visitor_name']);
                                                    $employeeName = htmlspecialchars($row['employee_name']);
                                                    $meetingInfo = "$visitorName : Meeting with $employeeName";

                                                    echo '
                                                <div class="card visitor">
                                                    <div class="card-body animate-entry">
                                                        ' . $meetingInfo . '<br>
                                                        <form method="POST" action="../PhpFiles/update_status.php">
                                                            <input type="hidden" name="meeting_id" value="' . $row['id'] . '">
                                                            <button type="submit" name="status" value="Completed" class="btn btn-sm btn-primary mt-2 btn-action">Complete</button>
                                                        </form>
                                                    </div>
                                                </div>';
                                                }
                                            } else {
                                                echo "<p>No active meetings.</p>";
                                            }
                                            ?>
                                        </div>
                                        </div>
                                    </div>

                                    <!-- Completed Meetings -->
                                    <div class="col-md-3">
                                        <h4>Completed Meetings</h4>
                                        <div style="height: 400px; overflow-y: auto;">
                                        <div class="d-flex flex-column gap-1" id="completed">
                                            <?php
                                            // Fetch all Completed meetings
                                            $sql = "SELECT 
                                                    m.id, m.emp_id AS meeting_id, 
                                                    CONCAT(v.f_name, ' ', v.l_name) AS visitor_name, 
                                                    CONCAT(e.f_name, ' ', e.m_name, ' ', e.l_name) AS employee_name
                                                    FROM tbl_meeting_history m
                                                    JOIN tbl_visitor v ON m.visitor_id = v.id
                                                    JOIN tbl_emp e ON m.emp_id = e.id
                                                    WHERE m.meeting_status = 'Completed'";


                                            $result = $conn->query($sql);
                                            if ($result && $result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $visitorName = htmlspecialchars($row['visitor_name']);
                                                    $employeeName = htmlspecialchars($row['employee_name']);
                                                    $meetingInfo = "$visitorName : Meeting with $employeeName";

                                                    echo '
                                                        <div class="card visitor">
                                                            <div class="card-body animate-entry">
                                                                ' . $meetingInfo . '<br>
                                                            </div>
                                                        </div>';
                                                }
                                            } else {
                                                echo "<p>No active meetings.</p>";
                                            }
                                            ?>
                                        </div>
                                        </div>
                                    </div>

                                    <!-- Rescheduled Meetings -->
                                    <div class="col-md-3">
                                        <h4>Rescheduled Meetings</h4>
                                        <div style="height: 400px; overflow-y: auto;">
                                        <div class="d-flex flex-column gap-1" id="rescheduled">
                                            <?php
                                            // Fetch all Completed meetings
                                            $sql = "SELECT 
                                                    m.id, m.emp_id AS meeting_id, 
                                                    CONCAT(v.f_name, ' ', v.l_name) AS visitor_name, 
                                                    CONCAT(e.f_name, ' ', e.m_name, ' ', e.l_name) AS employee_name
                                                    FROM tbl_meeting_history m
                                                    JOIN tbl_visitor v ON m.visitor_id = v.id
                                                    JOIN tbl_emp e ON m.emp_id = e.id
                                                    WHERE m.meeting_status = 'rescheduled'";


                                            $result = $conn->query($sql);
                                            if ($result && $result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $visitorName = htmlspecialchars($row['visitor_name']);
                                                    $employeeName = htmlspecialchars($row['employee_name']);
                                                    $meetingInfo = "$visitorName : Meeting with $employeeName";

                                                    echo '
                                                        <div class="card visitor">
                                                            <div class="card-body animate-entry">
                                                                ' . $meetingInfo . '<br>
                                                            </div>
                                                        </div>';
                                                }
                                            } else {
                                                echo "<p>No active meetings.</p>";
                                            }
                                            ?>
                                        </div>
                                        </div>
                                    </div>

                                </div> <!-- row g-4 -->
                            </div> <!-- card-body -->
                        </div> <!-- card -->
                    </div> <!-- col-12 -->
                </div> <!-- row -->
            </div>
            <!-- Footer -->
            <?php include("../../Components/footer.php"); ?>
        </div>



        </div>


    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <script>
        // GSAP animation trigger function
        function animateNewVisitorCard(node) {
            if (node.classList && node.classList.contains('visitor')) {
                gsap.from(node, {
                    opacity: 0,
                    y: 30,
                    duration: 0.5,
                    ease: "power2.out"
                });
            }
        }

        // Function to observe a container and animate new children
        function observeContainer(containerId) {
            const container = document.getElementById(containerId);
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    mutation.addedNodes.forEach((node) => {
                        animateNewVisitorCard(node);
                    });
                });
            });

            observer.observe(container, {
                childList: true,
                subtree: false
            });
        }

        // Start observing all three containers
        observeContainer('waiting-queue');
        observeContainer('next-in-line');
        observeContainer('completed');
        observeContainer('rescheduled');

        function updateMeetingStatus(meetingId, newStatus, callback) {
            fetch('../PhpFiles/update_status.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `meeting_id=${meetingId}&status=${encodeURIComponent(newStatus)}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        callback();
                    } else {
                        alert('Failed to update status: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('AJAX error: ' + error);
                });
        }

        // Move to next
        function moveToNext(button, meetingId) {

            const card = button.closest('.card.visitor');
            updateMeetingStatus(meetingId, 'In Meeting', () => {
                const target = document.getElementById('next-in-line');
                card.querySelectorAll('.btn-action').forEach(btn => btn.remove());

                const completeBtn = document.createElement('button');
                completeBtn.className = 'btn btn-sm btn-success mt-2 btn-action';
                completeBtn.textContent = 'Complete';
                completeBtn.setAttribute('onclick', `moveToCompleted(this, ${meetingId})`);
                card.querySelector('.card-body').appendChild(completeBtn);

                target.appendChild(card);
            });
        }

        // Move to Rescheduled
        function moveToRescheduled(button, meetingId) {
            const card = button.closest('.card.visitor');
            updateMeetingStatus(meetingId, 'Rescheduled', () => {
                const target = document.getElementById('rescheduled');
                card.querySelectorAll('.btn-action').forEach(btn => btn.remove());
                target.appendChild(card);
            });
        }

        // Move visitor from In Meeting to Completed
        function moveToCompleted(button, meetingId) {
            const card = button.closest('.card.visitor');
            updateMeetingStatus(meetingId, 'Completed', () => {
                const target = document.getElementById('completed');
                card.querySelectorAll('.btn-action').forEach(btn => btn.remove());
                target.appendChild(card);
            });
        }


        // Remove card from DOM
        // function removeCard(button) {
        //     const card = button.closest('.card.visitor');
        //     card.remove();
        // }

        document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status) {
        const modal = new bootstrap.Modal(document.getElementById('statusModal'));
        const modalHeader = document.getElementById('statusModalHeader');
        const modalBody = document.getElementById('statusModalBody');

        if (status === 'success') {
            modalHeader.classList.remove('bg-danger');
            modalHeader.classList.add('bg-success');
            modalBody.textContent = "Status updated successfully!";
        } else {
            modalHeader.classList.remove('bg-success');
            modalHeader.classList.add('bg-danger');
            modalBody.textContent = "Failed to update status.";
        }

        modal.show();

        // Auto-hide modal after 5 seconds
        setTimeout(() => {
            modal.hide();
            window.history.replaceState(null, "", window.location.pathname); // Remove ?status from URL
        }, 5000);
    }
});

    </script>


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
    </script>

    <!-- Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-success text-white" id="statusModalHeader">
            <h5 class="modal-title" id="statusModalLabel">Status</h5>
        </div>
        <div class="modal-body" id="statusModalBody">
            Operation successful.
        </div>
        </div>
    </div>
    </div>

</body>




</html>