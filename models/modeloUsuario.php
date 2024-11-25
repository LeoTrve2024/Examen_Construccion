<?php
require_once $_SERVER['DOCUMENT_ROOT'] .'/models/connect/conexion.php';
class modeloUsuario
{

    private $conexion;
    //al instanciar la clase debo obtener la conexion 
    public function  __construct()
    {
        $this->conexion = Conexion::obtenerConexion();
    }
    //debe hacer un metodo para hacer select
    public function obtenerUsuarios()
    {
        $query = $this->conexion->query('SELECT id, username, password, perfil FROM usuarios');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    //debe hacer un metodo para hacer insert
    public function insertarUsuario($username, $password, $perfil)
    {
        $query = 'INSERT INTO usuarios(username, password, perfil) VALUES (:username, :password, :perfil)';
        $stmt = $this->conexion->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':perfil', $perfil);
        return $stmt->execute();
    }
    
    //debo hacer un metodo para hacer delete

    //debo hacer un metodo para hacer update
}
