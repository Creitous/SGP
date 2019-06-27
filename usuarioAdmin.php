
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
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!-------------script---------------->
        <script type="text/javascript" src="js/validar.js"></script>
        <script type="text/javascript" src="js/funForm.js"></script>
        <script type="text/javascript" src="js/validarCedula.js"></script>
        <script type="text/javascript" src="js/validarProyecto.js"></script>
        <!-------------botsatrap---------------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="imagenes/icon.JPG" />
        <!-------------iconos de usuarios---------------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="marcoIndex">
            <div class="marcoIndex2">
                <!--------------------------ACCESO---------------------------------->
                <div class="accesoSistema2">

                    <label class="nombreMayusculas">

                      
                  
                        <?php
                      $nombreUsuario = $_SESSION['NOMBRE'];
                      $apellidoUsuario = $_SESSION['APELLIDO'];
                      $tipoUsuario = $_SESSION['TIPO_USUARIO'];
                      echo "Bienvenido | <strong> $nombreUsuario" . " " . "$apellidoUsuario" . " | " . " $tipoUsuario" . " </strong> |  " . $fecha = date("Y-m-d");
                        ?> 
                    </label>
                </div>
                <div class="botonSalir">
                    <button  class="boton"><a href="cerrarSesion.php">Salir</a></button></label>
                </div>
                <!------------------------------------------------------------>

                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="usuarioAdmin.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                </div><!--finde de la cabecera-->
                <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center">
                        <!-------------------------------------------------------->
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuario</a>
                            <div class="submenu dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="MostrarOcultar()">Crear Usuario</a>
                                <a class="dropdown-item" href="#" onclick="ModificarUsuario()">Modificar Usuario</a>
                                <a class="dropdown-item" href="#" onclick="eliUsuario()" >Eliminar Usuario</a>
                            </div>
                        </li>

                        <!-------------------------------------------------------->
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Proyecto</a>
                            <div class="submenu dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="crearProyectoNuevo()" >Crear Proyecto</a>
                                <a class="dropdown-item" href="#" onclick="buscarProyecto()">Modificar Proyecto</a>
                            </div>
                        </li>
                        <!-------------------------------------------------------->
                        <button id="plantillaboton" onclick="misProyectos()">Mis Proyectos</button>
                    </ul>		
                </div>	
                
              
        <div class="contenedorCuerpoCrearUsuario">
                
                <!-------------------------- SECCION FORMULARIO DE CREAR USUARIO---------------------------------->
            
                    <div class="contInDatos" id="formCrearUsuario">
                        <div class="formInDatos">
                            <h1>CREAR USUARIO</h1>
                            <br>
                            <!--------------------------------------------------------------------------->
                            <form action="registrarUsuario.php" method="POST" onsubmit=" return validarFormulario(this)">
                                <div class="datos1">
                                    
                                    <label class="lblForm" id="tipoUsuario">Tipo de Usuario : </label>                                                                
                                    <select class="ingresoDatos" id="escondertipoUsuario" name="tipoUsuario" size="1"  >
                                        <option>Selecciona Tp.Usuario...</option>
                                        <option id="coordinadorGeneral" onclick="coorGeneral_1()">Coordinador General</option>
                                        <option id="corrdinadorFacultad" onclick="coorFacultad_1()">Coordinador Facultad</option>
                                        <option id="coordinadorCarrera" onclick="coorCarrera_1()">Coordinador Carrera</option>
                                        <option id="docente" onclick="docente_1()">Docente</option>
                                        <option id="estudiante" onclick="estudiante_1()">Estudiante</option>
                                        <option id="representanteEmpresa" onclick="repEmpresa_1()">Representante Empresa</option>
                                    </select>                                
                                    <br id="br1">
                                    <br id="br2">
                                    
                                    <label class="lblForm"id="nombre">Nombre : </label>
                                    <input class="ingresoDatos" id="escondernombre" type="text" name="nombre" placeholder="Nombre...">
                                    <br id="br3">
                                    <br id="br4">
                                    
                                    <label class="lblForm"id="apellido">Apellido : </label>
                                    <input class="ingresoDatos" id="esconderapellido" type="text" name="apellido" placeholder="Apellido...">                                    	
                                    <br id="br5">
                                    <br id="br6">
                                    
                                    <label class="lblForm"id="correo">Correo Electronico : </label>
                                    <input class="ingresoDatos" id="escondercorreo" type="email" name="correo" placeholder="nombre@algo.com">
                                    <br id="br7">
                                    <br id="br8">
                                    
                                    <label class="lblForm" id="telefono">Telefono : </label>
                                    <input class="ingresoDatos" id="escondertelefono" type="text" name="telefono" placeholder="Telefono...">
                                    <br id="br9">
                                    <br id="br10">
                                    
                                    <label class="lblForm"id="facultad">Facultad : </label>                                    
                                    <select class="ingresoDatos" id="esconderfacultad" name="facultad" size="1"  >
                                        <option>Selecciona Facultad...</option>
                                        <option id="administracionEmpresas" onclick="adminEmpresas()">ADMINISTRACION DE EMPRESAS</option>
                                        <option id="ciencias" onclick="cien()" >CIENCIAS</option>
                                        <option id="informaticaElectronica" onclick="infElectronica()">INFORMATICA Y ELECTRONICA</option>
                                        <option id="mecanica" onclick="mec()">MECANICA</option>
                                        <option id="recursosNaturales"  onclick="recNaturales()" >RECURSOS NATURALES</option>
                                        <option id="saludPublica" onclick="salPublica()">SALUD PÚBLICA</option>
                                    </select>                                         
                                    <br id="br11">                                 
                                    <br id="br12">    
                                    
                                    <label class="lblForm" id="escuela">Escuela :</label>
                                    <select class="ingresoDatos" id="esconderescuela" name="escuela" size="1"  >
                                            <option>Selecciona la escuela...</option>
                                            <option id="agronomia">AGRONOMIA</option>
                                            <option id="administracionDeEmpresas">ADMINISTRACION DE EMPRESAS</option>
                                            <option id="bioquimicaFarmacia">BIOQUIMICA Y FARMACIA</option>
                                            <option id="contabilidadAuditoria">CONTABILIDAD Y AUDITORIA</option>
                                            <option id="diseñoGrafico">DISEÑO GRAFICO</option>
                                            <option id="finanzasComercioExterior">FINANZAS Y COMERCIO EXTERIOR</option>
                                            <option id="ingenieriaAutomotriz">INGENIERIA AUTOMOTRIZ</option>
                                            <option id="ingenieriaIndustrial">INGENIERIA INDUSTRIAL</option>
                                            <option id="ingenieriaMecanica">INGENIERIA MECANICA</option>
                                            <option id="ingenieriaMantenimiento">INGENIERIA DE MANTENIMIENTO</option>
                                            <option id="marketing">MARKETING</option>
                                            <option id="nutricionDietetica">NUTRICION Y DIETETICA</option>
                                            <option id="software">SOFTWARE</option>
                                    </select>                                                                             
                                    <br id="br13"> 
                                    <br id="br14">                                                                         
                                    
                                    <label class="lblForm"id="cedula">Usuario (Cédula) : </label>
                                    <input class="ingresoDatos" id="escondercedula" type="text" name="cedula" placeholder="Cédula...">
                                    <br id="br15">
                                    <br id="br16">
                                    
                                    <label class="lblForm" id="contrasenia">Contraseña : </label>
                                    <input class="ingresoDatos" id="escondercontrasenia" type="password" name="contrasenia" placeholder="Contraseña...">
                                    <br id="br17">
                                    <br id="br18">   
                                    
                                    <center><input class ="boton"type="submit" name="Enviar" value="Crear Usuario"></center>
                                    <center><input class ="boton"type="reset" value="Limpiar Informacion"></center>			
                                </div>
                            </form>
                        </div>	<!--finde del contenedor formInDatos-->
                    </div><!---------fin de contenedor ingreso datos------------->
               

                    <script type="text/javascript">
                        /*document.getElementById('formCrearUsuario').style.display = "none";
                         function MostrarOcultar(){
                         document.getElementById('formCrearUsuario').style.display = "block";
                         }*/


                        document.getElementById('formCrearUsuario').style.display = "none";

                        function MostrarOcultar() {
                            document.getElementById('formCrearUsuario').style.display = "block";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";
                        }
                    </script>
                    <!--------------------------FORMULARIO MDOFICAR DE USUARIO------------------------------------>                 
                        <div class="contInDatos" id="formModificarUsuario">
                            <div class="formInDatos">
                                <h1>BUSCAR USUARIO</h1>
                                <br>

                                <form action="modificarUsuarioDesce_CoordinadorGeneral.php" method="POST" onsubmit=" return validarFormCedula(this)">
                                    <div class="datos1">
                                        <label class="lblForm"id="cedulaBuscar">Cédula : </label>
                                        

                                         <input class="ingresoDatos" type="text" name="enviarConsultarCedula" placeholder="Cédula a Buscar...">


                                       <!-- <input type="submit" value="Buscar" class="boton"  >-->
                                        <center><button class ="boton" value="Buscar" name="Modificar" >Modificar</button></center>

                                    </div>
                                </form>
                            </div>	<!--finde del contenedor formInDatos-->	
                        </div><!---------fin de contenedor ingreso datos------------->

                        
                    <script type="text/javascript">

                        document.getElementById('formModificarUsuario').style.display = "none";

                        function ModificarUsuario() {
                            document.getElementById('formModificarUsuario').style.display = "block";
                            document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarUsuario2').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";

                        }
                    </script>                  
