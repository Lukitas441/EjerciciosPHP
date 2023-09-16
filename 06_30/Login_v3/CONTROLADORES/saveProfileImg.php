<?php
include '../NEGOCIO/User.php';
session_start();

$dir = '../resources/';
if(!(isset($_SESSION['inicioExitoso']))) {
   header( 'location: ../0_login/' );
}
if(!empty($_FILES['imagen'])){
   $ext=pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
   if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])){

      $_FILES['imagen']['name'] = 'profile_img.'.$ext;
      $name = $_FILES['imagen']['name'];
      $path = $dir . $_SESSION['usuarioLogeado']->getId() . $name;
   
      if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
         $img = base64_encode(file_get_contents($path));
   
         $_SESSION['usuarioLogeado']->setImage($img, $ext);
         User::setImg($_SESSION['usuarioLogeado'], $img, $ext);
         unlink($path);
      } else {
         echo 'error al mover archivo';
      }
   }
}
header('location: ../01_profile/Perfil.php');

function rmContent($dir) {
   $files = glob($dir . '/*');
   foreach($files as $file){
      if(is_file($file)){
         unlink($file);
      }
   }
}
?>