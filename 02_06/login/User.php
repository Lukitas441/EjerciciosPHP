<?php 
    class User{
        private $username;
        private $password;

        public function __construct($name, $password) {
            $this->name = $name;
            $this->password = $password;
        }
        public function getName() {
            return $this->username;
        }
        public function getPassword() {
            return $this->password;
        }
    }
?>