<?php
include '../NEGOCIO/User.php';
session_start();

$dir = '../resources/'.$_SESSION['usuarioLogeado']->getId();

if(!empty($_FILES['imagen'])){
   $_FILES['imagen']['name'] = 'profile_img';
   $name = $_FILES['imagen']['full_path'];
   $path = $dir . $name;

   
   if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
      User::setImg($_SESSION['usuarioLogeado'], $path);
   } else {

   }
}
?>