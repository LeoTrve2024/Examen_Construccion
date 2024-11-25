<?php
function mostrarUsuarios($usuarios)
{

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuarios</title>
        <link rel="stylesheet" href="<?php echo get_urlBase('css/estiloverdatos.css') ?>">
    </head>
    
    <h2>Lista de usurios del sistema v2</h2>
    <br>
    <table border="1 ">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>perfil</th>
        </tr>
        <?php
        foreach ($usuarios as $usuario) {
        ?>
            <tr>
                <td><?php echo $usuario['id'] ?></td>
                <td><?php echo $usuario['username'] ?></td>
                <td><?php echo $usuario['password'] ?></td>
                <td><?php echo $usuario['perfil'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
//mostrarUsuarios(null);
?>