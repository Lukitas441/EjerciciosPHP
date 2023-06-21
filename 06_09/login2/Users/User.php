<?php 
    class User{
        private $name;
        private $email;
        private $password;
        private $img_file;

        public function __construct($name, $email, $password, $img_file) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->img_file = $img_file;
        }

        public function getName() {
            return $this->name;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getPassword() {
            return $this->password;
        }
        public function getImg() {
            return $this->img_file;
        }
    }
?>