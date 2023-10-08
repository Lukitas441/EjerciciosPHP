<?php
include_once '../NEGOCIO/User.php';

function loadProfileImg($user){
    $files = glob('../resources/*');
    if(!empty($files)){
        foreach($files as $file){
            unlink($file);
        }
    }

    if(empty($user->getImg())) {
        return "<i class='fa-regular fa-user'></i>";
    }
    $imgPath = '../resources/'.$user->getId().'profile_img.'.$user->getExt();
    $img = fopen($imgPath, 'w');
    fwrite($img, base64_decode($user->getImg()));
    fclose($img);
    return '<img src="'.$imgPath.'">';
}
?>