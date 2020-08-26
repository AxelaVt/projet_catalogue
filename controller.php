
<?php


//en poo class Animaux,
function animalsList()
{
  $animalsManager = new Animaux(); // Création d'un objet
  $animals = $animalsManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les animaux en bdd

  require('view/accueilView.php');
}

//$user = utilisateur connecté
function getUsersList($user)
{
  $usersManager = new Users();
  $adms = $usersManager->get_all();
  return $adms;
  //require('view/adminView.php');
}

function getAnimalsListAdmin($user)
{
  $animalsManager = new Animaux(); // Création d'un objet
  $animals = $animalsManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les animaux en bdd
  return $animals;

}

function animalAdd($name, $type, $family, $alim, $description, $photo)
{
  $animal = new Animaux();
  $animal->add($_POST['name']);

  $id = $animal->get_name($_POST['name'])['id'];
  $animal->set_name($id, $_POST['name']);
  $animal->set_type($id, $_POST['type']);
  $animal->set_family($id, $_POST['family']);
  $animal->set_alim($id, $_POST['alim']);
  $animal->set_description($id, $_POST['description']);
  $animal->set_photo($id, $photo);

  require('view/addView.php');

}

function animalDelete($id, $user)
{
  $animalsManager = new Animaux();
  $animal = $animalsManager->remove($_GET['id']);

  getanimalsListAdmin($user);
}

function animalArchived($id, $user){
  $animalsManager = new Animaux();
  $animal = $animalsManager->get_id($id);

  if ($animal['archived'] === 'false') {
    $animalsManager->archive($animal['id']);
  } else {
    $animalsManager->unarchive($animal['id']);
  }
  getanimalsListAdmin($user);
}

function animalChange($id)
{
  $animalsManager = new Animaux;
  $animal = $animalsManager->get_id($id);

  if (isset($_POST['submit'])) {
    if (empty($_FILES['image']['tmp_name'])===false) {
      $file = $_FILES['image'];
      $photo = file_get_contents($file['tmp_name']);
    }

    $animalsManager->set_name($id, $_POST['name']);
    $animalsManager->set_type($id, $_POST['type']);
    $animalsManager->set_family($id, $_POST['family']);
    $animalsManager->set_alim($id, $_POST['alim']);
    $animalsManager->set_description($id, $_POST['description']);
    if (isset($photo)===true) {
      $animalsManager->set_photo($id, $photo);
    }
  }

  require('view/changeView.php');
}


function animalPage($id)
{
  $animalsManager = new Animaux();
  $animal = $animalsManager->get_id($id);

    require('view/animalView.php');
}

//change password
function changePassword($password, $username)
{
  $usermanager = new Users();
  $passwordbdd = $usermanager->get_username($username); //recup les données associées au user connecté
  $usermanager->set_password($passwordbdd['id'], $password);// enregistre le nouveau password en lien ave l'id connecté
  $newpasswordbdd = $usermanager->get_username($username); // recupère les données associées au user connecté
  if ($newpasswordbdd['password'] === $password) {
    return 'true';
  }else{
    return 'false';
  }
}

function userConnexion($username, $password)
{
  $usermanager = new Users();
  $passwordbdd = $usermanager->get_username($username);

  if ($passwordbdd['password'] === $password ) {  //s'il trouve un password c'est que user exist, et  password est il correct?
    return 'true';
  } else {
    return 'false';
  }
}

?>
