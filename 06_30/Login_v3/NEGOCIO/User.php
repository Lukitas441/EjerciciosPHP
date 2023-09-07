<?php 
    include '../PERSISTENCIA/RepoUsuarios.php';
    class User{
        private $ID;
        private $name;
        private $email;
        private $password;
        private $image;

        public function __construct($id ,$name, $email, $password, $img) {
            $this->ID = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId() {
            return $this->ID;
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
            return $this->image;
        }

        public static function getRepo() {
            $repoUsuarios = new RepositorioUsuarios();
            return $repoUsuarios->getAllUsers();
        }
        public static function addToRepo($name, $email, $password) {
            $repoUsuarios = new RepositorioUsuarios();
            $repoUsuarios->addUser($name, $email, $password);
        }
        public static function setImg($user ,$path){
            $repoUsuarios = new RepositorioUsuarios();
            $repoUsuarios->setImagen($user, $path);
        }
    }
?>