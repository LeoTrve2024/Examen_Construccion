<?php
session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_urlBase('index.php'));
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo get_css('estilodashboard.css') ?>">
  
</head>
<body>

    <div class="menu">
        <h3>Menu</h3>
        <ul>
            <li><a href="?opcion=Inicio">Inicio</a></li>
            <li><a href="?opcion=Ver">Ver</a></li>
            <li><a href="?opcion=Ingresar">Ingresar</a></li>
            <li><a href="?opcion=Modificar">Modificar</a></li>
            <li><a href="?opcion=Eliminar">Eliminar</a></li>
            <li><a href="<?php echo get_Controllers('logout.php') ?>">Salir</a></li>
        </ul>
    </div>

    <div class="contenido">
        <?php
        if (isset($_GET["opcion"])) {
            $opcion = $_GET["opcion"];

            switch ($opcion) {
                case 'Inicio':
                    echo "<h1>Bienvenido al Sistema</h1>";
                    break;
                case 'Ver':
                    echo "<iframe src='" . get_controllers("controladorUsuario.php") . "'></iframe>";
                    break;
                case 'Ingresar':
                    echo "<iframe src='" . get_controllers("controladorIngresarUsuario.php") . "'></iframe>";
                    break;
                case 'Modificar':
                    echo "<iframe src='" . get_views("modificardatos.php") . "'></iframe>";
                    break;
                case 'Eliminar':
                    echo "<iframe src='" . get_views("eliminardatos.php") . "'></iframe>";
                    break;
                default:
                    echo "<h1>Opción no válida</h1>";
                    break;
            }
        } else {
            echo "<h1>Bienvenido al Sistema</h1>";
        }
        ?>
    </div>
</body>
</html>
