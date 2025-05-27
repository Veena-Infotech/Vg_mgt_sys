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
    <title>Legal File upload</title>

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


            <!-- Upload Card -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Upload Legal Document</h5>
                </div>
                <div class="card-body">
                    <form id="uploadForm" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-5">
                                <label class="form-label">Document Name</label>
                                <input type="text" class="form-control" id="documentName" placeholder="Enter Document Name" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" id="expiryDate" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="documentFile" required>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="input-group mb-4">
                <input type="text" class="form-control" id="searchInput" placeholder="Search Documents">
            </div>

            <!-- Documents Table -->
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0" id="documentsTable">
                            <thead class="table-light">
                                <tr>
                                    <th>Document Name</th>
                                    <th>Expiry Date</th>
                                    <th>Status</th>
                                    <th>File</th>
                                    <th>Action</th>
                                    <th>Delete</th> <!-- New Delete Column -->
                                </tr>
                            </thead>
                            <tbody id="documentList">
                                <!-- Dynamic rows will come here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- View Document Modal -->
            <div class="modal fade" id="viewDocumentModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">View Document</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" id="modalDocumentContent">
                            <!-- Dynamic document info here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Document Modal -->
            <div class="modal fade" id="viewDocumentModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">View Document</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" id="modalDocumentContent">
                            <!-- Dynamic document info here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
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
    <!-- Scripts self implemented -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script>
        // Handle Upload Form
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('documentName').value.trim();
            const expiry = document.getElementById('expiryDate').value.trim();
            const fileInput = document.getElementById('documentFile');
            const file = fileInput.files[0];

            if (!name || !expiry || !file) {
                Swal.fire('Error', 'Please fill all fields and select a file to upload.', 'error');
                return;
            }

            // Create new row
            const row = document.createElement('tr');
            const today = new Date();
            const expiryDate = new Date(expiry);
            const statusBadge = expiryDate >= today ?
                `<span class="badge badge-phoenix badge-phoenix-success">Valid</span>` :
                `<span class="badge badge-phoenix badge-phoenix-danger">Expired</span>`;

            const fileUrl = URL.createObjectURL(file); // Create temporary URL for file

            row.innerHTML = `
        <td>${name}</td>
        <td>${expiry}</td>
        <td>${statusBadge}</td>
        <td><a href="${fileUrl}" target="_blank" class="btn btn-sm btn-link">View File</a></td>
        <td><button class="btn btn-sm btn-primary viewBtn" data-name="${name}" data-expiry="${expiry}" data-file="${fileUrl}">View</button></td>
        <td><button class="btn btn-sm btn-danger deleteBtn">Delete</button></td> <!-- Delete Button -->
    `;

            document.getElementById('documentList').appendChild(row);

            // Animate new row
            gsap.from(row, {
                opacity: 0,
                y: 20,
                duration: 0.5,
                ease: "power2.out"
            });

            // Clear form
            document.getElementById('uploadForm').reset();
            fileInput.value = ''; // Reset file input

            // Success Toast
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Uploaded Successfully',
                showConfirmButton: false,
                timer: 1500
            });
        });

        // Handle View Button
        document.getElementById('documentList').addEventListener('click', function(e) {
            if (e.target.classList.contains('viewBtn')) {
                const name = e.target.dataset.name;
                const expiry = e.target.dataset.expiry;
                const file = e.target.dataset.file;

                document.getElementById('modalDocumentContent').innerHTML = `
            <p><strong>Document Name:</strong> ${name}</p>
            <p><strong>Expiry Date:</strong> ${expiry}</p>
            <a href="${file}" target="_blank" class="btn btn-sm btn-primary">Download/View Document</a>
        `;
                const viewModal = new bootstrap.Modal(document.getElementById('viewDocumentModal'));
                viewModal.show();
            }
        });

        // Handle Delete Button
        document.getElementById('documentList').addEventListener('click', function(e) {
            if (e.target.classList.contains('deleteBtn')) {
                const row = e.target.closest('tr');
                row.remove(); // Remove the row from the table

                // Success Toast after Deletion
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Document Deleted Successfully',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });

        // Handle Search Filter
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#documentList tr');
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    </script>

<!-- </script> -->

</body>



</html>