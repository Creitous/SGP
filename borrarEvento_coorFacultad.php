<?php
$id_e = $_GET['id_e'];
try{
    require_once ('conexion.php');
    $sql="delete from EVENTO where ID_E = $id_e";
    $result=$conn->query($sql);
    } catch (Exception $e){
        $error =$e->getMessage();
    }
    header("Location: mostrarProyectos_coorFacultad.php");
?>