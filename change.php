<?php
require('controller.php');
require('Animaux.php');



animalChange($_GET['id']);


// if (isset($_POST['submit'])) {
//   $file = $_FILES['image'];
//   $photo = file_get_contents($file['tmp_name']);
//   // animalSaveChange($_GET['id'], $_POST['name'], $_POST['type'], $_POST['family'], $_POST['alim'],$_POST['description'],$photo );
// }

//header('Location: admin.php');


?>
