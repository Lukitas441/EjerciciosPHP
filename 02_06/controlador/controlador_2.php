<?php
$arrPersonas = [
    'Lucas', 
    'Abigail', 
    'Santy',
    'Ezequiel', 
    'Rodrigo'
];
if(isset($_GET['nombre'])){
    $personaABuscar = $_GET['nombre'];
    echo '<h2>Resultados para '.htmlspecialchars($personaABuscar).'</h2>';

    $encontrado = false;
    foreach($arrPersonas as $persona) {
       /*  echo '<li>'.htmlspecialchars($persona).'</li>'; */
        if(strtoupper($persona) == strtoupper($personaABuscar)) {
            echo '<ul><li>'.htmlspecialchars($persona).'</li></ul>';
            $encontrado = true;
        }
    }

    if($encontrado != true) {
        echo '<p>No se encontraron resultados para '.$personaABuscar.'</p>';
    }
} else {
    echo '<p>Ingrese su consulta en el formulario</p>';
}
?>