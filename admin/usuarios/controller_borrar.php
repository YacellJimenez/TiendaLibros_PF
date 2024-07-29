<?php 

include('../../app/config/config.php');
include('../../app/config/conexion.php');

$id_usuario = $_POST['id_usuario'];

$sentencia = $pdo->prepare("UPDATE`tb_usuarios` SET estado = 0 WHERE id_usuario = :id_usuario");

$sentencia->bindParam(':id_usuario', $id_usuario);

if ($sentencia->execute()){
    //echo 'Se ha registrado la información a la base de datos satisfactoriamente.';
    header('Location:'.$url.'/admin/usuarios/');
    session_start();
    $_SESSION['msj'] = 'Se ha eliminado el usuario de manera correcta';
} else {
    echo 'NO se han podido registrar ningún dato...';
}