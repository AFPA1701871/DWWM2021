<?php 

    function f_afficherLesProduits(array $tab){
        $tabAffichage[]=array("Reference","Libelle","Description","PU TTC");
        foreach($tab as $val){
            $tabAffichage[]=array($val->_reference,$val->_libelle,$val->_description,$val->_prixUnitaireTTC);
        }
        return $tabAffichage;
    }

    function f_referenceExiste(array $tab,string $reference){
        foreach($tab as $val){
            if($val->_reference==$reference){
                return true;
            };
        }
    }

    function f_objetProduitReference(string $reference,array $tab){
        foreach($tab as $val){
            if($val->_reference==$reference){
                return new Produit($val->_libelle,$val->_description,$val->_reference,$val->_prixUnitaireTTC);
            }
        }
    }

    function f_AfficherTableau(array $tabT,string $titre){
        // Boucle sur les colonnes du fichier
        for ($j=0; $j <count($tabT[0]) ; $j++) { 
            // Boucle sur les lignes du fichier
            $intLongeur =0;
            for ($i=0; $i < count($tabT); $i++) { 
                
                // Si la len(colonne) > len(colonne+1)
                if(strlen($tabT[$i][$j])>$intLongeur){
                    $intLongeur= iconv_strlen($tabT[$i][$j]);
                }
            }
            $tabMEP[$j]=$intLongeur;
        }
        
        echo 
        "\n\n"."╔".f_concatene("═",100)."╗"."\n"
            ."║".f_concatene(" ",15).$titre.f_concatene(" ",(100-15)-iconv_strlen($titre))."║"."\n"
            ."║".f_concatene("‾",100)."║"."\n";
                for ($i=0; $i <count($tabT) ; $i++){ 

                    // Surligner l'entete
                    if($i==1){
                        $strLigne="║ ";
                        for ($j=0; $j < (count($tabT[0])); $j++) { 
                            $strLigne.= f_concatene("‾",(intval($tabMEP[$j])));
                            if($j!=(count($tabT[0]))-1){
                                $strLigne.= " ┆ ";
                            }
                        }
                        echo $strLigne.f_concatene(" ",100-iconv_strlen($strLigne))." ║"."\n";
                    }

                    //echo"║ ";
                    // Boucle sur les colonnes du fichier
                    $strLigne="║ ";
                    for ($j=0; $j < (count($tabT[0])); $j++) { 
                        $strLigne.= $tabT[$i][$j] . f_concatene(" ",(intval($tabMEP[$j]))-iconv_strlen($tabT[$i][$j]));
                        if($j!=(count($tabT[0]))-1){
                            $strLigne.= " ┆ ";
                        }
                    }
                    echo $strLigne.f_concatene(" ",100-iconv_strlen($strLigne))." ║"."\n";
                    
                }
        echo "║".f_concatene(" ",100)."║"."\n"  
            ."╚".f_concatene("═",100)."╝"."\n";
            
    }

    function f_concatene(string $string,int $nombre){
        $strLigne="";
        for ($i=0; $i <$nombre ; $i++) { 
            $strLigne .=$string;
        }
        return $strLigne;
    }

    function f_ajouterProduit(){
        return [["banane","Banane de Madagascar","bnn","0.99"],
                    ["pomme golden","Pomme golden bio","pmm","1.50"],
                    ["poire","Poire belle helene","pr","1.99"],
                    ["ananas","Ananas du Bresil","nns","1"],
                    ["peche","Peche Bio","pch","2.41"],
                    ["clementine","Clementine de Corse","clmtn","2.50"],
                    ["raisin","Raisin de Bourgogne","rsn","0.99"],
                    ["prune","Prune d'Alsace","prn","3"],
                    ["kiwi","Kiwi Francais","kw","2"],
                    ["pasteque","Pasteque Espagne","pstq","1.20"]];
    }

?>