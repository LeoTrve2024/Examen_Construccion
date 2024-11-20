<?php
session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: '.get_urlBase('index.php'));
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

$conexion = new conexion($host, $namedb, $userdb, $paswordb);
$conexion->conectar();

$pdo = $conexion->obtenerConexion();

try {
    $query = $pdo->query("SELECT id, username, password, perfil FROM usuarios");
} catch (PDOException $e) {
    die("Error al ejecutar la consulta: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="<?php echo get_urlBase('css/estiloverdatos.css') ?>">
</head>
<body>
<div class="content">
    <!-- Título del listado -->
    <h2>LISTA DE USUARIOS DEL SISTEMA</h2>

    <!-- Contenedor de la tabla -->
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ADMIN</td>
                    <td>1234</td>
                    <td>admin</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>prueba</td>
                    <td>1234</td>
                    <td>adminsupreme</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>prueba2</td>
                    <td>1234</td>
                    <td>admin2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
