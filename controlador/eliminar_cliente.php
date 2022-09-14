<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from cliente where id_cliente=$id");
    if($sql==1){
        header("location:registrar.php");
      }else{
        echo "no se pudo eliminar";
      }
}
?>