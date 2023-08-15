<?php
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
    }
?>