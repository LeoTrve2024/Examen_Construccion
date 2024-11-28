<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v_username = $_POST["txtusername"] ?? '';
    $v_password = $_POST["txtpassword"] ?? '';

    if ($v_username === "admin" && $v_password === "1234") {
        $_SESSION["txtusername"] = $v_username;
        $_SESSION["txtpassword"] = $v_password;

        // Redirección al dashboard
        header('Location: ' . get_views('dashboard.php'));
        exit();
    } else {
        // Redirección a clave equivocada
        header('Location: ' . get_views('claveequivocada.php'));
        exit();
    }
}
