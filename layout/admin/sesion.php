<?php
session_start();
if(isset($_SESSION['sesion_email'])){
    //echo 'Existe sesion, y ha pasado por el login';
} else { 
    //echo 'No existe sesion';
    header('Location: '.$url.'/login/');
}