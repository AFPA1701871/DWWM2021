<?php
$age=readline("age de l'enfant: ");
if ($age>=6){
    switch($age){
        case 6:
        case 7:
            $categorie="poussin";
        break;
        case 8:
        case 9:
            $categorie="pupille";
        break;
        case 10:
        case 11:
            $categorie="minime";
        break;
        default :
            $categorie="cadet";
    }
}else{
    $categorie="trop jeune";
}  
echo $categorie;
?>