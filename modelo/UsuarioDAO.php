<?php
require_once "InterfazDAO.php";
class UsuarioDAO implements InterfazDAO
{
    public function __construct()
    {
    }

    public function recuperarUsuario($nombre)
    {
        require_once "../modelo/Conexion.php";
        $conexion=new Conexion();
        $sql="Select * from usuario";
        $stmt=$conexion->conn->query($sql);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);$check=true;
        foreach ($result as $clave => $value){
            if($value["Nombre"]==$nombre){
                echo "<script> window.alert('Error: Nombre existente') </script>";
                header("location:../vista/registrar.php");
                exit();

            }
        }
    }

    public function insertarusuario($nombre,$apellidos,$domicilio,$telefono,$email , $pass,$dbConn)
    {
        $sql="Insert into usuario (Nombre,Apellidos,Domicilio,NumTelefono,Email,Password) values (:nombre,:apellidos,:domicilio,:telefono,:email,:contrasena)";
        $stmt=$dbConn->prepare($sql);


        $stmt->bindValue(":nombre",$nombre);
        $stmt->bindValue(":apellidos",$apellidos);
        $stmt->bindValue(":domicilio",$domicilio);
        $stmt->bindValue(":telefono",$telefono);
        $stmt->bindValue(":email",$email);
       $stmt->bindValue(":contrasena",$pass);
        $stmt->execute();
        header("HTTP/1.1 200 OK");



    }
}