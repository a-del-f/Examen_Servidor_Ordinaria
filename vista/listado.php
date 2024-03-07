<?php
require_once "../modelo/Conexion.php";
session_start();
if(isset($_SESSION["user"])){
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
<a href="../index.php">Back</a>
<?php require_once "../controlador/ControladorListado.php" ?>
<table border="1">
    <tr>
        <th>Codigo de producto</th>
        <th>Nombre</th>
        <th>PVP</th>
        <th>Descripcion</th>

    </tr>
    <?php
    $sql = "Select * from producto";
    $conexion = new Conexion();
    $stmt = $conexion->conn->query($sql);
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
        ?>
        <form method="post">
        <tr>
            <?php for ($i = 0; $i < count($result); $i++) { ?>
                <td> <?php echo $result[$i] ?> </td> <?php } ?>
            <td><input type="submit" value="Guardar en favorito" name="<?php echo $result[0] ?>">
                <input type="hidden" name="hidden" value="<?php echo $result[1] ?>">
            </td>
        </tr> </form><?php
    }
    ?>
</table>
<form method="post">
    <input type="submit" name="borrar" value="Borrar Cookie">
</form>

</body>
</html>
<?php } else{
    header("location:../index.php");
}