<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
<<<<<<< HEAD
    
=======
>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
<<<<<<< HEAD
    <title>Pinboard</title>
=======
    <title>Meeting Notes</title>
>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f

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
<<<<<<< HEAD
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
=======
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
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
<<<<<<< HEAD
    <style></style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <style>
        [contenteditable="true"]:focus {
            outline: none;
            box-shadow: none;
        }

        .btn-outline-yellow {
            border-color: green;
            color: green;
        }

        .btn-outline-yellow:hover {
            background-color: green;
            color: white;
            border-color: green;
        }
    </style>
=======
    <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <!-- self -->
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
    <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet" />
    <style>
        .file-drop-area {
            border: 1px dashed #5c6370;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            background-color: #0d0f17;
            /* dark background */
            transition: background-color 0.3s ease;
            color: #9da5b4;
            /* soft light text */

        }

        .file-drop-area:hover {
            background-color: #11131c;
        }

        .file-drop-area input[type="file"] {
            display: none;
        }

        .file-drop-message p {
            margin: 0;
            font-size: 0.9rem;
            color: #9da5b4;
            /* match text to the soft icon tone */
        }

        #filePreview {
            display: flex;
            flex-direction: column;
            margin-top: 0.625rem;
        }

        #filePreview .file-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.625rem;
            color: #ccc;
        }

        #filePreview .file-item img {
            width: 30px;
            margin-right: 0.625rem;
        }
    </style>



>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
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
<<<<<<< HEAD
        <div class="content my-5" id="heading-gsap">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Meeting Notes</h2>
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
                            <h5 class="card-title">🚀 Project Deadline</h5>
                            <p class="card-text flex-grow-1">Final submission date for PRMS module is April 28th. Make
                                sure to push
                                your latest changes.</p>
                            <div class="d-flex gap-3 align-items-center mt-3">

                                <button class="btn btn-sm btn-outline-yellow archive-btn">Archive</button>
                                <button class="btn btn-sm btn-outline-danger delete-btn">Delete</button>
                                <button class="btn btn-sm btn-outline-info edit-btn">Edit</button>
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

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
                        <button type="button" class="btn-close" id="modalCloseBtn" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editNoteTitle" class="form-label">Note Title</label>
                            <input type="text" class="form-control" id="editNoteTitle">
                        </div>
                        <div class="mb-3">
                            <label for="editNoteDescription" class="form-label">Note Description</label>
                            <textarea class="form-control" id="editNoteDescription" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="closeModalBtn">Close</button>
                        <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
