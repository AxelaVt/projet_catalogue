
<?php
session_start();
require('controller.php');
require('Animaux.php');
require('Users.php');

//var_dump($_GET);



//var_dump($_SESSION);
if ($_SESSION['admin'] !== "true" ) {
  echo "devez vous connecter";
  //header("location:view/connexionView.php");
  header("Refresh: 1;URL=view/connexionView.php");
}

if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    // afficher un message
}


if(isset($_GET['deconnexion']) && $_GET['deconnexion']==true){
  session_unset();
  session_destroy();
  header("location:index.php");
}


animalsListAdmin($user);
//usersList($user);
