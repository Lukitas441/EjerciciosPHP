<?php
include '../NEGOCIO/Alumno.php';
if(isset($_POST['ID'])) {
    $nameID = explode('+', $_POST['ID'])[0];
    $surnameID = explode('+', $_POST['ID'])[1];

    Alumno::deleteFromRepo($nameID, $surnameID);
}
header('location: ..\0_MAIN\index.php');
?>