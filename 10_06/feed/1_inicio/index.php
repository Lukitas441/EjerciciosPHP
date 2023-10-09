<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6b0ad3d290.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include_once '../NEGOCIO/User.php';
    include_once '../CONTROLADORES/loadProfileImg.php';
    session_start();
    if(!$_SESSION['inicioExitoso']){
        header('location: ../0_login/');
    }
    echo "<div id='navbar'><div id='profile-info'>".loadProfileImg($_SESSION['usuarioLogeado']).$_SESSION['usuarioLogeado']->getName()."</div><a href='../CONTROLADORES/exitSession.php' id='exit-btn'><i class='fa-solid fa-arrow-right-from-bracket'></i></a></div>";
    ?>
    <i class="fa-solid fa-rotate-right" id="btn-refresh"></i>
    <div id="interface-container">
        <input type="text" placeholder="En que piensas?" id="post-input">
        <button id="btn-submit">Subir</button>
    </div>
    
    
    <div id="result">

    </div>
    <div id="feed">
        
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="app.js"></script>
</body>
</html>