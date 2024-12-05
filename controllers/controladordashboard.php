<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

if (!isset($_SESSION['txtusername'])) {
    header('Location: ' . get_views('vistaLogin.php'));
    exit();
}

$opcion = $_GET['opcion'] ?? 'Inicio';
$contenido='';
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
}


//echo get_views('vistaDashboard.php');
include get_views_disk('vistaDashboard.php');
//include $_SERVER['DOCUMENT_ROOT'].'/views/vistaDashboard.php';
/*echo "estas dentro del sistema";
echo "<br>";
echo get_views('vistaDashboard.php');
*/
?>