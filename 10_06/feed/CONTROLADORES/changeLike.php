<?php
include_once '../NEGOCIO/Post.php';
include_once '../NEGOCIO/User.php';
session_start();

$PostID = $_REQUEST['idPost'];
$UserID = $_SESSION['usuarioLogeado']->getId();
$add = false;

foreach(Post::getRepo() as $post){
    if($post->getId() == $PostID){
        $actualPost = $post;
    }
}
if(!in_array($UserID,$actualPost->getLikes())){
    $add = true;
}

Post::modLike($PostID, $UserID, $add);
?>