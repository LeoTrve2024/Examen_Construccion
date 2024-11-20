<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

<br>

<a href="http://127.0.0.1/sistema/vervariables.php">ir a ver variables</a>
</body>
</html>