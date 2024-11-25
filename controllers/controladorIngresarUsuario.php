<?php
session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: '.get_urlBase('index.php'));
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/models/modeloUsuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/views/vistaIngresarUsuario.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];

    $modeloUsuario= new modeloUsuario();
    try{
        $modeloUsuario->insertarUsuario($tmpdatusuario,$tmpdatpassword,$tmpdatperfil);
        $mensaje= "Usuario registrado con exito";
    }catch(PDOException $e){
        $mensaje=  "Hubo un error ...<br>".$e->getMessage();
    }
   
}

mostrarFormularioIngreso($mensaje);
?>