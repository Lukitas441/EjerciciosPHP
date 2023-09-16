<?php
    include_once 'classes.php';

    class Profesor extends User 
    {
        public function pasarLista($listaAlumnos)
        {
            echo '<p>Se va a pasar lista</p>';
            foreach($listaAlumnos as $alumno)
            {
                echo '</br>'.$alumno.' esta presente?';
            }
        }
    }
?>