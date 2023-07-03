<?php
include 'Conexion.php';

class RepositorioUsuarios {
    private $PDO;

    public function __construct() {
        $newConnection = new Conexion();
        $this->PDO = $newConnection->getConnection();
    }

    public function getAllUsers(){
        $users = [];
        $stmt = $this->PDO->query('SELECT * FROM usuarios');

        while($row = $stmt->fetch()) {
            array_push($users, new User(
                $row['user'],
                $row['email'],
                $row['password']
            ));
        }
        return $users;
    }
    public function addUser($user) {
        $stmt = $this->PDO->prepare('INSERT INTO usuarios (user, email, password) VALUES ("'.$user->getName().'","'.$user->getEmail().'","'.$user->getPassword().'")');
        $stmt->execute();
    }
}
?>