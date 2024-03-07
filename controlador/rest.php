<?php
include "config.php";
include "utils.php";
global $db;
$dbConn =  connect($db);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $longitud_letras=  rand(6,12);
    $longitud_especial=rand(1,3);
    $pos=rand(0,2);
    $pass="";
    $letras=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","y","x","z"];
    $especial=["@","&","*"];
    for($i=1;$i<=$longitud_letras;$i++){
        $letra_rand=rand(0,(count($letras)-1));
        $pass=$pass.$letras[$letra_rand];
    }
    for($i=1;$i<=$longitud_especial;$i++){
        $especial_rand=rand(0,(count($especial)-1));
        $pass=$pass.$especial[$especial_rand];
    }

    $archivo= fopen("../modelo/users.txt","a");
    fwrite($archivo,$_POST["nombre"]."=>".$pass."\r\n");
    fclose($archivo);
    $user=new UsuarioDAO();
    $user->insertarusuario($_POST["nombre"],$_POST["apellidos"],$_POST["domicilio"],$_POST["telefono"],$_POST["email"],$pass,$dbConn);
}