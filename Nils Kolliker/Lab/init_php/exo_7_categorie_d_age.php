<?php
$age=readline("age de l'enfant: ");
if ($age<6){
    $categorie="trop jeune";
}else if($age<8){
    $categorie="poussin";
}else if($age<10){
    $categorie="pupille";
}else if($age<12){
    $categorie="minime";
}else {
    $categorie="cadet";
}  
echo $categorie;
?>