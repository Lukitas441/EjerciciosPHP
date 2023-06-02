<?php
    include 'User.php';
    $usuarios = [
        new User('Lukitas', '55214412'),
        new User('Zequi', 'ezequielito123'),
        new User('Santypo', 'goku123')
    ];
    $testUser = new User('admin', 'admin');
   
    if(isset($_GET['user']) && isset($_GET['password'])){
        $name = $_GET['user'];
        $password = $_GET['password'];
        echo '<p>'.$testUser->getName().'</p>';
     
        foreach($usuarios as $usuario){
            if($usuario->getName() == $name && $password == $usuario->getPassword()){
                
                break;
            }
        }
    } else {
        echo '<h1>Inicie sesion!</h1>';
    }
?>