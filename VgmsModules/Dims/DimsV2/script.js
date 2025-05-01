const breadcrumbs = document.getElementById('breadcrumbs');
const directoryContent = document.getElementById('directory-content');
let currentPath = ''; // Tracks the current directory path

function loadDirectory() {
    fetch(`server.php?current_path=${encodeURIComponent(currentPath)}`)
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                directoryContent.innerHTML = '';

                const isInArchive = currentPath.split('/')[0] === 'archive';

                // Render folders
                data.folders.forEach(folder => {
                    const folderDiv = document.createElement('div');
                    folderDiv.className = 'col-12 col-sm-6 col-md-4 col-lg-3 folder';
                    folderDiv.innerHTML = `
                        <i class="bi bi-folder" style="font-size: 40px; cursor: pointer;"></i>
                        <p class="mt-2" style="cursor: pointer;">${folder}</p>
                        ${!isInArchive ? `
                        <button class="btn btn-sm btn-outline-secondary rename-btn mt-1" data-name="${folder}" data-type="folder">
                            <i class="bi bi-pencil"></i> Rename
                        </button>
                        <button class="btn btn-sm btn-outline-warning archive-btn mt-1" data-name="${folder}" data-type="folder">
                            <i class="bi bi-archive"></i> Archive
                        </button>` : `
                        <button class="btn btn-sm btn-outline-success restore-btn mt-1" data-name="${folder}" data-type="folder">
                            <i class="bi bi-arrow-clockwise"></i> Restore
                        </button>`}
                    `;

                    folderDiv.querySelector('i').onclick = () => {
                        currentPath = currentPath ? `${currentPath}/${folder}` : folder;
                        updateBreadcrumbs();
                        loadDirectory();
                    };
                    folderDiv.querySelector('p').onclick = () => {
                        currentPath = currentPath ? `${currentPath}/${folder}` : folder;
                        updateBreadcrumbs();
                        loadDirectory();
                    };

                    if (!isInArchive) {
                        folderDiv.querySelector('.archive-btn').onclick = () => {
                            archiveItem(folder, 'folder');
                        };
                    } else {
                        folderDiv.querySelector('.restore-btn').onclick = () => {
                            showRestoreModal(folder, 'folder');
                        };
                    }

                    directoryContent.appendChild(folderDiv);
                });

                // Render files
                data.files.forEach(file => {
                    const fileDiv = document.createElement('div');
                    fileDiv.className = 'col-12 col-sm-6 col-md-4 col-lg-3 file';
                    fileDiv.innerHTML = `
                        <i class="bi bi-file-earmark" style="font-size: 40px;"></i>
                        <p class="mt-2">${file}</p>
                        ${!isInArchive ? `
                        <button class="btn btn-sm btn-outline-warning archive-btn mt-1" data-name="${file}" data-type="file">
                            <i class="bi bi-archive"></i> Archive
                        </button>` : `
                        <button class="btn btn-sm btn-outline-success restore-btn mt-1" data-name="${file}" data-type="file">
                            <i class="bi bi-arrow-clockwise"></i> Restore
                        </button>`}
                    `;

                    fileDiv.onclick = () => previewFile(file);

                    if (!isInArchive) {
                        fileDiv.querySelector('.archive-btn').onclick = (e) => {
                            e.stopPropagation();
                            archiveItem(file, 'file');
                        };
                    } else {
                        fileDiv.querySelector('.restore-btn').onclick = (e) => {
                            e.stopPropagation();
                            showRestoreModal(file, 'file');
                        };
                    }

                    directoryContent.appendChild(fileDiv);
                });

                if (!isInArchive) {
                    // Attach rename logic
                    document.querySelectorAll('.rename-btn').forEach(btn => {
                        btn.addEventListener('click', e => {
                            e.stopPropagation();
                            const itemName = btn.getAttribute('data-name');
                            const itemType = btn.getAttribute('data-type');

                            document.getElementById('rename-item-name').value = itemName;
                            document.getElementById('rename-item-type').value = itemType;
                            document.getElementById('rename-form').setAttribute('data-old-name', itemName);

                            $('#renameModal').modal('show');
                        });
                    });
                }

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
    let newPath = `uploads/${currentPath ? currentPath + '/' : ''}${filePath}`;
    let fullURL = `http://localhost/vg_mgt_sys/VGMsModules/Dims/DimsV2/${newPath}`;
    const popup = window.open(fullURL, "_blank");

    if (!popup || popup.closed || typeof popup.closed === 'undefined') {
        alert("Popup blocked! Please allow popups for this website.");
    }
}

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

// Rename logic
document.getElementById('rename-form').addEventListener('submit', e => {
    e.preventDefault();

    const newName = document.getElementById('rename-item-name').value.trim();
    const itemType = document.getElementById('rename-item-type').value;
    const oldName = document.getElementById('rename-form').getAttribute('data-old-name');

    if (!newName || !oldName) return;

    fetch('server.php', {
        method: 'POST',
        body: new URLSearchParams({
            action: 'rename_item',
            item_name: oldName,
            new_name: newName,
            item_type: itemType,
            current_path: currentPath
        })
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                $('#renameModal').modal('hide');
                loadDirectory();
            } else {
                alert(data.error || 'Rename failed');
            }
        });
});

// Archive logic
function archiveItem(itemName, itemType) {
    if (confirm(`Are you sure you want to archive this ${itemType}: ${itemName}?`)) {
        fetch('server.php', {
            method: 'POST',
            body: new URLSearchParams({
                action: 'archive_item',
                item_name: itemName,
                item_type: itemType,
                current_path: currentPath
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert(`${itemType.charAt(0).toUpperCase() + itemType.slice(1)} archived successfully.`);
                loadDirectory();
            } else {
                alert(data.error || 'Failed to archive item');
            }
        });
    }
}

// Restore logic
function showRestoreModal(itemName, itemType) {
    document.getElementById('restore-item-name').value = itemName;
    document.getElementById('restore-item-type').value = itemType;
    document.getElementById('restore-form').setAttribute('data-old-name', itemName);

    $('#restoreModal').modal('show');
}

document.getElementById('restore-form').addEventListener('submit', e => {
    e.preventDefault();

    const itemName = document.getElementById('restore-item-name').value;
    const itemType = document.getElementById('restore-item-type').value;

    fetch('server.php', {
        method: 'POST',
        body: new URLSearchParams({
            action: 'restore_item',
            item_name: itemName,
            item_type: itemType,
            current_path: currentPath
        })
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                $('#restoreModal').modal('hide');
                loadDirectory();
            } else {
                alert(data.error || 'Restore failed');
            }
        });
});

loadDirectory();
