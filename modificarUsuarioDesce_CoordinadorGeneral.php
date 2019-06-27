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
            <!-------------botsatrap---------------->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="icon" type="image/jpg" href="imagenes/icon.JPG"/>
            <!-------------iconos de usuarios---------------->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

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

        <!--------------------------CABECERA---------------------------------->
                    <div class="cabeceraIndex">
                        <a href="usuarioAdmin.php">SISTEMA GESTOR DE PROYECTOS (SGP)</a>
                    </div><!--finde de la cabecera-->
                     <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center" style="height: 30px">
                    </ul>       
                </div>  
        <!--------------------------MENU---------------------------------->          
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
                                <form action="modificarUsuario_coorGeneral.php" method="POST" onsubmit=" return validarFormulario(this)">
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
                                        <input readonly class="ingresoDatos" id="escondercedula" type="text" name="cedula" placeholder="Cédula..." value="<?php echo  $datos['CEDULA'];?>" >
                                        <br id="br15">
                                        <br id="br16">
                                        
                                        <label class="lblForm" id="contrasenia">Contraseña : </label>
                                        <input class="ingresoDatos" id="escondercontrasenia" type="password" name="contrasenia" placeholder="Contraseña..." value="<?php echo  $datos['CONTRASENIA'];?>" >
                                        <br id="br17">
                                        <br id="br18">   
                                        
                                        <center><input class ="boton"type="submit" name="Enviar" value="Modificar Usuario" ></center>

                                   </div>
                                </form>
                            </div>  <!--finde del contenedor formInDatos-->
                        </div><!---------fin de contenedor ingreso datos------------->
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



