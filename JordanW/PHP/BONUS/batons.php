<?php
/*
    do{
        $strPseudo = readline("Saisir votre pseudo : ");
    } while ($strPseudo == "");

    do{
        $intToss = readline("Le toss sera effectué, saisir 0 pour face, 1 pour pile : ");
    }while ($intToss !=1 && $intToss != 0);

    if($intTOss == rand(1,2)){
        echo "Tu commence";
        $intMonTour = 1;
    }else{
        echo "C'est l'adversaire qui commence";
        $intMonTour = 0;
    }
  */  
    $intTriche = 3;
    do {
        $intTriche = readline("Veux tu avoir le mode triche ? 0 pour NON, 1 pour OUI : ");
    }while (($intTriche != 1) && ($intTriche != 0));

    $intNombreBaton = 17;
    $strMessageBaton = "";
    $boolMonTour==true;
    while($intNombreBaton > 1){

        //Afficher les bâtons
        $strMessageBaton = "";
        for ($intCompt=1; $intCompt <= $intNombreBaton; $intCompt++) { 
            $strMessageBaton = $strMessageBaton . "| ";
        }
        //Afficher les batons
        echo $strMessageBaton;

        if ($boolMonTour == true){
            //Mon tour
            $boolMonTour = false;
            //Si le reste des bâtons est inferieur a ce que j'ai le droit de prendre
            if ($intTriche == 1){
                if (intval((($intNombreBaton-1)%4)) == 0){
                    echo "Triche ! Prendre 1 bâton";
                }else{
                    echo "Triche ! Prendre ". intval((($intNombreBaton-1)%4)) ."bâton(s)";
                }
            }
            $intBatonMoi = readline("Saisir un nombre de bâton(s) a retirer :");
            while (($intBatonMoi <1 OR $intBatonMoi >3) OR ($intBatonMoi >= $intNombreBaton)){
                echo "Saisie incorrecte";
                $intBatonMoi = readline("Saisir un nombre de bâton(s) a retirer :");
            }
            $intNombreBaton = ($intNombreBaton - $intBatonMoi);

        }else{
            //Tour de l'adversaire
            $boolMonTour = true;

            if($intNombreBaton == 4){
                $intBatonLui = 3;
            }elseif($intNombreBaton == 3){
                $intBatonLui =2;
            }elseif($intNombreBaton == 2 OR $intNombreBaton == 6){
                $intBatonLui = 1;
            }else{
                $intBatonLui = rand(1,3);
            }
            echo "L'adversaire a choisi : ". $intBatonLui . "baton(s)";
            $intNombreBaton = ($intNombreBaton - $intBatonlui);
        }
    }

    //Afficher les bâtons
    $strMessageBaton = "";
    for ($intCompt=1; $intCompt <=$intNombreBaton ; $intCompt++) { 
        $strMessageBaton = $strMessageBaton + "| ";
    }
    echo $strMessageBaton;

    if($boolMonTour == true){
            echo "Tu as gagné ";
    }else{
            echo "Tu as perdu ";
    } 

    echo "FIN";
?>