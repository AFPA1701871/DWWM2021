
<?php

do {
    $intLignePion = readline("Quelle ligne ton pion : ");
}while( $intLignePion <0 OR $intLignePion > 10);


do {
    $intColonnePion = readline("Quelle colonne ton pion : ");
}while( $intColonnePion <0 OR $intColonnePion > 10);

//Afficher le damier
        for( $intLigne = 0;$intLigne<10;$intLigne++){
            for( $intColonne = 0;$intColonne<10;$intColonne++){
                if( $intLigne == $intLignePion && $intColonne == $intColonnePion){
                    $monTab[$intLigne][$intColonne] = "x";
                }else{
                    $monTab[$intLigne][$intColonne] = "O";
                }
            }

        }
        
        //affiche damier
        foreach($monTab as $ligne){
            foreach($ligne as $colonne){ 
                echo $colonne;
            }
            echo "\n";
        }

do {

    $boolQuitter = false;

    //Demander le deplacement
    echo "Saisir 0 pour en haut a gauche, 1 pour en haut a droite, ";
    $intDeplacement = readline("Saisir 2 pouren bas a gauche, Saisir 3 pour en bas a droite");

    //Test if( OK
    $intNColonnePion = 0;
    $intNLignePion = 0;
    if($intDeplacement == 0){ //haut a gauche
        $intLignePion --;
        $intColonnePion --;
    }elseif($intDeplacement == 1){//haut a droite
        $intLignePion --;
        $intColonnePion ++;
    }elseif( $intDeplacement == 2){//bas a gauche
        $intLignePion++;
        $intColonnePion--;
    }elseif( $intDeplacement == 3){//bas droite
        $intLignePion--;
        $intColonnePion ++;
    }

    if($intColonnePion <0 OR $intColonnePion > 9 OR $intLignePion < 0 OR $intLignePion > 9){
        echo "t'es sorti !!";
        $boolQuitter=true;
    }

    if($boolQuitter==false){
        //Afficher le damier
        for( $intLigne = 0;$intLigne<10;$intLigne++){
            for( $intColonne = 0;$intColonne<10;$intColonne++){
                if( $intLigne == $intLignePion && $intColonne == $intColonnePion){
                    $monTab[$intLigne][$intColonne] = "x";
                }else{
                    $monTab[$intLigne][$intColonne] = "O";
                }
            }
        }

        //affiche damier
        foreach($monTab as $ligne){
            foreach($ligne as $colonne){ 
                echo $colonne;
            }
            echo "\n";
        }
    }
}while($boolQuitter ==false);
var_dump($monTab);
?>