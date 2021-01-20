<?php
    require('src/services/librairieFonctionsAffichageTableau.php');

    // fonction affichant la table complète à partir du nom de la table $nomTable
    function selectAll($requeteSQL) {
        $contenuRequete=substr($requeteSQL,14); // donne la valeur de la requete moins "SELECT * FROM "
        $posPointVirgule=strpos($contenuRequete,";"); // donne la position du mot ";"
        $nomTable=substr($contenuRequete,0,$posPointVirgule); // donne le nom de la table à modifier
        
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
        } // crée la ligne de délimitation haute et basse du tableau

        $k=-1;
        for ($i=0; $i < count($lignes); $i++){ 
            $k+=1;
            $ligneAffichage[$k]="";
            for ($j=0; $j < count($lignes[0]) ; $j++) { 
                $ligneAffichage[$k].=$valeurEncodees[$i][$j];
            }
            $ligneAffichage[$k].="|";
        } // crée un tableau contenant une chaine pour chaque ligne à afficher

        $k=-1;
        for ($i=0; $i < count($ligneAffichage)+3 ; $i++) { 
            if ($i==0 or $i==2 or $i==count($ligneAffichage)+2) {
                echo $ligneSeparatrice."\n";
            }
            else {
                $k+=1;
                echo $ligneAffichage[$k]."\n";
            }
        } // affiche l'intégralité du tableau
    }

    // fonction affichant des champs de la table à partir du nom de la table $nomTable et du nom des champs $nomsChamps
    function selectNomsChamps($requeteSQL) {
        $contenuRequete=substr($requeteSQL,7); // donne la valeur de la requete moins "SELECT "
        $posFrom=strpos($contenuRequete," FROM"); // donne la position du mot " FROM"
        $nomsChamps=substr($contenuRequete,0,$posFrom); // donne une chaine contenant les noms des champs que l'on veut afficher
        $nomTable=substr($contenuRequete,$posFrom+6); // donne le nom de la table depuis laquelle on veut afficher des champs
        $nomTable=str_replace(";", "", $nomTable); // retire le ";" à la fin du nom de la table depuis laquelle on veut afficher des champs

        $lignes=tableEnTableau2Dims($nomTable); // crée un tableau en 2 dimensions à partir de la table
        

        $nbDeChamps=count($lignes[0]); // donne le nombre de champs(colonnes) du tableau $lignes

        $tailleMaximaleColonne=maxColonne($lignes,$nbDeChamps); // donne un tableau de la taille maximum des colonnes pour les colonnes 0 à $nbDeChamps-1

        for ($j=0; $j < count($lignes[0]); $j++) {
            for ($i=0; $i < count($lignes); $i++) { 
                $valeurEncodees[$i][$j]=tablage($lignes[$i][$j],$tailleMaximaleColonne[$j]);
            }
        } // donne un tableau $valeurEncodees qui contient les champs et leur valeurs au format "| valeur   "

        $tabNomsChamps=explode(",",$nomsChamps);

        for ($j=0; $j < count($lignes[0]) ; $j++) { 
            for ($k=0; $k < count($tabNomsChamps); $k++) { 
                if ($lignes[0][$j]==$tabNomsChamps[$k]) {
                    $posiChamp[$k]=$j;
                }
            }
        } // détermine la position de $tabNomsChamps[$k] dans la table


        $ligneSeparatrice="+";
        for ($k=0; $k < count($posiChamp) ; $k++) { 
            for ($i=0; $i < $tailleMaximaleColonne[$posiChamp[$k]]+4; $i++) { 
                if ($i==$tailleMaximaleColonne[$posiChamp[$k]]+3) {
                    $ligneSeparatrice.="+";
                }
                if ($i>=1 and $i<=$tailleMaximaleColonne[$posiChamp[$k]]+2) {
                    $ligneSeparatrice.="-";
                }
            }
        } // crée la ligne de délimitation haute et basse du tableau


        $l=-1;
        for ($k=0; $k < count($tabNomsChamps) ; $k++) { 
            $l+=1;
            for ($j=0; $j < count($valeurEncodees[0]) ; $j++) { 
                if ($lignes[0][$j]==$tabNomsChamps[$k]) {
                    for ($i=0; $i < count($valeurEncodees); $i++) { 
                        $monTableau[$l][$i]=$valeurEncodees[$i][$j];
                    }
                }
            }
        } // crée un tableau multidimensionnel contenant uniquement les champs à afficher et leur contenu au format "| valeur   "


        $k=-1;
        for ($j=0; $j < count($monTableau[0]); $j++) {
            $k+=1;
            $ligneAffichage[$k]="";
            for ($i=0; $i < count($monTableau) ; $i++) { 
                $ligneAffichage[$k].=$monTableau[$i][$j];
            }
            $ligneAffichage[$k].="|";
        } // crée un tableau contenant une chaine pour chaque ligne à afficher


        $k=-1;
        for ($i=0; $i < count($ligneAffichage)+3 ; $i++) { 
            if ($i==0 or $i==2 or $i==count($ligneAffichage)+2) {
                echo $ligneSeparatrice."\n";
            }
            else {
                $k+=1;
                echo $ligneAffichage[$k]."\n";
            }
        } // affiche l'intégralité du tableau
    }
?>