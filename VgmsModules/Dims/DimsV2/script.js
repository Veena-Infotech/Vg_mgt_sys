const breadcrumbs = document.getElementById('breadcrumbs');
const directoryContent = document.getElementById('directory-content');
let currentPath = ''; // Tracks the current directory path

// Folder Icon: <i class="bi bi-folder"></i>
// File Icon: <i class="bi bi-file-earmark"></i>

function loadDirectory() {
    fetch(`server.php?current_path=${encodeURIComponent(currentPath)}`)
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                directoryContent.innerHTML = '';
                // Render folders
                data.folders.forEach(folder => {
                    const folderDiv = document.createElement('div');
                    folderDiv.className = 'col-12 col-sm-6 col-md-4 col-lg-3 folder';
                    folderDiv.innerHTML = `
                        <i class="bi bi-folder" style="font-size: 40px;"></i>
                        <p class="mt-2">${folder}</p>
                    `;
                    folderDiv.onclick = () => {
                        currentPath = currentPath ? `${currentPath}/${folder}` : folder;
                        updateBreadcrumbs();
                        loadDirectory();
                    };
                    directoryContent.appendChild(folderDiv);
                });

                // Render files
                data.files.forEach(file => {
                    const fileDiv = document.createElement('div');
                    fileDiv.className = 'col-12 col-sm-6 col-md-4 col-lg-3 file';
                    fileDiv.innerHTML = `
                        <i class="bi bi-file-earmark" style="font-size: 40px;"></i>
                        <p class="mt-2">${file}</p>
                    `;
                    fileDiv.onclick = () => previewFile(file);
                    directoryContent.appendChild(fileDiv);
                });
            } else {
                alert(data.error || 'Failed to load directory.');
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
            alert('Failed to load directory.');
        });
}


function previewFile(filePath) {
    console.log("File path:", filePath);
    console.log("Current path:", currentPath);

    // Construct the full path
    let newPath = `uploads/${currentPath ? currentPath + '/' : ''}${filePath}`;
    let fullURL = `http://localhost/vg_mgt_sys/VGMsModules/Dims/DimsV2/${newPath}`;
    console.log("Full URL:", fullURL);

    // Open the file in a new tab
    const popup = window.open(fullURL, "_blank");

    // Check if the popup opened successfully
    if (!popup || popup.closed || typeof popup.closed === 'undefined') {
        alert("Popup blocked! Please allow popups for this website.");
    }
}

document.getElementById('preview-close').onclick = () => {
    document.getElementById('preview-modal').style.display = 'none';
};

function updateBreadcrumbs() {
    breadcrumbs.innerHTML = '';
    const parts = currentPath.split('/').filter(Boolean);
    parts.forEach((part, index) => {
        const span = document.createElement('span');
        span.textContent = part;
        span.onclick = () => {
            currentPath = parts.slice(0, index + 1).join('/');
            updateBreadcrumbs();
            loadDirectory();
        };
        breadcrumbs.appendChild(span);
        breadcrumbs.appendChild(document.createTextNode(' / '));
    });

    const rootSpan = document.createElement('span');
    rootSpan.textContent = 'Root/';
    rootSpan.onclick = () => {
        currentPath = '';
        updateBreadcrumbs();
        loadDirectory();
    };
    breadcrumbs.insertBefore(rootSpan, breadcrumbs.firstChild);
}

document.getElementById('create-folder-form').addEventListener('submit', e => {
    e.preventDefault();
    const folderName = document.getElementById('folder-name').value.trim();
    if (!folderName) return;

    fetch('server.php', {
        method: 'POST',
        body: new URLSearchParams({
            action: 'create_folder',
            folder_name: folderName,
            current_path: currentPath
        })
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                loadDirectory();
                $('#createFolderModal').modal('hide');
            } else {
                alert(data.error || 'Failed to create folder');
            }
        });
});

document.getElementById('upload-form').addEventListener('submit', e => {
    e.preventDefault();
    const files = document.getElementById('file-input').files;
    if (!files.length) return;

    const formData = new FormData();
    formData.append('action', 'upload_files');
    formData.append('current_path', currentPath);
    Array.from(files).forEach(file => formData.append('files[]', file));

    fetch('server.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                loadDirectory();
                $('#uploadFilesModal').modal('hide');
            } else {
                alert(data.error || 'Failed to upload files');
            }
        });
});



loadDirectory();
