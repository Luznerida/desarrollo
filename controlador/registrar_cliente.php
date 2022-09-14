<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["nombres"]) && !empty($_POST["apellidos"]) && !empty($_POST["direccion"])){

  $nombres=$_POST["nombres"];
  $apellidos=$_POST["apellidos"];
  $direccion=$_POST["direccion"];
  $sexo=$_POST["sexo"];
  $telefono=$_POST["telefono"];
  $correo=$_POST["correo"];
  $FechaNacimiento=$_POST["FechaNacimiento"];


  $sql=$conexion->query("INSERT INTO cliente(nombres,apellidos,direccion,sexo,telefono,correo,FechaNacimiento) values('$nombres','$apellidos','$direccion','$sexo','$telefono','$correo','$FechaNacimiento')");
  if($sql==1){
    echo '<div class="alert alert-success">cliente registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>