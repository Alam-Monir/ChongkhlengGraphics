<?php
require '../../../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;

include('../../../config/dbcon.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

if (!isset($_FILES['excelFile']) || !isset($_FILES['zipFile'])) {
    echo json_encode(['error' => 'No files received']);
    exit;
}

$excelFile = $_FILES['excelFile']['tmp_name'];
$zipFile = $_FILES['zipFile']['tmp_name'];
$zipExtractPath = __DIR__ . '/temp_images/';

// Ensure directory exists
if (!is_dir($zipExtractPath)) {
    mkdir($zipExtractPath, 0777, true);
}

// Extract ZIP directly into temp_images/
$zip = new ZipArchive;
if ($zip->open($zipFile) === TRUE) {
    $zip->extractTo($zipExtractPath);
    $zip->close();
} else {
    echo json_encode(['error' => 'Failed to extract ZIP']);
    exit;
}

// Detect the actual folder that was extracted
$extractedFolders = array_diff(scandir($zipExtractPath), ['.', '..']);
if (count($extractedFolders) === 1) {
    $detectedFolder = reset($extractedFolders);
    $expectedPath = $zipExtractPath . $detectedFolder . '/';
} else {
    $expectedPath = $zipExtractPath;
}

// Function to convert Excel serial date to readable date format
function convertExcelDate($excelDate)
{
    if (is_numeric($excelDate)) {
        return Date::excelToDateTimeObject($excelDate)->format('d/m/Y');
    }
    return $excelDate;
}

// Read Excel file
try {
    $spreadsheet = IOFactory::load($excelFile);
    $sheet = $spreadsheet->getActiveSheet();
    $data = [];

    foreach ($sheet->getRowIterator(2) as $row) {
        $cells = [];
        foreach ($row->getCellIterator() as $cell) {
            $cells[] = $cell->getValue();
        }

        // Ensure image path points to the correct extracted folder
        $imageName = trim($cells[0]);
        $fullImagePath = $expectedPath . $imageName;
        $relativeImagePath = str_replace(__DIR__ . '/', '', $fullImagePath);

        $data[] = [
            'name' => $cells[1] ?? '',
            'class' => $cells[2] ?? '',
            'dob' => isset($cells[3]) ? convertExcelDate($cells[3]) : '',
            'bloodGroup' => $cells[4] ?? '',
            'father' => $cells[5] ?? '',
            'address' => $cells[6] ?? '',
            'contact' => $cells[7] ?? '',
            'validity' => isset($cells[8]) ? convertExcelDate($cells[8]) : '',
            'image' => file_exists($fullImagePath) ? $relativeImagePath : 'default.jpg'
        ];
    }

    echo json_encode($data);
} catch (Exception $e) {
    echo json_encode(['error' => 'Error reading Excel file']);
    exit;
}
