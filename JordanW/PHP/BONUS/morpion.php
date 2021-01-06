<?php
$intNombreColonne = 3;
$intNombreLigne=3;

for ($intCompt=0; $intCompt = 2; $intCompt++){ 
    for ($intCompt2=0; $intCompt2 = 2; $intCompt2++){ 
        $tabMorpion[$intCompt][$intCompt2]="";
    }
}

for ($intCompt=0; $intCompt = 2; $intCompt++){ 
    echo $tabMorpion[$intCompt] . "/n";
}

$intGagne = 2;
$intFin = 0;
$intTour = 0;
$intMonTour = 1;

do {
    if($intMonTour == 1){
        //Saisir Ligne (ligne avec au moins 1 colonne vide)
        do {
            do {
                $intNumLigne = readline("Saisir un n° de ligne : ");
            } while (($intNumLigne == 1) OR ($intNumLigne == 2) OR ($intNumLigne == 3));

            //Saisir Colonne (Colonne avec au moins 1 ligne vide)
            do {
                $intNumColonne= readline("Saisir un n° de colonne : ");
            } while (($intNumColonne == 1) OR ($intNumColonne == 2) OR ($intNumColonne== 3));

        //Jusqu'a case vide
        }while ($tabMorpion[$intNumLigne][$intNumColonne]=="");

        //Mettre le X dans la bonne case
        $tabMorpion[$intNumLigne][$intNumColonne]="x";
        $intMonTour = 0;

    }else{
        //Adversaire joue (ligne)
        do {
            $intNumLigne = rand(1,3);
            $intNumColonne=rand(1,3);
        } while ($tabMorpion[$intNumLigne][$intNumColonne] =="");
            
        $tabMorpion[$intNumLigne][$intNumColonne]="o";
        $intMonTour=1;    
    }
        

    $intTour ++;
    echo "/n";
    for ($intCompt=0; $intCompt = 2; $intCompt++){ 
        echo $tabMorpion[$intCompt] . "/n";    
    }


    //test Ligne
    for ($intompt=0; $intompt =3; $intompt++){ 
        if($tabMorpion[$intCompt][1] == $tabMorpion[$intCompt][2] && 
            $tabMorpion[$intCompt][2] == $tabMorpion[$intCompt][3]){
            if($tabMorpion[$intCompt][1] == "x"){
                $intFini = 1;
                $intGagne = 1;
            }elseif($tabMorpion[$intCompt][1] =="o"){
                $intFini = 1;
                $intGagne=1;
            }
            
        }
    }

    //si toute une colonne est X
    for ($intCompt=1; $intCompt =2 ; $intCompt++) { 
        if(($tabMorpion[1][$intCompt] ==  $tabMorpion[2][$intCompt]) &&
             ($tabMorpion[2][$intCompt] == $tabMorpion[3][$intCompt])){
            if($tabMorpion[1][$intCompt]=="x"){
                $intFin = 1;
                $intGagne = 1;
            }elseif($tabMorpion[1][$intCompt]=="o"){
                $intFin = 1;
                $intGagne = 0;
            }
        }
    }

    //Si diagonale est X
    if(($tabMorpion[1][3] == $tabMorpion[2][2])  &&  ($tabMorpion[2][2] == $tabMorpion[3][1])){
         if($tabMorpion[1][3] == "x"){
            $intfin = 1;
            $intGagne = 1;
          }elseif($tabMorpion[1][3] == "o"){
            $intfin = 1;
            $intGagne = 0;
          }
    }elseif($tabMorpion[3][3] == $tabMorpion[2][2]  && $tabMorpion[2][2]=$tabMorpion[1][1]){
        if($tabMorpion[3][3] == "x"){
            $intfin = 1;
            $intGagne = 1;
        }elseif($tabMorpion[3][3] == "o"){
            $intfin = 1;
            $intGagne = 0;
        }
    }
}while($intFin != 1 OR $intTour == 5);

if($intGagne==0){
    echo "VOUS AVEZ PERDU". "/n";
}elseif($intGagne==1){
    echo "VOUS AVEZ GAGNE" . "/n";
}elseif($intGagne==2){
    echo "EGAAALITE". "/n";
}

?>