<?php
    require "./Services/function.php";
    function loadClass($maClasse){
        require ("./Entities/$maClasse.php");
    }
    spl_autoload_register('loadClass');
    //permet de savoir si on active le mode trace
   do
        $withTrace= readLine("avec ou sans trace (1-avec 2-sans)");
    while($withTrace!=1 && $withTrace!=2);

    $monJoueur= new Joueur();
    //deroulé du jeu
    do{
        $monstre=createMonster($withTrace);
        do{
            $monJoueur->attaque( $monstre,$withTrace);
            if($monstre->getEstVivant()){
                $monstre->attaque($monJoueur,$withTrace);
            }
        }while($monstre->getEstVivant()&&$monJoueur->estVivant());
    }while($monJoueur->estVivant());
    finDePartie($monJoueur);


?>