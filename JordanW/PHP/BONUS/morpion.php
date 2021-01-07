
<?php

    //initialise tableau
    $tabMorpion=[];

    $tabMorpion = initTab($tabMorpion);
    afficherTab($tabMorpion);

    $intTour = 0;
    $boolMonTour = false;

    do {
        //Inverse le tour
        $boolMonTour = !$boolMonTour;

        tour($boolMonTour,$tabMorpion);
        echo "\n";
        afficherTab($tabMorpion);
        echo "\n";

        $intTour++;
        echo "tour n°".$intTour."/n";
        /*Les test renvois 0 pour rien
                            10 pour gagné
                            20 pour perdu*/
        $intScoreDiag = testDiagonale($tabMorpion);
        $intScoreCol = testColonne($tabMorpion);
        $intScoreLig = testLigne($tabMorpion);
        echo "diag=".$intScoreDiag;
        echo "col=".$intScoreCol;
        echo "ligne=".$intScoreLig;
    //Personne n'a gagne et tour <9
    }while(($intScoreDiag+$intScoreCol+$intScoreLig == 0) OR ($intTour>=9));
    
    //Test qui gagne
    echo testGagne($intScoreDiag,$intScoreColonne,$intScoreLigne);

function testFini(&$tab)
{
    $bVide = true;
    for ($intC1=0; $intC1 <3 ; $intC1++) {
        for ($intC2=0; $intC2 <3 ; $intC2++) {
            if($tab[$intC1][$intC2]== "_"){
                $bVide=false;
            }
        }
    }
    return $bVide;
}
function testGagne($intscoreD,$intScoreC,$intScoreL){
    if($intscoreD==0 && $intScoreC==0 && $intScoreL==0){
        echo "EGALITE";    
    }elseif ($intscoreD==10 OR $intScoreC==10 OR $intscoreL==10){
        echo "Vous avez gagne !";
    }elseif($intscoreD==20 OR $intScoreC==20 OR $intscoreL==20){
        echo "Vous avez perdu !";   
    }
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
        }while ($tab[$intNumLigne][$intNumColonne]!="_");
        //Mettre le X dans la bonne case
        remplirTab($tab,$intNumLigne,$intNumColonne,"x");     
    } else {
    // C'est lui
        do {
            $intNumLigne = random_int(0,2);
            $intNumColonne=random_int(0,2);
        } while ($tab[$intNumLigne][$intNumColonne] != "_");
        //Mettre le O dans la bonne case    
        remplirTab($tab,$intNumLigne,$intNumColonne,"o"); 
    }
}
function initTab(&$tab)
{
    $tab[0]=["_","_","_"];
    $tab[1]=["_","_","_"];
    $tab[2]=["_","_","_"];
    return $tab;
}
function remplirTab(&$tab,$ligne,$colonne,$car)
{
    $tab[$ligne][$colonne] = $car;
    echo "ligne ". $ligne . " colone ". $colonne . " car " . $car."\n";
    return $tab;
}
function afficherTab(&$tab)
{
    foreach ($tab as $i => $n){
        foreach($n as $ni => $nn){
            echo $nn . " ";
        }
        echo "\n";
    }
}
function testDiagonale(&$tab)
{
    $resultat = 0;
    if(($tab[0][2] == $tab[1][1])  &&  ($tab[1][1] == $tab[2][0])){
        if($tab[0][2] == "x"){
            echo "diag1";
           $resultat = 10;
         }elseif($tab[0][2] == "o"){
            echo "diag1";
           $resultat = 20;
         }
   }elseif(($tab[2][2] == $tab[1][1])  && ($tab[1][1]=$tab[0][0])){
       if($tab[2][2] == "x"){
            echo "diag 2",
            $resultat = 10;
       }elseif($tab[2][2] == "o"){
            $resultat = 20;
            echo "diag2";
       }
   } 

    return $resultat;
}
function testColonne(&$tab)
{
    $resultat = 0;
    for ($intCompt=0; $intCompt <3 ; $intCompt++) { 
        if(($tab[0][$intCompt] ==  $tab[1][$intCompt]) && ($tab[1][$intCompt] == $tab[2][$intCompt])){
            if($tab[0][$intCompt]=="x"){
                $resultat = 10;
            }elseif($tab[0][$intCompt]=="o"){
                $resultat = 20;
            }
        }
    }   
    return $resultat;
}
function testLigne(&$tab)
{
    $resultat = 0;
    for ($intCompt=0; $intCompt <3 ; $intCompt++) { 
        if(($tab[$intCompt][0] ==  $tab[$intCompt][1]) && ($tab[$intCompt][1] == $tab[$intCompt][2])){
            if($tab[$intCompt][0]=="x"){
                $resultat = 10;
            }elseif($tab[$intCompt][0]=="o"){
                $resultat = 20;
            }
        }
    }
    return $resultat;
}
?>