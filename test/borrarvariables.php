<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>


Se borraron todas las variables<br>

<a href="http://127.0.0.1/sistema/vervariables.php">Ver Variables </a>
<a href="http://127.0.0.1/sistema/test.php">Volver a grabar las variables </a>

</body>
</html>