<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6b0ad3d290.js" crossorigin="anonymous"></script>
    <title>Lista alumnos</title>
</head>
<body>
    <div class="container hidden" id="save">
        <i class="fa-solid fa-x fa-xl close-btn"></i>
        <h1>Registrar alumno</h1>
        <form action="../CONTROLADOR/ControladorSave.php" method="post">
        <div class="input-container">
            <label>Nombre</label>
            <input type="text" name="name" required>
        </div>
        <div class="input-container">
            <label>Apellido</label>
            <input type="text" name="surname" required>
        </div>
        <div class="input-container">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Cargar</button>
    </form>
    </div>

    <div class="container hidden" id="delete">
        <i class="fa-solid fa-x fa-xl close-btn"></i>
        <h1>Eliminar alumno</h1>
        <form action="../CONTROLADOR/ControladorDelete.php" method="post">
            <?php
            include '../NEGOCIO/alumno.php';
            foreach (Alumno::getRepo() as $alumno) {
                echo '
                <div id="data-container">
                <input type="radio" value='.$alumno->getName().'+'.$alumno->getSurname().' name="ID"></input>
                <p>'.$alumno->getName().' '.$alumno->getSurname().'</p>
                </div>
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
    <div id="option-container">
        <i class="fa-solid fa-floppy-disk fa-xl" id="saveAlumno"></i>
        <i class="fa-solid fa-delete-left fa-xl"  id="deleteAlumno"></i>
    </div> 
    <script src="app.js"></script>
</body>
</html>