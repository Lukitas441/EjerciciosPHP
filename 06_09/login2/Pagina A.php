<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    
    if(!(isset($_SESSION['inicioExitoso']))) {
        echo '<p>No has iniciado sesión</p><br><p>Inicia sesión <a href="./index.html">aqui</a></p>';
        
    } else {
        echo '<h1>Bienvenido a la pagina A</h1>';
    }
    ?>
</body>
</html>