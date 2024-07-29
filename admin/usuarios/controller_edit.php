<?php 

include('../../app/config/config.php');
include('../../app/config/conexion.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cd = $_POST['cd'];
$celu = $_POST['celu'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$id_usuario = $_POST['id_usuario'];

$sentencia = $pdo->prepare("UPDATE `tb_usuarios` SET
nombres = :nombres,
apellidos = :apellidos,
cd = :cd,
celu = :celu,
cargo = :cargo,
fyh_actualizacion = :fyh_actualizacion,
email = :email WHERE id_usuario = :id_usuario");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellidos', $apellidos);
$sentencia->bindParam(':cd', $cd);
$sentencia->bindParam(':celu', $celu);
$sentencia->bindParam(':cargo', $cargo);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->bindParam(':fyh_actualizacion', $fyh_creacion);

if ($sentencia->execute()){
    //echo 'Se ha registrado la información a la base de datos satisfactoriamente.';
    header('Location:'.$url.'/admin/usuarios/');
    session_start();
    $_SESSION['msj'] = 'Se actualizó al usuario de la manera correcta';
} else {
    echo 'NO se han podido registrar ningún dato...';
}