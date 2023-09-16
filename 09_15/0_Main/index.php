<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prueba de herencia</h1>
    <?php
    include_once '../NEGOCIO/classes.php';

    $profe = new Profesor(0, 'asdas', '123123', 'Gastón', 'gast321123@gmail.com');

    echo $profe->saludar();
    $profe->pasarLista(['Luis', 'Juan', 'Mario', 'Alva']);

    echo '</br>';

    $alumno1 = new Alumno(1, 'sadasd', '2123123132', 'Pedro', 'pedrito123@gmail.com');
    $alumno2 = new Alumno(2, 'sadasd', '2123123132', 'Mirta', 'Mirta123@gmail.com');

    echo $alumno1->saludar();
    echo '</br>';
    echo $alumno2->mostrarMail();
    ?>
</body>
</html>