<?php
if(isset($_POST["actualizar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["direccion"])){
     $id=$_GET["id"];
     $nombre=$_POST["nombre"];
     $apellido=$_POST["apellido"];
     $direccion=$_POST["direccion"];
     $sql=$conexion->query("UPDATE cliente SET nombres='$nombre',
     apellidos='$apellido',direccion='$direccion' WHERE id_cliente=$id");
     if($sql==1){
        header("location:index.php");
      }else{
        echo "no se pudo registrar";
      }
     }else{
        echo "los campos estan vacios";
     }
    }

?>