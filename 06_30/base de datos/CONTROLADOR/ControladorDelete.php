<?php
include '../NEGOCIO/Alumno.php';
if(isset($_POST['ID'])) {
    $emailAsID = $_POST['ID'];
    Alumno::deleteFromRepo($emailAsID);
}
header('location: ..\0_MAIN\index.php');
?>