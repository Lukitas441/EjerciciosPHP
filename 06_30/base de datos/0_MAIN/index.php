<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista alumnos</title>
</head>
<body>
    <div class="container">
        <h1>Registrar alumno</h1>
        <form action="../CONTROLADOR/ControladorSave.php" method="post">
        <div class="input-container">
            <label>Nombre</label>
            <input type="text" name="name">
        </div>
        <div class="input-container">
            <label>Apellido</label>
            <input type="text" name="surname">
        </div>
        <div class="input-container">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <button type="submit">Cargar</button>
    </form>
    </div>

    <div class="container">
    <h1>Eliminar alumno</h1>
    <form action="../CONTROLADOR/ControladorDelete.php" method="post">
        <?php
        include '../NEGOCIO/alumno.php';
        foreach (Alumno::getRepo() as $alumno) {
            echo '
            <input type="radio" value='.$alumno->getEmail().' name="ID">'.$alumno->getName().' '.$alumno->getSurname().'</input>
            ';
        }
        ?>
        <button type="submit">Eliminar</button>
    </form>
    </div>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
        </tr>
        <?php
        foreach (Alumno::getRepo() as $alumno) {
            echo '
            <tr>
                <td>'.$alumno->getName().'</td><td>'.$alumno->getSurname().'</td><td>'.$alumno->getEmail().'</td>
            </tr>
            ';
        }
        ?>
    </table>
</body>
</html>