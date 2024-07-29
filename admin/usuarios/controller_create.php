<?php 

include('../../app/config/config.php');
include('../../app/config/conexion.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cd = $_POST['cd'];
$celu = $_POST['celu'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$password = $_POST['password'];
$verificar_password = $_POST['verificar_password'];

$password_encriptada = password_hash($password, PASSWORD_DEFAULT);

if($password == $verificar_password){
    //echo $nombres."-".$apellidos."-".$cd."-".$celu."-".$cargo."-".$email."-".$password;

    $sentencia = $pdo->prepare('INSERT INTO tb_usuarios(nombres,apellidos,cd,celu,cargo,email,password,fyh_creacion,estado) 
    VALUES (:nombres,:apellidos,:cd,:celu,:cargo,:email,:password,:fyh_creacion,:estado)');

    $sentencia->bindParam(':nombres',$nombres);
    $sentencia->bindParam(':apellidos',$apellidos);
    $sentencia->bindParam(':cd',$cd);
    $sentencia->bindParam(':celu',$celu);
    $sentencia->bindParam(':cargo',$cargo);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':password',$password_encriptada);
    $sentencia->bindParam(':fyh_creacion',$fyh_creacion);
    $sentencia->bindParam(':estado',$estado);

    if ($sentencia->execute()){
        //echo 'Se ha registrado la información a la base de datos satisfactoriamente.';
        header('Location:'.$url.'/admin/usuarios/');
        session_start();
        $_SESSION['msj'] = 'Se registró al usuario de manera satisfactoria';
    } else {
        session_start();
        $_SESSION['msj'] = 'Error al introducir información a la base de datos';
    }
} else {
    echo'Las contraseñas no son iguales';
}