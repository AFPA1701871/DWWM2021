<?php
$age = readline("Quel est votre âge : ");
(($age >= 18) ? $reponse="majeur" : $reponse="mineur");
echo "Vous êtes ".$reponse. "."; 
?>