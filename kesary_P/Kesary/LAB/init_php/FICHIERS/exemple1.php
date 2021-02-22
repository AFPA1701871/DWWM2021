<?php
//Ecriture dans un fichier

//Déclaration d'une variable dont le contenu sera écrite dans le fichier
$myVar = "Bonjour le monde";

//Ouverture en écriture seule
$fp = fopen("file.txt","a");

//Écriture du contenu($myVar)
fputs($fp, $myVar);

//Obligatoire fermeture du fichier
fclose($fp);

?>