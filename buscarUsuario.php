<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A contact form using the Bootstrap 3 framework.">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">
        
        <title>Bootstrap 3 Formulario de Contacto con CAPTCHA</title>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
        <!-- EXTRACT ADDITIONAL STYLING HERE =======> -->
        <style>
            .container {
                width: auto;
                max-width: 900px;
            }
            .form-group {
                margin-bottom: 8px;
            }
            #feedbackForm {
                font-size: 12px;
            }
        </style>
        <!-- <======= UP TO HERE -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="assets/vender/bootstrap/assets/js/html5shiv.js"></script>
          <script src="assets/vender/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- EXTRACT FORM HERE =======> -->
        <div class="container">

            <div class="marcoIndex2">
                <!--------------------------ACCESO---------------------------------->
                <div class="accesoSistema2">

                    <label class="nombreMayusculas">
                        <?php
                        session_start();
                        $nombre = $_SESSION['NOMBRE'];
                        $apellido = $_SESSION['APELLIDO'];
                        $tipoUsuario = $_SESSION['TIPO_USUARIO'];
                        echo "| <strong> $nombre" . " " . "$apellido" . " | " . " $tipoUsuario" . " </strong> |  " . $fecha = date("Y-m-d");
                        ?>
                </div>
                <div class="botonSalir">
                    <button  class="boton"><a href="usuarioCoordinadorCarr.php">Salir</a></button></label>
                </div>

                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="usuarioCoordinadorCarr.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                </div><!--finde de la cabecera-->


                <div id="contact_form" class="row">
                    <div class="col-md-12">
                        <h2>Contáctenos</h2>
                        <form role="form" id="feedbackForm">
                            <div class="form-group">
                                <label class="control-label" for="name">Nombres *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca su nombre" />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                                </div>
                                <span class="help-block" style="display: none;">Por favor, escriba su nombre.</span>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Motivo de Contacto*</label>
                                <select name="reason" class="form-control">
                                    <option value="Consulta General">Consulta General</option>
                                    <option value="Realizar Pedido">Realizar Pedido</option>
                                    <option value="Informe un problema">Informe un problema</option>
                                </select>
                                <span class="help-block" style="display: none;">Por favor, introduce una dirección de correo electrónico válida.</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Dirección de Correo Electrónico *</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su correo electrónico" />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                                </div>
                                <span class="help-block" style="display: none;">Por favor, introduzca una dirección de correo electrónico válida.</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Mensaje *</label>
                                <div class="input-group">
                                    <textarea rows="5" cols="30" class="form-control" id="message" name="message" placeholder="Introduzca su mensaje" ></textarea>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                                </div>
                                <span class="help-block" style="display: none;">Por favor, introduzca un mensaje.</span>
                            </div>
                            <img id="captcha" src="library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
                            <a href="#" onclick="document.getElementById('captcha').src = 'library/vender/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-info btn-sm">Mostrar una imagen diferente</a><br/>
                            <div class="form-group" style="margin-top: 10px;">
                                <label class="control-label" for="captcha_code">Texto dentro de la Imagen *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Por razones de seguridad, por favor ingrese el código que aparece en el cuadro." />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                                </div>
                                <span class="help-block" style="display: none;">Por favor introduce el código que aparece en la imagen.</span>
                            </div>
                            <span class="help-block" style="display: none;">Por favor ingrese el código de la seguridad.</span>
                            <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" data-loading-text="Enviando..." style="display: block; margin-top: 10px;">Enviar comentarios</button>
                        </form>
                    </div><!--/span-->
                </div><!--/row-->
                <hr>
            </div><!--/.container-->
            <!-- <======= UP TO HERE -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
            <script src="assets/js/contact-form.js"></script>
    </body>
</html>
