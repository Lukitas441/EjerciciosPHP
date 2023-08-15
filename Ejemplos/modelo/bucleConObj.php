<!DOCTYPE html>
<html>
    <body>
        <style>
            *{
                padding: 5px;
            }
            th{
                width: 100px
            }
            table, th, td{
            border: 1px solid salmon;
        }
        </style>
    <?php
        include 'Usuario.php';

        $alumnos = array(
        new Usuario('Santiago', 'Póo', 17), 
        new Usuario('Rodrigo', 'Saez', 18), 
        new Usuario('Israel', 'Rivero', 17));

        echo '<table>';
        echo '<tr>';
        echo '<th>Nombre</th><th>Apellido</th><th>Edad</th>';
        echo '</tr>';
        for($i = 0; $i < count($alumnos); $i++) {

            echo '<tr>';
            echo '<td>'.$alumnos[$i]->getName().'</td>';
            echo '<td>'.$alumnos[$i]->getSurname().'</td>';
            echo '<td>'.$alumnos[$i]->getAge().'</td>';
            echo '</tr>';
    }
        echo '</table>';


    ?>
    </body>
</html>