<!---------------------------------------------------------->
                <?php
                    $codigo=$_POST["enviarConsultarCedula"];
            try{
                    require_once('conexion.php');
                    $sql= "SELECT * FROM USUARIO WHERE '$codigo' = CEDULA";
                    $resultado=$conn->query($sql);
                    $datos=$resultado->fetch_assoc();
                  
                }
                catch(Exception $e){
                    $error = $e->getMessage();
                            
                }
                                 
                ?>

   
                <!-------------------------- SECCION FORMULARIO DE MODIFICAR USUARIO---------------------------------->
                    <div class="contInDatos" id="formModificarUsuario2">
                        <div class="formInDatos">
                            <h1>MODIFICAR USUARIO</h1>
                            <br>
                            <!--------------------------------------------------------------------------->
                            <form action="modificarUsuario.php" method="POST" onsubmit=" return validarFormulario(this)">
                                <div class="datos1">
                                    
                                    <label class="lblForm" id="tipoUsuario">Tipo de Usuario : </label>                                            
                                
                                    <input readonly class="ingresoDatos" type="text" name="tipoUsuario" value="<?php echo  $datos['TIPO_USUARIO'];?>" >
                                                     
                                    <br id="br1">
                                    <br id="br2">
                                    
                                    <label class="lblForm"id="nombre">Nombre : </label>
                                    <input class="ingresoDatos" id="escondernombre" type="text" name="nombre" placeholder="Nombre..." value="<?php echo  $datos['NOMBRE'];?>">
                                    <br id="br3">
                                    <br id="br4">
                                    
                                    <label class="lblForm"id="apellido">Apellido : </label>
                                    <input class="ingresoDatos" id="esconderapellido" type="text" name="apellido" placeholder="Apellido..." value="<?php echo  $datos['APELLIDO'];?>" >                                        
                                    <br id="br5">
                                    <br id="br6">
                                    
                                    <label class="lblForm"id="correo">Correo Electronico : </label>
                                    <input class="ingresoDatos" id="escondercorreo" type="email" name="correo" placeholder="nombre@algo.com" value="<?php echo  $datos['CORREO'];?>" >
                                    <br id="br7">
                                    <br id="br8">
                                    
                                    <label class="lblForm" id="telefono">Telefono : </label>
                                    <input class="ingresoDatos" id="escondertelefono" type="text" name="telefono" placeholder="Telefono..." value="<?php echo  $datos['TELEFONO'];?>" >
                                    <br id="br9">
                                    <br id="br10">
                                    
                                    <label class="lblForm"id="facultad">Facultad : </label>  

                                    <input readonly class="ingresoDatos" type="text" name="facultad" value="<?php echo  $datos['FACULTAD'];    ?>">

                                    <br id="br11">                                 
                                    <br id="br12">    
                                    
                                    <label class="lblForm" id="escuela">Escuela :</label>
                                    <input readonly class="ingresoDatos" type="text" name="escuela" value="<?php echo  $datos['ESCUELA'];?>">
                                                                                                          
                                    <br id="br13"> 
                                    <br id="br14">                                                                         
                                    
                                    <label class="lblForm"id="cedula">Usuario (Cédula) : </label>
                                    <input class="ingresoDatos" id="escondercedula" type="text" name="cedula" placeholder="Cédula..." value="<?php echo  $datos['CEDULA'];?>" >
                                    <br id="br15">
                                    <br id="br16">
                                    
                                    <label class="lblForm" id="contrasenia">Contraseña : </label>
                                    <input   class="ingresoDatos" id="escondercontrasenia" type="password" name="contrasenia" placeholder="Contraseña..." value="<?php echo  $datos['CONTRASENIA'];?>"  >
                                    <br id="br17">
                                    <br id="br18">   
                                    
                                    <center><input class ="boton"type="submit" name="Enviar" value="Modificar Usuario"></center>
                                   
                                    <center><input class ="boton"type="reset" value="Limpiar Informacion"></center>  




                                </div>
                            </form>
                        </div>  <!--finde del contenedor formInDatos-->
                    </div><!---------fin de contenedor ingreso datos------------->

