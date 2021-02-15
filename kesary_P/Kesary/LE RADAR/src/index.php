<?php
require("../entities/Voiture.php");
//require("../entities/Radar.php");

//$voiture1 = new Voiture("voiture1");
//echo $voiture1->get_nom();

$nbreVoiture = readline("Donnez le nombre de voiture : \n");
for ($i=1; $i <= $nbreVoiture ; $i++) { 
    $color = readline("Quelle est la couleur de la voiture : \n");
    $model = readline("Quel est le model de la voiture : \n ");
    $marque = readline("Quelle est la marque de la voiture : \n");
    $imma = readline("Quel est le numéro d'immatriculation : \n");
    ${"voiture ".$i} = new Voiture("Voiture ".$i,$color,$model,$marque,$imma);
    echo ${"voiture ".$i}->get_nom(). " " .${"voiture ".$i}->get_couleur (). " ".${"voiture ".$i}->get_model()." " .${"voiture ".$i}->get_marque()." ".${"voiture ".$i}->get_immatriculation(). "\n";
    //var_dump(${"voiture ".$i}->get_nom());
    ${"voiture ".$i} -> demarrer();
    var_dump(${"voiture ".$i});
    
}



//$voiture1->set_nom('voiture1');
//$voiture -> demarrer();


//$voiture2 = new Voiture("Voiture 2");
//$voiture2 -> demarrer();


?>