<?php
require('controller.php');
require('Animaux.php');


if(!empty($_POST['name'])) {
  echo "veuillez compléter les champs";
  animaladd($_POST['name'], $_POST['type'], $_POST['family'], $_POST['alim'],$_POST['description'],$photo );
 }


?>
 
