<?php
session_start();
$id = $_GET['id'];
try {

    require_once 'conexion.php';

    $sql1 = "select *from USUARIO where TIPO_USUARIO ='Coordinador Carrera'";
    $sql2 = "select *from USUARIO where TIPO_USUARIO ='Docente'";
    $sql3 = "select *from USUARIO where TIPO_USUARIO ='Estudiante'";
    $sql4 = "select * from ACTIVIDAD  where ID_A = '$id'";
    $sql5 = "select * from EVENTO";
    $resultado1 = $conn->query($sql1);
    $resultado2 = $conn->query($sql2);
    $resultado3 = $conn->query($sql3);
    $resultado4 = $conn->query($sql4);
    $resultado5 = $conn->query($sql5);
    $row1 = $resultado1->fetch_assoc();
    $row4 = $resultado4->fetch_assoc();
    
} catch (Exception $ex) {
    $error = $ex->getMessage();
}
?>


<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estiloRegistroCoorCarrera.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel ="stylesheet prefetch">

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
        <script type="text/javascript" src="js/funcionAbrirHay.js"></script>

    </head>
    <body>

        <div class="container" style="border: 2px solid #01a7b3 ; border-radius: 8px">

            <div class="marcoIndex2">
                <!--------------------------ACCESO---------------------------------->
                <div class="accesoSistema2">

                    <label class="nombreMayusculas">
                        <?php
                        session_start();
                        $nombre = $_SESSION['nombre'];
                        $apellido = $_SESSION['apellido'];
                        $tipoUsuario = $_SESSION['tipoUsuario'];
                        echo "| <strong> $nombre" . " " . "$apellido" . " | " . " $tipoUsuario" . " </strong> |  " . $fecha = date("Y-m-d");
                        ?>
                </div>
                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="usuarioCoordinadorCarr.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                </div><!--finde de la cabecera-->

            </div>

            <div class="cabeceraIndex">
                <h2 style="font-family: cursive">ACTUALIZAR INFORMACION</h2>
            </div><!--finde de la cabecera-->

            <center>

                <div  style="width:650px  ; font-size:1.2em" >    

                    <div class="modal-body" >

                        <div class="row" >

                            <span class="container col-md-5 item_content">


                                <form  action="guardarActiviModificada.php" method="POST">

                                    <div class="container" style="width:700px ;height: 700px">
                                        <div class="row">

                                            <div class="datos1" >

                                                <label id="nombre">Nombre Activida : </label>
                                                <input class="ingresoDatos"type="text"  name="nombre"  value="<?php echo $row4['NOMBRE_A'] ?>" placeholder="Nombre...">
                                                <br>
                                                <input type="hidden" value="<?php echo $row4['ID_A'] ?>" id="id" name="id">
                                                <br>
                                                <br>
                                                <label id="cedula">Cedula Coordinador: </label>
                                                <input class="ingresoDatos"  disabled="" type="text"  value=" <?php echo $row1['CEDULA'] ?> " name="cedula1" placeholder="">                                             
                                                <input type="hidden"  value="<?php echo $row1['CEDULA'] ?>"name="cedula" id="cedula">
                                                <br>
                                                <br>    
                                                <br>
                                                <label class=""id="evento">Docente: </label>
                                                <select class="ingresoDatos" id="docente" name ="docente">
                                                    <?php
                                                    while ($valores = mysqli_fetch_array($resultado2)) {

                                                        if ($row4['CEDULA_D']== $valores['CEDULA']) {
                                                           echo '<option  selected value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE'] ." ".$valores['APELLIDO'].'</option>';
                                                        } else {
                                                           echo '<option  selected value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE']." ".$valores['APELLIDO']. '</option>';
                                                        }
                                                       
                                                    }
                                                    ?>
                                                </select>
                                                 <br>
                                                <br>    
                                                <br>
                                                <label class=""id="evento">Estudiante: </label>
                                                <select class="ingresoDatos" id="estudiante" name ="estudiante">
                                                    <?php
                                                    while ($valores = mysqli_fetch_array($resultado3)) {

                                                        if ($row4['CEDULA_E']== $valores['CEDULA']) {
                                                           echo '<option  selected value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE'] . '</option>';
                                                        } else {
                                                           echo '<option  selected value="' . $valores['CEDULA'] . '">' . $valores['NOMBRE'] . '</option>';
                                                        }
                                                       
                                                    }
                                                    ?>
                                                </select>
                                                <br>
                                                <br>    
                                                <br>
                                                <label class=""id="evento">Evento: </label>
                                                <select class="ingresoDatos" id="evento" name ="evento">
                                                    <?php
                                                    while ($valores = mysqli_fetch_array($resultado5)) {

                                                        if ($row4['ID_E']== $valores['ID_E']) {
                                                           echo '<option  selected value="' . $valores['ID_E'] . '">' . $valores['NOMBRE_E'] ." ".$valores['APELLIDO'].'</option>';
                                                        } else {
                                                           echo '<option  selected value="' . $valores['ID_E'] . '">' . $valores['NOMBRE_E']." ".$valores['APELLIDO']. '</option>';
                                                        }
                                                       
                                                    }
                                                    ?>
                                                </select>
                                                <br>
                                                <br>    
                                                <br>
                                                <label class=""id="estado">Estado: </label>
                                                <select class="ingresoDatos" name="estado" id ="estado" size="1"  >
                                                    <option>Selecciona estado...</option>
                                                    <option value="Activo" <?php
                                                    if ($row4['ESTADO_A'] == 'Activo') {
                                                        echo "Selected";
                                                    }
                                                    ?> > Activo</option>
                                                    <option value="En espera" <?php
                                                            if ($row4['ESTADO_A'] == 'En espera') {
                                                                echo "Selected";
                                                            }
                                                            ?>>En Espera</option>
                                                    <option value="Finalizado" <?php
                                                            if ($row4['ESTADO_A'] == 'Finalizado') {
                                                                echo "Selected";
                                                            }
                                                            ?> >Finadizado</option>

                                                </select>
                                                <br>
                                                <br>
                                                <br>
                                                <label id="contrasenia">Fecha Inicio: </label>
                                                <input type="date" id="fechaInicio"  value="<?php echo $row4['FECHA_I_A'] ?>" name="fechaInicio" />
                                                <label id="contrasenia">Fecha final: </label>
                                                <input type="date" id="fechaFinal"  value="<?php echo $row4['FECHA_F_A'] ?>" name="fechaFinal" />
                                                <br>
                                                <br>
                                                <br>
                                                <label id="contrasenia">Descripcion: </label>
                                                <textarea class="ingresoDatos"name="descripcion" id="descripcion" placeholder="descripcion.."><?php echo $row4['DESCRIPCION_A'] ?></textarea>
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
            <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>RaÃºl Medina</kbd>|<kbd>PaÃºl ProaÃ±o</kbd>|<kbd>Jessica Zavala</kbd> </p>

            </div>


        </div>



        <!--------------------------boostrap---------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>






