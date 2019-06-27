<?php

                    $nombreProyecto     = $_POST['nombreProyecto'];
                    $descripcionProyecto   = $_POST['descripcionProyecto'];
                    $fechaInicioProyecto     = $_POST['fechaInicioProyecto'];
                    $fechaFinProyecto   = $_POST['fechaFinProyecto'];
                    $coordinadorFacultadProyecto     = $_POST['coordinadorFacultadProyecto'];
                    $representanteEmpresaProyecto= $_POST['representanteEmpresaProyecto'];
                    $estadoProyecto= $_POST['estadoProyecto'];
                    $envioIdProyecto= $_POST['envioIdProyecto'];

                    try{
                            require_once('conexion.php');
                            $sql= "UPDATE PROYECTO  SET 
                                              
                                                  
                                                  CEDULA_REPE='$representanteEmpresaProyecto',
                                                  CEDULA_CF='$coordinadorFacultadProyecto ',
                                                  NOMBRE_P='$nombreProyecto',
                                                  DESCRIPCION_P='$descripcionProyecto',
                                                  ESTADO_P='$estadoProyecto',
                                                  FECHAI_P='$fechaInicioProyecto',
                                                  FECHAF_P='$fechaFinProyecto'

                                                WHERE '$envioIdProyecto'= ID_P";
                            $resultado=$conn->query($sql);                          
                        }
                        catch(Exception $e){
                            $error = $e->getMessage();
                                    
                        }

 require_once('usuarioAdmin.php');
            ?>   