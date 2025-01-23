<?php
// Page accessible uniquement aux personnes connectées
require_once('autoload.php');
$fichier = file_get_contents('template/index.html');
// Exemple pour remplacer la variable [LISTEFICHIERS]
$fichier = str_replace('[LISTEFICHIERS]','<li>Afficher fichier utilisateur</li>',$fichier);
echo $fichier;
?>