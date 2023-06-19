
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6b0ad3d290.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="main-container">
        <div  id="form-container" class="hidden">
        <i class="fa-solid fa-x fa-xl close-btn"></i>
            <h2>Ingresar datos</h2>
            <form action="../Controlador/Controlador.php" method="get">
                <div class="input-container">
                    <label for="">Nombre</label>
                    <input type="text" name="name" required>
                </div>
                <div class="input-container">
                    <label for="">Apellido</label>
                    <input type="text" name="surname" required>
                </div>
                <div class="input-container">
                    <label for="">Email</label>
                    <input type="email" name="email" required>
                </div>
                
                <button type="submit" id="send-btn">Cargar</button>
            </form>
        </div>
        <div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            <?php
                include __DIR__.'\..\Persistencia\RepositorioAlumnos.php';
                session_start();
                
                if(!(isset($_SESSION['listaAlumnos']))) {
                    $_SESSION['listaAlumnos'] = new RepositorioAlumnos();
                }
                if(!empty($_SESSION['listaAlumnos']->listarAlumnos())) {
                    foreach ($_SESSION['listaAlumnos']->listarAlumnos() as $alumno) {
                        echo '<tr>';
                        echo '<td>'.$alumno->getName().'</td>';
                        echo '<td>'.$alumno->getSurname().'</td>';
                        echo '<td>'.$alumno->getEmail().'</td>';
                        echo '</tr>';
                    }
                }
                
            ?>
        </table>
        </div>
        <div id="option-container">
            <i class="fa-solid fa-floppy-disk fa-xl" id="saveAlumno"></i>
            <i class="fa-solid fa-delete-left fa-xl"  id="deleteAlumno"></i>
        </div> 
    </div>
    <script src="app.js"></script>
</body>
</html>