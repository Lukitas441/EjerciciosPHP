<?php
include '../NEGOCIO/User.php';
session_start();
if(isset($_POST['user']) && isset($_POST['password'])) {
    $username = $_POST['user'];
    $password =$_POST['password']; 

    $listaDeUsuarios = User::getRepo();
    $_SESSION['inicioExitoso'] = false;

    foreach($listaDeUsuarios as $usuario) {
        if($username == $usuario->getName()){
            if($password == $usuario->getPassword()) {
                $_SESSION['inicioExitoso'] = true;
                $_SESSION['usuarioLogeado'] = $usuario;
            }
        }
    }
    if($_SESSION['inicioExitoso']) {
        header('location: ../1_inicio');
    } else {
        header('location: ../0_login/');
    }
} else {
    header('location: ../0_login/'); 
}
?>