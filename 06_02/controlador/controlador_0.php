<?php
if(isset($_GET['name'])) {
    
    $name = $_GET['name'];

    echo '¡Hola '.htmlspecialchars($name).'! Bienvenido a la pagina';
} else {
    echo 'Hola, ingresa tu nombre';
}
?>