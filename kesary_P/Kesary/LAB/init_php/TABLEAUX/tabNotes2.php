<?php
//Tableau de notes des élévès de la classe AFPA

//Déclaration tableau
//$tab=[["Franck",14],["Kesary",16],["Jimmy",15]];
$tab = array(
        "Franck" => 14,
        "Kesary" => 16,
        "Jimmy" => 15
   
    );
print_r($tab);

//Ajout d'un élève
$tab["Houssame"]=15;
print_r($tab);

//Supprimer une ligne
unset($tab["Franck"]);
print_r($tab);

//Valeur max et min
echo "La valeur max est : ". max($tab). "\n";
echo "La valeur min est : ". min($tab); "\n";

//tri par ordre alphabétique et affichage 
echo "\nTri et affichage \n";
ksort($tab);
print_r($tab);

//Tri par note
arsort($tab);
print_r($tab);

//Moyenne de la classe
$moyenne = array_sum($tab) / count($tab);

//J'arrondi à 2 chiffres après la virgule
$moyenne = round($moyenne,2);
echo "La moyenne de la classe est : ". $moyenne;

?>