<!------------------------------------------------------->
<!---------------------PREGUNTAR----------------------->
<!------------------------------------------------------->
<script type="text/javascript">
                          document.getElementById('formModificarUsuario2').style.display = "none";
                        function ModificarUsuario2() {
                            document.getElementById('formModificarUsuario2').style.display = "block";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";
                        }
                    </script>
 <!--------------------------ELIMINAR USUARIO------------------------------->

     <div class="contInDatos" id="eliminarUsuario">
        <div class="formInDatos2">
            <?php
            try{
            require_once ('conexion.php');
            $CEDULAMIA = $_SESSION['CEDULA'];
            $sql = "select * from USUARIO WHERE CEDULA != '$CEDULAMIA' ORDER BY APELLIDO";
            $result = $conn->query($sql);
            }
                     catch (Exception $e){
                         $error= $e->getMessage();
                     }   
                            ?>
                            <table class="tablaEliminar">
                                <tr class="tablaEliminarTR">
                                    <th>&nbsp; CEDULA</th>
                                    <th>&nbsp; NOMBRE&nbsp;</th>
                                    <th>&nbsp; APELLIDO&nbsp;</th>
                                    <th>&nbsp; FACULTAD&nbsp;</th>
                                    <th>&nbsp; ESCUELA&nbsp;</th>
                                    <th>&nbsp; TIPO USUARIO&nbsp;</th>
                                    <th>&nbsp; ELIMINAR&nbsp;</th>
                                </tr>
                             <?php 
                                while ($row = $result ->fetch_array()){
                                    printf ("
                                        <tr>
                                            <td>&nbsp;%s</td>
                                            <td>&nbsp;%s&nbsp;</td>
                                            <td>&nbsp;%s&nbsp;</td>
                                            <td>&nbsp;%s&nbsp;</td>
                                            <td>&nbsp;%s&nbsp;</td>
                                            <td>&nbsp;%s&nbsp;</td>

                                            <td><a href=\"borrarUsuario_coorGeneral.php?cedula=%s\"> <i class=\"fas fa-trash-alt\"> </i> </a>
                                            </td>

                                        </tr>",$row["CEDULA"],$row["NOMBRE"],$row["APELLIDO"],
                                            $row["FACULTAD"],$row["ESCUELA"],$row["TIPO_USUARIO"],$row["CEDULA"]
                                            );
                                   
                                } echo'</table>';

                             ?>
                            </table>
        </div>  <!--finde del contenedor formInDatos-->
