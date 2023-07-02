<?php
include '../PERSISTENCIA/repoAlumnos.php';
    class Alumno {
        private $name;
        private $surname;
        private $email;

        public function __construct($nom, $ape, $Email) {
            $this->name = $nom;
            $this->surname = $ape;
            $this->email = $Email;
        }

        public function getName() {
            return $this->name;
        }
        public function getSurname() {
            return $this->surname;
        }
        public function getEmail() {
            return $this->email;
        }
        
        public static function getRepo() {
            $repoAlumnos = new RepositorioAlumnos();
            return $repoAlumnos->getAlumnos();
        }
        public static function addToRepo($alumno) {
            $repoAlumnos = new RepositorioAlumnos();
            $repoAlumnos->addAlumno($alumno->getName(), $alumno->getSurname(), $alumno->getEmail());
        }
        public static function deleteFromRepo($ID) {
            $repoAlumnos = new RepositorioAlumnos();
            $repoAlumnos->deleteAlumno($ID);
        }
    }
?>