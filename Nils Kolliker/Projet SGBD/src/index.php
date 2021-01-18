<?php
require('./service/controlDeSaisie.php');
require('./service/modifieursDeChaine.php');
define("INDICATEUR_CONSOLE","SQL :>");
$entrerUtilisateur=0;
do{
    $userAccount[0]=readline("nom utilisateur :");
    $userAccount[1]=readline("mot de passe :");
    $isLoged=esCeDansLaTable($userAccount,completeChemin("config.ini"));
    if($isLoged){
        echo "vous etes connecté.";
    }else{
        echo "erreur: mot de passe incorrecte\nvoulez vous quitter ? si oui, entrez 'quit'\n";
        $entrerUtilisateur=readline(INDICATEUR_CONSOLE);
    }
}while($isLoged==false&&$entrerUtilisateur!="quit");
?>