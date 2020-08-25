<?php

require "Animaux.php";

$animaux = new Animaux();

echo $animaux->get_id($_GET['id'])['photo'];
