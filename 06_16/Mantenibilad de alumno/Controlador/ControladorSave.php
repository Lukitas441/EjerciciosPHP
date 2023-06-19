<?php
include __DIR__.'\..\Persistencia\RepositorioAlumnos.php';
session_start();

if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['email'])) {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $email = $_GET['email'];
    
    $_SESSION['listaAlumnos']->addAlumno($name, $surname, $email);
}
header('location: ..\aMainPage\index.php');

?>