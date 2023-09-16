<?php
include_once 'classes.php';
class Adscripto extends User
{
    private $turno;

    public function setTurno($turno){
        $this->turno = $turno;
    }
    public function getTurno(){
        return $this->turno;
    }
}
?>