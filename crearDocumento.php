<?php
include('addDocumento_coorCarrera.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="index.php">PHP CRUD WITH IMAGE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="btn btn-outline-danger" href="SubirDocumento.php"><i class="fa fa-sign-out-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">SUBIR DOCUMENTO</div>
                        <div class="card-body">

                            <form action="addDocumento_coorCarrera.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="nombre">Name Documento:</label>
                                    <input type="text" class="form-control" name="nombre"   id="nombre"placeholder="nombre documentoo..." value="">
                                </div>
                                <div class="form-group">
                                    <select class="ingresoDatos" name="tipoDocumento" id ="tipoDocumento" size="1"  >
                                        <option>Selecciona tipo...</option>
                                        <option value="Doc">Doc </option>
                                        <option value="Pdf">Pdf</option>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="image">Eliga el Archivo ..</label>
                                    <input type="file" class="form-control" name="image" value="">
                                </div>
                                <div class="form-group" align = "center">
                                    <button type="submit" name="enviar"  id="enviar" class="btn btn-primary waves">Guardar</button>
                                    <button type="reset" name="cancelar" class="btn btn-primary waves">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    </body>
</html>


