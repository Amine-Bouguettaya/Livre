<?php

include "class/Livre.php";
include "class/Auteur.php";

$auteur1 = new Auteur("King", "Stephen");

$livre1 = new Livre ("CA", 1138, 1986, 20, $auteur1);
$livre2 = new Livre ("Simtierre", 374, 1983, 15, $auteur1);
$livre3 = new Livre ("Le Fléau", 823, 1978, 14, $auteur1);
$livre4 = new Livre ("Shining", 447, 1977, 16, $auteur1);

// var_dump($auteur1);

echo ($auteur1->afficherBibliographie());

echo "<br><br><br>";

echo $auteur1;
echo $livre1;