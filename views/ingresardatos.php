<<<<<<< HEAD
<?php

session_start();

if (!isset($_SESSION["txtusername"])){
    header('Location: '.get_urlBase('index.php'));
    exit;
}

    require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmpdatusuario = $_POST["datusuario"];
        $tmpdatpassword = $_POST["datpassword"];
        $tmpdatperfil = $_POST["datperfil"];

        $conexion  = new conexion($host,$namedb,$userdb,$paswordb);
        $pdo = $conexion->obtenerConexion();
        
        //si no hay usuario,perfil, password , no deberia grabar con un if 

        try{
            $sentencia = $pdo->prepare("INSERT INTO usuarios( username, password, perfil) VALUES ( ?, ?, ?);");
            $sentencia->execute([$tmpdatusuario,$tmpdatpassword,$tmpdatperfil]);    
            echo "Usuario Registrado Con Exito <br>";
        }catch(PDOException $e){
            echo"Hubo un error ...<br>";
            echo $e->getMessage();
        }
   exit();
    
    }








//$query = $pdo->query("select id,username,password,perfil from usuarios");

?>
<form action="" method="POST">
    <label for="datusuario">Usuario</label>
        <input type="text" name="datusuario" id="datusername">
    <br>
    <label for="datpassword">Password</label>
        <input type="password" name="datpassword" id="datpassword">
    <br>
    <label for="datperfil">Perfil</label>
        <input type="text" name="datperfil" id="datperfil">
    <br>
    <button type="submit">Registrar Usuario</button>


</form>
=======
<<<<<<< HEAD
<?php

session_start();

if (!isset($_SESSION["txtusername"])){
    header('Location: '.get_urlBase('index.php'));
    exit;
}

    require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmpdatusuario = $_POST["datusuario"];
        $tmpdatpassword = $_POST["datpassword"];
        $tmpdatperfil = $_POST["datperfil"];

        $conexion  = new conexion($host,$namedb,$userdb,$paswordb);
        $pdo = $conexion->obtenerConexion();
        
        //si no hay usuario,perfil, password , no deberia grabar con un if 

        try{
            $sentencia = $pdo->prepare("INSERT INTO usuarios( username, password, perfil) VALUES ( ?, ?, ?);");
            $sentencia->execute([$tmpdatusuario,$tmpdatpassword,$tmpdatperfil]);    
            echo "Usuario Registrado Con Exito <br>";
        }catch(PDOException $e){
            echo"Hubo un error ...<br>";
            echo $e->getMessage();
        }
   exit();
    
    }








//$query = $pdo->query("select id,username,password,perfil from usuarios");

?>
<form action="" method="POST">
    <label for="datusuario">Usuario</label>
        <input type="text" name="datusuario" id="datusername">
    <br>
    <label for="datpassword">Password</label>
        <input type="password" name="datpassword" id="datpassword">
    <br>
    <label for="datperfil">Perfil</label>
        <input type="text" name="datperfil" id="datperfil">
    <br>
    <button type="submit">Registrar Usuario</button>


</form>
=======
<?php
session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: '.get_urlBase('index.php'));
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];

    if (empty($tmpdatusuario) || empty($tmpdatpassword) || empty($tmpdatperfil)) {
        $message = "<p class='message error'>Todos los campos son obligatorios</p>";
    } else {
        $conexion  = new conexion($host, $namedb, $userdb, $paswordb);
        $pdo = $conexion->obtenerConexion();

        try {
            $sentencia = $pdo->prepare("INSERT INTO usuarios(username, password, perfil) VALUES (?, ?, ?);");
            $sentencia->execute([$tmpdatusuario, $tmpdatpassword, $tmpdatperfil]);
            $message = "<p class='message success'>Usuario Registrado Con Éxito</p>";
        } catch (PDOException $e) {
            $message = "<p class='message error'>Error: " . $e->getMessage() . "</p>";
        }
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="<?php echo get_urlBase('css/estiloIngresarDatos.css') ?>">
</head>
<body>
    <div class="form-container">
        <h2>Registrar Usuario</h2>
        <?php echo $message; ?>
        <form action="" method="POST">
            <label for="datusuario">Usuario</label>
            <input type="text" name="datusuario" id="datusername" required>

            <label for="datpassword">Password</label>
            <input type="password" name="datpassword" id="datpassword" required>

            <label for="datperfil">Perfil</label>
            <input type="text" name="datperfil" id="datperfil" required>

            <button type="submit">Registrar Usuario</button>
        </form>
    </div>
</body>
</html>
>>>>>>> 7be4842 (Tercer hito del proyecto)
>>>>>>> 0a0cb5f (Hito 3 de proyecto)
