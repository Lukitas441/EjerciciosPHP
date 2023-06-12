<?php 
    class User{
        private $name;
        private $password;
        private $img_file;

        public function __construct($name, $password, $img_file) {
            $this->name = $name;
            $this->password = $password;
            $this->img_file = $img_file;
        }

        public function getName() {
            return $this->name;
        }
        public function getPassword() {
            return $this->password;
        }
        public function getImg() {
            return $this->img_file;
        }
    }
?>