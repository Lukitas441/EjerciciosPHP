<?php
include_once "../NEGOCIO/Post.php";

$listPosts = array_reverse(Post::getRepo());
foreach($listPosts as $post){
    echo "<p>".$post->getContent()."</p>";
}
?>