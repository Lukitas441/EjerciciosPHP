<?php
    include __DIR__.'\..\Negocio\Alumno.php';
    class RepositorioAlumnos{
        private $listaDeAlumnos;

        public function __construct() {
            $this->listaDeAlumnos = array();
        }

        public function listarAlumnos() {
            return $this->listaDeAlumnos;
        }

        public function addAlumno($name, $surname, $email) {
            $this->listaDeAlumnos[] = new Alumno($name, $surname, $email);
        }
        
        public function deleteAlumno($idAlumno) {
            unset($this->listaDeAlumnos[$idAlumno]);
        }
    }
?>