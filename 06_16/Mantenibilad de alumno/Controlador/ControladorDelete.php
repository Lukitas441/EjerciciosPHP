<?php
    include __DIR__.'\..\Persistencia\RepositorioAlumnos.php';
    session_start();
    if(isset($_GET['idAlumno'])){
        $ID = $_GET['idAlumno'];
        $_SESSION['listaAlumnos']->deleteAlumno($ID);
    }
    header('location: ..\aMainPage\index.php')
?>