<?php

include "modelo/conexion.php";
$id = $_GET["id"];
$sql=$conexion->query("select * from cliente where id_cliente=$id");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/all.min.js"></script>
</head>
<body>
    <form class="col-4 px-5 m-auto" action="" method="POST">
        <?php 
        include "controlador/actualizar_cliente.php";
        ?>
        <h3>Actualizar Cliente</h3>
        <input type="text" name="id" hidden value="<?= $_GET["id"]?>">
        <?php
        while($datos=$sql->fetch_object()){
        ?>
        <div class="mb-3">
            <label  class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombres?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos->apellidos?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="<?= $datos->direccion?>">
        </div>
        <?php
        }
        ?>
        <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Actualizar</button>
    </form>
</body>
</html>