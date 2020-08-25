<?php

require "Animaux.php";

$animal_manager = new Animaux();

echo $animal_manager->get_id($_GET['id'])['photo'];
