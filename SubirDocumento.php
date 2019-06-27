<?php
session_start();
include('conexion.php');
$upload_dir = 'http://webapp.espoch.edu.ec/webapp33/sitio_2/subidas/';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "select * from DOCUMENTO where id = " . $id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        unlink($upload_dir . $image);
        $sql = "delete from DOCUMENTO where id=" . $id;
        if (mysqli_query($conn, $sql)) {
            header('location:SubirDocumento.php');
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Subir Documento</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    </head>
    <body>

        <div class="container">

            <div class="marcoIndex2">
                <!--------------------------ACCESO---------------------------------->
                <div class="accesoSistema2">

                    <label class="nombreMayusculas">
                        <?php
                        $nombre = $_SESSION['NOMBRE'];
                        $apellido = $_SESSION['APELLIDO'];
                        $tipoUsuario = $_SESSION['TIPO_USUARIO'];
                        echo "Bienvenido | <strong> $nombre" . " " . "$apellido" . " | " . " $tipoUsuario" . " </strong> |  " . $fecha = date("Y-m-d");
                        ?>
                </div>
                <div class="botonSalir">
                    <button  class="boton"><a href="usuarioCoordinadorCarr.php">Salir</a></button></label>
                </div>

                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="usuarioCoordinadorCarr.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                </div><!--finde de la cabecera-->


            </div><!--finde del marcoIndex2-->

            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">

                    <a class="navbar-brand" href="index.php">DOCUMENTO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav ml-auto">
                            <li class=""><a href="crearDocumento.php"><img src="https://icon-icons.com/icons2/1786/PNG/48/file-add_114479.png"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body" style="text-align: center">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE DEL DOCUMENTO</th>
                                            <th>IMAGEN</th>
                                            <th>FECHA SUBIDA</th>                          
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $sql = "select * from DOCUMENTO";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['ID_DOC'] ?></td>
                                                    <td><?php echo $row['NOMBRE_DOC'] ?></td>
                                                    <td><img src="imagenes/archivo.png" height="40"></td>
                                                    <td><?php echo $row['FECHA_SUB'] ?></td>
                                                    <td class="text-center">
                                                        <a href="visualizarDocumento.php?id=<?php echo $row['ID_DOC'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                        <a href="edit.php?id=<?php echo $row['ID_DOC'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
                                                        <a href="SubirDocumento.php?delete=<?php echo $row['ID_DOC'] ?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar el documento')"><i class="fa fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>

            </div>


        </div>

        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
        <script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable();
});
        </script>
    </body>
</html>
