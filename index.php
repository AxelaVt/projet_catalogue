<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require "Animaux.php";
      $animaux = new Animaux();
      $animaux->delete_all();

      $animaux->add('chat');
      $photo = file_get_contents(getcwd() . DIRECTORY_SEPARATOR . "chat.jpg");

      $id = $animaux->get_name("chat")['id'];
      $animaux->set_name($id, "chat");
      $animaux->set_type($id, "mammifère");
      $animaux->set_family($id, "chat");
      $animaux->set_alim($id, "mixte");
      $animaux->set_description($id, "Un chat tout mignon.");
      $animaux->set_photo($id, $photo);

     ?>
     <img style="width: 400px; object-fit: contain" src="get_image.php?id=<?= $id ?>" alt="<?php echo $animaux->get_id($id)['name'] ?>">
  </body>
</html>
