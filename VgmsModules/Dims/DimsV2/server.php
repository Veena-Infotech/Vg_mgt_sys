<?php
$basePath = 'uploads/';
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Ensure base path exists
if (!is_dir($basePath)) {
    mkdir($basePath, 0777, true);
}

// ========================
// Handle POST Requests
// ========================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Create Folder
    if (isset($_POST['action']) && $_POST['action'] === 'create_folder') {
        $currentPath = realpath($basePath . ($_POST['current_path'] ?? ''));
        $folderName = basename($_POST['folder_name'] ?? '');

        if ($folderName && $currentPath && strpos($currentPath, realpath($basePath)) === 0) {
            $newFolderPath = $currentPath . '/' . $folderName;
            if (!file_exists($newFolderPath)) {
                mkdir($newFolderPath, 0777, true);
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Folder already exists']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid folder name or path']);
        }
        exit;
    }

    // Upload Files
    if (isset($_POST['action']) && $_POST['action'] === 'upload_files') {
        $currentPath = realpath($basePath . ($_POST['current_path'] ?? ''));

        if ($currentPath && strpos($currentPath, realpath($basePath)) === 0) {
            foreach ($_FILES['files']['tmp_name'] as $index => $tmpName) {
                $originalFileName = $_FILES['files']['name'][$index];
                $fileName = str_replace(' ', '-', $originalFileName);
                $fileName = preg_replace('/[^A-Za-z0-9\-_\.]/', '', $fileName);

                $destination = $currentPath . '/' . $fileName;

                if (!move_uploaded_file($tmpName, $destination)) {
                    echo json_encode(['success' => false, 'error' => 'Failed to upload ' . $originalFileName]);
                    exit;
                }
            }
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid upload path']);
        }
        exit;
    }

    // Rename Item
    if (isset($_POST['action']) && $_POST['action'] === 'rename_item') {
        $currentPath = realpath($basePath . ($_POST['current_path'] ?? ''));
        $itemName = basename($_POST['item_name'] ?? '');
        $newName = basename($_POST['new_name'] ?? '');
        $itemType = $_POST['item_type'] ?? '';

        // Debug log
        error_log("Rename request: currentPath: $currentPath, itemName: $itemName, newName: $newName, itemType: $itemType");

        if ($itemName && $newName && $currentPath && strpos($currentPath, realpath($basePath)) === 0) {
            $oldItemPath = $currentPath . '/' . $itemName;
            $newItemPath = $currentPath . '/' . $newName;

            if ($itemType === 'folder' && is_dir($oldItemPath)) {
                if (!file_exists($newItemPath)) {
                    rename($oldItemPath, $newItemPath);
                    echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false, 'error' => 'Folder with that name already exists']);
                }
            } elseif ($itemType === 'file' && is_file($oldItemPath)) {
                if (!file_exists($newItemPath)) {
                    rename($oldItemPath, $newItemPath);
                    echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false, 'error' => 'File with that name already exists']);
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'Invalid item type or path']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid path or name']);
        }
        exit;
    }
}

// ========================
// Handle GET Requests
// ========================
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // List Directory
    if (isset($_GET['current_path'])) {
        $currentPath = realpath($basePath . ($_GET['current_path'] ?? ''));

        if ($currentPath && strpos($currentPath, realpath($basePath)) === 0) {
            $items = array_diff(scandir($currentPath), ['.', '..']);
            $folders = array_filter($items, fn($item) => is_dir($currentPath . '/' . $item));
            $files = array_filter($items, fn($item) => is_file($currentPath . '/' . $item));
            echo json_encode([
                'success' => true,
                'folders' => array_values($folders),
                'files' => array_values($files)
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid path']);
        }
        exit;
    }

    // Preview File
    if (isset($_GET['preview_file'])) {
        $filePath = realpath($basePath . $_GET['preview_file']);

        if ($filePath && strpos($filePath, realpath($basePath)) === 0 && file_exists($filePath)) {
            $fileType = mime_content_type($filePath);
            $response = ['success' => true, 'fileType' => $fileType];

            if ($fileType === 'application/pdf' || strpos($fileType, 'image/') === 0) {
                $response['fileURL'] = '/' . $basePath . $_GET['preview_file'];
            } else {
                $response['fileURL'] = '/' . $basePath . $_GET['preview_file'];
            }

            echo json_encode($response);
        } else {
            echo json_encode(['success' => false, 'error' => 'File not found or invalid path']);
            error_log("RAW POST: " . print_r($_POST, true));
            error_log("Current path: $currentPath");
            error_log("Old item path: $oldItemPath");
            error_log("New item path: $newItemPath");
            
        }
        exit;
    }
}
