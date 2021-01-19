<?php
    //fonction permettant de retourner un tableau à deux dimensions à partir des données d'une table
    function tableEnTableau2Dims($nomTable) {
        // lecture de la table et enregistrement de ses lignes dans un tableau
        $fp=fopen("./BDD/$nomTable.dwwm", "r");
        $ligne=array();
        $i=0;
        while (!feof($fp)) {
            $ligne[$i]=fgets($fp, 4096);
            $ligne[$i]=trim($ligne[$i]);
            $posDernierPointVirgule=strrpos($ligne[$i],";");
            $ligne[$i]=substr($ligne[$i],0,$posDernierPointVirgule);
            $i+=1;
        }
        fclose($fp);
        unset($ligne[count($ligne)-1]); // supprime la dernière ligne(vide) trouvée à cause du /n lors de l'écriture dans la table

        // dans le tableau précédemment créé, on scinde les lignes en retournant un tableau des chaines séparées par ";"
        for ($i=0; $i < count($ligne) ; $i++) { 
            $ligne[$i]=explode(";",$ligne[$i]);
        }

    return $ligne;
    }

    //fonction qui donne le nombre de caractere maximum pour chaque colonne
    function maxColonne($lignes,$nbDeChamps) {
        $k=-1;
        for ($j=0; $j < $nbDeChamps ; $j++) { 
            for ($i=0; $i < count($lignes) ; $i++) { 
                if ($i==0) {
                    $max=strlen($lignes[$i][$j]);
                }
                elseif (strlen($lignes[$i][$j])>$max) {
                    $max=strlen($lignes[$i][$j]);
                }
            }
            $k+=1;
            $tailleMax[$k]=$max;
        }
        return $tailleMax;
    }

    //fonction pour convertir une valeur de la table au format "| valeur" 
    function tablage($chaine,$tailleChamp) {
        $line="|";
        for ($i=0; $i < $tailleChamp+3; $i++) { 
            if ($i==0 or $i==$tailleChamp+1) {
                $line.=" ";
            }
            elseif ($i==1) {
                $line.="$chaine";
            }
            elseif ($i==2 and strlen($chaine)<$tailleChamp) {
                for ($j=0; $j < ($tailleChamp-strlen($chaine)) ; $j++) { 
                    $line.=" ";
                }
            }
        }
        return $line;
    }

    // fonction pour mettre dans un tableau chaque ligne du tableau à afficher
    function LignesTable($lignes,$valeurEncodees) {
        $k=-1;
        for ($i=0; $i < count($lignes); $i++){ 
            $k+=1;
            $LigneAffichage[$k]="";
            for ($j=0; $j < count($lignes[0]) ; $j++) { 
                $LigneAffichage[$k].=$valeurEncodees[$i][$j];
            }
            $LigneAffichage[$k].="|";
        }
        return $LigneAffichage;
    }
?>