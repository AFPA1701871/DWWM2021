<?php

// Appeler les fonctions SQL
    function cta($userAction){
        $tab =  explode(" ",$userAction);
        switch ($userAction){
            case "" :
                echo "\n\nErreur -_-\n\n";
                break;
            case $tab[0]== "create" and $tab[1]== "table" and substr($userAction,-1,1) == ";":
                    createTable($userAction);
                    break;
            case $tab[0]== "insert" and $tab[1]== "into" and substr($tab[3],0,6)== "values" and substr($userAction,-1,1) == ";":
                insertInto($userAction);
                break;
            case $tab[0]== "select" and $tab[1]== "*" and $tab[2]=="from" and substr($userAction,-1,1) == ";":
                selectFromEtoile($userAction);
                break;
            case $tab[0]== "select" and $tab[1]== "from" and substr($userAction,-1,1) == ";":
                selectFrom($userAction);
                break;
            default:
                $controle=false;
                echo "\n\nErreur -_-\n\n";
            return $controle;
        }
    }

    // Création
    function createTable($userAction){
        $nomFichier="../BDD//".substr($userAction,13,(strpos($userAction,"(")-13)).".DWWM";
        if(file_exists($nomFichier)){
            echo "\n\nLe fichier ".substr($userAction,13,(strpos($userAction,"(")-13))." existe déjà, trouvez un autre nom. \n\n";
        }else{ 
            if(max25($userAction)==true){
            $fichier = fopen($nomFichier, "w");
            echo "\n\nLe fichier ".substr($userAction,13,(strpos($userAction,"(")-13))." a été créé\n\n";
            fputs($fichier, substr($userAction,strpos($userAction,"(")+1,(strpos($userAction,")")-strlen($userAction))));
            fclose($fichier);
            }
        }
    }

    //Autres fonctions utiles

    function max25($userAction){
        //D'abord je vire les séparateurs
        $userAction=str_replace("("," ",$userAction); 
        $userAction=str_replace(")","",$userAction); 
        $userAction=str_replace(","," ",$userAction); 
        $userAction=str_replace(";","",$userAction); 
        //Je transforme la chaine en tableau
        $tab=explode(" ",$userAction);
        //echo print_r($tab);
        $controle = true;
        for ($i=2;$i<count($tab);$i++){
            if(strlen($tab[$i])>25){
                $controle = false;
                echo "\n\nNom trop long, utilisez un nom avec moins de 25 caractères.\n\n";
            } 
            return $controle; 
        }
    }

?>              