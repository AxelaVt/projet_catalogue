
<?php

//en poo class Animaux, model: animalsManager
function animalsList()
{
  $animalsManager = new Animaux(); // Création d'un objet
  $animals = $animalsManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les animaux en bdd

    require('view/accueilView.php');

}

function animalsListAdmin()
{
  $animalsManager = new Animaux(); // Création d'un objet
  $animals = $animalsManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les animaux en bdd

    require('view/adminView.php');
}

function animaladd()
{
  $animal = new Animaux();
  $animal->add($_POST['name']);
  $photo = file_get_contents(getcwd() . DIRECTORY_SEPARATOR . "chat.jpg");

  $id = $animal->get_name($_POST['name'])['id'];
  $animal->set_name($id, $_POST['name']);
  $animal->set_type($id, $_POST['type']);
  $animal->set_family($id, $_POST['family']);
  $animal->set_alim($id, $_POST['alim']);
  $animal->set_description($id, $_POST['description']);
  $animal->set_photo($id, $photo);

  require('view/addView.php');

}

function animalDelete($id)
{
  $animalsManager = new Animaux();
  $animal = $animalsManager->remove($id);

  require('admin.php');
}


// function animalPage()
// {
//     // $animalsManager = new animalsManager(); // Création d'un objet
//     // $animal = $animalsManager->getAnimals($_GET['id']); //  Appel la fonction qui renvoie toutes les données concernant l'animal ou $id = $_GET['id']
//     $animalsManager = new Animaux();
//     $animal = $animalsManager->get_name($id);
//     $animal = $animalsManager->get_type($id);
//     $animal = $animalsManager->get_family($id);
//     $animal = $animalsManager->get_alim($id);
//     $animal = $animalsManager->get_description($id);
//     $animal = $animalsManager->get_photo($id);
//
// //$photo = file_get_contents(getcwd() . DIRECTORY_SEPARATOR . "chat.jpg");
//
//     require('view/animalView.php');
// }




?>
