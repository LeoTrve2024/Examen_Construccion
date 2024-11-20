<?php

session_start();

if (!isset($_SESSION["txtusername"])){
    header('Location: '.get_urlBase('index.php'));
    exit;
}

    require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

$conexion  = new conexion($host,$namedb,$userdb,$paswordb);
$pdo = $conexion->obtenerConexion();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tmpdatusuario = $_POST["datusuario"];
  
    $conexion  = new conexion($host,$namedb,$userdb,$paswordb);
    $pdo = $conexion->obtenerConexion();
    
    //si no hay usuario,perfil, password , no deberia grabar con un if 

    try{
        $sentencia = $pdo->prepare("delete from usuarios where username=?; ");
        $sentencia->execute([$tmpdatusuario]);    
        echo $tmpdatusuario."Ha sido Eliminado Con Exito <br>";
    }catch(PDOException $e){
        echo"Hubo un error, no se pudo eliminar...<br>";
        echo $e->getMessage();
    }
exit();

}
?>
<form action="" method="POST">
    <label for="">A quien deseas eliminar</label>
    <input type="text" name="datusuario" id="datusuario">
    <br>
    <button type="submit">Eliminar Usuario</button>
</form>