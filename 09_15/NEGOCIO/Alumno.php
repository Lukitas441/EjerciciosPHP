<?php
include_once 'classes.php';
class Alumno extends User
{
    public function saludar()
    {
        echo 'Hola, soy '.$this->getName().' y soy un estudiante';
    }
}
?>