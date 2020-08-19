<?php
include "header.php";


foreach ($animals as $animal){
  echo '<strong>'. $animal['name'] .'</strong><br />';
  echo '<strong>'. $animal['id'] .'</strong><br />';
  echo '<strong>'. $animal['description'] .'</strong><br />';
  ?>
  <img src="get_image.php?id=<?= $animal['id'] ?>" alt="<?=$animal['name']?>">
  <?php
}

require 'footer.php';
?>

<a class="float-sm-right p-2" href="view/connexionView.php"><img src="bootstrap-icons/key-fill.svg" alt="connection" width="32" height="32" title="Bootstrap"></a>
