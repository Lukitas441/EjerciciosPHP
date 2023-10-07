<?php
    include_once '../NEGOCIO/Post.php';

    $content = $_REQUEST['content'];
    if(!empty($content)){
        Post::savePost($content);
        echo 'Se cargo el post';
    }else{
        echo 'No escribiste nada';
    }
    $_REQUEST['content'] = "";
?>