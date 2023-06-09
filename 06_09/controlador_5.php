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
    if(isset($_SESSION['contador']) == false) {
        $_SESSION['contador'] = 0;
    }
    echo '<a>Recargaste la página '.++$_SESSION['contador'].' veces</a>'
    ?>
</body>
</html>