</div><!---------fin de contenedor ingreso datos------------->

				<script type="text/javascript">
                        document.getElementById('eliminarUsuario').style.display = "none";
                        function eliUsuario() {
                        document.getElementById('eliminarUsuario').style.display = "block";
                        document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                                 }
				</script> 


<!--------------------------MODIFICAR PROYECTO--------------------------------->

        <div class="contInDatos" id="formModificarProyecto">
                            <div class="formInDatos">
                                <h1>BUSCAR PROYECTO</h1>
                                <br>

                                <form action="modificarProyectoDesde_CoordinadorGeneral.php" method="POST" onsubmit=" return validarFormProyecto(this)">
                                    <div class="datos1">
                                        <label class="lblForm"id="proyectoABuscar">Proyecto nº : </label>                                       
                                         <input class="ingresoDatos" type="text" name="enviarConsultarProyecto" placeholder="Proyecto a Buscar...">


                                       <!-- <input type="submit" value="Buscar" class="boton"  >-->
                                        <center><button class ="boton" value="Buscar" name="Modificar" >Modificar</button></center>

                                    </div>
                                </form>
                            </div>  <!--finde del contenedor formInDatos--> 
                        </div><!---------fin de contenedor ingreso datos------------->

<script type="text/javascript">
                        document.getElementById('formModificarProyecto').style.display = "none";
                        function buscarProyecto() {
                            document.getElementById('formModificarProyecto').style.display = "block";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";
                        }

