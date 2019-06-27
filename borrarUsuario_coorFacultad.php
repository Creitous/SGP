<?php
$cedula = $_GET['cedula'];
try{
    require_once ('conexion.php');
    $sql="delete from USUARIO where CEDULA = $cedula";
    $result=$conn->query($sql);
    } catch (Exception $e){
        $error =$e->getMessage();
    }
    header("Location: usuarioCoordinadorFac.php");
?>

