<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    
    <center>
    
    <a href="pagina.php" id="detalles">Página inicial</a>
    
    <br>
    
    <form action="registro.php" method="post">
        <input type="text" name="Nombre" placeholder="Nombre" required>
        <input type="text" name="NombreUsuario" placeholder="Nombre de usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="password" name="Password" placeholder="Repite contraseña" required>
        <input type="text" name="Correo" placeholder="Correo" required>
        <input type="text" name="Direccion" placeholder="Dirección" required>
        <input type="submit" value="REGISTRARSE" id="detalles">
    </form>
    
    </center>

</body>
</html>