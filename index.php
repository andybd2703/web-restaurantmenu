<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <form action="validar.php" method="post">
        <h1>Sistema de Login</h1>
        <p>Usuario<input type="text" placeholder="Ingrese su nombre" name="usuario"></p>
        <br>
        <p>Contraseña<input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
        <br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>