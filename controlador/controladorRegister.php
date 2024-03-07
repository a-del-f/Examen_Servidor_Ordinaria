<?php
require_once  "../modelo/UsuarioDAO.php";
if(isset($_POST["btn"])){

    $user=new UsuarioDAO();
    $user->recuperarUsuario($_POST["nombre"]);
        include  "rest.php";

}

?>