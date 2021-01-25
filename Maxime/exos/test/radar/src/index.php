<?php

require('./entities/services.php');
function chargerClass($class){
    require ('./entities/'.$class.'.class.php');
}
spl_autoload_register('chargerClasse');

//limitaion
do{
    $vitesseLim=readline("entrez la limite de vitesse (entre 70 et 100) : ");
}while($vitesseLim<70 and $vitesseLim>100);
$radar=new Radar;
$radar->setVitesseMin($vitesseLim);

//nombre de voitures
do{
    $nbVoit=readline("entrez le nombre de voitures : ");
}while($nbVoit<2);

//choix des voitures
$vitesse=0;
for($i=1;$i<=$nbVoit;$i++){
    $voiture="voiture$i";
    $$voiture=new Voiture;
    $voiture->setMarque($marque=readline("entrez la marque de la voiture : "));
    $voiture->setModele($modele=readline("entrez le modèle de la voiture : "));
    $voiture->setImmat($immat=readline("entrez l'immatriculation de la voiture : "));
    $voiture->setCouleur($couleur=readline("entrez la couleur de la voiture : "));
    
    //accélération
    do{
        $accel=rand(1,25);
        $vitesse=setVitesse($voiture);
        echo "la $voiture a accéléré de $accel km/h et roule a $vitesse km/h.";
    }while($vitesse<$radar);

    //PV
    if($vitesse>$radar){
        echo "voiture flashée : $voiture.";
        $difVit=$vitesse-$radar;
        $pv=new PV;
        $pv->setAmende($difVit);
    }
}

?>