<?php
    include 'User.php';
    $usuarios = [
        new User('Lukitas', '55214412'),
        new User('Zequi', 'ezequielito123'),
        new User('Santypo', 'goku123')
    ];
    $AdminUser = new User('admin', 'admin');
   
    if(isset($_GET['user']) && isset($_GET['password'])){
        $name = $_GET['user'];
        $password = $_GET['password'];
     
        foreach($usuarios as $usuario){
            if($usuario->getName() == $name){
                if($password == $usuario->getPassword()) {
                    echo '<h1>Bienvenido '.$usuario->getName().'!</h1>';
                    break;
                } else {
                    echo 'Contraseña no valida';
                }
            }
        }
    } else {
        echo '<h1>Inicie sesion!</h1>';
    }
?>