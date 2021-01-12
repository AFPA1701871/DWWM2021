<?php
    //Crée le damier puis l'affiche.
    for ($i=0; $i < 10 ; $i++) { 
        $damier[$i] = array("O","O","O","O","O","O","O","O","O","O");
    }
    afficherDamier($damier);

    //Demande a l'utilisateur la position de son pion en ayant deux valeur d'entrer la ligne puis la colone.
    do{
        $ligne=readline("Sur quelle ligne ce trouve votre pion? : ");
    }while($ligne<0 or $ligne>9);
    do {
        $colone=readline("Dans quelle colone ce trouve votre pion? : ");
    }while ($colone<0 or $colone>9);
    $damier[$ligne][$colone]="X";
    afficherDamier($damier);

    $boolean = true;
    do{
        //Demande le move de l'utilisateur.
        do {
            $move=readline("Quelle mouvement voulez vous faire ? 0 = haut à gauche, 1 = haut à droite, 2 = bas à gauche, 3 = bas à droite : ");
        } while ($move <0 or $move >3);
        //Initialise la case choisie a "O" puis cherche la nouvelle position puis affiche le damier.
        $damier[$ligne][$colone]="O";
        if ($move == 0) {
            $ligne = $ligne-1;
            $colone = $colone-1;
        }
        elseif ($move == 1) {
            $ligne = $ligne-1;
            $colone = $colone+1;
        }
        elseif ($move == 2) {
            $ligne = $ligne+1;
            $colone = $colone-1;
        }
        elseif ($move == 3) {
            $ligne = $ligne+1;
            $colone = $colone+1;
        }

        //Vérifie que le pion n'est pas sortie du damier.
        if ($ligne<0 or $ligne>9){
            $boolean = false;
            $damier[$ligne][$colone]=" ";
            afficherDamier($damier);
            echo"Votre pion est sortie du damier. *Fin de la partie*";
        }
        elseif ($colone<0 or $colone>9) {
            $boolean = false;
            $damier[$ligne][$colone]=" ";
            afficherDamier($damier);
            echo"Votre pion est sortie du damier. *Fin de la partie*";
        }
        //Si le pion reste dans le damier alors on refait une boucle pour qu'il continue de jouer.
        else{
            $damier[$ligne][$colone]="X";
            afficherDamier($damier);
        }
    }while($boolean == true);
    
      
    
    
    
    //Fonction pour afficher le tableau.
    function afficherDamier(array $tab){
    foreach ($tab as $l) {
        foreach ($l as $c){
            echo $c." ";
        }
        echo "\n";
    }
    }
?>