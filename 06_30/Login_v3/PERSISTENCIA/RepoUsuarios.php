<?php
include 'Conexion.php';

class RepositorioUsuarios {
    private $PDO;

    public function __construct() {
        $newConnection = new Conexion();
        $this->PDO = $newConnection->getConnection();
    }

    public function getAllUsers() {
        $users = [];
        $stmt = $this->PDO->query('SELECT * FROM usuarios');

        while($row = $stmt->fetch()) {
            array_push($users, new User(
                $row['ID'],
                $row['user'],
                $row['email'],
                $row['password'],
                $row['profile_img'],
                $row['imgExt']
            ));
        }
        return $users;
    }
    public function addUser($name, $email, $password) {
        $stmt = $this->PDO->prepare('INSERT INTO usuarios (user, email, password, profile_img, imgExt) VALUES ("'.$name.'","'.$email.'","'.$password.'", "", "")');
        $stmt->execute();
    }
    public function setImagen($user, $img, $ext){
        $stmt = $this->PDO->prepare('UPDATE usuarios SET profile_img="'.$img.'", imgExt="'.$ext.'" WHERE ID="'.$user->getId().'";');
        $stmt->execute();
    }
}
?>