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
    <link rel="stylesheet" href="<?php echo get_urlBase('css/estilodashboard.css') ?>">
    <style>
        /* Ajustes generales */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh; /* Ocupa toda la altura de la pantalla */
            font-family: Arial, sans-serif;
        }

        /* Menú lateral */
        .menu {
            width: 180px; /* Ancho reducido del menú */
            background-color: #333;
            color: #fff;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .menu h3 {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .menu ul li {
            margin: 10px 0;
        }

        .menu ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 10px;
            display: block;
            text-align: center;
            font-size: 14px;
            border-radius: 4px;
        }

        .menu ul li a:hover {
            background-color: #444;
        }

        /* Contenido principal */
        .contenido {
            flex: 1; /* Toma el espacio restante */
            padding: 10px;
            background-color: #f4f4f4;
            overflow-y: auto;
            box-sizing: border-box;
        }

        iframe {
            width: 100%; /* Ajusta el ancho del iframe al contenedor */
            height: calc(100vh - 40px); /* Resta espacio para márgenes o paddings */
            border: none;
        }
    </style>
</head>
<body>
    <!-- Menú lateral -->
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

    <!-- Contenido principal -->
    <div class="contenido">
        <?php
        if (isset($_GET["opcion"])) {
            $opcion = $_GET["opcion"];

            switch ($opcion) {
                case 'Inicio':
                    echo "<h1>Bienvenido al Sistema</h1>";
                    break;
                case 'Ver':
                    echo "<iframe src='" . get_views("verdatos.php") . "'></iframe>";
                    break;
                case 'Ingresar':
                    echo "<iframe src='" . get_views("ingresardatos.php") . "'></iframe>";
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