=======
        <div class="content">
            <div id="heading-gsap">
                <h3 class="mb-4">Meeting Notes</h3>
                <h5 class="mb-4" style="margin-top:-1%;">Access shared summaries from recent internal meetings relevant to your project.</h5>
                <form action="#" method="post" class="p-0" enctype="multipart/form-data">
                    <div class="row g-3">
                        <hr>
                        <!-- Project Title -->
                        <div class="col-sm-6 col-md-12">
                            <label class="form-label" style="margin-left: -1%;">Project Title<span style="color: red;">*</span></label>
                            <div class="form-floating"><input class="form-control" id="kanbanTaskTitle" type="text" placeholder="title" value="" />
                                <label for="kanbanTaskTitle">Title</label>
                            </div>
                            <hr style="margin-top: 1.8%;">
                        </div>
                    </div>
                    <div class="date" style="margin-top: 0.2%;">
                        <label class="form-label" for="datetimepicker">Date & Time<span style="color: red;"> *</span></label>
                        <input class="form-control datetimepicker" id="datetimepicker" type="text" placeholder="dd/mm/yyyy hour : minute" data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' />
                        <hr style="margin-top: 1.8%;">
                    </div>
                    <div class="select" style="display: flex; gap: 1rem; align-items: flex-end;">
                        <div class="col-md-6" style="width: 33%;">
                            <label class="form-label">Project Manager <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_manager">
                                <option value="">Select organizer...</option>
                                <option>Massachusetts Institute of Technology</option>
                                <option>University of Chicago</option>
                                <option>GSAS Open Labs At Harvard</option>
                                <option>California Institute of Technology</option>
                            </select>
                        </div>
                        <!-- Project Client -->
                        <div class="col-md-6" style="width: 33%;">
                            <label class="form-label">Project Client <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_client" required>
                                <option selected disabled>Select client</option>
                                <option value="">Select organizer...</option>
                                <option>Massachusetts Institute of Technology</option>
                                <option>University of Chicago</option>
                                <option>GSAS Open Labs At Harvard</option>
                                <option>California Institute of Technology</option>
                            </select>
                        </div>
                        <div class="col-md-6" style="width: 32%;">
                            <label class="form-label">Task <span style="color: red;">*</span></label>
                            <select class="form-select" name="project_client" required>
                                <option selected disabled>Select Task</option>
                                <option value="">Select organizer...</option>
                                <option>Massachusetts Institute of Technology</option>
                                <option>University of Chicago</option>
                                <option>GSAS Open Labs At Harvard</option>
                                <option>California Institute of Technology</option>
                            </select>
                        </div>

                    </div>
                    <hr style="margin-top: 1.8%;">
                    <div class="priority">
                        <label for="organizerSingle">priority<span style="color: red;">*</span></label><select class="form-select" id="organizerSingle" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select priority...</option>
                            <option>Urgent</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <hr style="margin-top: 1.8%;">
                    </div>
                    <div class="row g-3">
                        <!-- Project Title -->
                        <div class="col-sm-6 col-md-12">
                            <label class="form-label" style="margin-left: -1%;">Location <span style="color: red;">*</span></label>
                            <div class="form-floating"><input class="form-control" id="kanbanTaskTitle" type="text" placeholder="location...." value="" />
                                <label for="kanbanTaskTitle">location....</label>
                            </div>
                            <hr style="margin-top: 1.8%;">
                        </div>
                    </div>
                    <!-- text area  -->
                    <div class="mb-0">
                        <label class="form-label" for="exampleTextarea">Meeting Content </label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"> </textarea>
                        <hr style="margin-top: 1.8%;">
                    </div>
                    <!-- file upload -->
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label text-uppercase text-light">Upload File <span style="color: red;">*</span></label>
                            <div class="file-drop-area" id="fileDropArea">
                                <input type="file" class="form-control d-none" name="file[]" id="fileInput" multiple>

                                <div class="file-drop-message text-center">
                                    <img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="25" alt="" />
                                    <p>Drag & Drop your files here or <strong>browse</strong></p>
                                </div>

                                <div id="filePreview" class="mt-3"></div>
                            </div>
                        </div>
                        <hr style="margin-top: 1.8%;">
                    </div>
                    <!-- buttons -->
                    <div class="col-12 text-end" style="margin-bottom: 2%;">
                        <button class="btn btn-primary" type="submit" id="submitBtn">Submit</button>
                        <button class="btn btn-secondary" type="reset">Clear</button>
                    </div>
                </form>
            </div>
            <!-- Footer -->
            <?php include("../../Components/footer.php"); ?>
        </div>






>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->

    <!-- ===============================================-->
    <!--Dropdown for contacted-to--->

<<<<<<< HEAD
=======

