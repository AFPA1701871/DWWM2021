<?php
$nomTable="personne";
    
//fonction permettant de retourner un tableau à deux dimensions à partir des données d'une table

    // lecture de la table et enregistrement de ses lignes dans un tableau
    $fp=fopen("./BDD/$nomTable.dwwm", "r");
    $ligne=array();
    $i=0;
    while (!feof($fp)) {
        $ligne[$i]=fgets($fp, 4096);
        $ligne[$i]=trim($ligne[$i]);
        $posDernierPointVirgule=strrpos($ligne[$i],";");
        $ligne[$i]=substr($ligne[$i],0,$posDernierPointVirgule);
        echo $ligne[$i]."\n";
        $i+=1;
    }
    fclose($fp);
    unset($ligne[count($ligne)-1]); // supprime la dernière ligne(vide) trouvée à cause du /n lors de l'écriture dans la table
    print_r($ligne);

    // dans le tableau précédemment créé, on scinde les lignes en retournant un tableau des chaines séparées par ";"
    for ($i=0; $i < count($ligne) ; $i++) { 
        $ligne[$i]=explode(";",$ligne[$i]);
    }
    
    print_r($ligne);

    // déterminer la longueur maximum du champ pour la premiere colonne
    $longueurMaxChamp=0;
    for ($i=0; $i < count($ligne) ; $i++) { 
        if (strlen($ligne[$i][0])>$longueurMaxChamp) {
            $longueurMaxChamp=strlen($ligne[$i][0]);
        }
    }

?>