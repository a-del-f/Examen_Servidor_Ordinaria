<?php

if(isset($_POST["borrar"])){
    setcookie("favoritos",null,-1000);
}

$sql="Select * from producto";
$conexion=new Conexion();
$stmt=$conexion->conn->query($sql);
$valores=$stmt->fetchAll(PDO::FETCH_NUM);
$contador= count($valores);
for($i=1;$i<=$contador;$i++) {
    if (isset($_POST[$i])) {
        if (!isset($_COOKIE["favoritos"])) {
            $favoritos = array();
        }
        if (isset($_COOKIE["favoritos"])) {
            $favoritos = json_decode($_COOKIE["favoritos"], true);
        }

            if (count($favoritos) < 1) {
                array_push($favoritos, $_POST["hidden"]);
            } else {
                $favoritos[1] = $favoritos[0];
                $favoritos[0] = $_POST["hidden"];
            }

        setcookie("favoritos", json_encode($favoritos));
    }
}
if( isset($favoritos) ){

?>
<table style="float: right" >
<tr> <th> Profuctos Favoritos </th> </tr>
    <?php
    for($i=count($favoritos)-1;$i>=0;$i--){
        ?>  <tr>
     <td> <?php echo $favoritos[$i] ?> </td>
    </tr><?php
}?>
</table>
<?php }  ?>