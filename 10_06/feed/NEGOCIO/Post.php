<?php
include '../PERSISTENCIA/RepoPost.php';

class Post{
    private $id;
    private $content;
    private $likes;

    public function __construct(int $id, string $content, int $likes)
    {
        $this->id = $id;
        $this->content = $content;
        $this->likes = $likes;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getContent()
    {
        return $this->content;
    }
    
    public function getLikes()
    {
        return $this->likes;
    }
    
    public static function getRepo() {
        $repoPost = new RepositorioPost();
        return $repoPost->getAllPost();
    }
    public static function savePost($content) {
        $repoPost = new RepositorioPost();
        $repoPost->savePost($content);
    }
        
}
?>