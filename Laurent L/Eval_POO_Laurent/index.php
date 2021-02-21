<?php

    require ("./service/fonctions.php");
    spl_autoload_register('chargerClasse');

    do{
        $choixAffichage = readline("Quel affichage désirez-vous (1- sans trace 2- avec trace?");

    }while ( $choixAffichage!=1 && $choixAffichage !=2);


    $de = new De();
    
    $hero = new Joueur(50,$de);

    while ($hero->get_pointVie()>0){
        //choix adversaire
        $tirage = random_int(1,2);
    
        switch($tirage){
            case 1 :
                
                $monstreFacile = new MonstreFacile(true);
                $hero->attaque($monstreFacile,1);
                if($monstreFacile->get_enVie() == true){
                    $monstreFacile->attaque($joueur);
                }     
                

                break;
            case 2 :
                $monstreDifficile = new MonstreDifficile(true);
                $hero->attaque($monstreDifficile,1);
                if($monstreDifficile->get_enVie() == true){
                    $monstreDifficile->attaque($joueur);
                }

                
                break;
            
            default : 
                echo "Cela ne doit pas etre le cas";

        }
    }
        


    
    




?>