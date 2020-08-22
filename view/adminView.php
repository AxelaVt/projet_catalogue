<?php
include "header.php";

?>
<body id="body">
<div class="container">
  <div class="container d-flex flex-column my-5">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

      <!-- <a href="index.php">Accueil du site</a> -->
      <a href="admin.php?deconnexion=true">Quitter</a>
      <a href="view/passwordView.php">Changer mot de passe</a>
    </div>
    <span style="font-size:1.5rem;cursor:pointer" onclick="openNav()"> &#9776; <?php echo "Bonjour $user, ";?></span>
  </div>

  <div class="d-flex flex-row justify-content-center mb-5">
    <h1>Administration du site</h1>
  </div>
  <div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active d-flex my-5" data-toggle="tab" href="#animaux">Liste des animaux</a>
          <!-- <h2 class="d-flex my-5">Liste des animaux</h2> -->
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex my-5" data-toggle="tab" href="#users">Liste des utilisateurs</a>
        </li>
    </ul>
    <div class="tab-content">
      <div class="container tab-pane active" id="animaux">
        <div class="row h-10 m-3">
        <a href='view/addView.php' type="button" class="btn btn-outline-secondary btn-lg float-sm-center p-2">Ajouter</a>
        </div>
        <table class="table table-striped w-100 h-auto">
          <thead>
            <tr>
              <th>id</th>
              <th>animal</th>
              <th>type</th>
              <th>famille</th>
              <th>Modification</th>
              <th>supprimer</th>
              <th>actif/archiver</th>
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
              <td class="text-center"><a href="change.php?id=<?= $animal['id'] ?>" ><img src="view/bootstrap-icons/pencil-square.svg" alt="change" width="16" height="16" title="change"></a></td>
              <td class="text-center"><a href="delete.php?id=<?= $animal['id'] ?>" ><img src="view/bootstrap-icons/trash.svg" alt="delete" width="16" height="16" title="delete"></a></td>
              <td class="text-center">
                <a href="archive.php?id=<?= $animal['id'] ?>">
                <?php
                //echo $animal['archived'];
                if($animal['archived'] === "false") {
                  //echo 'unarchived';
                   ?>
                  <img src="view/bootstrap-icons/check2-circle.svg" alt="unarchived" width="16" height="16" title="unarchived">
                <?php } else { ?>
                  <img src="view/bootstrap-icons/archive.svg" alt="archived" width="16" height="16" title="archived">
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
      <div class="container tab-pane fade" id="users">
        <table class="table table-striped w-100 h-auto">
          <thead>
            <tr>
              <th>id</th>
              <th>utilisateurs</th>
              <th>mot de passe</th>
            </tr>
          </thead>
          <tbody>

              <?php
              foreach ($users as $user){
                ?>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td class="text-center"><a href="passwordView.php" ><img src="view/bootstrap-icons/key.svg" alt="change" width="16" height="16" title="change"></a></td>

              </tr>
                <?php
              }?>

          </tbody>
        </table>

      </div>

    </div>
</div>
</body>
<script type="text/javascript">
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<?php

require 'footer.php';
?>
