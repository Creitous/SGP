<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estiloRegistroCoorCarrera.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel ="stylesheet prefetch">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
        <script type="text/javascript" src="js/funcionAbrirHay.js"></script>

    </head>
    <body>
        <div class="container">

            <div class="row justify-content-center" style="border: 2px solid black">
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

                <div class="inbox-head">

                    <h3>Coordinador Carrera</h3>


                    <form action="registroUseCoorCarrera.php" class="pull-right position" method="post">
                        <div class="input-append">
                            <input type="text"  name="consulta" id="consulta" class="sr-input" placeholder="Buscar...">
                            <input type="hidden" name="tipo" value="Estudiante">                           
                            <button  class="btn sr-btn" type="submit"><i class="fa fa-search"></i></button>
                            <select>
                                <option>Seleccione a buscar..</option>
                                <option>Docente</option>
                                <option>Estudiante</option>
                            </select>
                        </div>
                    </form>


                </div>


                <div class="container">

                    <div class="row justify-content-center">
                        <div class="">
                            <aside class="lg-side">

                                <?php
                                try {

                                    require_once 'conexion.php';

                                    $sql = "select *from USUARIO where TIPO_USUARIO ='Docente'";
                                    $sql2 = "select *from USUARIO where TIPO_USUARIO ='Estudiante'";
                                    if ($_POST['consulta'] != "") {

                                        $consut = $_POST['consulta'];
                                        $tipo = $_POST['tipo'];

                                        $sql = "select NOMBRE , APELLIDO , CORREO ,FACULTAD , ESCUELA from USUARIO  WHERE NOMBRE LIKE '%" . $consut . "%' AND TIPO_USUARIO = '$tipo'";
                                    }
                                    $resultado = $conn->query($sql);
                                    $resultado2 = $conn->query($sql2);
                                } catch (Exception $ex) {
                                    $error = $ex->getMessage();
                                }
                                ?>

                                <div class="accesoSistema">     
                                    <a href="registroUseCoorCarrera.php"></a>
                                    <button class="btn btn-default pull-right" style="margin-top:20px;" data-toggle="modal" onclick="document.getElementById('IngresarDatos').style.display = 'block'"><i class="glyphicon glyphicon-plus"></i>Nuevo</button>
                                </div>
                                <div class="inbox-body" >
                                    <h3 class="modal-title">Docente</h3><br><br>
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered" style="color:black">				
                                            <thead>
                                                <tr class="unread" >
                                                    <th class="view-message col-sm-3">&nbsp;Nombre</th>
                                                    <th class="view-message col-sm-3">&nbsp;Apellido</th>
                                                    <th class="view-message col-sm-3">&nbsp;Correo</th>
                                                    <th class="view-message col-sm-3">&nbsp;Facultad</th>
                                                    <th class="view-message col-sm-3">&nbsp;Escuela</th>
                                                    <th class="view-message col-sm-3"></th>
                                                    <th class="view-message col-sm-3"></th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = $resultado->fetch_array()) {



                                                printf("<tr>"
                                                        . "<td>&nbsp;%s</td>"
                                                        . "<td>&nbsp;%s</td>"
                                                        . "<td>&nbsp;%s</td>"
                                                        . "<td>&nbsp;%s</td>"
                                                        . "<td>&nbsp;%s</td>"
                                                        . "<td><a href ='BuscarUsuarioCooCarrera.php?cedula=%s'><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-warning btn-xs' data-toggle='modal'><i class='glyphicon glyphicon-edit'></i></button></td>"
                                                        . "<td><a href ='elimiUsuaCoorCarrera.php?cedula=%s' ><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-danger btn-xs' onclick=\" return elimiarConCorfirmacion()\"  data-toggle='modal'><i class='glyphicon glyphicon-remove'></i></button></td>"
                                                        . "</tr>", $row["NOMBRE"], $row["APELLIDO"], $row["CORREO"], $row["FACULTAD"], $row["ESCUELA"], $row["CEDULA"], $row["CEDULA"]);
                                            }

                                            $resultado->close();

                                            $conn->close();
                                            ?>

                                        </table>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <ul class="pagination">
                                        <li class="disabled"><span>«</span></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="disabled"><span>...</span></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" rel="next">«</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>


                        <h3>Estudiante</h3>


                        <div class="inbox-body">

                            <div class="table-responsive-sm">
                                <table class="table table-bordered">				
                                    <thead>
                                        <tr class="unread">
                                            <th class="view-message col-sm-3">&nbsp;Nombre</th>
                                            <th class="view-message col-sm-3">&nbsp;Apellido</th>
                                            <th class="view-message col-sm-3">&nbsp;Correo</th>
                                            <th class="view-message col-sm-3">&nbsp;Facultad</th>
                                            <th class="view-message col-sm-3">&nbsp;Escuela</th>
                                            <th class="view-message col-sm-3"></th>
                                            <th class="view-message col-sm-3"></th>

                                        </tr>
                                    </thead>
                                    <?php
                                    while ($row = $resultado2->fetch_array()) {

                                        printf("<tr>"
                                                . "<td>&nbsp;%s</td>"
                                                . "<td>&nbsp;%s</td>"
                                                . "<td>&nbsp;%s</td>"
                                                . "<td>&nbsp;%s</td>"
                                                . "<td>&nbsp;%s</td>"
                                                . "<td><a href ='BuscarUsuarioCooCarrera.php?cedula=%s'><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-warning btn-xs' data-toggle='modal'><i class='glyphicon glyphicon-edit'></i></button></td>"
                                                . "<td><a href ='elimiUsuaCoorCarrera.php?cedula=%s' ><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-danger btn-xs' onclick=\" return elimiarConCorfirmacion()\"  data-toggle='modal'><i class='glyphicon glyphicon-remove'></i></button></td>"
                                                . "</tr>", $row["NOMBRE"], $row["APELLIDO"], $row["CORREO"], $row["FACULTAD"], $row["ESCUELA"], $row["CEDULA"], $row["CEDULA"]);
                                    }

                                    $resultado->close();

                                    $conn->close();
                                    ?>

                                </table>
                            </div>
                        </div>
                        <div class="text-center">
                            <ul class="pagination">
                                <li class="disabled"><span>«</span></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li class="disabled"><span>...</span></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#" rel="next">»</a></li>
                            </ul>
                        </div>
                    </div>



                    <div id="IngresarDatos" class="w3-modal">
                        <div class="w3-modal-content w3-animate-zoom" style="width:700px">
                            <div class="contenedorInicioSesion">
                                <span onclick="document.getElementById('IngresarDatos').style.display = 'none'" class="w3-button w3-display-topright w3-large">x</span>
                                <center><h1>Nuevo Usuario</h1></center>
                            </div>


                            <center>    

                                <div class="modal-body" >

                                    <div class="row" >

                                        <span class="container col-md-5 item_content">

                                            <form  action="guardarRegisUsuarCarr.php" method="POST" onsubmit=" return validarFormulario(this)">

                                                <div class="container" style="width:600px">
                                                    <div class="row">

                                                        <div class="datos1" >

                                                            <img src="imagenes/usuario.png">
                                                            <input class="ingresoDatos" type="text" name="nombre" placeholder="Nombre...">
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/apellido.png">
                                                            <input class="ingresoDatos"type="text" name="apellido" placeholder="Apellido...">
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/cedula.png">
                                                            <input class="ingresoDatos"type="text" name="cedula" placeholder="CÃ©dula...">	
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/correo.png">
                                                            <input class="ingresoDatos"type="email" name="correo" placeholder="nombre@algo.com">
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/telefono.png">
                                                            <input class="ingresoDatos"type="text" name="telefono" placeholder="telefono..">
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/facultad.png">
                                                            <select class="ingresoDatos" name="facultad" size="1"  >
                                                                <option>Selecciona Facultad...</option>
                                                                <option id="administracionEmpresas" onclick="adminEmpresas()"> ADMINISTRACION DE EMPRESAS</option>
                                                                <option id="ciencias" onclick="cien()" >CIENCIAS</option>
                                                                <option id="informaticaElectronica" onclick="infElectronica()">INFORMATICA Y ELECTRONICA</option>
                                                                <option id="mecanica" onclick="mec()">MECANICA</option>
                                                                <option id="recursosNaturales"  onclick="recNaturales()" >RECURSOS NATURALES</option>
                                                                <option id="saludPublica" onclick="salPublica()">SALUD PÃšBLICA</option>
                                                            </select>
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/escuela.png">
                                                            <select class="ingresoDatos" name="escuela" size="1" >
                                                                <option>Selecciona la escuela...</option>
                                                                <option id="agronomia">AGRONOMIA</option>
                                                                <option id="administracionDeEmpresas">ADMINISTRACION DE EMPRESAS</option>
                                                                <option id="bioquimicaFarmacia">BIOQUIMICA Y FARMACIA</option>
                                                                <option id="contabilidadAuditoria">CONTABILIDAD Y AUDITORIA</option>
                                                                <option id="diseÃ±oGrafico">DISEÃ‘O GRAFICO</option>
                                                                <option id="finanzasComercioExterior">FINANZAS Y COMERCIO EXTERIOR</option>
                                                                <option id="ingenieriaAutomotriz">INGENIERIA AUTOMOTRIZ</option>
                                                                <option id="ingenieriaIndustrial">INGENIERIA INDUSTRIAL</option>
                                                                <option id="ingenieriaMecanica">INGENIERIA MECANICA</option>
                                                                <option id="ingenieriaMantenimiento">INGENIERIA DE MANTENIMIENTO</option>
                                                                <option id="marketing">MARKETING</option>
                                                                <option id="nutricionDietetica">NUTRICION Y DIETETICA</option>
                                                                <option id="software">SOFTWARE</option>
                                                            </select>
                                                            <br>
                                                            <br>
                                                            <img src="imagenes/tipoUsuario.png">
                                                            <select class="ingresoDatos"  name="tipoUsuario" id="tipoUsuario" size="1">
                                                                <option>Seleccione el tipo ...</option>
                                                                <option onclick="docente_1()" value="Docente">Docente</option>
                                                                <option  onclick="estudiante_1()"value="Estudiante">Estudiante</option>
                                                            </select>

                                                            <br>
                                                            <br>
                                                            <img src="imagenes/clave.png">
                                                            <input class="ingresoDatos"type="password" name="contrasenia" placeholder="ContraseÃ±a...">
                                                            <BR>
                                                            <BR>

                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <button type="submit" class="btn btn-primary my-1">Guardar</button>
                                                        <button type="reset" class="btn btn-primary my-1" onclick="history.back()">Cancelar</button>
                                                    </div>
                                                </div>  


                                            </form> 
                                        </span>
                                    </div>


                                </div>

                            </center>
                        </div>
                    </div>

                </div>

                <div class="pie">
                    <p>Escuela Superior Politecnica de Chimborazo</p>
                    <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>RaÃºl Medina</kbd>|<kbd>PaÃºl ProaÃ±o</kbd>|<kbd>Jessica Zavala</kbd> </p>

                </div>

            </div>



        </div>

        <script type="text/javascript">

            function elimiarConCorfirmacion() {
                var respuesta = confirm("¡Esta seguro de eliminar el registro?")
                if (respuesta == true) {
                    return true;

                } else {
                    return false;
                }

            }

        </script>    
        <!--------------------------boostrap---------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>