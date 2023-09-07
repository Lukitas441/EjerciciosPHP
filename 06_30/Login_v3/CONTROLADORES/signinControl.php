<?php
include '../NEGOCIO/User.php';
session_start();

if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $_SESSION['newUsuario'] = true;
    $listaActual = User::getRepo();

    foreach($listaActual as $usuario) {
        if($name == $usuario->getName() || $email == $usuario->getEmail()) {
            $_SESSION['newUsuario'] = false;
        }
    }

    if($_SESSION['newUsuario']) {
        User::addToRepo($name, $email, $password);
    } 
}
header( 'Location: ../0_login/' );
?>