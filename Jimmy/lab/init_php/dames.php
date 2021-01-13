<?php

do {
    $LignePion = readline("Quelle est la ligne: ");
}while( $LignePion <0 OR $LignePion > 8);


do {
    $colonnePion = readline("Quelle est la colone : ");
}while( $colonnePion <0 OR $colonnePion > 8);

        for( $Ligne = 0;$Ligne<8;$Ligne++){
            for( $Colonne = 0;$Colonne<8;$Colonne++){
                if( $Ligne == $LignePion && $Colonne == $colonnePion){
                    $tab[$Ligne][$Colonne] = " x";
                }else{
                    $tab[$Ligne][$Colonne] = " O";
                }
            }

        }
        
        
        foreach($tab as $ligne){
            foreach($ligne as $colonne){ 
                echo $colonne;
            }
            echo "\n";
        }

do {

    $boolean = false;

    $Deplacement = readline("Entrer 0 pour aller en haut a gauche,Entrer 1 pour aller en haut a droite, Entrer 2 pour aller en bas a gauche, Entrer 3 pour en bas a droite");

    
    $NColonnePion = 0;
    $NLignePion = 0;
    if($Deplacement == 0){ //en haut a gauche
        $LignePion --;
        $ColonnePion --;
    }elseif($Deplacement == 1){//en haut a droite
        $LignePion --;
        $ColonnePion ++;
    }elseif( $Deplacement == 2){//en bas a gauche
        $LignePion++;
        $ColonnePion--;
    }elseif( $Deplacement == 3){//en bas droite
        $LignePion--;
        $ColonnePion ++;
    }

    if($ColonnePion <0 OR $ColonnePion > 9 OR $LignePion < 0 OR $LignePion > 9){
        echo "Sorti du plateau";
        $boolean=true;
    }

    if($boolean==false){
        for( $Ligne = 0;$Ligne<8;$Ligne++){
            for( $Colonne = 0;$Colonne<8;$Colonne++){
                if( $Ligne == $LignePion && $Colonne == $ColonnePion){
                    $tab[$Ligne][$Colonne] = " x";
                }else{
                    $tab[$Ligne][$Colonne] = " O";
                }
            }
        }
        foreach($tab as $ligne){
            foreach($ligne as $colonne){ 
                echo $colonne;
            }
            echo "\n";
        }
    }
}while($boolean ==false);
var_dump($tab);
?>