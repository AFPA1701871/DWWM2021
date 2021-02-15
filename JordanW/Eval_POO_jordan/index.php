<?php

    function chargementClass($classe){
        require('./class/'. $classe .'.class.php');
    }
    spl_autoload_register('chargementClass');

    $monHero = new joueur("MonHeros");
    
    // Choix avec/sans trace
    do{
        $choix = readline("Mode avec ou sans trace ? (saisir 'avec' OU 'sans') : ");
        $choix = strtolower($choix);
    }while($choix !="avec" && $choix !="sans");
    echo "\n";
    if($choix=="avec"){$boolTrace = true;}else{$boolTrace=false;} // Trace ou non

    do{
        $objDe = new De();
        if(($objDe->lanceLeDe()%2)==1){ // impaire = Monstre Facile (1/2chance)
            $objMonstre=new MonstreFacile();
        }else{
            $objMonstre=new MonstreDifficile();
        }
        $boolMonTour=true;
        do{ 

            if($boolMonTour){ // C'est au tour du joueur
                $monHero->attaque($objMonstre,$boolTrace);
            }else{             // C'est au tour du Monstre
                $objMonstre->attaque($monHero,$boolTrace);
            }
            $boolMonTour=!$boolMonTour; // Inverse le Tour

        }while($monHero->estVivant() && $objMonstre->get_enVie());// tant que Joueur && Monstre en vie

        if($monHero->estVivant()){
            $monHero->gagne($objMonstre,$boolTrace); // ajoute le score & modifie les variables monstreFacile/Difficile
        }
    }while($monHero->estVivant());// tant que joueur en vie

    $monHero->afficheScore();
?>