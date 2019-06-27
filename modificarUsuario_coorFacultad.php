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
                    echo "Bienvenido | <strong> $nombre"." "."$apellido"." | "." $tipoUsuario"." </strong> |  ".$fecha=date("Y-m-d");
                ?>
        </div>

        <div class="botonSalir">
            <button  class="boton"><a href="cerrarSesion.php">Salir</a></button></label>
        </div>

<!--------------------------CABECERA---------------------------------->
        <div class="cabeceraIndex">
                <a href="usuarioCoordinadorFac.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
        </div><!--finde de la cabecera-->


 <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div> 
<!-------------------- INICIO DE CONTENEDOR CUERPO CREAR USUARIO - DENTRO DE ESTE DIV VAN TODOS LOS FORMULARIOS QUE EXISTAN EN ESTE USUARIO -------------------->
<div class="contenedorCuerpoCrearUsuario"> 
    
    
    
<!------------------------- FORMULARIO MODIFICACR USUARIO ------------------------->
       <div class="contInDatos" id="modificarUsuario">
            <div class="formInDatos">
                <h1>MODIFICAR USUARIO</h1>
                <br>
                
                <?php
                    $codigo=$_POST["enviarConsultarCedula"];
                            require_once('conexion.php');
                            $sql= "SELECT * FROM USUARIO WHERE '$codigo' = CEDULA";
                            $resultadoModificarUsu=$conn->query($sql);
                            $datosModificarUsu=$resultadoModificarUsu->fetch_assoc();                              
                ?>                
                
                <form action="modificarUsuarioFinal_coorFacultad.php" method="POST" onsubmit=" return validarFormulario(this)">
                    <div class="datos1">                        

                        <label class="lblForm" id="tipoUsuario">Tipo de Usuario : </label>                                            

                        <input readonly class="ingresoDatos" type="text" name="tipoUsuario" value="<?php echo  $datosModificarUsu['TIPO_USUARIO'];?>" >

                        <br id="br1">
                        <br id="br2">

                        <label class="lblForm"id="nombre">Nombre : </label>
                        <input class="ingresoDatos" id="escondernombre" type="text" name="nombre" placeholder="Nombre..." value="<?php echo  $datosModificarUsu['NOMBRE'];?>">
                        <br id="br3">
                        <br id="br4">

                        <label class="lblForm"id="apellido">Apellido : </label>
                        <input class="ingresoDatos" id="esconderapellido" type="text" name="apellido" placeholder="Apellido..." value="<?php echo  $datosModificarUsu['APELLIDO'];?>" >                                        
                        <br id="br5">
                        <br id="br6">

                        <label class="lblForm"id="correo">Correo Electronico : </label>
                        <input class="ingresoDatos" id="escondercorreo" type="email" name="correo" placeholder="nombre@algo.com" value="<?php echo  $datosModificarUsu['CORREO'];?>" >
                        <br id="br7">
                        <br id="br8">

                        <label class="lblForm" id="telefono">Telefono : </label>
                        <input class="ingresoDatos" id="escondertelefono" type="text" name="telefono" placeholder="Telefono..." value="<?php echo  $datosModificarUsu['TELEFONO'];?>" >
                        <br id="br9">
                        <br id="br10">

                        <label class="lblForm"id="facultad">Facultad : </label>  

                        <input readonly class="ingresoDatos" type="text" name="facultad" value="<?php echo  $datosModificarUsu['FACULTAD'];    ?>">

                        <br id="br11">                                 
                        <br id="br12">    

                        <label class="lblForm" id="escuela">Escuela :</label>
                        <input readonly class="ingresoDatos" type="text" name="escuela" value="<?php echo  $datosModificarUsu['ESCUELA'];?>">

                        <br id="br13"> 
                        <br id="br14">                                                                         

                        <label class="lblForm"id="cedula">Usuario (Cédula) : </label>
                        <input class="ingresoDatos" id="escondercedula" type="text" name="cedula" placeholder="Cédula..." value="<?php echo  $datosModificarUsu['CEDULA'];?>" >
                        <br id="br15">
                        <br id="br16">

                        <label class="lblForm" id="contrasenia">Contraseña : </label>
                        <input class="ingresoDatos" id="escondercontrasenia" type="password" name="contrasenia" placeholder="Contraseña..." value="<?php echo  $datosModificarUsu['CONTRASENIA'];?>" >
                        <br id="br17">
                        <br id="br18">   

                        <center><input class ="boton" type="submit" value="Modificar Usuario"></center>
                        <center><input class ="boton" type="reset"  value="Limpiar Informacion"></center>                                                                                                                          
                        
                    </div>
                </form>
            </div>  <!--finde del contenedor formInDatos-->
        </div><!---------fin de contenedor ingreso datos------------->    
    
        
    
<!-------------------- FIN DEL DIV CONTENEDOR CUERPO CREAR USUARIO -------------------->
</div>

<!--------------------------PIE------------------------------------>
        <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>

        </div>


    </div> <!--marco index 2-->
</div><!--marco index-->



</body>
</html> 