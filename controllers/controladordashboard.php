<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';
if (!isset($_SESSION['txtusername'])) {
    header('Location: ' . get_views('vistaIndex.php'));
    exit();
}
$opcion = $_GET['opcion'] ?? 'Inicio';
switch ($opcion) {
    case 'Inicio':
        $contenido = "<h1>Bienvenido al Sistema</h1>";
        break;
    case 'Ver':
        $contenido = "<iframe src='" . get_controllers('controladorUsuario.php') . "'></iframe>";
        break;
    case 'Ingresar':
        $contenido = "<iframe src='" . get_controllers('controladorIngresarUsuario.php') . "'></iframe>";
        break;
    case 'Modificar':
        $contenido = "<iframe src='" . get_controllers('controladorActualizarUsuario.php') . "'></iframe>";
        break;
    case 'Eliminar':
        $contenido = "<iframe src='" . get_controllers('controladorEliminarUsuario.php') . "'></iframe>";
        break;
    default:
        $contenido = "<h1>Opción no válida</h1>";
        break;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/views/dashboard.php';
