<?php

class Conexion
{
private $servername="localhost:3333";
private $username="root";
private $password="";
private $dbname="tienda";
public $conn;

public function __construct()
{
    $this->conn=new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
} ?>