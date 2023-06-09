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
    <p>Resultado de la suma:</p>
    <?php
    if(isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = (int) $_GET['num1'];
        $num2 = (int) $_GET['num2'];

        echo '<p>'.($num1 + $num2).'</p>';
    } else {
        echo '<p>NO RESULT</p>';
    }
    ?>
</body>
</html>