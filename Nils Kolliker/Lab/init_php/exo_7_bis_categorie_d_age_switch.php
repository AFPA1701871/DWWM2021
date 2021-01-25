<?php
$age=readline("age de l'enfant: ");//on a pas encore les boucles donc pour l'instant, on doit faire confiance à l'utilisateur
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
        default ://en théorie un joueur de 35 ans est toujours un cadet d'après l'énoncé
            $categorie="cadet";
    }
}else{
    $categorie="trop jeune";
}  
echo $categorie;
?>