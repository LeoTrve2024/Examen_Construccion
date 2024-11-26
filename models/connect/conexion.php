<<<<<<< HEAD
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
class conexion{
    //public

    //protegida

    //privada
    private $host;
    private $namedb;
    private $userdb;
    private $paswordb;
    private $charset;

    private $pdo;

    public function __construct($host,$namedb,$userdb,$paswordb,$charset = 'utf8'){
        $this -> host = $host;
        $this -> namedb = $namedb;
        $this -> userdb = $userdb;
        $this -> paswordb = $paswordb;
        $this -> charset = $charset;

        $this->conectar();
    }

    public function conectar(){
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";
    try{
        $this->pdo = new PDO($dsn, $this->userdb, $this->paswordb);
        $this->pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('Hubo un error'.$e->getMessage());

    }
    }

    public function obtenerConexion(){
        return $this->pdo;
    } 

    public function contesta(){
        return "estoy ok";
    }


}
//echo "La conexion esta ok";

?>
=======
<<<<<<< HEAD
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
class conexion{
    //public

    //protegida

    //privada
    private $host;
    private $namedb;
    private $userdb;
    private $paswordb;
    private $charset;

    private $pdo;

    public function __construct($host,$namedb,$userdb,$paswordb,$charset = 'utf8'){
        $this -> host = $host;
        $this -> namedb = $namedb;
        $this -> userdb = $userdb;
        $this -> paswordb = $paswordb;
        $this -> charset = $charset;

        $this->conectar();
    }

    public function conectar(){
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";
    try{
        $this->pdo = new PDO($dsn, $this->userdb, $this->paswordb);
        $this->pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('Hubo un error'.$e->getMessage());

    }
    }

    public function obtenerConexion(){
        return $this->pdo;
    } 

    public function contesta(){
        return "estoy ok";
    }


}
//echo "La conexion esta ok";

?>
=======
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
class Conexion
{

    private $host;
    private $namedb;
    private $userdb;
    private $paswordb;
    private $charset;

    private static $pdo = null;

    public function __construct()
    {
        $this->host = DB_HOST;
        $this->namedb = DB_NAME;
        $this->userdb = DB_USER;
        $this->paswordb = DB_PASS;
        $this->charset = 'utf8';

        if (self::$pdo == null) {
            $this->conectar();
        }
    }

    private function conectar()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";
        try {
            self::$pdo = new PDO($dsn, $this->userdb, $this->paswordb);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Hubo un error' . $e->getMessage());
        }
    }

    public static function obtenerConexion()
    {
        if (self::$pdo == null) {
            new self;
        }
        return self::$pdo;
    }

    public function contesta()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";
        return $dsn;
    }
}
//try{
//$conexion = Conexion::obtenerConexion();
// echo "coenxion con exito ";

//}catch(Exception $e){
//   echo "ERROR : ".$e->getMessage();
//}
?>

>>>>>>> 7be4842 (Tercer hito del proyecto)
>>>>>>> 0a0cb5f (Hito 3 de proyecto)
