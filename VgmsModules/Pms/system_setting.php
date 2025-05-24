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
    <title>System setting</title>

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

            <!-- main code  -->

            <div class="container-xxl">

                <div class="card">
                    <h3 class="mb-4" style="margin-left: 3%; margin-top:2%;">System Setting </h3>
                    <hr>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab">General</a></li>
                            <li class="nav-item"><a class="nav-link" id="dropdowns-tab" data-bs-toggle="tab" href="#dropdowns" role="tab">Dropdowns</a></li>
                            <li class="nav-item"><a class="nav-link" id="security-tab" data-bs-toggle="tab" href="#security" role="tab">Security</a></li>
                            <li class="nav-item"><a class="nav-link" id="email-tab" data-bs-toggle="tab" href="#email" role="tab">Email</a></li>
                            <li class="nav-item"><a class="nav-link" id="api-tab" data-bs-toggle="tab" href="#api" role="tab">API</a></li>
                        </ul>

                        <div class="tab-content p-3" id="settingsTabsContent">

                            <!-- General Tab -->
                            <div class="tab-pane fade show active" id="general" role="tabpanel">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Site Name</label>
                                        <input type="text" class="form-control" placeholder="Enter site name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">System Timezone</label>
                                        <select class="form-select">
                                            <option>Select timezone</option>
                                            <option>Indian timezone</option>
                                            <option>Usa timezone</option>
                                            <option>Dubai timezone</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date Format</label>
                                            <select class="form-select">
                                                <option>DD/MM/YYYY</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Time Format</label>
                                            <select class="form-select">
                                                <option>24-hour</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Currency</label>
                                        <select class="form-select">
                                            <option>USD ($)</option>
                                            <option>Currency (₹)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Logo Upload</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>

                            <!-- Dropdowns Tab -->
                            <div class="tab-pane fade" id="dropdowns" role="tabpanel">
                                <div class="accordion" id="dropdownAccordion">

                                    <!-- User Roles -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingRoles">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRoles">
                                                User Roles
                                            </button>
                                        </h2>
                                        <div id="collapseRoles" class="accordion-collapse collapse">
                                            <div class="accordion-body">

                                                <div class="d-flex justify-content-between mb-3">
                                                    <h6>Existing Roles</h6>
                                                    <button class="btn btn-sm btn-primary" onclick="addRoleField()">Add New Role</button>
                                                </div>

                                                <ul class="list-group" id="roleList">
                                                    <!-- Existing Roles -->
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <span class="role-text">Admin</span>
                                                        <div>
                                                            <button class="btn btn-sm btn-outline-secondary me-2" onclick="editRole(this)">Edit</button>
                                                            <button class="btn btn-sm btn-outline-danger" onclick="deleteRole(this)">Delete</button>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Statuses -->
                                    <!-- Project Statuses -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingStatuses">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatuses">
                                                Project Statuses
                                            </button>
                                        </h2>
                                        <div id="collapseStatuses" class="accordion-collapse collapse">
                                            <div class="accordion-body">

                                                <div class="d-flex justify-content-between mb-3">
                                                    <h6>Existing Statuses</h6>
                                                    <button class="btn btn-sm btn-primary" onclick="addStatusField()">Add New Status</button>
                                                </div>

                                                <ul class="list-group" id="statusList">
                                                    <!-- Existing Statuses -->
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <span class="status-text">In Progress</span>
                                                        <div>
                                                            <button class="btn btn-sm btn-outline-secondary me-2" onclick="editStatus(this)">Edit</button>
                                                            <button class="btn btn-sm btn-outline-danger" onclick="deleteStatus(this)">Delete</button>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Security Tab -->
                            <div class="tab-pane fade" id="security" role="tabpanel">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Password Strength</label>
                                        <select class="form-select">
                                            <option>Weak</option>
                                            <option>Medium</option>
                                            <option>Strong</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Session Timeout (minutes)</label>
                                        <input type="number" class="form-control" placeholder="e.g., 30">
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="twoFactorSwitch">
                                        <label class="form-check-label" for="twoFactorSwitch">Enable Two-Factor Authentication</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>

                            <!-- Email Tab -->
                            <div class="tab-pane fade" id="email" role="tabpanel">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">SMTP Host</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">SMTP Port</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">SMTP Username</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">SMTP Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sender Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sender Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Save Changes</button>
                                    <button type="button" class="btn btn-outline-primary">Send Test Email</button>
                                </form>
                            </div>

                            <!-- API Tab -->
                            <div class="tab-pane fade" id="api" role="tabpanel">
                                <form onsubmit="saveApiSettings(event)">
                                    <div class="mb-3">
                                        <label class="form-label">API Key</label>
                                        <div class="input-group">
                                            <input type="text" id="apiKeyInput" class="form-control" value="YOUR_API_KEY_HERE" readonly>
                                            <button class="btn btn-outline-secondary" type="button" onclick="regenerateApiKey()">Regenerate</button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Webhook URL</label>
                                        <input type="url" class="form-control" id="webhookUrlInput">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <!-- end of main code  -->





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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="../../vendors/leaflet/leaflet.js"></script>
    <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../assets/js/ecommerce-dashboard.js"></script>
    
    <script>
        // --- API Settings Functions ---
        function regenerateApiKey() {
            const apiKeyInput = document.getElementById('apiKeyInput');
            const newKey = 'API_' + Math.random().toString(36).substring(2, 18).toUpperCase();
            apiKeyInput.value = newKey;

            // GSAP fade effect
            gsap.fromTo(apiKeyInput, {
                opacity: 0
            }, {
                opacity: 1,
                duration: 1
            });
        }

        function saveApiSettings(event) {
            event.preventDefault();
            const apiKey = document.getElementById('apiKeyInput').value;
            const webhookUrl = document.getElementById('webhookUrlInput').value;
            console.log('Saving API Settings:', {
                apiKey,
                webhookUrl
            });
            alert('API Settings saved successfully!');
        }

        // --- Project Status Functions ---
        function addStatusField() {
            const statusList = document.getElementById('statusList');
            const newItem = document.createElement('li');
            newItem.className = 'list-group-item d-flex justify-content-between align-items-center';
            newItem.innerHTML = `
    <div class="d-flex align-items-center w-100">
      <select class="form-select form-select-sm me-2 flex-grow-1">
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
        <option value="On Hold">On Hold</option>
        <option value="Cancelled">Cancelled</option>
      </select>
      <div>
        <button class="btn btn-sm btn-success me-2" onclick="saveNewStatus(this)">Save</button>
        <button class="btn btn-sm btn-outline-danger" onclick="cancelStatus(this)">Cancel</button>
      </div>
    </div>
  `;
            statusList.appendChild(newItem);

            // Apply GSAP fade-up animation
            gsap.fromTo(newItem, {
                opacity: 0,
                y: 30
            }, {
                opacity: 1,
                y: 0,
                duration: 1
            });
        }

        function saveNewStatus(button) {
            const li = button.closest('li');
            const select = li.querySelector('select');
            const statusName = select.value;
            li.innerHTML = `
    <span class="status-text">${statusName}</span>
    <div>
      <button class="btn btn-sm btn-outline-secondary me-2" onclick="editStatus(this)">Edit</button>
      <button class="btn btn-sm btn-outline-danger" onclick="deleteStatus(this)">Delete</button>
    </div>
  `;

            // Apply GSAP fade-up animation
            gsap.fromTo(li, {
                opacity: 0,
                y: 30
            }, {
                opacity: 1,
                y: 0,
                duration: 1
            });
        }

        function editStatus(button) {
            const li = button.closest('li');
            const currentStatus = li.querySelector('.status-text').innerText;
            li.innerHTML = `
    <div class="d-flex align-items-center w-100">
      <select class="form-select form-select-sm me-2 flex-grow-1">
        <option value="In Progress" ${currentStatus === 'In Progress' ? 'selected' : ''}>In Progress</option>
        <option value="Completed" ${currentStatus === 'Completed' ? 'selected' : ''}>Completed</option>
        <option value="On Hold" ${currentStatus === 'On Hold' ? 'selected' : ''}>On Hold</option>
        <option value="Cancelled" ${currentStatus === 'Cancelled' ? 'selected' : ''}>Cancelled</option>
      </select>
      <div>
        <button class="btn btn-sm btn-success me-2" onclick="saveNewStatus(this)">Save</button>
        <button class="btn btn-sm btn-outline-danger" onclick="cancelStatus(this)">Cancel</button>
      </div>
    </div>
  `;

            // Apply GSAP fade-up animation
            gsap.fromTo(li, {
                opacity: 0,
                y: 30
            }, {
                opacity: 1,
                y: 0,
                duration: 1
            });
        }

        function deleteStatus(button) {
            button.closest('li').remove();
        }

        function cancelStatus(button) {
            button.closest('li').remove();
        }
    </script>



    </script>



</body>




</html>