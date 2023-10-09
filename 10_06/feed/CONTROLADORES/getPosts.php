<?php
include_once "../NEGOCIO/Post.php";
include_once '../NEGOCIO/User.php';
include_once './loadProfileImg.php';

session_start();

$listPosts = array_reverse(Post::getRepo());
foreach($listPosts as $post){
    $postOwner = $post->getUser();
    echo '
    <div class="post-container" id="'.$post->getId().'">
        <div class="user-information">
            '.loadProfileImg($postOwner).'
            <p class="username">'.$postOwner->getName().'</p>
        </div>
        <div class="content-container">
            <p class="content">'.$post->getContent().'</p>
        </div>';
        if(in_array($_SESSION['usuarioLogeado']->getId(),$post->getLikes())){
            echo '
            <div class="interactions">
                <i class="fa-solid fa-heart"></i>
                <p>'.count($post->getLikes()).'</p>
            </div>
            ';
        } else {
            echo '
            <div class="interactions">
                <i class="fa-regular fa-heart"></i>
                <p>'.count($post->getLikes()).'</p>
            </div>
            ';
        }
        echo '</div>';
}
?>