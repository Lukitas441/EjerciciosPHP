<!DOCTYPE html>
<html>
    <style>
        table, th, td{
            border: 1px solid salmon;
        }
        td {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <body>
        <h1>Tabla de personas</h1>
        <?php
                $personas = array('Lucas', 'Abby', 'Santy', 'Eze', 'Ro');
                echo '<table>';
                echo '<tr>';
                echo '<th colspan="2">Nombres</th>';
                echo '</tr>';
               
                for($i = 0; $i < count($personas); $i++){
                    echo '<tr>';
                    echo '<td>'.$personas[$i].'<input type="radio" name="name"></td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </body>
</html>