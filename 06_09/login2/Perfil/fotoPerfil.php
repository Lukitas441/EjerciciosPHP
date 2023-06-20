<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include '../User.php';
    session_start();
    
    if(!(isset($_SESSION['inicioExitoso']))) {
        header( 'Location: ./login/index.html' );
        
    }

    echo '<div id="img_container">';
    echo '<img src="'.$_SESSION['usuarioConectado']->getImg().'">';
    echo '</div>';
    echo '<p>Preciona la imagen para volver</p>'
    ?>
    <script>
        const imgContainer = document.querySelector('#img_container')

        const changeShadow = (elemnt) => elemnt.classList.toggle('shadow')

        imgContainer.addEventListener('click', (e) => window.location.href = 'Perfil.php')
    </script>
</body>
</html>