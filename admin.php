
<?php
require_once ('sessionstart.php');
require('controller.php');
require('Animaux.php');

 var_dump($_SESSION);
// if ($_SESSION['admin'] !== true ) {
//   echo "devez vous connecter";
//   header("location:view/connexionView.php");
// }

if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    // afficher un message
    ?> <div class="row h-10 p-3">
      <?php echo "Bonjour $user, ";?>
    </div><?php
}

if(isset($_GET['deconnexion']) && $_GET['deconnexion']==true){
  session_unset();
  session_destroy();
  header("location:index.php");
}


animalsListAdmin();
