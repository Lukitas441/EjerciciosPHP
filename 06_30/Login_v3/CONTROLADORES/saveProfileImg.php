<?php
include '../NEGOCIO/User.php';
session_start();

$dir = '../resources/'.$_SESSION['usuarioLogeado']->getId();
if(!empty($_FILES['imagen'])){

   $_FILES['imagen']['name'] = 'profile_img.'.pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
   $name = $_FILES['imagen']['name'];
   $path = $dir . $name;

   if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
      $img = base64_encode(file_get_contents($path));
      $ext = pathinfo($path, PATHINFO_EXTENSION);

      $_SESSION['usuarioLogeado']->setImage($img, $ext);
      User::setImg($_SESSION['usuarioLogeado'], $img, $ext);
      unlink($path);
   } else {
      echo 'error al mover archivo';
   }
}
header('location: ../01_profile/Perfil.php')
?>