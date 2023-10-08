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
                array_push($posts, new Post($row['ID'], $row['USER_ID'], $row['CONTENT'], $row['Fecha']));
        }

        foreach($posts as $post){
            $ownerData = $this->PDO->query('SELECT ID, User, Email, Password, PROFILE_IMG, PROFILE_IMG_EXT FROM Usuarios WHERE ID = '.$post->getUserId())->fetch();
            $post->setUser(new User($ownerData['ID'], $ownerData['User'], $ownerData['Email'], $ownerData['Password'], $ownerData['PROFILE_IMG'], $ownerData['PROFILE_IMG_EXT']));

            $consulta = $this->PDO->query('SELECT USER_ID FROM Likes WHERE POST_ID = '.$post->getId());
            $usersLikes = [];
            while($row = $consulta->fetch()){
                array_push($usersLikes,$row['USER_ID']);
            }
            $post->setLikes($usersLikes);
        }
        return $posts;
    }
    public function savePost($user_id, $content){
        $stmt = $this->PDO->query('INSERT INTO Posts (ID, USER_ID, CONTENT, Fecha) VALUES (NULL, '.$user_id.', "'.$content.'", "'.date('Y-m-d').'");');
    }
}
?>