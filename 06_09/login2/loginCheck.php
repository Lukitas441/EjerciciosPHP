<?php

    include './Users/listaUsers.php';
    session_start();
    
    if(!(isset($_SESSION['Usuarios']))){
        $_SESSION['Usuarios'] = new listaUsers();
        $_SESSION['Usuarios']->addUser('lukitas', '', '55214412', '');
        /* [
            new User('Lukitas', '55214412', '../Profile_imgs/Lukitas.jpeg'),
            new User('Zequi', 'ezequielito123', '../Profile_imgs/Eze.jpeg'),
            new User('Santypo', 'goku123', '../Profile_imgs/santy.jpeg'),
            new User('Ro', 'lolosaez4213', '../Profile_imgs/Ro.jpeg'),
            new User('Gabriel', 'gabriel321', 'https://acortar.link/vVyrlD')
        ]; */
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
                    header( 'Location: ./Perfil/Perfil.php' );
                }
            }
        }
        if(!($_SESSION['inicioExitoso'])) {
            header( 'Location: ./login/index.html');
        }
    } else {
        header( 'Location: ./login/index.html' );
    }
?>