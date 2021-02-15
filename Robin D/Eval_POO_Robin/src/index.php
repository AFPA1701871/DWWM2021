<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    // on propose le choix du mode ( avec ou sans traces) --> ce choix de mode est précisé en argument dans chaque fonction ou méthode où on fait des "echo"
    do {
        $mode=readline("entrez \"1\" pour le mode avec trace et \"2\" pour le mode sans trace : ");
    } while ($mode!="1" and $mode!="2");

    
    // création du joueur
    $heros= new Joueur();

    do {
        // générer un monstre aléatoirement
        $rencontre=rand(1,2);
        switch ($rencontre) {
            case 1:
                $monstre= new MonstreFacile();
                break;
            case 2:
                $monstre= new MonstreDifficile();
                break;
        }

        // attaque du monstre par le heros
        $heros->attaque($monstre,$mode);

        if ($monstre->get_enVie()==true) {
            // attaque du heros par le monstre
            $monstre->attaque($heros,$mode);
        }

        if ($heros->estVivant()==true and $mode==1) {
            echo "************************************  Monstre Suivant\n";
        }

    } while ($heros->estVivant()==true); // tant que le heros est en vie on boucle

    echo "Dommage, vous êtes mort...\n";
    echo "Cela dit, vous avez tué ".$heros->get_nbFacileKilled()." monstres faciles et ".$heros->get_nbDifficileKilled()." monstres difficiles\n";
    echo " Vous avez ".$heros->get_score()." points\n";
    
?>