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
    <title>Add Leads</title>

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
    <style>
        .hidden {
            display: none;
        }
    </style>
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
        <div class="content" id="heading-gsap">
            <!-- view leads table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">
                <!-- Container for the Title -->
                <h3 style="margin: 0;" class="mb-4">Add Leads</h3>
                <hr>
                <!-- Form for adding lead source -->
                <form method="post" action="../../php/submit-add-leads-form.php">
                    <div class="row g-3">
                        <!-- Salutation Dropdown -->
                        <div class="col-12 col-md-2" style="margin-top: 30px;">
                            <div class="form-floating form-floating-advance-select">
                                <label for="floatingSalutation">Salutation</label>
                                <select class="form-select" id="floatingSalutation" name="salutation"
                                    data-choices="data-choices"
                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="" disabled selected>Select Salutation</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Miss.">Miss.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Prof.">Prof.</option>
                                    <option value="Sir.">Sir.</option>
                                    <option value="Ma'am.">Ma'am.</option>
                                    <option value="Adv.">Adv.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 form-floating ">
                            <div class="mb-3">
                                <label class="form-label" for="first-name">First Name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="first-name" name="first_name" type="text"
                                    placeholder="First Name" required />
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="last-name">Last Name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="last-name" name="last_name" type="text"
                                    placeholder="Last Name" required />
                            </div>
                        </div>
                    </div>

                    <!-- Contact Details (Email and Phone) -->
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email Address <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="name@example.com" required />
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="phone">Contact <span class="text-danger">*</span></label>
                                <input type="tel" id="phone" name="phone" pattern="(\+91)?[6-9][0-9]{9}" required
                                    class="form-control" placeholder="Enter Mobile Number" />
                            </div>
                        </div>

                        <!-- Current Lead Profile Dropdown -->
                        <div class="col-12 col-md-4" style="margin-top: 30px;">
                            <div class="form-floating form-floating-advance-select ml-3">
                                <label for="Current-lead-Profile">Current Lead Profile <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="Current-lead-Profile" name="current_lead_profile"
                                    required>
                                    <option value="" disabled selected>Select Profile</option>
                                    <option value="society">Society</option>
                                    <option value="pmc">PMC</option>
                                    <option value="friend/collegue">Friend/Colleague</option>
                                    <option value="agent">Agent</option>
                                    <option value="developer">Developer</option>
                                </select>
                            </div>
                        </div>

                        <!-- Input for PMC Name -->
                        <div id="pmc-input" class="row mb-3" style="display: none;">
                            <div class="col-12 col-md-4">
                                <label for="pmc-name" class="form-label">PMC Name</label>
                                <input type="text" id="pmc-name" name="pmc-name" class="form-control"
                                    placeholder="Enter PMC Name" />
                            </div>
                        </div>

                        <!-- Additional Inputs for Agent -->
                        <div id="agent-inputs" class="row mb-3" style="display: none;">
                            <div class="col-12 col-md-4">
                                <label for="agent-name" class="form-label">Agent Name</label>
                                <input type="text" id="agent-name" name="agent-name" class="form-control"
                                    placeholder="Enter Agent Name" />
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="agency-name" class="form-label">Agency Name</label>
                                <input type="text" id="agency-name" name="agency-name" class="form-control"
                                    placeholder="Enter Agency Name" />
                            </div>
                        </div>

                        <!-- Additional Inputs for Developer -->
                        <div id="developer-inputs" class="row mb-3" style="display: none;">
                            <div class="col-12 col-md-4">
                                <label for="developer-name" class="form-label">Developer's Name</label>
                                <input type="text" id="developer-name" name="developer-name" class="form-control"
                                    placeholder="Enter Developer Name" />
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="developer-company" class="form-label">Developer Company</label>
                                <input type="text" id="developer-company" name="developer-company" class="form-control"
                                    placeholder="Enter Developer's Company" />
                            </div>
                        </div>

                        <div id="friendcollegue-inputs" class="row mb-3" style="display: none;">
                            <div class="col-12 col-md-4">
                                <label for="friend-name" class="form-label">Friend/Colleague's Name</label>
                                <input type="text" id="friend-name" name="friend-name" class="form-control"
                                    placeholder="Enter Friend/Colleague's Name" />
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="friend-company" class="form-label">Friend/Colleague's Company</label>
                                <input type="text" id="friend-company" name="friend-company" class="form-control"
                                    placeholder="Enter Friend/Colleague's Company" />
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="friend-contact" class="form-label">Contact Number</label>
                                <input type="text" id="friend-contact" name="friend-contact" class="form-control"
                                    placeholder="Enter Contact Number" />
                            </div>
                        </div>




                    </div>

                    <div class="my-4" id="snarea" style="display: none;">
                        <!-- Source Fields Dropdown -->
                        <div class="mb-3">
                            <label class="form-label" for="societyname">Enter Society Name</label>
                            <input class="form-control" id="societyname" name="societyname" type="text"
                                placeholder="Enter Society Name" />
                        </div>
                    </div>
                    <hr>
                    <!-- Reference Section -->
                    <div class="my-4">
                        <h5>Reference</h5>

                        <p>Is contacted through</p>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" id="flexRadioDefault1" name="is_contacted" type="radio"
                                    value="yes" onclick="toggleFields()" />
                                <label class="form-check-label mb-0" for="flexRadioDefault1">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="flexRadioDefault2" name="is_contacted" type="radio"
                                    value="no" checked="checked" onclick="toggleFields()" />
                                <label class="form-check-label mb-0" for="flexRadioDefault2">No</label>
                            </div>
                        </div>

                        <!-- Fields that appear when "Yes" is selected -->
                        <div id="referenceFields" class="mb-3" style="display: none;">
                            <div class="mb-3">
                                <label class="form-label" for="relatedFields">Lead Source</label>
                                <select class="form-select" id="reference_source_id" name="reference_source_id">
                                    <option selected disabled>Choose...</option>
                                    <option value="social media">Social Media</option>
                                    <option value="website">Website</option>
                                    <option value="friend">Friend</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="PMC/Agency">PMC/Agency</option>
                                    <option value="Developer">Developer</option>
                                    <option value="leads">Leads</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Related Fields Dropdown -->

                    <!-- Social Media -->
                    <div id="socialMediaOptions" class="card p-3 mb-3 shadow hidden">
                        <h5 class="card-title">Choose Platform</h5>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="instagram" name="socialMedia"
                                value="Instagram">
                            <label class="form-check-label" for="instagram">Instagram</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="facebook" name="socialMedia"
                                value="Facebook">
                            <label class="form-check-label" for="facebook">Facebook</label>
                        </div>
                    </div>

                    <!-- Society -->
                    <div id="societyFields" class="card p-3 mb-3 shadow hidden">
                        <h5 class="card-title">Society Information</h5>
                        <div class="mb-3">
                            <label class="form-label" for="societyName">Society Name</label>
                            <input type="text" class="form-control" id="societyName" name="societyName"
                                placeholder="Enter Society Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="societyPersonNumber">Person's Number</label>
                            <input type="text" class="form-control" id="societyPersonNumber" name="societyPersonNumber"
                                placeholder="Enter Person's Number">
                        </div>
                    </div>

                    <!-- PMC/Agency -->
                    <div id="pmcAgencyFields" class="card p-3 mb-3 shadow hidden">
                        <h5 class="card-title">PMC/Agency Information</h5>
                        <div class="mb-3">
                            <label class="form-label" for="agencyName">Name of Agency/PMC</label>
                            <input type="text" class="form-control" id="agencyName" name="agencyName"
                                placeholder="Enter Agency/PMC Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agencyNumber">Number of Agency/PMC</label>
                            <input type="text" class="form-control" id="agencyNumber" name="agencyNumber"
                                placeholder="Enter Agency/PMC Number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agencyPersonName">Person's Name</label>
                            <input type="text" class="form-control" id="agencyPersonName" name="agencyPersonName"
                                placeholder="Enter Person's Name">
                        </div>
                    </div>

                    <!-- Developer -->
                    <div id="developerFields" class="card p-3 mb-3 shadow hidden">
                        <h5 class="card-title">Developer Information</h5>
                        <div class="mb-3">
                            <label class="form-label" for="agencyName">Name of Developer</label>
                            <input type="text" class="form-control" id="agencyName" name="agencyName"
                                placeholder="Enter Agency/PMC Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agencyNumber">Number of Developer</label>
                            <input type="text" class="form-control" id="agencyNumber" name="agencyNumber"
                                placeholder="Enter Agency/PMC Number">
                        </div>
                    </div>

                    <!-- Leads -->
                    <div id="leadsSourceFields" class="card p-3 mb-3 shadow hidden">
                        <h5 class="card-title">Leads Source Information</h5>
                        <div class="mb-3">
                            <label class="form-label" for="sourceName">Name of Source</label>
                            <input type="text" class="form-control" id="sourceName" name="sourceName"
                                placeholder="Enter Source Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sourceContact">Source Contact Number</label>
                            <input type="text" class="form-control" id="sourceContact" name="sourceContact"
                                placeholder="Enter Source Contact Number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sourceEmail">Source Email</label>
                            <input type="email" class="form-control" id="sourceEmail" name="sourceEmail"
                                placeholder="Enter Source Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sourceType">Source Type</label>
                            <select class="form-select" id="sourceType" name="sourceType">
                                <option selected>Choose Source Type</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                                <option value="referral">Referral</option>
                            </select>
                        </div>
                    </div>





                    <br>
                    <!-- Submit Button -->
                    <button class="btn btn-primary mb-3" type="submit">Submit</button>
                </form>


            </div>
            <!---footer--->
            <?php include("../../Components/footer.php"); ?>
        </div>


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





    </script>
    <script>
        // Function to toggle visibility of reference fields based on radio selection
        function toggleFields() {
            var yesRadio = document.getElementById('flexRadioDefault1');
            var referenceFields = document.getElementById('referenceFields');

            // If "Yes" is selected, show the reference fields
            if (yesRadio.checked) {
                referenceFields.style.display = 'block';
            } else {
                referenceFields.style.display = 'none';
            }
        }

        // Initialize the visibility state on page load
        document.addEventListener('DOMContentLoaded', function () {
            toggleFields(); // This ensures the correct state is applied when the page loads
        });
    </script>
    <script>
        asssociety = document.getElementById('snarea');
        dropdownvalue = document.getElementById('Current-lead-Profile');
        hrss = document.getElementById('hrss');
        dropdownvalue.addEventListener('change', function () {
            if (dropdownvalue.value == 'society') {
                asssociety.style.display = 'block';
                hrss.style.display = 'block';
            } else {
                asssociety.style.display = 'none';
                hrss.style.display = 'none';
            }
        });
    </script>
    <script>
        // Get DOM elements
        const referenceSource = document.getElementById('reference_source_id');
        const socialMediaOptions = document.getElementById('socialMediaOptions');
        const societyFields = document.getElementById('societyFields');
        const pmcAgencyFields = document.getElementById('pmcAgencyFields');
        const developerFields = document.getElementById('developerFields');
        const LeadsField = document.getElementById('leadsSourceFields');

        // Add event listener for lead source change
        referenceSource.addEventListener('change', function () {
            // Hide all fields initially
            socialMediaOptions.classList.add('hidden');
            societyFields.classList.add('hidden');
            pmcAgencyFields.classList.add('hidden');
            developerFields.classList.add('hidden');
            LeadsField.classList.add('hidden');

            // Show relevant fields based on selection
            const selectedValue = referenceSource.value;
            if (selectedValue === 'social media') {
                socialMediaOptions.classList.remove('hidden');
            } else if (selectedValue === 'society') {
                societyFields.classList.remove('hidden');
            } else if (selectedValue === 'PMC/Agency') {
                pmcAgencyFields.classList.remove('hidden');
            } else if (selectedValue === 'Developer') {
                developerFields.classList.remove('hidden');
            } else if (selectedValue === 'leads') {
                LeadsField.classList.remove('hidden');
            }


        });
    </script>
    <script>
        // Get references to the dropdown and additional inputs containers
        const leadProfileDropdown = document.getElementById("Current-lead-Profile");
        const agentInputs = document.getElementById("agent-inputs");
        const pmcInputs = document.getElementById("pmc-input");
        const developerInputs = document.getElementById("developer-inputs");
        const friendcollegue = document.getElementById("friendcollegue-inputs");
        //friend/collegue
        // Listen for changes in the dropdown
        leadProfileDropdown.addEventListener("change", function () {
            // Hide all inputs initially
            agentInputs.style.display = "none";
            pmcInputs.style.display = "none";
            developerInputs.style.display = "none";
            friendcollegue.style.display = "none";
            // Show relevant inputs based on the selected value
            if (leadProfileDropdown.value === "agent") {
                agentInputs.style.display = "flex";
            } else if (leadProfileDropdown.value === "pmc") {
                pmcInputs.style.display = "flex";
            } else if (leadProfileDropdown.value === "developer") {
                developerInputs.style.display = "flex";
            } else if (leadProfileDropdown.value === "friend/collegue") {
                friendcollegue.style.display = "flex";
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.2
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>