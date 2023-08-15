<?php
include '../NEGOCIO/Alumno.php';

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    
    Alumno::addToRepo(new Alumno($name, $surname, $email));
}
header('location: ..\0_MAIN\index.php');

?>