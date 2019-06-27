<?php
     $id_proyecto=$_POST['id_proyecto'];
     $cedulaCoorFacultad =$_POST['cedulaCoorFacultad'];
     $seleccionCoorCarrera =$_POST['seleccionCoorCarrera'];    
     $nombreEvento =$_POST['nombreEvento'];
     $descripcionEvento =$_POST['descripcionEvento'];
     $estadoIni =$_POST['estadoIni'];
     $fechaInicio =$_POST['fechaInicio'];
     $fechaFin =$_POST['fechaFin'];

    try{
        
        require_once('conexion.php');
        $sql= "INSERT INTO EVENTO VALUES(
                                         '',
                                         '$id_proyecto',
                                         '$cedulaCoorFacultad',
                                         LEFT('$seleccionCoorCarrera',10),
                                         '$nombreEvento',
                                         '$descripcionEvento',
                                         '$estadoIni',
                                         '$fechaInicio',
                                         '$fechaFin'
                                          )";
        $result= $conn->query($sql);              
        header("Location: mostrarProyectos_coorFacultad.php");  
        
    } catch (Exception $ex) {
        $error = $e->getMessage();
    }


?>