</script> 

<!-------------------------- REPORTE MIS PROYECTOS-------------------------------------->

<div class="contInDatos" id="mostrarMisProyectos">
        <div class="formInDatos2">
            <?php
            try{
            require_once ('conexion.php');
            $sql = "select * from PROYECTO";
            $result = $conn->query($sql);
            }
                     catch (Exception $e){
                         $error= $e->getMessage();
                     }   
                            ?>
             <button class="boton" onclick="subirArchivo()"><strong>Subir</strong>  Documento</button>
            <!-- <button class="boton" onclick="">Mis Documentos</button>-->
            
                            <table class="tablaEliminar">
                                <tr class="tablaEliminarTR">
                                    <th>ID PROYECTO</th>
                                    <th>COORDINADOR GENERAL</th>
                                    <th>REP. EMPRESA</th>
                                    <th>COOR. FACULTAD</th>
                                    <th>NOMBRE PROYECTO</th>
                                    <th>DESCRIPCION PROYECTO</th>
                                    <th>ESTADO PROYECTO</th>
                                    <th>FECHA INICIO</th>
                                    <th>FECHA FIN</th>
                                    <th>EVENTO</th>
                                    <th>DOC</th>
                                    <th>ELIMINAR</th>
                                </tr>
                             <?php 

                                while ($row = $result ->fetch_array()){
                                    printf ("
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
                                            <td><center><a href=\"mostrarEvento_coorGeneral.php?id_pr=%s\"> <i class=\"far fa-eye\" ></i> </a></center></td>
                                            <td>&nbsp;%s&nbsp;</td>
                                            <td><a href=\"borrarProyecto_coorGeneral.php?id_p=%s\"> <i class=\"fas fa-trash-alt\"> </i></a></td>
                                            
                                        </tr>",

                                            $row["ID_P"],$row["CEDULA_CG"],$row["CEDULA_REPE"],
                                            $row["CEDULA_CF"],$row["NOMBRE_P"],$row["DESCRIPCION_P"],$row["ESTADO_P"],$row["FECHAI_P"],$row["FECHAF_P"],$row["ID_P"],'',$row["ID_P"]
                                            );
                                   
                                } echo'</table>';
                                
                             ?>
                            </table>
        </div>  <!--finde del contenedor formInDatos-->
</div><!---------fin de contenedor ingreso datos------------->
 

<script type="text/javascript">
                        document.getElementById('mostrarMisProyectos').style.display = "none";
                        function misProyectos() {
                        document.getElementById('mostrarMisProyectos').style.display = "block";
                        document.getElementById('eliminarUsuario').style.display = "none";
                        document.getElementById('formCrearUsuario').style.display = "none";
                        document.getElementById('formModificarUsuario').style.display = "none";
                        document.getElementById('formSubirArchivo').style.display = "none";
                        document.getElementById('formSubidoCorrectamante').style.display = "none";
                        document.getElementById('formIngresoProyecto').style.display = "none";
                        document.getElementById('formModificarProyecto').style.display = "none";
                        }
</script>                                        




