<?php
include_once 'Conexion.php';

class RepositorioUsuarios {
    private $PDO;

    public function __construct() {
        $newConnection = new Conexion();
        $this->PDO = $newConnection->getConnection();
    }

    public function getAllUsers() {
        $users = [];
        $stmt = $this->PDO->query('SELECT * FROM Usuarios');

        while($row = $stmt->fetch()) {
            array_push($users, new User(
                $row['ID'],
                $row['User'],
                $row['Email'],
                $row['Password'],
                $row['PROFILE_IMG'],
                $row['PROFILE_IMG_EXT']
            ));
        }
        return $users;
    }
    public function addUser($name, $email, $password) {
        $stmt = $this->PDO->prepare('INSERT INTO Usuarios (User, Email, Password, PROFILE_IMG, PROFILE_IMG_EXT) VALUES ("'.$name.'","'.$email.'","'.$password.'", "", "")');
        $stmt->execute();
    }
    public function setImagen($user, $img, $ext){
        $stmt = $this->PDO->prepare('UPDATE Usuarios SET PROFILE_IMG="'.$img.'", PROFILE_IMG_EXT="'.$ext.'" WHERE ID="'.$user->getId().'";');
        $stmt->execute();
    }
}
?>