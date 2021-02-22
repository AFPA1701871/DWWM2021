<?php
    do{
        $intSexe = readline("Saisir le sexe (0 homme : 1 femme) : ");
    }while($intSexe !=0 && $intSexe !=1);

    do{
        $intAge = readline("Saisir l'age : ");
    }while(is_numeric($intAge) ==false);

    $boolImpot=false;
    switch($intSexe){
        case 1 :
            if ($intAge>=18 && $intAge<=35){
                $boolImpot = true;   
            }
        case 0 :
            if ($intAge>=20){
                $boolImpot = true;   
            }   
            break;
        default:
            $boolImpot=false;
            break;
    }
    echo tuPaieOuPas($boolImpot);

function tuPaieOuPas(bool $boolImpot){
    if ($boolImpot==false){
        return "tu paie nada"."\n";
    }else{
        return "tu paie $$$$$$"."\n";
    }
}
?>