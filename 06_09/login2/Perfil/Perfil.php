<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6b0ad3d290.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include '../User.php';
        session_start();

        if(!(isset($_SESSION['inicioExitoso']))) {
            header( 'Location: ./login/index.html' );
        }
        echo '<div><i class="fa-solid fa-x exit-btn"></i></div>';
        echo '<h1>Bienvenido '.$_SESSION['usuarioConectado']->getName().'!</h1>';
        echo '<a href="./fotoPerfil.php">Ir a foto de perfil</a>';
    ?>
    <script>
        const exitBtn = document.querySelector(".exit-btn");

        exitBtn.addEventListener("click", () => { window.location.href = "../exit.php"; });
    </script>
</body>
</html>