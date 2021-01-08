<?php
$age = readline("Entrez l'âge de votre enfant  : ");

switch ($age) {
    case 6 :
        echo "Catégorie Poussin";
        break;
    case 7:
        echo "Catégorie Poussin";
        break;
    case 8:
        echo "Catégorie Pupille";
        break;
    case 9:
        echo "Catégorie Pupille";
        break;
    case 10:
        echo "Catégorie Minime";
        break;
    case 11:
        echo "Catégorie Minime";
        break;
    case 12:
        echo "Catégorie Cadet";
        break;
    default:
        echo " Ne fait partie d'aucune catégorie ";
        break;
}
?>