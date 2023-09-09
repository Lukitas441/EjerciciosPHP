<?php 
    include '../PERSISTENCIA/RepoUsuarios.php';
    class User{
        private $ID;
        private $name;
        private $email;
        private $password;
        private $image;
        private $imgExt;

        public function __construct($id ,$name, $email, $password, $img, $extension) {
            $this->ID = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->image = $img;
            $this->imgExt = $extension;
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
        public function getExt() {
            return $this->imgExt;
        }

        public function setImage($img, $ext){
            $this->image = $img;
            $this->imgExt = $ext;
        }

        public static function getRepo() {
            $repoUsuarios = new RepositorioUsuarios();
            return $repoUsuarios->getAllUsers();
        }
        public static function addToRepo($name, $email, $password) {
            $repoUsuarios = new RepositorioUsuarios();
            $repoUsuarios->addUser($name, $email, $password);
        }
        public static function setImg($user ,$img, $ext){

            $repoUsuarios = new RepositorioUsuarios();
            $repoUsuarios->setImagen($user, $img, $ext);
        }
    }
?>