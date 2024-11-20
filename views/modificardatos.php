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
    

    if(isset($_POST["custId"])){
   //aplicar el update a la DB
   try{
    $sentencia = $pdo->prepare("update usuarios set username=?, password=?, perfil=? where id=?; ");
    $sentencia->execute([$_POST["datusuario"],$_POST["datpassword"],$_POST["datperfil"],$_POST["custId"]]);    
    echo $tmpdatusuario."Modificacion Con Exito <br>";
}catch(PDOException $e){
    echo"Hubo un error, no se pudo Modificar...<br>";
    echo $e->getMessage();
}
    }else{

    $query = $pdo->query("select id,username,password,perfil from usuarios where username='".$tmpdatusuario."'");
    $fila = $query->fetch(PDO::FETCH_ASSOC);
    ?>
<form action="" method="POST">
<input type="hidden" id="custId" name="custId" value="<?php echo $fila['id']?>">
    <label for="datusuario">Usuario</label>
        <input type="text" name="datusuario" id="datusername" value="<?php echo $fila['username']?>">
    <br>
    <label for="datpassword">Password</label>
        <input type="password" name="datpassword" id="datpassword" value="<?php echo $fila['password']?>">
    <br>
    <label for="datperfil">Perfil</label>
        <input type="text" name="datperfil" id="datperfil" value="<?php echo $fila['perfil']?>">
    <br>
    <button type="submit">Modificar Usuario</button>


</form>
    <?php
    }
exit();

}
?>

<form action="" method="POST">
    <label for="">¿Que usuario deseas modificar?</label>
    <input type="text" name="datusuario" id="datusuario">
    <br>
    <button type="submit">Modificar Usuario</button>
</form>