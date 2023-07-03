<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/6b0ad3d290.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['inicioExitoso']) && !$_SESSION['inicioExitoso']){
        echo '<p id="alert">Las credenciales son incorrectas</p>';
        unset($_SESSION['inicioExitoso']);
    }

    if(isset($_SESSION['newUsuario'])) {
        if($_SESSION['newUsuario']) {
            echo '<p id="alert" class="alert-good">Registro realizado con exito</p>';
        }
        if(!$_SESSION['newUsuario']){
            echo '<p id="alert">Registro fallido, datos invalidos</p>';
        }
        unset($_SESSION['newUsuario']);
    }
    ?>
    <div id="log-in" class="container">
        <h1>Inicio de sesión</h1>
    <div class="shadow second-container">
        <form action="../CONTROLADORES/loginCheck.php" method="post">
            <div class="input-container">
                <label for="">Nombre de usuario</label>
                <input type="text" name="user" required>
            </div>
            <div class="input-container">
                <label for="">Constraseña</label>
                <input type="password" class="password" name="password" required autocomplete="on" id="password-login">
                <i class="fa-solid fa-eye-slash" id="seekingBtn"></i>
            </div>
            <button type="submit">Ingresar</button>
        </form>
        
    </div>
    <p>clickea <b class="switch">aquí</b> para registrarte</p>
    </div>
    <div id="sign-in" class="container hidden">
        <h1>Registrate</h1>
        <div class="shadow second-container">
            <form action="../CONTROLADORES/signinControl.php" method="post" id="signin-form">
                <div class="input-container">
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="user" required>
                </div>
                <div class="input-container">
                    <label for="">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="input-container">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" required id="password-signin" class="password">
                    <i class="fa-solid fa-eye-slash" id="seekingBtn"></i>
                </div>
                <div class="input-container">
                    <label for="">Confirmar contraseña</label>
                    <input type="password" required id="passwordCheck-signin" class="password">
                    <i class="fa-solid fa-eye-slash" id="seekingBtn"></i>
                </div>
                <p id="password-alert" class="hidden"></p>
                <button type="submit" >Ingresar</button>
            </form>
        </div>
    <p >Si ya tienes una cuenta clickea <b class="switch">aquí</b></p>
    </div>
    <script src="app.js"></script>
</body>
</html>