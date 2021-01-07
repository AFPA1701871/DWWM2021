<?php

    //initialise tableau
    $tabMorpion=[];

    $tabMorpion = initTab($tabMorpion);
    afficherTab($tabMorpion);

    $intGagne = 2;
    $intFin = 2;
    $intTour = 0;
    $boolMonTour = false;
    $boolTabPlein =false;

    do {
        //Inverse le tour
        $boolMonTour = !$boolMonTour;

        tour($boolMonTour,$tabMorpion);
        echo "\n";
        afficherTab($tabMorpion);
        echo "\n";

        //Après le tour, on test si gagné/perdu
        $intFin = testDiagonale($tab,$intFin,$intGagne);
        $intFin = testColonne($tab,$intFin,$intGagne);
        $intFin = testLigne($tab,$intFin,$intGagne);
        
        $boolTabPlein= testFini($tab);

    }while($intFin !=0 OR $boolTabPlein=true);
    
    //Test qui gagne
    echo testGagne($intGagne);

function testFini(&$tab)
{
    $bVide = false;
    for ($intC1=0; $intC1 <=2 ; $intC1++) {
        for ($intC2=0; $intC2 <=2 ; $intC2++) {
            if($tab[$intC1][$intC2]== ""){
                $bVide=true;
            }
        }
    }
    return $bVide;
}
function testGagne($gagne)
{
    if($Gagne==20){
        echo "VOUS AVEZ PERDU". "\n";
    }elseif($Gagne==10){
        echo "VOUS AVEZ GAGNE" . "\n";
    }elseif($Gagne==0){
        echo "EGAAALITE". "\n";
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
function testDiagonale($tab,&$fin,&$gagne)
{
    $resultat = 0;
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
    $resultat = 0;
    for ($intCompt=0; $intCompt <=2 ; $intCompt++) { 
        if(($tab[0][$intCompt] ==  $tab[1][$intCompt]) &&
             ($tab[1][$intCompt] == $tab[2][$intCompt])){
            if($tab[0][$intCompt]=="x"){
                $resultat = 10;
            }elseif($tab[0][$intCompt]=="o"){
                $resultat = 20;
            }
        }
    }   
    return $resultat;
}
function testLigne($tab)
{
    $resultat = 0;
    for ($intCompt=0; $intCompt <=2 ; $intCompt++) { 
            echo "case ".$intCompt."0 = ".$tab[$intCompt][0]."\n";
            echo "case ".$intCompt."1 = ".$tab[$intCompt][1]."\n"; 
            echo "case ".$intCompt."2 = ".$tab[$intCompt][2]."\n";
        if(($tab[$intCompt][0] ==  $tab[$intCompt][1]) && 
            ($tab[$intCompt][1] == $tab[$intCompt][2])){
            
            if($tab[$intCompt][0]=="x"){
                $resultat = 10;
            }elseif($tab[$intCompt][0]=="o"){
                $resultat = 20;
            }
        }
    }
   echo $resultat;
    return $resultat;
}
?>