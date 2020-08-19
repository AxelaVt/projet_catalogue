

<?php
require('controller.php');
require('Animaux.php');


 if (isset($_GET['id']) && $_GET['id'] > 0) {

     animalPage();
 }
 else {

      animalsList();
 }
