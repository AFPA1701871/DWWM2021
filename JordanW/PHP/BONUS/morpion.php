<?php

    //initialise tableau
    $tabMorpion = initTab($tabMorpion);
    afficherTab($tabMorpion);

    $intGagne = 2;
    $intFin = 0;
    $intTour = 0;
    $intMonTour = 1;

    do {
        //$intMonTour = 1 -> moi
        tour($intMonTour,$tabMorpion);
        afficherTab($tabMorpion);
        if($intMonTour==1){
            $intMonTour--;
        }else{
            $intMonTour++;
        }
        //Après le tour, on test si gagné/perdu
        $intFin = testDiagonale($tab,$fin,$gagne);
        $intFin = testColonne($tab,$fin,$gagne);
        $intFin = testLigne($tab,$fin,$gagne);

    }while($intFin <20 && $intTour < 10);
    
    if($intGagne==20){
        echo "VOUS AVEZ PERDU". "/n";
    }elseif($intGagne==10){
        echo "VOUS AVEZ GAGNE" . "/n";
    }elseif($intGagne==2){
        echo "EGAAALITE". "/n";
    }


function tour($intQui, &$tab)
{
    // C'est a moi
    if ($intQui == 1) {
        do {//Saisir Ligne (ligne avec au moins 1 colonne vide)
            do {
                $intNumLigne = readline("Saisir un n° de ligne : ");
            } while (($intNumLigne === 0) OR ($intNumLigne === 1) OR ($intNumLigne === 2));

            do {//Saisir Colonne (Colonne avec au moins 1 ligne vide)
                $intNumColonne= readline("Saisir un n° de colonne : ");
            } while (($intNumColonne === 0) OR ($intNumColonne === 1) OR ($intNumColonne=== 2));
        //Jusqu'a case vide
        }while ($tab[$intNumLigne][$intNumColonne]!="");
        //Mettre le X dans la bonne case
        remplirTab($tab,$intNumColonne,$intNumLigne,"x");     
    } else {
    // C'est lui
        do {
            $intNumLigne = random_int(0,2);
            $intNumColonne=random_int(0,2);
        } while ($tab[$intNumColonne][$intNumLigne] =="");
        //Mettre le O dans la bonne case    
        remplirTab($tab,$intNumColonne,$intNumLigne,"o"); 
    }

}
function initTab(&$tab)
{
    for ($i = 0; $i <= 2; $i++) {
        $tab[$i] = array();
        for ($i2 = 0; $i2 <= 2; $i2++) {
            remplirTab($tab,$i2,$i1,"");
        }
    }
    return $tab;
}
function remplirTab(&$tab,$colonne,$ligne,$car)
{
    $tab[$colonne][$ligne] = $car;
    return $tab;
}
function afficherTab(&$tab)
{
    for ($i=0; $i <=2 ; $i++){ 
        for ($i2=0; $i2 <= 2; $i2++){ 
            echo $tabMorpion[$i][$i2];
        }
    }
}

function testDiagonale($tab,&$fin,&$gagne)
{
    $resultat = 2;
    if(($tab[0][2] == $tab[1][1])  &&  ($tab[1][1] == $tab[2][0])){
        if($tab[0][2] == "x"){
           $resultat = 10;
         }elseif($tab[0][2] == "o"){
           $resultat = 20;
         }
   }elseif($tab[2][2] == $tab[1][1]  && $tab[1][1]=$tab[0][0]){
       if($tab[2][2] == "x"){
        $resultat = 10;
       }elseif($tab[2][2] == "o"){
        $resultat = 20;
       }
   }   
    return $resultat;
}
function testColonne($tab)
{
    $resultat = 2;
    for ($intCompt=0; $intCompt <=2 ; $intCompt++) { 
        if(($tab[$intCompt][0] ==  $tab[$intCompt][1]) &&
             ($tab[$intCompt][1] == $tab[$intCompt][2])){
            if($tag[$intCompt][0]=="x"){
                $resultat = 10;
            }elseif($tab[$intCompt][0]=="o"){
                $resultat = 20;
            }
        }
    }   
    return $resultat;
}
function testLigne($tab)
{
    $resultat = 2;
    for ($intCompt=0; $intCompt <=2 ; $intCompt++) { 
        if(($tab[0][$intCompt] ==  $tab[1][$intCompt]) &&
             ($tab[1][$intCompt] == $tab[2][$intCompt])){
            if($tag[0][$intCompt]=="x"){
                $resultat = 10;
            }elseif($tab[0][$intCompt]=="o"){
                $resultat = 20;
            }
        }
    }   
    return $resultat;
}




?>