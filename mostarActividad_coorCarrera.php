<!DOCTYPE html>
<html>
    <head>
        <title>SGP -             
            <?php
            session_start();
            $tipoUsuario = $_SESSION['TIPO_USUARIO'];
            echo "$tipoUsuario";
            ?>
        </title>

        <meta charset="utf-8">        
        <!-----------------Estilos CSS--------->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estiloRegistroCoorCarrera.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel ="stylesheet prefetch">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-------------script------------------>
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>

        <!-------------botsatrap--------------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="imagenes/icono.jpg" />

        <!-------------iconos de usuarios---------------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <!--------------------------INICIO DE LOS DOS DIVS PRINCIPALES DE LA PAGINA------------------------------------>
        <div class="marcoIndex">
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
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div>  

                <!-------------------- INICIO DE CONTENEDOR CUERPO CREAR USUARIO - DENTRO DE ESTE DIV VAN TODOS LOS FORMULARIOS QUE EXISTAN EN ESTE USUARIO -------------------->
                <div class="contenedorCuerpoCrearUsuario"> 

                    
                    <!-------------------MIS ACTIVIDADES---------------------------------->
                    <div class="contInDatos" id="misActividades">
                        <div class="formInDatos2">                                

                            <?php
                            $id_e = $_GET['id_e'];

                            try {
                                require_once ('conexion.php');
                                $cedulaCC = $_SESSION['CEDULA'];
                                $sql = "SELECT * FROM ACTIVIDAD";
                                $result = $conn->query($sql);
                            } catch (Exception $e) {
                                $error = $e->getMessage();
                            }
                            ?>       
                            
                            
                            <h3>ACTIVIDAD</h3>

                            <div class="accesoSistema">     
                                <a href="registroUseCoorCarrera.php"></a>
                                <button class="boton" style="margin-top:20px;" data-toggle="modal" onclick="document.getElementById('IngresarDatos').style.display = 'block'">NUEVA ACTIVIDAD<i class="far fa-file"></i></button>
                            </div>

                            <table class="tablaEliminar">
                                <tr class="tablaEliminarTR">
                                    <th>&nbsp; ID ACTIVIDAD &nbsp;</th>
                                    <th>&nbsp; COORDINADOR CARRERA ENCARGADO&nbsp;</th>
                                    <th>&nbsp; DOCENTE&nbsp;</th>
                                    <th>&nbsp; ESTUDIANTE&nbsp;</th>
                                    <th>&nbsp; NOMBRE ACTIVIDAD&nbsp;</th>
                                    <th>&nbsp; DESCRIPCION&nbsp;</th>
                                    <th>&nbsp; ESTADO&nbsp;</th>
                                    <th>&nbsp; FECHA INICIO&nbsp;</th>
                                    <th>&nbsp; FECHA FIN&nbsp;</th> 
                                    <th>&nbsp; &nbsp;</th>
                                    <th>&nbsp; &nbsp;</th>
                                </tr>


                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    printf("
                               <tr>
                                   <td>&nbsp;%s</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>  
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td>&nbsp;%s&nbsp;</td>
                                   <td><a href ='modificaActividad.php?id=%d'><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-warning btn-xs' data-toggle='modal'><i class='glyphicon glyphicon-edit'></i></button></td>
                                   <td><a href ='eliminarActividad.php?id=%d'><span class='btn-group pull-right' style='margin-top: 5px'><button class='btn btn-danger btn-xs'  onclick=\" return elimiarConCorfirmacion()\" data-toggle='modal' ><i class='glyphicon glyphicon-remove'></i></button></td>
                                    </tr>", $row["ID_A"],$row["CEDULA_CC"], $row["CEDULA_D"], $row["CEDULA_E"], $row["NOMBRE_A"], $row["DESCRIPCION_A"], $row["ESTADO_A"], $row["FECHA_I_A"], $row["FECHA_I_A"], $row['ID_A'], $row['ID_A']
                                    );
                                } echo'</table>';
                                ?>

                            </table>


                        </div><!--formInDatos-->           
                    </div><!--contInDatos-->  


                    <!-------------------- FIN DEL DIV CONTENEDOR CUERPO CREAR USUARIO -------------------->
                </div>

                <!--------------------------PIE------------------------------------>
                <div class="pie">
                    <p>Escuela Superior Politecnica de Chimborazo</p>
                    <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>

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
                        $sql3 = "select *from USUARIO where TIPO_USUARIO ='Estudiante'";
                        $sql4 = "select *from EVENTO";
                        $resultado1 = $conn->query($sql1);
                        $resultado2 = $conn->query($sql2);
                        $resultado3 = $conn->query($sql3);
                        $resultado4 = $conn->query($sql4);
                        $row = $resultado1->fetch_array();
                        ?>
                        <center style="text-align: justify ;">    

                            <div class="modal-body" >

                                <div class="row" >

                                    <span class="container col-md-5 item_content">


                                        <form  action="guardarActividad.php" method="POST">

                                            <div class="container" style="width:700px ;height: 950px">
                                                <div class="row">

                                                    <div class="datos1" >

                                                        <label id="nombre">Nombre Activida : </label>
                                                        <input class="ingresoDatos"type="text"  name="nombre" placeholder="Nombre...">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <label id="cedula">Coordinador: </label>
                                                        <input class="ingresoDatos"  disabled="" type="text"  value=" <?php echo $row['NOMBRE'] . " " . $row['APELLIDO'] ?> " name="cedula1" placeholder="">                                             
                                                        <input type="hidden"  value="<?php echo $row['CEDULA'] ?>"name="cedula" id="cedula">
                                                        <br>
                                                        <br>    
                                                        <br>
                                                        <label class=""id="evento">Evento: </label>
                                                        <input class="ingresoDatos"  disabled="" type="text"  value="<?php  echo $id_e ?>" name="cedula1" placeholder="">                                             
                                                        <input type="hidden"  value="<?php  echo $id_e ?>"name="evento" id="evento">
                                                        <br>
                                                        <br>  
                                                        <h3  style="text-align: justify">DESIGNAR :</h3>
                                                        <br>
                                                        <label class=""id="evento">Docente: </label>
                                                        <select class="ingresoDatos" id="docente" name ="docente">
                                                            <option value="0">Seleccione al docente...</option>
                                                            <?php
                                                            while ($valores = mysqli_fetch_array($resultado2)) {
                                                                echo '<option value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE'] . " " . $valores['APELLIDO'] . '</option>';
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
                                                                echo '<option value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE'] . " " . $valores['APELLIDO'] . '</option>';
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


            </div> <!--marco index 2-->
        </div><!--marco index-->
        <script type="text/javascript">

            function elimiarConCorfirmacion() {
                var respuesta = confirm("�Esta seguro de eliminar el registro?")
                if (respuesta == true) {
                    return true;

                } else {
                    return false;
                }

            }

        </script>    


    </body>
</html>