<?php
// Page inaccessible si la personne est connecté
$fichier = file_get_contents('template/login.html');
echo $fichier;
?>