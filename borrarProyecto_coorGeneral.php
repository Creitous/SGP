<?php
$id_p = $_GET['id_p'];
try{
    require_once ('conexion.php');
    $sql="delete from PROYECTO where ID_P = '$id_p' ";
    $result=$conn->query($sql);
    } catch (Exception $e){
        $error =$e->getMessage();
    }
    header("Location: usuarioAdmin.php");
?>