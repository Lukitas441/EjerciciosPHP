<?php
include_once 'Conexion.php';

class RepositorioPost{
    private $PDO;

    public function __construct() {
        $newConnection = new Conexion();
        $this->PDO = $newConnection->getConnection();
    }

    public function getAllPost(){
        $posts = [];
        $stmt = $this->PDO->query('SELECT * FROM Posts');
        while($row = $stmt->fetch()){
            array_push($posts, new Post($row['ID'], $row['CONTENT'], $row['Likes']));
        }
        return $posts;
    }
    public function savePost($content){
        $stmt = $this->PDO->query('INSERT INTO Posts (ID, CONTENT, Likes) VALUES (NULL, "'.$content.'", 0)');
    }
}
?>