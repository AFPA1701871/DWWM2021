<?php
    //Pour pouvoir aller chercher mes autres fichiers
    require('./Entities/function.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

    //Fixer la limitation de vitesse
    $radar=new Radar(readline("Veuillez fixer une limitation de vitesse : "));
    //Fixer le nombre de voiture 
    do {
        $nbVoiture=readline("Combien voulez-vous de voitures ? ");
    } while ($nbVoiture<2);
    for($i=1;$i<=$nbVoiture;$i++){
        $marque=readline("Quelle est la marque de la voiture $i ? ");
        $modele=readline("Quelle est le modèle de la voiture $i ? ");
        $immatriculation=readline("Quelle est l'immatriculation de la voiture $i ? ");
        $couleur=readline("Quelle est la couleur de la voiture $i ?");
        ${ "Voiture" . $i }  = new Voiture($marque,$modele,$immatriculation,$couleur);
    }
    //Les faire démarrer avec la fonction démarrer
    for($i=1;$i<=$nbVoiture;$i++){
        ${ "Voiture" . $i }->demarrer($i);
    }
    //Pour les faire accélérer et pour que le radar regarde leur vitesse
    do {
        for($i=1;$i<=$nbVoiture;$i++){
            $random=rand(1,25);
            ${ "Voiture" . $i }->accélérer($random,$i);
            $stockVitesse=${ "Voiture" . $i }->getVitesse();
            $stockRadar=$radar->flash($stockVitesse);
            if($stockRadar>0){
                break;
            }
        } 
        //Pour marquer un temps d'arrêt
        readline(" ");      
    } while ($stockRadar==0);

    $radar->créePv($i,$stockRadar);
    ${ "Voiture" . $i }->toString();


?>