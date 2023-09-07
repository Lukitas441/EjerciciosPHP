<?php
    if(isset($_GET['name']) && isset($_GET['surname'])) {
        $name = $_GET['name'];
        $surname = $_GET['surname'];

        echo 'Tu nombre completo es '.$name.' '.$surname;
    } else {
        echo 'Ingresa tu nombre para continuar';
    }
?>
