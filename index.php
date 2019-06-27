<!DOCTYPE html>
<html>
    <head>
        <title>SGP - SISTEMA GESTOR DE PROYECTOS</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!-------------botsatrap---------------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="imagenes/icon.JPG" />
        <script type="text/javascript" src="js/validarSugerencia.js"></script>
        <!-------------iconos de usuarios---------------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!-------------formulario inicio sesion---------------->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    </head>
    <body id="ini">
        <br>
        <div class="marcoIndex">
            <div class="marcoIndex2">
                
                <!--------------------------ACCESO---------------------------------->                              
                <div class="accesoSistema">     
                    <a href="index.php" > <img src="imagenes/logoespoch.jpg" >   </a>                   
                    <button class ="boton" onclick="document.getElementById('ingresoSistema').style.display = 'block'" >Iniciar Sesion</button>
                </div>

                <!--------------------------CABECERA---------------------------------->
                <div class="cabeceraIndex">
                    <a href="index.php">SISTEMA GESTOR DE PROYECTOS(SGP)</a>
                </div><!--finde de la cabecera-->
                
                <!--------------------------MENU---------------------------------->
                <div class="menuIndex">
                    <ul class="nav justify-content-center">
                        <li id="op1" class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                        <li id="op2"class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                        <li id="op3"class="nav-item"><a class="nav-link" href="#direccion">Direccion & Contantos</a></li>
                        <!--  <li id="op3"class="nav-item"><a class="nav-link" href="#direccion">Direccion</a></li>-->
                        <!--<li id="op4"class="nav-item"><a class="nav-link" href="formularioRegistro.php">Registro</a></li>-->
                    </ul>		
                </div>	
                
                <!--------------------------BANNER---------------------------------->
                <div class="banner">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                <img src="imagenes/ima5.jpg" class="d-block w-100" alt="...">
                            </div><!--
                            <div class="carousel-item">
                                <img src="imagenes/ima5.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/ima6.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/ima7.jpg" class="d-block w-100" alt="...">
                            </div>-->
                            <div class="carousel-item">
                              <img src="imagenes/ima8.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="imagenes/ima4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="imagenes/ima10.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="imagenes/ima11.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="imagenes/ima12.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <!--------------------------NOSOTROS----------------------------->
                <div class="nosotrosPrincipal" id="nosotros" >
                    <div class="Titulo">
                        <h1>NOSOTROS</h1>                          
                        <p id="parrafo">Con el objetivo de ayudar a la Escuela Superior
                        Polit&eacute;cnica de Chimborazo a gestionar sus proyectos de vinculaci&oacute;n, este grupo de trabajo a dise&ntilde;ado la presente aplicaci&oacute;n web para cumplir con dicho objetivo.</p> 
                    </div>
                    <div class="w3-row-padding">
                        <div class="w3-third">				  	
                            <img class="imagen" src="imagenes/nos1.jpg">				  	
                            <h2>Trabajo</h2>
                            <p><strong>London is the capital city of England.</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="w3-third">
                            <img class="imagen" src="imagenes/nos2.jpg">
                            <h2>Prestigio</h2>
                            <p><strong>Paris is the capital of France.</strong></p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborumipsum 
                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="w3-third">
                            <img class="imagen" src="imagenes/nos3.jpg">
                            <h2>Union</h2>
                            <p><strong>Tokyo is the capital of Japan.</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div><!-----------fin nosotros------------------------>
                <!-------------------------DIRECCION----------------------------->

                <div class="Titulo" id="direccion">
                    <h1>NUESTRA DIRECCION</h1> 
                    <p><label class="lblForm2">SUCRE Y BELLAVISTA 150 (JUNTO A LA GASOLINERA)</label></p>
                    <p><label class="lblForm2">RIOBAMBA - ECUADOR </label></p>
                    <p>CONTACTOS: ------------</p> 
                </div>
            </div>

            <div class="direccion" >
                <div class="mapa">
                    <iframe class="m" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.0732077717248!2d-78.67861324193414!3d-1.6587540996975987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d307c252930ed9%3A0x6ad1a526f47e5b0c!2sEscuela+Superior+Polit%C3%A9cnica+de+Chimborazo!5e0!3m2!1ses-419!2sec!4v1558736389185!5m2!1ses-419!2sec" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="clear"></div>
            </div>												
            <!--------------------------PIE------------------------------------>
            <div class="pie">
                <p>ESCUELA SUPERIOR POLITECNICA DE CHIMBORAZO</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Raúl Medina</kbd>|<kbd>Paúl Proaño</kbd>|<kbd>Jessica Zavala</kbd> </p>	
            </div>
            <!-- ----------------	INGRESO AL SISTEMA ------------------------------ -->
            <div id="ingresoSistema" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                    <div class="contenedorInicioSesion">
                        <span onclick="document.getElementById('ingresoSistema').style.display = 'none'" class="w3-button w3-display-topright w3-large">x</span>
                        <center><h1>Iniciar Sesión</h1></center>
                    </div>

                    <form action="iniciarSesion.php" target="_self" method="POST">
                        <br> 
                        <center><i class="fas fa-user"></i> <label>Usuario</label></center>
                        <center><input style="display: inline-block;"class="ingresoDatos" type="text" placeholder="Usuario...." required name="cedulaLogin"></center>
                        <br>

                        <center> <i class="fa fa-link" aria-hidden="true"></i> <label>Contraseña</label></center>
                        <center><input style="display: inline-block;"class="ingresoDatos" type="Password" placeholder="Contraseña...." required name="contraseniaLogin"></center>
                        <br>

                        <center><button class="boton" type="submit">Ingresar</button></center>
                    </form>
                </div>
            </div>
            <!---<div class="clear"></div>--->
        </div><!--finde del marcoIndex2-->
    </div><!--finde del marcoIndex-->

    <!--------------------------NO TOCAR---------------------------------->
    <!--------------------------boostrap---------------------------------->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>