<?php
    session_start();
    $micedula=$_SESSION['CEDULA'];
    
                 $nombre     = $_POST['nombre'];
                 $apellido   = $_POST['apellido'];
                 $correo     = $_POST['correo'];
                 $telefono   = $_POST['telefono'];
                 $cedula     = $_POST['cedula'];
                 $contrasenia= $_POST['contrasenia'];

                    try{
                                                                            
                            require_once('conexion.php');
                            $sql= "UPDATE USUARIO  SET 
                                                  CORREO='$correo',
                                                  CONTRASENIA='$contrasenia',
                                                  NOMBRE= '$nombre',
                                                  APELLIDO='$apellido',
                                                  TELEFONO='$telefono'
                                                WHERE '$cedula'= CEDULA";
                            $resultado=$conn->query($sql);                          
                        
                            if($micedula=$cedula){
                                 require_once('cerrarSesion.php');
                            }
                            else{
                                header('usuarioCoordinadorFac.php');
                            }
                                                                                                                                              
                    }
                        catch(Exception $e){
                            $error = $e->getMessage();
                                    
                        }                                                  
                       
            ?>   