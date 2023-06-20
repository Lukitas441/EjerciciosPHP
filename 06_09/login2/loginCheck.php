<?php
    session_start();
    include 'User.php';
    $usuarios = [
        new User('Lukitas', '55214412', '../Profile_imgs/Lukitas.jpeg'),
        new User('Zequi', 'ezequielito123', '../Profile_imgs/Eze.jpeg'),
        new User('Santypo', 'goku123', '../Profile_imgs/santy.jpeg'),
        new User('Ro', 'lolosaez4213', '../Profile_imgs/Ro.jpeg'),
        new User('Gabriel', 'gabriel321', 'https://as2.ftcdn.net/v2/jpg/00/64/67/63/1000_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg')
    ];
   
    if(isset($_GET['user']) && isset($_GET['password'])){
        $name = $_GET['user'];
        $password = $_GET['password'];
        
        $_SESSION['inicioExitoso'] = false;

        foreach($usuarios as $usuario){
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