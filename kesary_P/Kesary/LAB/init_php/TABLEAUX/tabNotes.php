<?php
//Initialisation des variables somme et moyenne
$somme = 0;
$moyenne = 0;

//Je remplie le tableau en demandant à l'utilisateur d'entrer les notes
for ($i=0; $i < 3 ; $i++) { 
    $notes = readline("Entrez les  notes : \n");
    $tabNotes[$i] = $notes;
    $somme = $somme + $notes;
    //echo ($tabNotes[$i] ."\n");
//Tantque les notes sont > 0, il doit continuer à rentrer des notes, si c'est négatif un message lui dit de recommencer
        while ($tabNotes[$i]< 0) {
        $notes= readline("Recommencez : \n");
        $tabNotes[$i]=$notes;
        $somme = $somme + $notes;
        }  
}
//Calcul de la myenne
$moyenne = $somme/$i;

//Affichage du résultat
echo "\n";
echo "Voici la moyenne de la classe :". $moyenne;

?>

