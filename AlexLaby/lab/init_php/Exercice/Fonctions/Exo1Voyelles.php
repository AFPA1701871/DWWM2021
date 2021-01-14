<?php
require('LibrairieFoncExo.php');

$inputUser=readline("Ecrivez une phrase ");

//ma fonction renvoie le nombre de voyelles, ma variable compteur prend ce nombre pour écrire ma phrase
$compteur=countVoyelles($inputUser);
echo "Il y a $compteur voyelles dans votre phrase ";

?>