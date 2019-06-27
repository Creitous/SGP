<?php
$cedula = $_GET['cedula'];

try {
    require_once 'conexion.php';
    $sql = "select *from USUARIO where CEDULA = $cedula";
    $resultado = $conn->query($sql);
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

            <div class="botonSalir">
                <button  class="boton"><a href="registroUseCoorCarrera.php">Salir</a></button></label>
            </div>


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
                                <?php
                                $row = $resultado->fetch_assoc();
                                ?>

                                <form  action="actuaUserCooCarrera.php" method="POST" onsubmit="">

                                    <div class="container" style="width:600px" align="center">

                                        <div class="row">

                                            <div class="datos1" align ="center">

                                                <img src="imagenes/usuario.png">
                                                <input class="ingresoDatos"type="text" name="nombre"  value="<?php echo $row['NOMBRE'] ?>"  placeholder="Nombre...">
                                                <br>
                                                <br>
                                                <img src="imagenes/apellido.png">
                                                <input class="ingresoDatos"type="text" name="apellido"  value="<?php echo $row['APELLIDO'] ?>" placeholder="Apellido...">
                                                <br>
                                                <br>
                                                <img src="imagenes/cedula.png">
                                                <input class="ingresoDatos"type="email" name="correo" value="<?php echo $row['CORREO'] ?>" placeholder="nombre@algo.com">
                                                <br>
                                                <br>
                                                <img src="imagenes/telefono.png">
                                                <input class="ingresoDatos"type="text" name="telefono" value="<?php echo $row['TELEFONO'] ?>" placeholder="Telefono...">	
                                                <br>
                                                <br>
                                                <img src="imagenes/facultad.png">
                                                <select class="ingresoDatos" name="facultad" size="1">
                                                    <option id="administracionEmpresas" onclick="adminEmpresas()" value="ADMINISTRACION DE EMPRESAS"    <?php
                                                    if ($row['FACULTAD'] == 'ADMINISTRACION DE EMPRESAS') {
                                                        echo "Selected";
                                                    }
                                                    ?> >ADMINISTRACION DE EMPRESAS</option>
                                                    <option id="ciencias" onclick="cien()" value="CIENCIAS"  <?php
                                                    if ($row['FACULTAD'] == 'CIENCIAS') {
                                                        echo "Selected";
                                                    }
                                                    ?> >CIENCIAS</option>
                                                    <option id="informaticaElectronica" onclick="infElectronica()"   value="INFORMATICA Y ELECTRONICA"    <?php
                                                    if ($row['FACULTAD'] == 'INFORMATICA Y ELECTRONICA') {
                                                        echo "Selected";
                                                    }
                                                    ?> >INFORMATICA Y ELECTRONICA</option>
                                                    <option id="mecanica" onclick="mec()"    value="MECANICA"    <?php
                                                    if ($row['FACULTAD'] == 'MECANICA') {
                                                        echo "Selected";
                                                    }
                                                    ?> >MECANICA</option>
                                                    <option id="recursosNaturales"  onclick="recNaturales()" value="RECURSOS NATURALES"   <?php
                                                    if ($row['FACULTAD'] == 'RECURSOS NATURALES') {
                                                        echo "Selected";
                                                    }
                                                    ?> >RECURSOS NATURALES</option>
                                                    <option id="saludPublica" onclick="salPublica()"  value="SALUD PÚBLICA"  <?php
                                                    if ($row['FACULTAD'] == 'SALUD PÚBLICA') {
                                                        echo "Selected";
                                                    }
                                                    ?>>SALUD PÚBLICA</option>
                                                </select>
                                                <br>
                                                <br>
                                                <img src="imagenes/escuela.png">
                                                <select class="ingresoDatos" name="escuela" size="1" >
                                                    <option id="agronomia" value="AGRONOMIA"  <?php
                                                    if ($row['ESCUELA'] == 'AGRONOMIA') {
                                                        echo "Selected";
                                                    }
                                                    ?> >AGRONOMIA</option>
                                                    <option id="administracionDeEmpresas" value="ADMINISTRACION DE EMPRESAS" <?php
                                                    if ($row['ESCUELA'] == 'ADMINISTRACION DE EMPRESAS') {
                                                        echo "Selected";
                                                    }
                                                    ?> >ADMINISTRACION DE EMPRESAS</option>
                                                    <option id="bioquimicaFarmacia" value="BIOQUIMICA Y FARMACIA"  <?php
                                                    if ($row['ESCUELA'] == 'BIOQUIMICA Y FARMACIA') {
                                                        echo "Selected";
                                                    }
                                                    ?> >BIOQUIMICA Y FARMACIA</option>
                                                    <option id="contabilidadAuditoria" value="CONTABILIDAD Y AUDITORIA"  <?php
                                                    if ($row['ESCUELA'] == 'CONTABILIDAD Y AUDITORIA') {
                                                        echo "Selected";
                                                    }
                                                    ?> >CONTABILIDAD Y AUDITORIA</option>
                                                    <option id="diseñoGrafico" value="DISEÑO GRAFICO"  <?php
                                                    if ($row['ESCUELA'] == 'DISEÑO GRAFICO') {
                                                        echo "Selected";
                                                    }
                                                    ?> >DISEÑO GRAFICO</option>
                                                    <option id="finanzasComercioExterior"  value="FINANZAS Y COMERCIO EXTERIOR" <?php
                                                    if ($row['ESCUELA'] == 'FINANZAS Y COMERCIO EXTERIOR') {
                                                        echo "Selected";
                                                    }
                                                    ?> >FINANZAS Y COMERCIO EXTERIOR</option>
                                                    <option id="ingenieriaAutomotriz" value="INGENIERIA AUTOMOTRIZ" <?php
                                                    if ($row['ESCUELA'] == 'INGENIERIA AUTOMOTRIZ') {
                                                        echo "Selected";
                                                    }
                                                    ?> >INGENIERIA AUTOMOTRIZ</option>
                                                    <option id="ingenieriaIndustrial" value="INGENIERIA INDUSTRIAL" <?php
                                                    if ($row['ESCUELA'] == 'INGENIERIA INDUSTRIAL') {
                                                        echo "Selected";
                                                    }
                                                    ?> >INGENIERIA INDUSTRIAL</option>
                                                    <option id="ingenieriaMecanica" value="INGENIERIA MECANICA" <?php
                                                    if ($row['ESCUELA'] == 'INGENIERIA MECANICA') {
                                                        echo "Selected";
                                                    }
                                                    ?> >INGENIERIA MECANICA</option>
                                                    <option id="ingenieriaMantenimiento" value="INGENIERIA DE MANTENIMIENTO" <?php
                                                    if ($row['ESCUELA'] == 'INGENIERIA DE MANTENIMIENTO') {
                                                        echo "Selected";
                                                    }
                                                    ?> >INGENIERIA DE MANTENIMIENTO</option>
                                                    <option id="marketing" value="MARKETING" <?php
                                                    if ($row['ESCUELA'] == 'MARKETING') {
                                                        echo "Selected";
                                                    }
                                                    ?> >MARKETING</option>
                                                    <option id="nutricionDietetica" value="NUTRICION Y DIETETICA" <?php
                                                    if ($row['ESCUELA'] == 'NUTRICION Y DIETETICA') {
                                                        echo "Selected";
                                                    }
                                                    ?>>NUTRICION Y DIETETICA</option>
                                                    <option id="software" value="SOFTWARE" <?php
                                                    if ($row['ESCUELA'] == 'SOFTWARE') {
                                                        echo "Selected";
                                                    }
                                                    ?>>SOFTWARE</option>

                                                </select>
                                                <br>
                                                <br>
                                                <img src="imagenes/tipoUsuario.png">
                                                <select class="ingresoDatos" name="tipoUsuario" size="1">
                                                    <option value="Docente" <?php
                                                    if ($row['TIPO_USUARIO'] == 'Docente') {
                                                        echo "Selected";
                                                    }
                                                    ?>  >Profesor</option>
                                                    <option value="Estudiante" <?php
                                                    if ($row['TIPO_USUARIO'] == 'Estudiante') {
                                                        echo "Selected";
                                                    }
                                                    ?> >Estudiante</option>
                                                </select>
                                                <br>
                                                <br>
                                                <img src="imagenes/clave.png">
                                                <input class="ingresoDatos"type="password" value="<?php echo $row['CONTRASENIA'] ?>" name="contrasenia" placeholder="Contraseña...">
                                                <br>
                                                <br>

                                                <input type="hidden" value="<?php echo $row['CEDULA'] ?>" name="cedula" >
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
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>

            </div>


        </div>



        <!--------------------------boostrap---------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>




