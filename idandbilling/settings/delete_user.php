<?php

include("../config/dbcon.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $userId = $_POST['userId'];

    if (!empty($userId)) {
        try {
            $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
            $stmt->execute(['id' => $userId]);


            header("Location: /chongkhlenggraphics/idandbilling/settings/");
            exit;
        } catch (PDOException $e) {
            header("Location: users.php?error=1");
            exit;
        }
    } else {
        header("Location: users.php?error=1");
        exit;
    }
} else {
    header("Location: users.php");
    exit;
}
