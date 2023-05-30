<?php
    class Usuario{
        public $name;
        private $surname;
        private $age;

        public function __construct($nombre, $apellido, $edad) {
            $this->name = $nombre;
            $this->surname = $apellido;
            $this->age = $edad;
        }
        public function getName() {
            return $this->name;
        }
        public function getSurname() {
            return $this->surname;
        }
        public function getAge() {
            return $this->age;
        }
    }
?>