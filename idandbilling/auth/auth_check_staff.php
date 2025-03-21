<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /chongkhlenggraphics/idandbilling/auth/login/");
    exit;
}
