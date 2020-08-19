<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catalogue";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdoS = "Connected successfully / Connexion effectuée avec succès";
  } catch(PDOException $e) {
    $pdoF = "Connection failed / Echec de la connexion : " . $e->getMessage();
    echo $pdoS;
}


?>
