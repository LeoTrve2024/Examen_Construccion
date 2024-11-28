<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/controladorValidarSesion.php';

// Solo inicia sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirige al dashboard si ya hay sesión iniciada.
if (isset($_SESSION["txtusername"])) {
    header('Location: ' . get_views('dashboard.php'));
    exit();
}

// Muestra la vista principal.
require_once $_SERVER['DOCUMENT_ROOT'].'/views/vistaIndex.php';
