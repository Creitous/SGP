<?php
session_start();
$cedula      = 	$_POST['cedulaLogin'];
$contrasenia =	$_POST['contraseniaLogin'];
		try{
			require_once('conexion.php');
					$sql= "SELECT * FROM USUARIO WHERE CEDULA = '$cedula'";
					$resultado=$conn->query($sql);
					$datos=$resultado->fetch_assoc();

			if ($cedula==$datos['CEDULA'] && $contrasenia==$datos['CONTRASENIA'] && $datos['TIPO_USUARIO']=='Coordinador General') 
					{
						
						$_SESSION['NOMBRE']=$datos['NOMBRE'];
						$_SESSION['APELLIDO']=$datos['APELLIDO'];
						$_SESSION['TIPO_USUARIO']=$datos['TIPO_USUARIO'];
						$_SESSION['CEDULA']=$datos['CEDULA'];
						header("Location: usuarioAdmin.php");
					}else{
						if ($cedula==$datos['CEDULA'] && $contrasenia==$datos['CONTRASENIA'] && $datos['TIPO_USUARIO']=='Coordinador Facultad')  
						{
						
						$_SESSION['NOMBRE']=$datos['NOMBRE'];
						$_SESSION['APELLIDO']=$datos['APELLIDO'];
						$_SESSION['TIPO_USUARIO']=$datos['TIPO_USUARIO'];
                                                $_SESSION['CEDULA']=$datos['CEDULA'];
						header("Location: usuarioCoordinadorFac.php");
						}else{

						if ($cedula==$datos['CEDULA'] && $contrasenia==$datos['CONTRASENIA'] && $datos['TIPO_USUARIO']=='Coordinador Carrera')  
						{
						
						$_SESSION['NOMBRE']=$datos['NOMBRE'];
						$_SESSION['APELLIDO']=$datos['APELLIDO'];
						$_SESSION['TIPO_USUARIO']=$datos['TIPO_USUARIO'];
                                                $_SESSION['CEDULA']=$datos['CEDULA'];
						header("Location: usuarioCoordinadorCarr.php");
						}else
						{
						if ($cedula==$datos['CEDULA'] && $contrasenia==$datos['CONTRASENIA'] && $datos['TIPO_USUARIO']=='Docente')  
						{
						
						$_SESSION['NOMBRE']=$datos['NOMBRE'];
						$_SESSION['APELLIDO']=$datos['APELLIDO'];
						$_SESSION['TIPO_USUARIO']=$datos['TIPO_USUARIO'];
                                                $_SESSION['CEDULA']=$datos['CEDULA'];
						header("Location: usuarioProfesor.php");
						}else{
						if ($cedula==$datos['CEDULA'] && $contrasenia==$datos['CONTRASENIA'] && $datos['TIPO_USUARIO']=='Estudiante')  
						{
						
						$_SESSION['NOMBRE']=$datos['NOMBRE'];
						$_SESSION['APELLIDO']=$datos['APELLIDO'];
						$_SESSION['TIPO_USUARIO']=$datos['TIPO_USUARIO'];
						$_SESSION['CEDULA']=$datos['CEDULA'];
						header("Location: usuarioEstudiante.php");
						}else{
							if ($cedula==$datos['CEDULA'] && $contrasenia==$datos['CONTRASENIA'] && $datos['TIPO_USUARIO']=='Representante Empresa')  
						{
						
						$_SESSION['NOMBRE']=$datos['NOMBRE'];
						$_SESSION['APELLIDO']=$datos['APELLIDO'];
						$_SESSION['TIPO_USUARIO']=$datos['TIPO_USUARIO'];
						$_SESSION['CEDULA']=$datos['CEDULA'];
						header("Location: usuarioRepresentanteEmpresa.php");
						}else{

								header("Location: index.php");
						}
						}	
						}
					}
	
				}							
			}
		}
			catch(Exception $e){
					$error = $e->getMessage();
                  requiere_once('cerrarSesion.php');
			}	
?>