<script type="text/javascript">
                        document.getElementById('mostrarMisEventos').style.display = "none";
                        function misEventos() {
                            document.getElementById('mostrarMisEventos').style.display = "block";
                        document.getElementById('mostrarMisProyectos').style.display = "none";
                        document.getElementById('eliminarUsuario').style.display = "none";
                        document.getElementById('formCrearUsuario').style.display = "none";
                        document.getElementById('formModificarUsuario').style.display = "none";
                        document.getElementById('formSubirArchivo').style.display = "none";
                        document.getElementById('formSubidoCorrectamante').style.display = "none";
                        document.getElementById('formIngresoProyecto').style.display = "none";
                        document.getElementById('formModificarProyecto').style.display = "none";
                        }
</script>  
                    
<!-----------------------------------------MENSAJE DE EXITO Y FRACASO---------------------------------->
                    <script type="text/javascript">
                        document.getElementById('mensajeExito2').style.display = "none";
                        function MostrarExito() {
                            document.getElementById('mensajeExito2').style.display = "block";
                            document.getElementById('formCrearUsuario2').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";
                        }
                    </script>
                    <?php
                    if (isset($a)) {
                        echo '<div id="mensajeExito">
					<h1>exito</h1>

				</div>';
                    } else {
                        echo '<div id="mensajeFracaso">
					<!--<h1>fracaso</h1>-->
				</div>';
                    }
                    ?>
              
  <!-----------------------------------------SUBIR ARCHIVO------------------------------------------->
                         <div class="contInDatos" id="formSubirArchivo">
                            <div class="formInDatos">

                                <form action="file.php" method="post" enctype="multipart/form-data">
          
                                            <input class="boton" type="file" name="archivo" id="archivo"></input>
                                            <input class="boton" type="submit" value="Subir archivo"></input>
    
                                </form>
                            </div>  <!--finde del contenedor formInDatos--> 
                        </div><!---------fin de contenedor ingreso datos------------->

                    <script type="text/javascript">
                        document.getElementById('formSubirArchivo').style.display = "none";
                        function subirArchivo() {
                            document.getElementById('formSubirArchivo').style.display = "block";
                            document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";                            
                        }
                    </script>

                    
                        <div class="contInDatos" id="formSubidoCorrectamante">
                             <div class="formInDatos">
                                <?php
                    // $_FILES['archivo que vasmos aguardar nombre']["propiedades del archivo error nombre imagen.loquesea"] ['size donde se guardara el archivo temporal']
                                if ($_FILES['archivo']["error"] > 0) {
                                    echo "Error: " . $_FILES['archivo']['error'] . "<br>";
                                } else {
                                    //escribe las caracteristicas de los archivos
                                    echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
                                    echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
                                    echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
                                    echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'] . "<br>";
                                    echo "DOCUMENTO GUARDADO" . "<br>";
                                }

                                /* ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos */

                                move_uploaded_file($_FILES['archivo']['tmp_name'], 'documentosSubidos/' . $_FILES['archivo']['name']); //mover de la carpeta a la carpeta temporal
                                ?>
                            </div>	<!--finde del contenedor formInDatos-->	
                        </div><!---------fin de contenedor ingreso datos------------->


                    <script type="text/javascript">
                        document.getElementById('formSubidoCorrectamante').style.display = "none";
                        function subidoCorrectamente() {
                            document.getElementById('formSubidoCorrectamante').style.display = "block";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formIngresoProyecto').style.display = "none";
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";                            
                        }
                    </script>


                   <!--------------------------CREAR NUEVO PROYECTO------------------------------------>
                                            <div class="contInDatos" id="formIngresoProyecto">
                                                <div class="formInDatos">
                                            <h1>CREAR PROYECTO</h1>
                                            <br>
                                            <form id="" method="POST" action="crearProyecto_coorGeneral.php" onsubmit="return validarFormNuevoProyecto(this)">

                                                <label class="lblForm">Nombre de proyecto :</label>
                                                <br>
                                                <input class="ingresoDatos" type="text" name="nombreProyecto">
                                                <br>
                                                <br>
                                                <label class="lblForm">Descripcion :</label>
                                                <br>
                                                <textarea class="ingresoDatos" rows="2" cols="53" name="descripcionProyecto"></textarea>
                                                <br>  
                                                <br> 
                                                <label class="lblForm">Fecha de Inicio :</label>
                                                <input type="date" name="fechaInicioProyecto">
                                                <br> 
                                                <br> 
                                                <label class="lblForm">Fecha de Fin :</label>
                                                <input type="date" name="fechaFinProyecto">
                                                <br>  
                                                <br> 
                                                <label >Coordinador de Facultad :</label>
                                                <br>
                                                              <?php
                                                                try{
                                                                    require_once('conexion.php');
                                                                    
                                                                    $sql="SELECT CEDULA, NOMBRE, APELLIDO FROM USUARIO WHERE TIPO_USUARIO='Coordinador Facultad'";
                                                                    $resultado=$conn->query($sql);
                                                                } catch (Exception $ex) {
                                                                    $error = $ex->getMessage();
                                                                }
                                                              ?>
                                            <select  name="coordinadorFacultadProyecto" class="ingresoDatos">
                                                    <option  focus>Seleccionar...</option>
                                                    <?php
                                                    while($datos=$resultado->fetch_array()){
                                                        $cedulaCoordinadorFacultad=$datos['CEDULA'];
                                                        $nombreCoordinadorFacultad=$datos['NOMBRE'];
                                                        $apellidoCoordinadorFacultad=$datos['APELLIDO'];
                                                    echo "<option>$cedulaCoordinadorFacultad - $nombreCoordinadorFacultad $apellidoCoordinadorFacultad</option>"; 

                                                             }
                                                           ?>                                  
                                             </select>
                                                <br>  
                                                <br> 
                                                <label >Representante de Empresa :</label>
                                                <br>
                                                              <?php
                                                                try{
                                                                    require_once('conexion.php');
                                                                    
                                                                    $sql="SELECT CEDULA, NOMBRE, APELLIDO FROM USUARIO WHERE TIPO_USUARIO='Representante Empresa'";
                                                                    $resultado=$conn->query($sql);
                                                                } catch (Exception $ex) {
                                                                    $error = $ex->getMessage();
                                                                }
                                                              ?>
                                            <select name="representanteEmpresaProyecto" class="ingresoDatos">
                                                    <option focus>Seleccionar...</option>
                                                    <?php
                                                    while($datos=$resultado->fetch_array()){
                                                        $cedulaRepresentanteEmpresa=$datos['CEDULA'];
                                                        $nombreRepresentanteEmpresa=$datos['NOMBRE'];
                                                        $apellidoRepresentanteEmpresa=$datos['APELLIDO'];
                                                    echo "<option>$cedulaRepresentanteEmpresa - $nombreRepresentanteEmpresa $apellidoRepresentanteEmpresa</option>";    
                                                             }
                                                    ?> 
                                            <?php
                                                $estadoProyect = 'Iniciado';
                                             ?> 
                                             </select>
                                             <br>
                                                <center><input class ="boton"type="submit" name="Enviar" value="Crear Proyecto"></center>
                                                <center><input class ="boton" type="reset" value="Limpiar Informacion"></center> 
                                                <input value="<?php echo $_SESSION['CEDULA'] ; ?>" type="hidden" name="cedulaCoordinadorGeneral">
                                                <input value="<?php echo $estadoProyect ; ?>" type="hidden" name="estadoProyecto">
                                            </form>
                                </div> <!--finde del contenedor formInDatos--> 
                            </div><!---------fin de contenedor ingreso datos------------->

                        <script type="text/javascript">
                        document.getElementById('formIngresoProyecto').style.display = "none";
                        function crearProyectoNuevo() {
                            document.getElementById('formIngresoProyecto').style.display = "block";
                            document.getElementById('formCrearUsuario').style.display = "none";
                            document.getElementById('formModificarUsuario').style.display = "none";
                            document.getElementById('formSubirArchivo').style.display = "none";
                            document.getElementById('formSubidoCorrectamante').style.display = "none";  
                            document.getElementById('eliminarUsuario').style.display = "none";
                            document.getElementById('formModificarProyecto').style.display = "none";
                            document.getElementById('mostrarMisProyectos').style.display = "none";                            
                        }
                    </script>

        </div><!------FIN CONTENEDOR CUERPO DE FORMULARIO---->
        

                                    


  <!--------------------------PIE------------------------------------>
                <div class="pie">
                    <p>Escuela Superior Politecnica de Chimborazo</p>
                    <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>
                </div>
            </div><!--finde del marcoIndex2-->
        </div><!--finde del marcoIndex-->
        <!--------------------------boostrap---------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>