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
        $user = $_SESSION['usuarioLogeado'];

        $imgPath = '../resources/'.$user->getId().'profile_img.'.$user->getExt();;
        $img = fopen($imgPath, 'w');
        fwrite($img, base64_decode($_SESSION['usuarioLogeado']->getImg()));
        fclose($img);

        if(empty($user->getImg())) {
            echo '<img src="https://www.fpt-law.com/wp-content/uploads/24-248253_user-profile-default-image-png-clipart-png-download-750x656.png">';
        } else {
            echo '<img src="../resources/'.$imgPath.'">';
        }
        
        echo '
        <div id="form-bg" class="hidden"></div>
        <form action="../CONTROLADORES/saveProfileImg.php" method="post" enctype="multipart/form-data" class="hidden shadow">
            <input name="imagen" type="file" required>
            <div id="btn-container">
                <button type="submit">Aplicar</button>  
                <button id="cancel">Cancelar</button> 
            </div>
        </form>
        ';
        echo '<div><i class="fa-solid fa-x exit-btn"></i></div>';
        echo '<h1>Bienvenido '.$user->getName().'!</h1>';
    ?>
    <script src="app.js"></script>
</body>
</html>