<?php
function chargerClasse($classe){
    require "./entities/". $classe . ".class.php";
}

spl_autoload_register("chargerClasse");

do{
    $vitesseMax=readline("Vitesse max autorisé ?");
}while($vitesseMax<1 || !ctype_digit($vitesseMax));
$radar= new Radar($vitesseMax);

do{
    $nbrVoiture=readline("nombre de voiture participants ? (min2) ");
}while($nbrVoiture<2 || !ctype_digit($nbrVoiture));

for ($i=0;$i<$nbrVoiture;$i++){
    $marque=readline("marque de la voiture n°".($i+1)."? ");
    $modele=readline("modele de la voiture n°".($i+1)."? ");
    $immatriculation=readline("immatriculation de la voiture n°".($i+1)."? ");
    $couleur=readline("couleur de la voiture n°".($i+1)."? ");
    $tabVoiture[$i]= new Voiture ($marque,$modele,$immatriculation,$couleur);
}

while (true) {
    for ($i=0;$i<$nbrVoiture;$i++){
        $tabVoiture[$i]->accelerer();
        $radar->controleVitesse($tabVoiture[$i]);
    }
}

?>