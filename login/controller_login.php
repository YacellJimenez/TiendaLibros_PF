<?php 
include('../app/config/config.php');
include('../app/config/conexion.php');

$correo = $_POST['correo'];
$password = $_POST['password']; 

$query_login = $pdo->prepare("SELECT * FROM `tb_usuarios` WHERE email='$correo' AND estado = '1'");
$query_login->execute();

$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;

foreach ($usuarios as $usuario) {
    $contador++;
    $nombres = $usuario['nombres'];
    $passwordbd = $usuario['password'];
}

if($contador == 0) {
    //echo 'Error al ingresar los datos';
    header('Location:'.$url.'/login/error.php');
} else {
    //echo 'Usuario correcto';
    if (password_verify($password, $passwordbd)) {
        //echo "correcta";
        session_start();
        $_SESSION['sesion_email'] = $correo;
        header('Location:'.$url.'/admin');
    } else {
        header('Location:'.$url.'/login/error.php');
    }
}