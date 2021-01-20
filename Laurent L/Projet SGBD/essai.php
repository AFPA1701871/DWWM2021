<?php
// $fp = fopen('config.ini', 'r');
// if (!$fp) {
//     echo 'Impossible d\'ouvrir le fichier somefile.txt';
// }
// while (false !== ($char = fget($fp))) {
//     echo "$char\n";
// }

// "CREATE TABLE monTest(nom,prenom,ville,departement,pays)";
// "SELECT * FROM bonTest";
// "INSERT INTO monTest VALUES(nom,prenom,taille)";

$commande = "CREATE TABLE monTest(nom,prenom,ville,departement,pays)";
$tabCommande = explode(" ",$commande);
// echo $commande;
// foreach($tabCommande as $element){
//     echo "\n".$element;
// }

if ($tabCommande[0]=="CREATE"){
    $instruction =$tabCommande[0].$tabCommande[1];
    $fichier = $tabCommande[2];
    if ((strpos($fichier,"(") && strpos($fichier,")") && strpos($fichier,","))){
        $tabFichier = explode("(",$fichier);
        $nomFichier = $tabFichier[0];
        $enteteFichier = $tabFichier[1];
        $enteteFichier = str_replace(",",";",$enteteFichier);
        $enteteFichier = str_replace(")",";",$enteteFichier);
    } else{
        echo "Il y une erreur de syntaxe.";
    }
    
} else if($tabCommande[0]=="INSERT"){
    $instruction = $tabCommande[0].$tabCommande[1].$tabCommande[3];
    $fichier = $tabCommande[2].$tabCommande[4];
    if ((strpos($fichier,"(") && strpos($fichier,")") && strpos($fichier,",") && strpos($fichier,"'"))){
        $tabFichier = explode("(",$fichier);
        $nomFichier = $tabFichier[0];
        $enteteFichier = $tabFichier[1];
        $enteteFichier = str_replace(",",";",$enteteFichier);
        $enteteFichier = str_replace(")",";",$enteteFichier);
    } else{
        echo "Il y une erreur de syntaxe.";
    }
} else if($tabCommande[0]=="SELECT"){
    print_r($tabCommande);
    $instruction = $tabCommande[0].$tabCommande[1].$tabCommande[2];
    $nomFichier = $tabCommande[3];
} else{
    echo "Il y a une erreur dans la syntaxe";
}

echo $fichier;
echo "\n".$instruction;
echo "\n".$nomFichier;
echo "\n".$enteteFichier;








?>