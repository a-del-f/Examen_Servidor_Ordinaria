<?php

require_once ("modelo/Conexion.php");
session_start();
if(isset($_POST["registrar"])){
    header("location:vista/registrar.php");
}
if(isset($_COOKIE["favoritos"])){
    setcookie("favoritos",null,-1000);

}
if(isset($_SESSION["user"])){
    session_destroy();
}

if(isset($_POST["log"])){
$conexion=new Conexion();
$sql="Select * from usuario";
$stmt= $conexion->conn->query($sql);
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $clave => $value){
    if($value["Nombre"]==$_POST["nombre"] && $value["Password"]==$_POST["pass"]){

        $_SESSION["user"]=true;
        header("location:vista/listado.php");
    }
}
}
?>