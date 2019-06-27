<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estiloRegistroCoorCarrera.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel ="stylesheet prefetch">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
        <script type="text/javascript" src="js/funcionAbrirHay.js"></script>

    </head>
    <body>


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

                <div class="inbox-head">

                    <h3>Actividad</h3>


                    <form action="CrearActividad.php" class="pull-right position" method="post">
                        <div class="input-append">
                            <input type="text"  name="consulta" id="consulta" class="sr-input" placeholder="Buscar por nombre...">                   
                            <button  class="btn sr-btn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>


                </div>

                <?php
                try {

                    require_once 'conexion.php';
                    $sql = "select * from ACTIVIDAD";

                    if ($_POST['consulta'] != "") {

                        $consut = $_POST['consulta'];
                        $tipo = $_POST['tipo'];

                        $sql = "select NOMBRE_A , CEDULA_D , CEDULA_E , FECHA_I_A ,FECHA_F_A from ACTIVIDAD  WHERE NOMBRE_A  LIKE '%" . $consut . "%'";
                    }
                    $resultado3 = $conn->query($sql);
                } catch (Exception $ex) {
                    $error = $ex->getMessage();
                }
                ?>


                <div class="container" style="width: 1000px">
                    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
                    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
                    <div class="mail-box">
                        <aside class="lg-side">



                            <div class="accesoSistema">     
                                <a href="registroUseCoorCarrera.php"></a>
                                <button class="btn btn-default pull-right" style="margin-top:20px;" data-toggle="modal" onclick="document.getElementById('IngresarDatos').style.display = 'block'"><i class="glyphicon glyphicon-plus"></i>Nuevo</button>
                            </div>


                            <div class="inbox-body">
                                <h3 class="modal-title">Actividad</h3><br><br>
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered">				
                                        <thead>
                                            <tr class="unread">
                                                <th class="view-message col-sm-3">&nbsp;NOMBRE </th>
                                                <th class="view-message col-sm-3">&nbsp;DOCENTE</th>
                                                <th class="view-message col-sm-3">&nbsp;ESTUDIANTE</th>
                                                <th class="view-message col-sm-3">&nbsp;ESTADO</th>
                                                <th class="view-message col-sm-3">&nbsp;FECHA INICIO</th>
                                                <th class="view-message col-sm-3">&nbsp;FECHA FINAL</th>
                                                <th class="view-message col-sm-3"></th>
                                                <th class="view-message col-sm-3"></th>

                                            </tr>
                                        </thead>

                                        <?php
                                        while ($row = $resultado3->fetch_array()) {

                                            printf("<tr>"
                                                    . "<td>&nbsp;%s</td>"
                                                    . "<td>&nbsp;%s</td>"
                                                    . "<td>&nbsp;%s</td>"
                                                    . "<td>&nbsp;%s</td>"
                                                    . "<td>&nbsp;%s</td>"
                                                    . "<td>&nbsp;%s</td>"
                                                    . "<td><a href ='modificaActividad.php?id=%d'><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-warning btn-xs' data-toggle='modal'><i class='glyphicon glyphicon-edit'></i></button></td>"
                                                    . "<td><a href ='eliminarActividad.php?id=%d'><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-danger btn-xs'  onclick=\" return elimiarConCorfirmacion()\" data-toggle='modal' ><i class='glyphicon glyphicon-remove'></i></button></td>"
                                                    . "</tr>", $row["NOMBRE_A"], $row["CEDULA_D"],$row["CEDULA_E"] ,$row["ESTADO_A"], $row["FECHA_I_A"], $row["FECHA_F_A"], $row["ID_A"], $row["ID_A"]);
                                        }
                                        ?>

                                    </table>
                                </div>
                            </div>
                            <div class="text-center">
                                <ul class="pagination">
                                    <li class="disabled"><span>´</span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="disabled"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" rel="next">ª</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>



                </div>
            </div>
            <div id="IngresarDatos" class="w3-modal" >

                <div class="w3-modal-content w3-animate-zoom" style="width:800px ">
                    <div class="contenedorInicioSesion">
                        <span onclick="document.getElementById('IngresarDatos').style.display = 'none'" class="w3-button w3-display-topright w3-large">x</span>
                        <center><h1>Nuevo Actividad</h1></center>
                    </div>
                    <?php
                    require_once 'conexion.php';
                    $sql1 = "select *from USUARIO where TIPO_USUARIO ='Coordinador Carrera'";
                    $sql2 = "select *from USUARIO where TIPO_USUARIO ='Docente'";
                    $sql3= "select *from USUARIO where TIPO_USUARIO ='Estudiante'";
                    $sql4 = "select *from EVENTO";
                    $resultado1 = $conn->query($sql1);
                    $resultado2 = $conn->query($sql2);
                    $resultado3= $conn->query($sql3);
                    $resultado4 = $conn->query($sql4);
                     $row = $resultado1->fetch_array();
                    ?>
                    <center>    

                        <div class="modal-body" >

                            <div class="row" >

                                <span class="container col-md-5 item_content">


                                    <form  action="guardarActividad.php" method="POST">

                                        <div class="container" style="width:700px ;height: 750px">
                                            <div class="row">

                                                <div class="datos1" >

                                                    <label id="nombre">Nombre Activida : </label>
                                                    <input class="ingresoDatos"type="text"  name="nombre" placeholder="Nombre...">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label id="cedula">Coordinador: </label>
                                                    <input class="ingresoDatos"  disabled="" type="text"  value=" <?php echo $row['NOMBRE']." ".$row['APELLIDO'] ?> " name="cedula1" placeholder="">                                             
                                                    <input type="hidden"  value="<?php echo $row['CEDULA'] ?>"name="cedula" id="cedula">
                                                    <br>
                                                    <br>    
                                                    <br>
                                                    <label class=""id="evento">Evento: </label>
                                                    <select class="ingresoDatos" id="evento" name ="evento">
                                                        <option value="0">Seleccione el evento...</option>
                                                        <?php
                                                        while ($valores = mysqli_fetch_array($resultado4)) {
                                                            echo '<option value="' . $valores['ID_E'] . '">' . $valores['NOMBRE_E'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                    <br>
                                                    <br>  
                                                    <h3  style="text-align: justify">DESIGNAR :</h3>
                                                    <br>
                                                    <label class=""id="evento">Docente: </label>
                                                    <select class="ingresoDatos" id="docente" name ="docente">
                                                        <option value="0">Seleccione al docente...</option>
                                                        <?php
                                                        while ($valores = mysqli_fetch_array($resultado2)) {
                                                            echo '<option value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE']." ".$valores['APELLIDO'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label class=""id="evento">Estudiante: </label>
                                                    <select class="ingresoDatos" id="estudiante" name ="estudiante">
                                                        <option value="0">Seleccione el estudiante...</option>
                                                        <?php
                                                        while ($valores = mysqli_fetch_array($resultado3)) {
                                                            echo '<option value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE']." ".$valores['APELLIDO'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label class=""id="estado">Estado: </label>
                                                    <select class="ingresoDatos" name="estado" id ="estado" size="1"  >
                                                        <option>Selecciona estado...</option>
                                                        <option value="Activo"> Activo</option>
                                                        <option value="En espera">En Espera</option>
                                                        <option value="Finalizado">Finadizado</option>

                                                    </select>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label id="contrasenia">Fecha Inicio: </label>
                                                    <input type="date" id="fechaInicio" name="fechaInicio" />
                                                    <label id="contrasenia">Fecha final: </label>
                                                    <input type="date" id="fechaFinal" name="fechaFinal" />
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label id="contrasenia">Descripcion: </label>
                                                    <textarea class="ingresoDatos"  name="descripcion" placeholder="descripcion.."></textarea>
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


            <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Ra√∫l Medina</kbd>|<kbd>Pa√∫l Proa√±o</kbd>|<kbd>Jessica Zavala</kbd> </p>

            </div>


        </div>

        <script type="text/javascript">

            function elimiarConCorfirmacion() {
                var respuesta = confirm("°Esta seguro de eliminar el registro?")
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