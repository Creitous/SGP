<?php
	session_start();
	$cedula=$_SESSION['CEDULA'];
	$cont1 = 	$_POST['contra1'];
	$cont2 =	$_POST['contra2'];
	
        
        try{			
			
			if($cont1==$ccont2){
                                        require_once('conexion.php');
                                        $sql= "UPDATE USUARIO SET CONTRASENIA= '$cont1' WHERE CEDULA = '$cedula'";
                                        $resultado=$conn->query($sql);
                                        $datos=$resultado->fetch_assoc(); 
                                       requiere_once('cerrarSesion.php');
					header("Location: index.php");
			}else{
				header("Location: usuarioRepresentanteEmpresa.php");
			}
	}
	catch(Exception $e){
		$error = $e->getMessage();
 
	}	
?>