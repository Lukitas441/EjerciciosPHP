<?php
    session_start();
    unset($_SESSION['inicioExitoso']);
    header('location: ./login')
?>