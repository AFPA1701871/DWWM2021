<?php


/* Initialiser adverse
 $tabAdversaire = f_initialiserJeux();

//Dessiner le bateau
f_DessinerBateau($tabAdversaire,rand(0,3),rand(0,3));
//Afficher le jeux Adversaire
echo "Jeux adversaire : "."/n";
f_afficherJeux($tabAdversaire);*/

//Initialiser le jeu
$tabEnnemie = f_initialiserJeux();
//Dessiner le bateau
f_DessinerBateau($tabEnnemie,rand(0,3),rand(0,1));
//Afficher le jeux
f_afficherJeux($tabEnnemie);

//lancer le jeux

$boolFin=false;
//initialiser batailleNavale vide
    $tabBataille = f_initialiserJeux();
do{
    
    $intLigne =f_saisir("ligne") ;
    $intColonne =f_saisir("colonne") ;
    
    //Test si touché
    $tabBataille = f_testTouche($tabBataille,$tabEnnemie,$intLigne,$intColonne);

    //Affiche le Jeu
    f_afficherJeux($tabBataille);
    //test si plus aucun b dans tableau
}while(!f_testToucheCoule($tabBataille,$tabEnnemie));

echo "Touché, coulé !";

function f_testToucheCoule(array $tab,array $tab2){
    //verifie que les b dans ennemie soit des x dans montab
    $bool=true;
    for ($i=0; $i <=3 ; $i++) { 
        for ($j=0; $j <=3 ; $j++) { 
            if($tab2[$i][$j]=="b" && $tab[$i][$j]!="x"){
                $bool=false;
                break;
            }    
        }
    }
    return $bool;    
}

function f_testTouche(array &$tab, array $tab2, int $l,int $c){
    //test si touché dans tab ennemie
    if($tab2[$l][$c]=="_"){
        $tab[$l][$c] = "o";
    }else{
        $tab[$l][$c]="x";
    }    
    return $tab;  
}

function f_saisir(string $strSaisie){
    do{
        $intSaisie=readline("Saisir un n° de ".$strSaisie." : ");
    }while($intSaisie < 0 && $intSaisie>3);
    return $intSaisie;
}

function f_initialiserJeux(){
    for ($i=0; $i <=3 ; $i++) { 
        for ($j=0; $j <=3 ; $j++) { 
            $tab[$i][$j] = "_";
        }
    }
    return $tab;   
}

function f_afficherJeux(array $tab){
    echo "Bataille navale : "."\n";
    foreach ($tab as $l){
        foreach($l as $valeur){
            echo $valeur . " ";
        }
        echo "\n";
    }
}

function f_DessinerBateau(array &$tab,int $intL,int $intC){
    for ($i=0; $i <=2 ; $i++){ 
        $tab[$intL][$i+$intC]="b";
    }
}

?>