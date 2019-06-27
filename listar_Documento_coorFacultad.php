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

 <!-------------------LISTAR DOCUMENTO---------------------------------->
<div class="contInDatos" id="misActividades">
            <div class="formInDatos2">             

<h3> DOCUMENTOS SUBIDOS </h3>
	<?php
		//Creamos Nuestra funciÛnn
		function listFiles($directorio){ //La funciÛn recibira como parametro un directorio
		if (is_dir($directorio)) { //Comprobamos que sea un directorio Valido
			if ($dir = opendir($directorio)) {//Abrimos el directorio
 				echo '<ul>'; //Abrimos una lista HTML para mostrar los archivos
 					while (($archivo = readdir($dir)) !== false){ //Comenzamos a leer archivo por archivo
						if ($archivo != '.' && $archivo != '..'){//Omitimos los archivos del sistema . y ..
 
							$nuevaRuta = $directorio.$archivo.'/';//Creamos unaruta con la ruta anterior y el nombre del archivo actual 
 							echo '<li>'; //Abrimos un elemento de lista  
							if (is_dir($nuevaRuta)) { //Si la ruta que creamos es un directorio entonces:
								echo '<b>'.$nuevaRuta.'</b>'; //Imprimimos la ruta completa resaltandola en negrita
								listFiles($nuevaRuta);//Volvemos a llamar a este metodo para que explore ese directorio.
								} 
							else { //si no es un directorio:
 								$ruta_archivo = $directorio.$archivo;
								echo "<a href='$ruta_archivo'>Archivo: $archivo</a>";
							}
							'</li>'; //Cerramos el item actual y se inicia la llamada al siguiente archivo
						}
 
					}//finaliza While
				echo '</ul>';//Se cierra la lista
				closedir($dir);//Se cierra el archivo
			}
		}
		else{//Finaliza el If de la linea 12, si no es un directorio valido, muestra el siguiente mensaje
			echo 'No Existe el directorio';
		}
		}//Fin de la FunciÛn	
 
        //Llamamos a la funciÛn y le pasamos el nombre de nuestro directorio.
        listFiles("documentos_coorFacultad/");
        ?>	

            </div><!--formInDatos-->           
        </div><!--contInDatos-->  

    
<!-------------------- FIN DEL DIV CONTENEDOR CUERPO CREAR USUARIO -------------------->
</div>

<!--------------------------PIE------------------------------------>
        <div class="pie">
                <p>Escuela Superior Politecnica de Chimborazo</p>
                <p>Desarrollado por: <kbd>Alex Andino</kbd>|<kbd>Cristopher Garcia</kbd>|<kbd>Henry Moya</kbd>|<kbd>Ra√∫l Medina</kbd>|<kbd>Pa√∫l Proa√±o</kbd>|<kbd>Jessica Zavala</kbd> </p>

        </div>


    </div> <!--marco index 2-->
</div><!--marco index-->



</body>
</html>