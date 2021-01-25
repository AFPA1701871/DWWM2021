<?php

define("NOMBRE_LIGNE",7);
define("NOMBRE_COLONNE",6);

//Initialiser le jeu
$tabPuissance4 = f_initialiserJeux();

//Afficher le jeux
f_afficherJeux($tabPuissance4);
$boolMonTour=false;
do{
    $boolMonTour= !$boolMonTour;
    if($boolMonTour){
        do{
            $intColonne =f_saisir("colonne");
        }while(!f_testOK($tabPuissance4,$intColonne));
        
        //Ajouter pion
        $tabPuissance4 = f_ajouterPion($tabPuissance4,$intColonne,"x");
    }else{
        do{
            $intColonne =rand(0,(NOMBRE_COLONNE-1)) ;
        }while(!f_testOK($tabPuissance4,$intColonne)); 
        
        //Ajouter pion
        $tabPuissance4 = f_ajouterPion($tabPuissance4,$intColonne,"o"); 
    }
    
    //Affiche le Jeu
    f_afficherJeux($tabPuissance4);
    $boolPlein=f_testTableauPlein($tabPuissance4);
    //test si plus aucun b dans tableau
    $boolFin=f_testFin($tabPuissance4);
}while($boolFin==false && $boolPlein==false);

if($boolFin==true){
    if($boolMonTour){
        echo "Tu as gagné !";
    }else{
        echo "Tu as perdu !";
    }
}else{
    echo "Match nul !";
}

function f_testFin(array $tab){
    
    //Test Ligne
        $bool=false;
        for ($i=0; $i <(NOMBRE_LIGNE) ; $i++){ 
            for ($j=0; $j <(NOMBRE_COLONNE-3) ; $j++){ 
                if(($tab[$i][$j]==$tab[$i][$j+1]) && ($tab[$i][$j+1]==$tab[$i][$j+2]) && ($tab[$i][$j+2]==$tab[$i][$j+3])){
                    if($tab[$i][$j]=="x" OR $tab[$i][$j]=="o" ){
                        $bool=true;
                    }
                } 
            }
        }

    //Test Colonne
        for ($i=0; $i <(NOMBRE_LIGNE) ; $i++){ 
            for ($j=0; $j <(NOMBRE_COLONNE) ; $j++){ 
                if($tab[$i][$j]==$tab[$i+1][$j] && 
                        ($tab[$i+1][$j]==$tab[$i+2][$j]) &&
                        ($tab[$i+2][$j]==$tab[$i+3][$j])){
                    if($tab[$i][$j]=="x" OR $tab[$i][$j]=="o" ){
                        $bool=true;
                    }
                }   
            }
        }
        
        //Test Diagonal supGauche->infDroite
        for ($i=0; $i <(NOMBRE_LIGNE) ; $i++){ 
            for ($j=0; $j<(NOMBRE_COLONNE) ; $j++){
                if(($tab[$i][$j]==$tab[$i+1][$j+1]) && ($tab[$i+1][$j+1]==$tab[$i+2][$j+2]) && ($tab[$i+2][$j+2]==$tab[$i+3][$j+3])){
                    if($tab[$i][$j]=="x" OR $tab[$i][$j]=="o" ){
                        $bool=true;
                    }
                }   
            }
        }

        //Test Diagonal supDroit->infGauche
        for ($i=(NOMBRE_LIGNE-1); $i<=3 ; $i++){ 
            for ($j=0; $j <=(NOMBRE_COLONNE-4) ; $j++){ 
                if(($tab[$i][$j]==$tab[$i+1][$j+1]) && ($tab[$i+1][$j+1]==$tab[$i+2][$j+2]) && ($tab[$i+2][$j+2]==$tab[$i+3][$j+3])){
                    if($tab[$i][$j]=="x" OR $tab[$i][$j]=="o" ){
                        echo"supdroit->infgauche";
                        $bool=true;
                    }
                }   
            }
        }
    return $bool;  
}

function f_testTableauPlein(array $tab){
    $bool=true;
    foreach($tab as $l){
        foreach ($l as $val) {
            if($val=="_"){
                $bool=false;
            }
        }
    }
    return $bool;
}
function f_testOK(array $tab,int $intC){
    //verifie que la colonne n'est pas pleine
    $bool=false;
    for ($i=0; $i < NOMBRE_LIGNE ; $i++) { 
        if($tab[$i][$intC]=="_"){
            $bool=true;
            break;
        }    
    }
    return $bool;    
}

function f_ajouterPion(array &$tab, int $c,string $car){
    //Place le pion
    for ($i=0; $i <NOMBRE_LIGNE-1; $i++) {
        if($tab[$i][$c]=="_"){
            $tab[$i][$c] = $car;
            break;
        }
    }    
    return $tab;  
}

function f_saisir(){
    do {
        $intSaisie=readline("Saisir un n° de colonne : ");
    }while($intSaisie < 0 && $intSaisie>(NOMBRE_COLONNE-1)); 
    return $intSaisie;
}

function f_initialiserJeux(){
    for ($i=0; $i < (NOMBRE_LIGNE) ; $i++) { 
        for ($j=0; $j < (NOMBRE_COLONNE) ; $j++) { 
            $tab[$i][$j] = "_";
        }
    }
    return $tab;   
}

function f_afficherJeux(array $tab){
    echo "Puissance 4 : "."\n";
    
    //Affiche les N° Colonne
    for ($i=0; $i < NOMBRE_COLONNE; $i++){ 
        echo $i." ";
    }
    echo "\n";
    $tab2 = array_reverse($tab);
    for ($i=0;$i<(NOMBRE_LIGNE); $i++){ 
        for ($j=0; $j <(NOMBRE_COLONNE); $j++) { 
            echo $tab2[$i][$j]. " ";
        }
        echo "\n";
    }
}

?>