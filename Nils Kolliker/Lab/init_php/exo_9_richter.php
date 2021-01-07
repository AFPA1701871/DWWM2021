<?php
$magnitude=readline("magnitude du séisme: ");
switch($magnitude){
    case 1:
        $categorie="micro";
    break;
    case 2:
        $categorie="tres mineur";
    break;
    case 3:
        $categorie="mineur";
    break;
    case 4:
        $categorie="leger";
    break;
    case 5:
        $categorie="modéré";
    break;
    case 6:
        $categorie="fort";
    break;
    case 7:
        $categorie="majeur";
    break;
    case 8:
        $categorie="important";
    break;
    case 9:
        $categorie="devastateur";
    break;
    default :
        ($magnitude>9)?$categorie="apocaliptique (vous etes sûr de pas avoir fait une erreur de saisie ?)":$categorie="inexistant  (vous etes sûr de pas avoir fait une erreur de saisie ?)";
    }
echo "Le séisme est ".$categorie;
?>