<?php
    include './Users/listaUsers.php';
    session_start();
    if(!(isset($_SESSION['Usuarios']))){
        $_SESSION['Usuarios'] = new listaUsers();
    }
    if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $newUsuario = true;
        foreach($_SESSION['Usuarios']->listarUsuarios() as $usuario) {
            if($name == $usuario->getName()) {
                $newUsuario = false;
            }
        }
        if($newUsuario) {
            $_SESSION['Usuarios']->addUser($name, $email, $password);
            header( 'Location: ./login/index.html' );
        } else {
            echo '<h2>Registro fallido</h2><br> Vuelva a intentarlo';
        }
    } else {
        header( 'Location: ./login/index.html' );
    }
?>