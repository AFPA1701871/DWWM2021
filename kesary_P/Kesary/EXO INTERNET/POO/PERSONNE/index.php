<?php
require("Personne.php");

$personne1 = new Personne("Kesary", "Pavaday","22, Rue Georges CLEMENCEAU 59760 Grande Synthe");
echo $personne1 -> getPersonne();

//Modification de l'adresse
echo" \n";
echo "Modification de l'adresse \n";
echo" \n";
$personne1 -> setAdresse("11, Rue Charles Tillon 59760 Grande Synthe");
echo $personne1 -> getPersonne();
?>