<?php

    include '../Users/listaUsers.php';
    session_start();
    
    if(!(isset($_SESSION['Usuarios']))){
        $_SESSION['Usuarios'] = new listaUsers();
    }
    
    if(isset($_GET['user']) && isset($_GET['password'])){
        $name = $_GET['user'];
        $password = $_GET['password'];

        
        $_SESSION['inicioExitoso'] = false;

        foreach($_SESSION['Usuarios']->listarUsuarios() as $usuario){
            if($usuario->getName() == $name){
                if($password == $usuario->getPassword()) {
                    $_SESSION['inicioExitoso'] = true;
                    $_SESSION['usuarioConectado'] = $usuario;
                    header( 'Location: ../Perfil/Perfil.php' );
                }
            }
        }
        if(!($_SESSION['inicioExitoso'])) {
            header( 'Location: ../login/index.html');
        }
    } else {
        header( 'Location: ../login/index.html' );
    }
?>