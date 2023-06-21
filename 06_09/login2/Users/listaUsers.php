<?php
    include 'User.php';
    class listaUsers {
        private $listaDeUsuarios;

        public function __construct() {
            $this->listaDeUsuarios = array();
        }

        public function addUser($user, $email, $password, $img = 'https://acortar.link/vVyrlD') {
            array_push($this->listaDeUsuarios, new User($user, $email, $password, $img));
        }
        public function listarUsuarios() {
            return $this->listaDeUsuarios;
        }

    }
?>