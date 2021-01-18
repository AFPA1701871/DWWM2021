<?php
//Lecture dans fichie;

$saisie = readline("mot de passe  : ");

//Ouverture en lecture seule
$fp = fopen("file.txt","r");
$total = count(file("file.txt"));
echo "\n".$total;
//echo count(file('fichier.txt'));
//Boucle jusqu'à la fin du fichier
//feof permet de vérifier si on arrive à la fin du fichier
while (!feof($fp)) {
    //Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
    $ligne = fgets($fp);
    if ($saisie != $ligne) {
        echo "Vous devez recommencer :";
        $saisie = readline("mot de passe  : ");
    }else {
        //echo "Ok, fichier ouvert";
        $saisieUser = readline("SQL:>");
    }
  
}
fclose($fp);
?>