>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
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
<<<<<<< HEAD
    </script>
    <script>
        let dragSrcEl = null;
        const pinboard = document.getElementById('pinboard');
        const archiveSection = document.getElementById('archiveSection');
        const cards = pinboard.querySelectorAll('[draggable="true"]');
        let currentCard = null; // Variable to store the current card being edited
        let modal; // Store modal instance

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
            const editBtn = card.querySelector('.edit-btn');

            if (archiveBtn) {
                archiveBtn.addEventListener('click', archiveNote);
            }
            if (deleteBtn) {
                deleteBtn.addEventListener('click', deleteNote);
            }
            if (editBtn) {
                editBtn.addEventListener('click', openEditModal); // Open edit modal
            }
        }

        cards.forEach(attachCardEvents);

        // Archive Note
        function archiveNote(e) {
            const card = e.target.closest('.col-md-4');
            const archiveBtn = card.querySelector('.archive-btn');

            // Disable the archive button after click
            archiveBtn.disabled = true;

            // Move the card to the archive section
            archiveSection.appendChild(card);

            // Update the button to "Unarchive" or something else, if needed
            const unarchiveBtn = document.createElement('button');
            unarchiveBtn.classList.add('btn', 'btn-sm', 'btn-outline-success', 'unarchive-btn');
            unarchiveBtn.textContent = 'Unarchive';
            unarchiveBtn.addEventListener('click', unarchiveNote);

            // Replace archive button with unarchive button
            archiveBtn.replaceWith(unarchiveBtn);
        }

        // Unarchive Note (moves it back to the pinboard)
        function unarchiveNote(e) {
            const card = e.target.closest('.col-md-4');
            const unarchiveBtn = card.querySelector('.unarchive-btn');

            // Move the card back to the pinboard
            pinboard.appendChild(card);

            // Create a new archive button and re-enable it
            const archiveBtn = document.createElement('button');
            archiveBtn.classList.add('btn', 'btn-sm', 'btn-outline-yellow', 'archive-btn');
            archiveBtn.textContent = 'Archive';
            archiveBtn.addEventListener('click', archiveNote);

            // Replace unarchive button with the original archive button
            unarchiveBtn.replaceWith(archiveBtn);
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
                <h5 class="card-title" >New Heading</h5>
                <p class="card-text flex-grow-1" >Write your note content here...</p>
                <div class="d-flex gap-3 align-items-center mt-3">
                    <button class="btn btn-sm btn-outline-yellow archive-btn">Archive</button>
                    <button class="btn btn-sm btn-outline-danger delete-btn">Delete</button>
                    <button class="btn btn-sm btn-outline-info edit-btn">Edit</button>
                </div>
            </div>
        </div>
        `;
            pinboard.appendChild(newNote);
            attachCardEvents(newNote);
        });

        // Open Edit Modal
        function openEditModal(e) {
            currentCard = e.target.closest('.col-md-4');
            const title = currentCard.querySelector('.card-title').textContent;
            const description = currentCard.querySelector('.card-text').textContent;

            document.getElementById('editNoteTitle').value = title;
            document.getElementById('editNoteDescription').value = description;

            // Initialize the modal if not done yet
            if (!modal) {
                modal = new bootstrap.Modal(document.getElementById('editModal'));
            }

            modal.show();
        }

        // Save Changes
        document.getElementById('saveChangesBtn').addEventListener('click', function () {
            const newTitle = document.getElementById('editNoteTitle').value;
            const newDescription = document.getElementById('editNoteDescription').value;

            currentCard.querySelector('.card-title').textContent = newTitle;
            currentCard.querySelector('.card-text').textContent = newDescription;

            modal.hide(); // Hide modal after saving changes
        });

        // Close Modal
        document.getElementById('modalCloseBtn').addEventListener('click', function () {
            modal.hide(); // Close modal
        });

        document.getElementById('closeModalBtn').addEventListener('click', function () {
            modal.hide(); // Close modal
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    
=======
>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
<<<<<<< HEAD
            duration: 0.8,
            ease: "power2.out",
            delay: 0.2
=======
            duration: 0.7,
            ease: "power2.out",
            delay: 0.7
>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>
<<<<<<< HEAD
</body>
=======
    <!-- self -->
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../vendors/dropzone/dropzone-min.js"></script>
    <script>
        const fileDropArea = document.getElementById('fileDropArea');
        const fileInput = document.getElementById('fileInput');
        const filePreview = document.getElementById('filePreview');

        // Trigger file input on click
        fileDropArea.addEventListener('click', () => {
            fileInput.click();
        });

        // Handle file input change
        fileInput.addEventListener('change', () => {
            filePreview.innerHTML = '';
            Array.from(fileInput.files).forEach(file => {
                const item = document.createElement('div');
                item.classList.add('file-item');
                item.innerHTML = `
        <img src="../../../assets/img/icons/file.svg" alt="file">
        <span>${file.name}</span>
      `;
                filePreview.appendChild(item);
            });
        });
    </script>


    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

>>>>>>> bd8895b020ad489efa29ae3a8dbc83e28fbf861f
</html>