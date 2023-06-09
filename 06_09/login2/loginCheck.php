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
    session_start();
    include 'User.php';
    $usuarios = [
        new User('Lukitas', '55214412'),
        new User('Zequi', 'ezequielito123'),
        new User('Santypo', 'goku123')
    ];
   
    if($_GET['user'] !== '' && $_GET['password'] !== '' && isset($_GET['user']) && isset($_GET['password'])){
        $name = $_GET['user'];
        $password = $_GET['password'];
        
        $_SESSION['inicioExitoso'] = false;

        foreach($usuarios as $usuario){
            if($usuario->getName() == $name){
                if($password == $usuario->getPassword()) {
                    $_SESSION['inicioExitoso'] = true;
                    echo '<h1>Bienvenido '.$usuario->getName().'!</h1>';
                    echo '<a href="./Pagina A.php">Ir a pagina A</a>';
                    break;
                } else {
                    echo '<h3>Inicio de sesion fallido</h3></br><p>Volver a <a href="./">intentarlo</a></p>';
                }
            }
        }
    } else {
        echo '<h1>Inicie sesion!</h1>';
    }
?>
</body>
</html>