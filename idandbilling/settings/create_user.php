<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("../config/dbcon.php");

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$uuid = uniqid('', true);
$firstName = $data['firstName'] ?? '';
$lastName = $data['lastName'] ?? '';
$email = $data['email'] ?? '';
$contact = $data['contact'] ?? '';
$address = $data['address'] ?? '';
$password = $data['password'] ?? '';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$isAdmin = 0;
$now = date('Y-m-d H:i:s');

try {

    $emailCheck = $pdo->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
    $emailCheck->execute([':email' => $email]);
    if ($emailCheck->fetch()) {
        echo json_encode(['success' => false, 'message' => 'User with this email already exists.']);
        exit;
    }

    $contactCheck = $pdo->prepare("SELECT id FROM users WHERE contact = :contact LIMIT 1");
    $contactCheck->execute([':contact' => $contact]);
    if ($contactCheck->fetch()) {
        echo json_encode(['success' => false, 'message' => 'User with this contact already exists.']);
        exit;
    }

    $stmt = $pdo->prepare("INSERT INTO users 
        (id, firstName, lastName, email, contact, address, hashedPassword, isAdmin, createdAt, updatedAt) 
        VALUES (:id, :firstName, :lastName, :email, :contact, :address, :hashedPassword, :isAdmin, :createdAt, :updatedAt)");

    $stmt->execute([
        ':id' => $uuid,
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':contact' => $contact,
        ':address' => $address,
        ':hashedPassword' => $hashedPassword,
        ':isAdmin' => $isAdmin,
        ':createdAt' => $now,
        ':updatedAt' => $now
    ]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
