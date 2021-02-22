n<?php
    require("./entities/reservation.class.php");
    require("./entities/Client.class.php");
    
    require("./gestDetailChambre.php");

 
    //LL recuperation de l'objet reservation dans la base de données
    //L'argument a fournir est le n° de réservation dont on veut créer l'objet
    //La fonction retourne l'objet du n° de reservation



    function recupObjetResaBDD($numResa){
        $enteteIndexReservation = enteteInv("../BDD/reservation.txt.txt");
        $fp = fopen("../BDD/reservation.txt.txt","r");
        while(!feof($fp)){
            $file = fgets($fp);
            $file = explode(";",$file);
            if($numResa == $file[$enteteIndexReservation["numReservation"]]){
                $numReservation = $file[$enteteIndexReservation["numReservation"]];
                $dateArrivee = $file[$enteteIndexReservation["dateArrivee"]];
                $dateDepart = $file[$enteteIndexReservation["dateDepart"]];
                $numClient = $file[$enteteIndexReservation["numClient"]];                
                // $numClient = recupObjetClient($numClient);
                $nbreAdultes = 2;    // non recupérable dans la base de données
                $nbreEnfants = 2;    // non recupérable dans la base de données
                $numChambre = $file[$enteteIndexReservation["numChambre"]];
            }            
        }        
        fclose($fp);
        $prix = 300;

        $reservation = new reservation($numClient,$numChambre,$dateArrivee,$dateDepart,$nbreAdultes,$nbreEnfants,$prix,$numReservation);
        return $reservation;

    }

    //LL fonction pour récuperer l'objet client dans le BDD
    //Argument a fournir est un numéro de client et return un nouvel objet client

    function recupObjetClient($numClient){
        $enteteIndexClients = enteteInv("../BDD/clients.txt");
        $fp = fopen("../BDD/clients.txt","r");
        while(!feof($fp)){
            $file = fgets($fp);
            $file = explode(";",$file);
            if ($numClient == $file[$enteteIndexClients["numClient"]]){
                $numClientResa = $file[$enteteIndexClients["numClient"]];
                $nomClientResa = $file[$enteteIndexClients["nom"]];
                $prenomClientResa = $file[$enteteIndexClients["prenom"]];                
            }
        }
        fclose($fp);
        $clientResa = new Client($numClientResa,$nomClientResa,$prenomClientResa);
        return $clientResa;
    }







        
    //LL affichage du détail d'une reservation
    //l'argument fourni est l'objet réservation
    //La fonction va recréer l'objet client et les objets room selon les attributs de l'objet reservation en argument


    function affichageReservation($resaObjet){
        $reservation = recupObjetResaBDD($resaObjet);
        //$clientResa = $reservation->getClient();
        $clientResa = recupObjetClient($reservation->getClient());

        $ligneSeparation = ligneSeparation(120,"-");
        echo "\n$ligneSeparation";
        echo "\nN° Réservation : ".affichageChamp(17, $reservation->getNumResa())."N° Client : ".affichageChamp(20, $clientResa->get_numClient())."Nom : ".affichageChamp(20, $clientResa->get_nom())."Prenom : ".affichageChamp(20, $clientResa->get_prenom());
        echo "\n$ligneSeparation\n";
        echo affichageChamp(15," ")."Date d'arrivée : ".affichageChamp(43,$reservation->getDateArrivee())."Date de départ : ".affichageChamp(15,$reservation->getDateDepart());
        echo "\n$ligneSeparation\n";
        echo affichageChamp(18," ")."Nombre d'adulte(s) : ".affichageChamp(3,$reservation->getNbAdulte()).affichageChamp(26," ")."Nombre d'enfant(s) de moins de 12 ans : ".affichageChamp(4,$reservation->getNbEnfant());
        echo "\n$ligneSeparation\n";
        echo affichageChamp(11," ")."Numéro de chambre ".affichageChamp(26," ")."Prestation".affichageChamp(27," ")."Prix journalier ";
        $listeChambre = $reservation->getListeChambres();
        $listeChambre = explode(",",$listeChambre);
        for($i=0;$i<count($listeChambre);$i++){
            $numChambre = creationObjetChambreDetail($listeChambre[$i]);
            echo "\n".affichageChamp(19," ").$numChambre->getNumRoom().affichageChamp(19," ").affichageChamp((20-(strlen($numChambre->getType()))/2)," ").$numChambre->getType().affichageChamp(floor(20-(strlen($numChambre->getType()))/2)," ").affichageChamp(17," ").affichageChamp(4,$numChambre->getPrix())." €";
        }
        echo "\n$ligneSeparation\n";
        
    }





     //A placer ou se situe le switch pour les choix du gestionnaire   


    do{
        $numReservation = readline("Quelle réservation détaillée voulez-vous connaitre ? ");        
        affichageReservation($numReservation);   
        $nouvelleRecherche = strtoupper(readline("Voulez-vous procéder à une nouvelle recherche ? "));
    } while($nouvelleRecherche=="OUI");    

    

?>