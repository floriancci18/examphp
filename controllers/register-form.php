<?php
// Page inaccessible si la personne est connecté
$file = file_get_contents('template/register.html');
echo $file;
?>