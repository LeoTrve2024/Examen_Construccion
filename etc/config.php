<<<<<<< HEAD
<?php

$_urlBase = "http://sistema.test/";
$host = 'localhost'; //127.0.0.1
$namedb = 'dbsistema';
$userdb = 'root';
$paswordb = ''; 


function get_UrlBase($arg1){
    return $GLOBALS['_urlBase'].$arg1;
}

function get_views($arg1){
    return $GLOBALS['_urlBase'].'views/'.$arg1;
}

function get_models($arg1){
    return $GLOBALS['_urlBase'].'models/'.$arg1;
}

function get_controllers($arg1){
    return $GLOBALS['_urlBase'].'controllers/'.$arg1;
}

//echo $_urlBase;
//echo "<br>";
//echo get_UrlBase('pagina.html');

<?php

$_urlBase = "http://sistema.test/";
$host = 'localhost'; //127.0.0.1
$namedb = 'dbsistema';
$userdb = 'root';
$paswordb = ''; 


function get_UrlBase($arg1){
    return $GLOBALS['_urlBase'].$arg1;
}

function get_views($arg1){
    return $GLOBALS['_urlBase'].'views/'.$arg1;
}

function get_models($arg1){
    return $GLOBALS['_urlBase'].'models/'.$arg1;
}

function get_controllers($arg1){
    return $GLOBALS['_urlBase'].'controllers/'.$arg1;
}

//echo $_urlBase;
//echo "<br>";
//echo get_UrlBase('pagina.html');
=======
<?php

define('URL_BASE', "http://sistema.test/");
define('DB_HOST','localhost');
define('DB_NAME','dbsistema');
define('DB_USER','root');
define('DB_PASS','') ; 


function get_path($type,$arg1){
    $basePaths = ['base'=> URL_BASE, 
    'views'=>URL_BASE.'views/',
    'models'=>URL_BASE.'models/',
    'css'=>URL_BASE.'css/',
    'controllers'=>URL_BASE.'controllers/'];
    return $basePaths[$type].$arg1;
}
function get_urlBase($arg1) {
    return get_path('base',$arg1);
}
function get_views($arg1){
    return get_path('views',$arg1);
}
function get_css($arg1){
    return get_path('css',$arg1);
}
function get_models($arg1){
    return get_path('models',$arg1);
}

function get_controllers($arg1){
    return get_path('controllers',$arg1);
}

//echo URL_BASE;
//echo "<br>";
//echo get_UrlBase('pagina.html');
>>>>>>> 7be4842 (Tercer hito del proyecto)
>>>>>>> 0a0cb5f (Hito 3 de proyecto)
?>