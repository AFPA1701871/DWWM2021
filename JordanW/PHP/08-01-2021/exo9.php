<?php
    $tabVal1=[1,2,6,7,8,10];
    $tabVal2=[1,3,5,9];

    $intTab1 = 0;
    $intTab2 = 0;
    $intTab3 = 0;
    $boolVal=true;
    while($boolVal == true){
        $boolVal1=false;
        echo $boolVal1;
        while($intTab1 < count($tabVal1) && $boolVal1==false){
            $boolVal1 = true;
        }

        //recherche valeur non ""
        $boolVal2=false;
        while($intTab2 < count($tabVal2) && $boolVal2==false){
            $boolVal2=true;
        }

        //Si j'ai deux valeurs
        if($boolVal1 == true && $boolVal2 == true){
            //on teste les valeurs recuperees
            if($tabVal1[$intTab1]<= $tabVal2[$intTab2]){
                $tabVal3[$intTab3] = $tabVal1[$intTab1];
                $intTab1 ++;
            }else{
                $tabVal3[$intTab3] = $tabVal2[$intTab2];
                $intTab2++;
            }
        //SI j'en ai qu'une sur deux -> Ajoute celle qu'on a
        }elseif($boolVal1 == true && $boolVal2 ==false){
            $tabVal3[$intTab3] = $tabVal1[$intTab1];
            $intTab1 ++;
        }elseif ($boolVal1 == false && $boolVal2 == true){
            $tabVal3[$intTab3] = $tabVal2[$intTab2];
            $intTab2++;
        }else{
            $boolVal=false;
        }
        $intTab3 ++;
    }
    foreach($tabVal3 as $intValeur){
        echo $intValeur." ";
    }

?>