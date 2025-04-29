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
    <title>Notes</title>

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
        <div class="content mt-4">
            <h2 class="mb-4" id="heading-gsap">Note Keeping</h2>

            <!-- Container for Add Note Form and View Notes -->
            <div class="row" id="heading-gsap">
                <form id="addNoteForm">
                    <!-- Add Note Form -->
                    <div class="col-md-12 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Add Note</h5>
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="noteTitle" class="form-label">Note Title</label>
                                            <input type="text" class="form-control" id="noteTitle" name="noteTitle"
                                                placeholder="Title of the note" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="noteDate" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="noteDate" name="noteDate" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="noteDescription" class="form-label">Note Description</label>
                                        <textarea class="form-control" id="noteDescription" name="noteDescription" rows="3"
                                            placeholder="Description of the note" required></textarea>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="noteTag" class="form-label">Tag</label>
                                            <select class="form-select" id="noteTag" name="noteTag" required>
                                                <option selected disabled>Choose Tag</option>
                                                <option value="To-Do">To-Do</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Completed">Completed</option>
                                                <option value="Blocked">Blocked</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-check">
                                            <input type="checkbox" class="form-check-input" id="archiveNote" name="archiveNote">
                                            <label class="form-check-label" for="archiveNote">Archive Note</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Note</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </form>
                <!-- View Notes Section -->
                <div class="col-md-12 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-header text-white">
                            <h5 class="mb-0">View Notes</h5>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered table-hover align-middle text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Note Title</th>
                                        <th>Date</th>
                                        <th>Tags</th>
                                        <th>Archived</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="notesTableBody">
                                    <!-- Table rows will be rendered dynamically here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Reusable Modal for Editing Note -->
            <div class="modal fade" id="editNoteModal" tabindex="-1" aria-labelledby="editNoteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="editNoteModalLabel">Edit Note</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="editNoteTitle" name="editNoteTitle"
                                            placeholder="Note Title" required>
                                        <label for="editNoteTitle">Note Title</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="editNoteDate" name="editNoteDate"
                                            placeholder="Date" required>
                                        <label for="editNoteDate">Date</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="editNoteDescription" name="editNoteDescription"
                                            placeholder="Description" rows="3" required></textarea>
                                        <label for="editNoteDescription">Note Description</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="editNoteTag" name="editNoteTag" required>
                                            <option selected disabled>Choose Tag</option>
                                            <option value="To-Do">To-Do</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Blocked">Blocked</option>
                                        </select>
                                        <label for="editNoteTag">Tag</label>
                                    </div>
                                </div>

                                <div class="col-md-6 form-check">
                                    <input type="checkbox" class="form-check-input" id="editArchiveNote" name="editArchiveNote">
                                    <label class="form-check-label" for="editArchiveNote">Archive Note</label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

            <?php include("../../Components/footer.php"); ?>

        </div>



    </main>

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
    <!-- <script>
        // Delete Note Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Select all Delete buttons
            const deleteButtons = document.querySelectorAll('.btn-danger');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Confirm the deletion
                    if (confirm('Are you sure you want to delete this note?')) {
                        // Get the row of the button clicked
                        const row = button.closest('tr');
                        // Remove the row
                        row.remove();
                    }
                });
            });
        });

        // Archive Note Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Select all Archive buttons
            const archiveButtons = document.querySelectorAll('.btn-info');

            archiveButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Toggle the archive status
                    const row = button.closest('tr');
                    const archiveCell = row.querySelectorAll('td')[4]; // Archive column
                    const isArchived = archiveCell.textContent.trim() === 'Yes';

                    if (isArchived) {
                        archiveCell.textContent = 'No'; // Set to not archived
                        button.textContent = 'Archive'; // Change button text
                        button.classList.remove('btn-danger');
                        button.classList.add('btn-info');
                    } else {
                        archiveCell.textContent = 'Yes'; // Set to archived
                        button.textContent = 'Unarchive'; // Change button text
                        button.classList.remove('btn-info');
                        button.classList.add('btn-danger');
                    }
                });
            });
        });
    </script> -->
    <script>
        const notes = [{
                title: "Project Kickoff",
                date: "2025-04-25",
                tag: "To-Do",
                archived: "No",
                description: "Initial meeting"
            },
            {
                title: "Budget Planning",
                date: "2025-04-24",
                tag: "In Progress",
                archived: "No",
                description: "Allocate budget"
            },
            {
                title: "Client Feedback",
                date: "2025-04-23",
                tag: "Completed",
                archived: "Yes",
                description: "Reviewed client feedback"
            }
        ];

        let currentPage = 1;
        const rowsPerPage = 5;
        let selectedNoteIndex = null;

        const tableBody = document.getElementById("notesTableBody");

        function renderTable(page = 1) {
            tableBody.innerHTML = "";

            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedNotes = notes.slice(start, end);

            paginatedNotes.forEach((note, i) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                <td>${start + i + 1}</td>
                <td>${note.title}</td>
                <td>${note.date}</td>
                <td>${note.tag}</td>
                <td>${note.archived}</td>
                <td>
                    <button class="btn btn-sm btn-warning" onclick="editNote(${start + i})" data-bs-toggle="modal" data-bs-target="#editNoteModal">Edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deleteNote(${start + i})">Delete</button>
                </td>
            `;
                tableBody.appendChild(row);
            });

            renderPagination();
        }

        function renderPagination() {
            const totalPages = Math.ceil(notes.length / rowsPerPage);
            let paginationHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                paginationHTML += `<button class="btn btn-sm btn-outline-primary me-1 ${i === currentPage ? 'active' : ''}" onclick="goToPage(${i})">${i}</button>`;
            }

            let existing = document.getElementById("paginationControls");
            if (!existing) {
                const div = document.createElement("div");
                div.id = "paginationControls";
                div.className = "mt-3 text-center";
                tableBody.parentElement.appendChild(div);
            }

            document.getElementById("paginationControls").innerHTML = paginationHTML;
        }

        function goToPage(page) {
            currentPage = page;
            renderTable(page);
        }

        document.getElementById("addNoteForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const title = document.getElementById("noteTitle").value.trim();
            const date = document.getElementById("noteDate").value;
            const description = document.getElementById("noteDescription").value.trim();
            const tag = document.getElementById("noteTag").value;
            const archived = document.getElementById("archiveNote").checked ? "Yes" : "No";

            if (!title || !date || !description || !tag) return;

            notes.push({
                title,
                date,
                tag,
                archived,
                description
            });

            this.reset();
            renderTable(currentPage);
        });

        function deleteNote(index) {
            notes.splice(index, 1);
            renderTable(currentPage);
        }

        function editNote(index) {
            selectedNoteIndex = index;
            const note = notes[index];

            document.getElementById("editNoteTitle").value = note.title;
            document.getElementById("editNoteDate").value = note.date;
            document.getElementById("editNoteDescription").value = note.description;
            document.getElementById("editNoteTag").value = note.tag;
            document.getElementById("editArchiveNote").checked = note.archived === "Yes";
        }

        document.querySelector("#editNoteModal form").addEventListener("submit", function(e) {
            e.preventDefault();

            if (selectedNoteIndex === null) return;

            const updatedTitle = document.getElementById("editNoteTitle").value.trim();
            const updatedDate = document.getElementById("editNoteDate").value;
            const updatedDescription = document.getElementById("editNoteDescription").value.trim();
            const updatedTag = document.getElementById("editNoteTag").value;
            const updatedArchived = document.getElementById("editArchiveNote").checked ? "Yes" : "No";

            if (!updatedTitle || !updatedDate || !updatedDescription || !updatedTag) return;

            notes[selectedNoteIndex] = {
                title: updatedTitle,
                date: updatedDate,
                tag: updatedTag,
                archived: updatedArchived,
                description: updatedDescription
            };

            selectedNoteIndex = null;
            bootstrap.Modal.getInstance(document.getElementById("editNoteModal")).hide();
            renderTable(currentPage);
        });

        renderTable(currentPage);
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
            duration: 0.7,
            ease: "power2.out",
            delay: 0.1
        });
    </script>

</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>