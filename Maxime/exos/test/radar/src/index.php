<?php

require('./entities/services.php');
function chargerClass($class){
    require ('./entities/'.$class.'.class.php');
}
spl_autoload_register('chargerClasse');

//limitaion
do{
    $vitesseLim=readline("entrez la limite de vitesse!: ");
}while($vitesseLim<70 or $vitesseLim>100);
$radar= new Radar;
$radar->setVitesseMin($vitesseLim);

//nombre de voitures
do{
    $nbVoit=readline("entrez le nombre de voitures participantes: ");
}while($nbVoit<2);

?>