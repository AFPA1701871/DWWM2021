<?php
    // LL fonction de recupération des classes par l'index
    function chargerClasse($classe){
        require ("./entities/".$classe.".class.php");
    }

    // LL menu accueil
    function menuAccueil(){
       echo "\nA vous de choisir : \n1 / Client \n2 / Gestionnaire \n3 / Quitter\n";
       return readQuit(" Votre Choix : ");
        
    }

    // LL info reservation (demande : nombre adultes/enfants, )
    function infoReservation($dateSystem){
        //info nombre de personne(s) pour le séjour
        do{
            $nbreAdulte = readQuit("Nombre d'adultes : ");
        }while(!is_numeric($nbreAdulte) || $nbreAdulte != intdiv($nbreAdulte,1) || $nbreAdulte<1);
        do{
            $nbreEnfant = readQuit(("Nombre d'enfant(s) : "));
        }while(!is_numeric($nbreEnfant) || $nbreEnfant != intdiv($nbreEnfant,1) || $nbreEnfant<0);  
        //info sur la période de séjour
        do{
            $dateArrivee = readQuit(("Date d'arrivée au format \"jj-mm-aaaa\" : "));
            $dateSaisie = dateSaisieValide($dateArrivee);
            $respect = respectChrono ($dateSystem, $dateArrivee);
        } while(!$dateSaisie || !$respect); 
        do{
            $dateDepart = readQuit("Date de départ au format \"jj-mm-aaaa\" : ");
            $dateSaisie = dateSaisieValide($dateDepart);
            $respect = respectChrono ($dateArrivee, $dateDepart);
        } while(!$dateSaisie || !$respect);  
        //info sur la vue désirée par le client
        echo "De quelle vue désirez-vous profiter lors de votre séjour ?\n\n1 / Forêt\n2 / Golf\n3 / Jardin\n4 / Océan\n5 / Piscine centrale\n";    
        do{                
            $vueSouhait = readQuit(("Saisissez le chiffre de la vue souhaitée : "));
        } while ($vueSouhait!="1" && $vueSouhait!="2" && $vueSouhait!="3" && $vueSouhait!="4" && $vueSouhait!="5");
        //info sur les options désirées par le client


        $optionSouhait = readQuit(("Options souhaitées : "));
    }

    
            




    //LL permet de poser une question tout en permettant de sortir du programme à la saisie de quit
    function readQuit($question){
        $saisie = readline("$question");
        if (strtoupper($saisie)=="QUIT"){
            exit;
        }else{
            return $saisie;
        }
    }


    
?>