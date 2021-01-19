<?php
    require('src/services/librairieFonctionsAffichageTableau.php');

    // fonction affichant la table complète à partir du nom de la table $nomTable
    function affichageTableFull($nomTable) {
    
        $lignes=tableEnTableau2Dims($nomTable); // crée un tableau en 2 dimensions à partir de la table

        $nbDeChamps=count($lignes[0]); // donne le nombre de champs(colonnes) du tableau $lignes

        $tailleMaximaleColonne=maxColonne($lignes,$nbDeChamps); // donne un tableau de la taille maximum des colonnes pour les colonnes 0 à $nbDeChamps-1

        for ($j=0; $j < count($lignes[0]); $j++) {
            for ($i=0; $i < count($lignes); $i++) { 
                $valeurEncodees[$i][$j]=tablage($lignes[$i][$j],$tailleMaximaleColonne[$j]);
            }
        } // donne un tableau $valeurEncodees qui contient les champs et leur valeurs au format "| valeur   "

        $ligneSeparatrice="+";
        for ($i=0; $i < $nbDeChamps ; $i++) { 
            for ($k=0; $k < $tailleMaximaleColonne[$i]+4; $k++) { 
                if ($k==$tailleMaximaleColonne[$i]+3) {
                    $ligneSeparatrice.="+";
                }
                if ($k>=1 and $k<=$tailleMaximaleColonne[$i]+2) {
                    $ligneSeparatrice.="-";
                }
            }
        }

        $ligneAffichage=LignesTable($lignes,$valeurEncodees); // C est ici que ca change et un peu avant aussi

        $k=-1;
        for ($i=0; $i < count($ligneAffichage)+3 ; $i++) { 
            if ($i==0 or $i==2 or $i==count($ligneAffichage)+2) {
                echo $ligneSeparatrice."\n";
            }
            else {
                $k+=1;
                echo $ligneAffichage[$k]."\n";
            }
        }
    }

    // fonction affichant un champ de la table complète à partir du nom de la table $nomTable et du nom du champ $nomChamp
    function affichageTableUnChamp($nomTable,$nomChamp) {

        $lignes=tableEnTableau2Dims($nomTable); // crée un tableau en 2 dimensions à partir de la table
        

        $nbDeChamps=count($lignes[0]); // donne le nombre de champs(colonnes) du tableau $lignes

        $tailleMaximaleColonne=maxColonne($lignes,$nbDeChamps); // donne un tableau de la taille maximum des colonnes pour les colonnes 0 à $nbDeChamps-1

        for ($j=0; $j < count($lignes[0]); $j++) {
            for ($i=0; $i < count($lignes); $i++) { 
                $valeurEncodees[$i][$j]=tablage($lignes[$i][$j],$tailleMaximaleColonne[$j]);
            }
        } // donne un tableau $valeurEncodees qui contient les champs et leur valeurs au format "| valeur   "

        for ($j=0; $j < count($lignes[0]) ; $j++) { 
            if ($lignes[0][$j]==$nomChamp) {
                $posiChamp=$j;
            }
        } // détermine la position de $nomTable dans la table
        
        $ligneSeparatrice="+";
        for ($i=0; $i < $tailleMaximaleColonne[$posiChamp]+4; $i++) { 
            if ($i==$tailleMaximaleColonne[$posiChamp]+3) {
                $ligneSeparatrice.="+";
            }
            if ($i>=1 and $i<=$tailleMaximaleColonne[$posiChamp]+2) {
                $ligneSeparatrice.="-";
            }
        }

        $k=-1;
        for ($i=0; $i < count($lignes[$posiChamp])+3 ; $i++) { 
            if ($i==0 or $i==2 or $i==count($lignes[$posiChamp])+2) {
                echo $ligneSeparatrice."\n";
            }
            else {
                $k+=1;
                echo $valeurEncodees[$k][$posiChamp]."|"."\n";
            }
        }
    }
?>