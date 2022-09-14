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
    <script>
        function eliminar(){
            var respuesta=confirm("seguro que desea eliminar?");
            return respuesta;
        }
    </script>
    <h1 class="text-center">Pagina principal</h1>
    <div class="container-fluid row">
        <form class="col-4 px-5" action="" method="POST">
            <h3>Registro de clientes</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar_cliente.php";
            ?>
            <div class="mb-3">
                <label  class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </form>
        <div class="col-8">
            <?php
            include "controlador/eliminar_cliente.php";
            ?>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from cliente");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->id_cliente ?></td>
                        <td><?= $datos->nombres ?></td>
                        <td><?= $datos->apellidos ?></td>
                        <td><?= $datos->direccion ?></td>
                        <td>
                            <a href="actualizarcliente.php?id=<?= $datos->id_cliente ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_cliente ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>