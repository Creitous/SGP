<?php
session_start();
require_once('conexion.php');
$upload_dir = 'http://webapp.espoch.edu.ec/webapp33/sitio_2/subidas/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from DOCUMENTO where ID_DOC = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $errorMsg = 'No se pudo encontrar ningún registro';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>visualizar Documento</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    </head>
    <body>

        <div class="container">

            <div class="card-header">
                <!--------------------------ACCESO---------------------------------->
                <div class="accesoSistema2">

                    <label class="nombreMayusculas">
                        <?php
                        
                        $nombre = $_SESSION['NOMBRE'];
                        $apellido = $_SESSION['APELLIDO'];
                        $tipoUsuario = $_SESSION['TIPO_USUARIO'];
                        echo "| <strong> $nombre" . " " . "$apellido" . " | " . " $tipoUsuario" . " </strong> |  " . $fecha = date("Y-m-d");
                        ?>
                </div>

                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="SubirDocumento.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                </div><!--finde de la cabecera-->


            </div><!--finde del marcoIndex2-->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="card">

                        <div class="card-header">
                            Detalle Documento
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <embed src="<?php echo $upload_dir . $row['URL_DOC'] ?>" type="application/pdf" width="500px" height="600px" />

                                </div>
                                <div class="col-md">
                                    <h5 class="form-control"><img src="https://icon-icons.com/icons2/61/PNG/32/blue_download_alt_folder_12391.png">
                                        <span><?php echo $row['NOMBRE_DOC'] ?></span>
                                        </i></h5>
                                    <h5 class="form-control"><img src="https://icon-icons.com/icons2/628/PNG/32/pdf-file-type-symbol_icon-icons.com_57657.png">
                                        <span><?php echo $row['TIPO_DOC'] ?></span>
                                        </i></h5>
                                    <h5 class="form-control"><img src="https://icon-icons.com/icons2/39/PNG/32/date_May1_calendar_dat_6233.png">
                                        <span><?php echo $row['FECHA_SUB'] ?></span>
                                        </i></h5>

                                    <a class="btn btn-outline-danger" href="SubirDocumento.php"><i class="fa fa-sign-out-alt"></i><span>Regresar</span></a>

                                </div>
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
