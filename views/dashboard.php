<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/controladordashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo get_css('estilodashboard.css'); ?>">
</head>
<body>
    <div class="menu">
        <?php 

        require_once $_SERVER['DOCUMENT_ROOT'].'/views/menu.php'; 
        ?>
    </div>
    <div class="contenido">
        <?php
        echo $contenido;
        ?>
    </div>
</body>
</html>
