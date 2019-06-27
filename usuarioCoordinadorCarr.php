<!DOCTYPE html>
<html>
    <head>

        <title>SGP - 
            <?php
            session_start();
            $tipoUsuario = $_SESSION['TIPO_USUARIO'];
            echo "$tipoUsuario";
            ?></title>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!-------------botsatrap---------------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="imagenes/icono.jpg" />
        <!-------------iconos de usuarios---------------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/full-width-pics.css" rel="stylesheet">
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
                    <button  class="boton"><a href="cerrarSesion.php">Salir</a></button></label>
                </div>

                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="usuarioCoordinadorCarr.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                </div><!--finde de la cabecera-->

                <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center">
                        <!-------------------------------------------------------->

                        <button id="plantillaboton"><a id="plantillaboton" href="registroUseCoorCarrera.php">Usuario</a></button>                   
                        <br>
                        <button id="plantillaboton"><a id="plantillaboton" href="SubirDocumento.php">Documento</a></button>
                        <br>                   
                        <button id="plantillaboton"><a id="plantillaboton" href="mostarProyecto_coorCarrera.php">Mis Proyectos</a></button>
                    </ul>		
                </div>	

                <!--------------------------CODIFICACION------------------------------------>		
                <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
                    <img class="img-fluid d-block mx-auto" src="https://drive.google.com/file/d/1zBAtoUWnuwRlPoDZGCy5FS3PTL6fguvF/view?fbclid=IwAR3j_r3g9uaPFc-c_rSIQ8u4ILedlC3uajC10vJytiRlayxWMyVtgJOQNFU" alt="">
                </header>

            </div><!--finde del marcoIndex2-->

            <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>

            </div>
        </div><!--finde del marcoIndex-->

        <!--------------------------boostrap---------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

