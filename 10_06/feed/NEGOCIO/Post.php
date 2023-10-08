<?php
    include_once '../PERSISTENCIA/RepoUsuarios.php';
    include_once '../PERSISTENCIA/RepoPost.php';

class Post{
    private $id;
    private $user_id;
    private $user;
    private $content;
    private $fecha;
    private $likes;

    public function __construct($id, $user_id, $content, $fecha)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->content = $content;
        $this->fecha = $fecha;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser(){
        return $this->user;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setLikes($usersLiked)
    {
        $this->likes = $usersLiked;
    }
    public function getLikes()
    {
        return $this->likes;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    
    public static function getRepo() {
        $repoPost = new RepositorioPost();
        return $repoPost->getAllPost();
    }
    public static function savePost($user_id, $content) {
        $repoPost = new RepositorioPost();
        $repoPost->savePost($user_id, $content);
    }
}
?>