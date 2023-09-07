<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'User.php';
    $usuarios = [
        new User('Lukitas', '55214412'),
        new User('Zequi', 'ezequielito123'),
        new User('Santypo', 'goku123')
    ];
    $AdminUser = new User('admin', 'admin');
   
    if($_GET !== 'user' && $_GET['password'] && isset($_GET['user']) && isset($_GET['password'])){
        $name = $_GET['user'];
        $password = $_GET['password'];
        
        $userCorrecto = false;
        foreach($usuarios as $usuario){
            if($usuario->getName() == $name){
                $userCorrecto = true;
                if($password == $usuario->getPassword()) {
                    echo '<h1>Bienvenido '.$usuario->getName().'!</h1>';
                    break;
                } else {
                    echo '<h3>Contraseña no valida</h3>';
                }
            }
        }
        if($userCorrecto != true) {
            echo '<h3>Usuario no encontrado</h3>';
        }
    } else {
        echo '<h1>Inicie sesion!</h1>';
    }
?>
</body>
</html>