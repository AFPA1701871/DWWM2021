<?php

    $type = "Jardin";
    
    //LL Fonction permettant de récuperer la premiere ligne d'un fichier BDD
    //de le passer en tableau et d'inverser cle/valeur pour determiner comme entete
    //un nom de colonne et non un numéro d'index
    //A saisir en argument le chemein vers le fichier, la fonction return un tableau

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

    // LL fonction determinant les chambres correspondantes au type choisi sans tenir compte
    // de la disponibilité de chambre due aux reservations
    // l'argument est le type de vue désirée et le return un tableau reprenant toutes les chambres
    // ayant la vue désirée au sein de l'hotel    

    function chambreSelonTypeView($type){
        $chambreselect = [];
        $j=0;
        $enteteIndexInv = enteteInv("../BDD/rooms.csv");
        $fp = fopen("../BDD/rooms.csv","r");
        while (!feof($fp)){
            $ligne = fgets($fp, 4096);
            $ligne = explode(";", $ligne);
            $ligne[$enteteIndexInv["typeView"]] = str_replace(" ou ",",",$ligne[$enteteIndexInv["typeView"]]);
            $ligne[$enteteIndexInv["typeView"]] = str_replace(" et ",",",$ligne[$enteteIndexInv["typeView"]]);
            $ligne[$enteteIndexInv["typeView"]] = str_replace("Partielle ","",$ligne[$enteteIndexInv["typeView"]]);
            //elements préparés pour recherche
            $base = str_replace(" ","",$ligne[$enteteIndexInv["typeView"]]);
    
            $base = explode(",",$base);
            for($i=0; $i<count($base) ; $i++){
                if($base[$i]==$type){
                    array_push($chambreselect,$ligne[$enteteIndexInv["roomNumber"]]);
                }
            }    
            $j++;            
        }
        fclose($fp);
        print_r ($chambreselect);
        return $chambreselect;
        
    }

    chambreSelonTypeView($type);

    function chambreDisponible($type,$dateArriveeClient, $dateDepartClient){                 //$dateSystem, 
        $enteteResa = enteteInv("../BDD/reservation.txt");  //entete du fichier reservation
        $chambreSelonTypeView = chambreSelonTypeView($type);  //chambre correspondant au choix du client
        $i = 0;
        $fp = fopen("../BDD/reservation.txt","r");
        while (!feof($fp)){
            $ligne = fgets($fp,4096);
            $ligne = explode(";",$ligne);
            if ($i>0){                
                $chambreResa = $ligne[$enteteResa["chambreReserves"]];      //On cherche les chambres déjà retenues
                $chambreResa = explode(",",$chambreResa);                   //On crée un tableau reprenant chaque n° de chambre par reservation
                $dateArriveeResa = $ligne[$enteteResa["dateArrivee"]];
                $dateDepartResa = $ligne[$enteteResa["dateDepart"]];
                for($j = 0 ; $j<count($chambreSelonTypeView) ; $j++){       //On boucle sur le tableau des chambres selon la vue
                    for($k=0; $k<count($chambreResa);$k++){                 //On boucle sur chaque chambre déjà retenue
                        if($chambreSelonTypeView[$j]==$chambreResa[$k]){
                            //verif si date ne se chevauchent pas
                        } else {
                            //integration dans un array de la valeur de chambreSelonTypeView
                        }
                    }
                }


                echo "\n".$chambreResa;
                var_dump($chambreResa);



            }
            $i++;
        }



        
        
        
        
        // if(($dateSystem<$dateArriveeResa)||($dateSystem<$dateDepartResa)){

        // }

        fclose($fp);


    }


    // $chambreDisponible = chambreDisponible($type, $dateArriveeClient, $dateDepartClient);    //$dateSystem




    $dateSystem = 03-02-2021;
    $dateArriveeClient = 05-02-2021;
    $dateDepartClient = 15-02-2021;











?>