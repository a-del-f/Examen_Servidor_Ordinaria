<?php

interface InterfazDAO{
	public function recuperarUsuario($nombre);
	public function insertarusuario($nombre,$apellidos,$domicilio,$telefono,$email , $pass,$dbConn);
}


?>