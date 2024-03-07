<?php

    require_once ("controlador/controladorLog.php");
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"><br>
    <label for="pass" >Contraseña</label>
    <input type="password" name="pass"><br><input type="submit" name="log" value="Log in">
    <label for="registrar">No tienes cuenta</label>
    <input type="submit" name="registrar" value="Sing in"><br>

</form>
</body>
</html>
