<?php
include "header.php";

?>
<h1>ADMIN</h1>

  <a href='admin.php?deconnexion=true' type="button" class="btn btn-secondary btn-lg float-sm-right mr-2">Quitter</a>

  <div class="container">
    <h2>Liste des animaux</h2>
    <a href='view/addView.php' type="button" class="btn btn-secondary btn-lg float-sm-center p-2">Ajouter</a>
    <p></p>
    <table class="table table-striped w-100 h-auto">
      <thead>
        <tr>
          <th>id</th>
          <th>animal</th>
          <th>type</th>
          <th>famille</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

          <?php
          foreach ($animals as $animal){

            ?>
          <tr>
            <td><?= $animal['id'] ?></td>
            <td><?= $animal['name'] ?></td>
            <td><?= $animal['type'] ?></td>
            <td><?= $animal['family'] ?></td>
            <td><a href="change.php?id=<?= $animal['id'] ?>" ><img src="view/bootstrap-icons/pencil-square.svg" alt="change" width="32" height="32" title="change"></a></td>
            <td><a href="delete.php?id=<?= $animal['id'] ?>" ><img src="view/bootstrap-icons/trash.svg" alt="delete" width="32" height="32" title="delete"></a></td>
            <td>
            <td>
              <a href="archive.php?id=<?= $animal['id'] ?>">
              <?php
              //echo $animal['archived'];
              if($animal['archived'] === "false") {
                //echo 'unarchived';
                 ?>
                <img src="view/bootstrap-icons/check2-circle.svg" alt="unarchived" width="32" height="32" title="unarchived">
              <?php } else { ?>
                <img src="view/bootstrap-icons/archive.svg" alt="archived" width="32" height="32" title="archived">
                <?php
                //echo 'archived';
              } ?>
              </a>
            </td>
          </tr>
            <?php
          }?>

      </tbody>
    </table>
  </div>



<?php

require 'footer.php';
?>
