<?php
$sexe = readline("êtes-vous un homme ou une femme ? f ou m :  : ");
$age = readline("Quel est votre age : ");
if ($sexe == "f" || $sexe=="m") {
    switch (($age>=18 && $age<=35)|| ($age > 20) ){
        case $age:
            echo "Vous payez des impots";
            break;
        default:
            echo "Vous ne payez pas des impots";
            break;
    }
}
?>