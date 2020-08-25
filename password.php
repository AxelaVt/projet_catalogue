<?php
session_start();
require('controller.php');
require('Users.php');

//var_dump($_SESSION);

if ($_SESSION['admin'] !== "true" ) {
  echo "devez vous connecter";
  //header("location:view/connexionView.php");
  header("Refresh: 5;URL=view/connexionView.php");
}
if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    // afficher un message
}

if ($_POST['password'] !== $_SESSION['password']) {
  echo "votre not de passe actuel est incorrect, veuillez recommencer";
  header("Refresh: 1;URL=view/passwordView.php");
}
$modif = changePassword($_POST['password1'], $_SESSION['username']);

if ($modif === 'true') {
  echo "Password modifié";
  header("Refresh: 15; URL=admin.php");
}else{
  echo "Password non modifié, veuillez contacter l'administrateur";
  header("Refresh: 15; URL=admin.php");
}
