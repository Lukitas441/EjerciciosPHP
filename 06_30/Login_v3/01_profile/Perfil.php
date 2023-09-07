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
        include '../NEGOCIO/User.php';
        session_start();

        if(!(isset($_SESSION['inicioExitoso']))) {
            header( 'location: ../0_login/' );
        }
        echo '<div><i class="fa-solid fa-x exit-btn"></i></div>';
        echo '<h1>Bienvenido '.$_SESSION['usuarioLogeado']->getName().'!</h1>';
    ?>
    <script>
        const exitBtn = document.querySelector(".exit-btn");

        exitBtn.addEventListener("click", () => { window.location.href = "../CONTROLADORES/exitSession.php"; });
    </script>
</body>
</html>