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
    <title>Personal pages</title>

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
        [contenteditable="true"]:focus {
            outline: none;
            box-shadow: none;
        }

        .btn-outline-yellow {
            border-color: yellow;
            color: yellow;
        }

        .btn-outline-yellow:hover {
            background-color: yellow;
            color: black;
            border-color: yellow;
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
        <div class="content my-5" id="heading-gsap">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Personal Notes</h2>
                <div>
                    <button class="btn btn-success me-2" id="addNoteBtn">Add Note</button>
                    <button class="btn btn-secondary" id="viewArchiveBtn">View Archives</button>
                </div>
            </div>

            <!-- Pinboard (Active Notes) -->
            <div class="row" id="pinboard">

                <!-- Example Note -->
                <div class="col-md-4 mb-4" draggable="true">
                    <div class="card shadow-sm h-100 border border-info">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title" contenteditable="true">🚀 Database Design</h5>
                            <p class="card-text flex-grow-1" contenteditable="true">Finalize the structure for PRMS
                                proposals table.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <select class="form-select form-select-sm w-50 pipeline-dropdown">
                                    <option selected>Pending</option>
                                    <option>Work In Progress</option>
                                    <option>Completed</option>
                                </select>
                                <button class="btn btn-sm btn-outline-yellow archive-btn">Archive</button>

                                <button class="btn btn-sm btn-outline-danger delete-btn">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <!-- Archive Section (Hidden initially) -->
            <div class="row mt-5" id="archiveSection" style="display: none;">
                <h4 class="mb-4">📂 Archived Notes</h4>

                <!-- Archived notes will be moved here -->
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
        let dragSrcEl = null;
        const pinboard = document.getElementById('pinboard');
        const archiveSection = document.getElementById('archiveSection');
        const cards = pinboard.querySelectorAll('[draggable="true"]');

        function handleDragStart(e) {
            dragSrcEl = this;
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/html', this.outerHTML);
            this.classList.add('opacity-50');
        }

        function handleDragOver(e) {
            if (e.preventDefault) e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
            return false;
        }

        function handleDrop(e) {
            if (e.stopPropagation) e.stopPropagation();

            if (dragSrcEl !== this) {
                this.insertAdjacentHTML('beforebegin', e.dataTransfer.getData('text/html'));
                const droppedCard = this.previousSibling;
                attachCardEvents(droppedCard);
                dragSrcEl.remove();
            }
            return false;
        }

        function handleDragEnd() {
            const allCards = document.querySelectorAll('[draggable="true"]');
            allCards.forEach(card => {
                card.classList.remove('opacity-50');
            });
        }

        function attachCardEvents(card) {
            card.addEventListener('dragstart', handleDragStart);
            card.addEventListener('dragover', handleDragOver);
            card.addEventListener('drop', handleDrop);
            card.addEventListener('dragend', handleDragEnd);

            const archiveBtn = card.querySelector('.archive-btn');
            const deleteBtn = card.querySelector('.delete-btn');
            if (archiveBtn) {
                archiveBtn.addEventListener('click', archiveNote);
            }
            if (deleteBtn) {
                deleteBtn.addEventListener('click', deleteNote); // Attach delete function
            }
        }

        cards.forEach(attachCardEvents);

        // Archive Note
        function archiveNote(e) {
            const card = e.target.closest('.col-md-4');
            card.querySelector('.archive-btn').remove(); // Remove archive button
            card.querySelector('.pipeline-dropdown').disabled = true; // Disable dropdown
            archiveSection.appendChild(card);
        }

        // Delete Note
        function deleteNote(e) {
            const card = e.target.closest('.col-md-4');
            card.remove(); // Delete the note card
        }

        // View Archives toggle
        document.getElementById('viewArchiveBtn').addEventListener('click', function () {
            archiveSection.style.display = archiveSection.style.display === 'none' ? 'flex' : 'none';
        });

        // Add Note functionality
        document.getElementById('addNoteBtn').addEventListener('click', function () {
            const newNote = document.createElement('div');
            newNote.className = 'col-md-4 mb-4';
            newNote.setAttribute('draggable', 'true');
            newNote.innerHTML = `
    <div class="card shadow-sm h-100 border border-info">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title" contenteditable="true">🆕 New Note</h5>
            <p class="card-text flex-grow-1" contenteditable="true">Write your note content here...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <select class="form-select form-select-sm w-50 pipeline-dropdown">
                    <option selected>Pending</option>
                    <option>Work In Progress</option>
                    <option>Completed</option>
                </select>
                <button class="btn btn-sm btn-outline-danger archive-btn">Archive</button>
                <button class="btn btn-sm btn-outline-danger delete-btn">Delete</button>
            </div>
        </div>
    </div>
    `;
            pinboard.appendChild(newNote);
            attachCardEvents(newNote);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script>
        gsap.from("#formCard", {
            opacity: 0,
            y: 60,
            duration: 1,
            ease: "power2.out"
        });

        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 1.0,
            ease: "power2.out",
            delay: 0.1
        });


    </script>





</body>



</html>