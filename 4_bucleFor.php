<?php
    $personas = array('Lucas', 'Abby', 'Santy', 'Eze', 'Ro');

    //Se leen los elementos
    for($i = 0; $i < count($personas); $i++){
        echo $personas[$i].' ';
    }
    //Los elementos estan en lineas independientes
    echo '</br> ------------- </br>';
    for($i = 0; $i < count($personas); $i++){
        echo $personas[$i].'</br>';
    }
    //Los elementos se ven alreves
    echo '------------- </br>';
    for($i = count($personas)-1; $i >= 0; $i--){
        echo $personas[$i].' ';
    }
?>