<?php
session_start();

$zipExtractPath = __DIR__ . '/temp_images/';

// Check if there are any folders inside temp_images/
$folders = array_filter(glob($zipExtractPath . '/*'), 'is_dir');

if (!empty($folders)) {
    deleteAllFolders($zipExtractPath);
    echo json_encode(['status' => 'All folders deleted']);
} else {
    echo json_encode(['status' => 'No folders to delete']);
}

// Function to delete all folders inside temp_images/
function deleteAllFolders($path)
{
    $folders = array_diff(scandir($path), ['.', '..']);

    foreach ($folders as $folder) {
        $folderPath = $path . DIRECTORY_SEPARATOR . $folder;
        if (is_dir($folderPath)) {
            deleteFolder($folderPath);
        }
    }
}

// Recursive function to delete a folder
function deleteFolder($folderPath)
{
    $files = array_diff(scandir($folderPath), ['.', '..']);
    foreach ($files as $file) {
        $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
        is_dir($filePath) ? deleteFolder($filePath) : unlink($filePath);
    }
    rmdir($folderPath);
}
