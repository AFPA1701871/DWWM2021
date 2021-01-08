<?php
$age = readline("Entrez l'âge de votre enfant  : ");

if($age>=6 && $age <=7){
    echo "Catégorie Poussin";
}elseif ($age>=8 && $age <=9) {
    echo "Catégorie Pupille";
}elseif ($age>=10 && $age<=11) {
    echo "Catégorie Minime";
}elseif ($age>=12) {
    echo "Catégorie Cadet";
}
?>









