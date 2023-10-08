<?php
    
    include_once '../NEGOCIO/Post.php';
    include_once '../NEGOCIO/User.php';
    session_start();
    

    $content = $_REQUEST['content'];
    $user = $_SESSION['usuarioLogeado'];

    if(!empty($content)){
        Post::savePost($user->getId(), $content);
    }else{
        echo 'No escribiste nada';
    }
    $_REQUEST['content'] = "";
?>