<?php

    require("./entities/Room.class.php");

    //LL Fonction permettant de récuperer la premiere ligne d'un fichier BDD
    //de le passer en tableau et d'inverser cle/valeur pour determiner comme entete
    //un nom de colonne et non un numéro d'index
    //A saisir en argument le chemin vers le fichier, la fonction return un tableau

    function enteteInv($chemin){
        $fp = fopen($chemin,"r");
        $ligne = fgets($fp,4096);
        // creation du tableau de l'index
        $entete = explode(";", $ligne);
        // interversion des clés et des valeurs pour 
        $enteteIndexInv = array_flip($entete);
        // print_r ($enteteIndexInv);
        fclose($fp);
        return $enteteIndexInv;
    }

    //LL fonction genere un objet contenant l'ensemble des élèments constitutifs d'une entité chambre de la BDD room.txt
    //L'argument demandé est le numéro de chambre. La fonction retourne un objet spécifique représentant la chambre

    function creationObjetChambreDetail($numChambre){
        $enteteIndexChambre = enteteInv("../BDD/room.txt");
        $fp = fopen("../BDD/room.txt","r");
        while(!feof($fp)){
            $file =fgets($fp,4096);
            $file = explode(";",$file);
            if($numChambre == $file[$enteteIndexChambre["roomNumber"]]){
                $numero = $file[$enteteIndexChambre["roomNumber"]];
                $numero = intval($numero);
                $vue = $file[$enteteIndexChambre["typeView"]];
                $surface = $file[$enteteIndexChambre["surfaceArea"]];
                $surface = explode(" ",$surface);
                $surface = intval(($surface[0]));
                $prix = $file[$enteteIndexChambre["price"]];
                $prix = intval($prix);
                $options = $file[$enteteIndexChambre["options"]];
                $capacite = $file[$enteteIndexChambre["capacity"]];
                $capacite = explode(" ",$capacite);
                $capaciteAdulte = intval($capacite[0]);
                $capaciteEnfant = intval($capacite[3]);
                $type = $file[$enteteIndexChambre["type"]];

                $chambreDetail = new Room($numero,$vue,$surface,$prix,$type,$capaciteAdulte,$capaciteEnfant,$options);
                break;
            }
        }
        fclose($fp);
        return $chambreDetail;
    }    

    
    //LL cette fonction renvoie l'integralité des informations d'un chambre
    //L'argument est le numéro de chambre pour son fonctionnement elle utilise
    //les fonctions suivantes : enteteInv, affichageChamp, et ligneSéparation
    //la fonction return un affichage de la fiche complete

    function affichageDetailChambre($chambreDetail){
        $ligneSeparation = ligneSeparation(120,"-");
        echo "\n$ligneSeparation";
        echo "\nNuméro de chambre :  ".affichageChamp(20,$chambreDetail->getNumRoom())."Prestation : ".affichageChamp(50,$chambreDetail->getType())."Prix : ".affichageChamp(7,$chambreDetail->getPrix())." €";
        echo "\n$ligneSeparation";
        echo "\nType de vue : ".affichageChamp(74,$chambreDetail->getView())."Surface : ".affichageChamp(4,$chambreDetail->getSurface())." metres carres";
        echo "\n$ligneSeparation";
        echo "\n                                  Capacité : ".affichageChamp(2,$chambreDetail->getCapAdultes())."Adulte(s) et ".affichageChamp(2,$chambreDetail->getCapEnfants())." enfant(s) de moins de 12 ans";
        echo "\n$ligneSeparation";
        echo "\nOptions disponibles : ";
        $optionTab = explode(",",$chambreDetail->getOptions());
        $affichageOptions = "";
        for ($i=0; $i<count($optionTab); $i++){
            if ($i%3==0){
                $affichageOptions .= "\n".affichageChamp(40,$optionTab[$i]);
            }else {
                $affichageOptions .= affichageChamp(40,$optionTab[$i]);
            }
        }
        echo $affichageOptions;
        echo "\n$ligneSeparation\n";
        
    }        
    

    //LL affichage du champ selectionné dans un nombre de caracteres predefinis
    //en argument 1/ le nombre de caracteres total pour le champ et en 2/ la variable 
    //return un bloc de caractere inclus la variable et une succession d'espaces

    function affichageChamp($largeurTotalCaract, $variable){
        $nbreCaractVar = strlen($variable);
        $nbreEspace = $largeurTotalCaract-$nbreCaractVar;
        $champ = $variable;
        for($i=0 ; $i<$nbreEspace; $i++){
            $champ .= " ";
        }
        return $champ;
    }

    //LL fonction permettant de creer un ligne de caractéres de separation entre deux lignes d'informations
    //en argument le nombre de caractéres voulus puis le caractére désiré
    //return un ligne de separation

    function ligneSeparation($nbreCaract,$caract){
        $ligne = "";
        for($i=0; $i<$nbreCaract ; $i++){
            $ligne .= $caract;
        }
        return $ligne;
    }



    // Fichier principale
    do{
        $numChambre = readline("De quelle chambre voulez-vous connaitre les détails ? ");
    } while($numChambre<1 || $numChambre>65);    

    $chambreDetail = creationObjetChambreDetail($numChambre);

    
    affichageDetailChambre($chambreDetail);


?>