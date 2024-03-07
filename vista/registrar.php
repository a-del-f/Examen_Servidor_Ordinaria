<?php
require_once "../controlador/controladorRegister.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="../index.php" >Back</a>
<form method="post">
    <label for="nombre" >Nombre</label>
    <input type="text" id="nombre" name="nombre" ><br>
    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos" ><br>
    <label for="domicilio"> Domicilio </label>
    <input type="text" id="domicilio" name="domicilio"><br>
    <label for="telefono">Telefono</label>
    <input type="text" id="telefono" name="telefono"><br>
    <label for="email">Email</label>
    <input type="text" id="email" name="email"><br>
    <input type="submit" name="btn" ><br>
</form>
</body>
</html>
