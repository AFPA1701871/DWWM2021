<?php

    //Variables
    require('./services/fonctions.php');
    require('./services/verification.php');
    spl_autoload_register("chargerClasse");
    $verif = $format = $quit = false;
    
    


    //ASCII ART



    //Main

        // LL Création date du jour avec verification du format et de la validité de la date

    do {
        $dateSystem = readQuit("Veuillez déterminer la date du jour au format \"jj-mm-aaaa\" : ");
        $dateSaisie = dateSaisieValide($dateSystem);
    } while(!$dateSaisie);   

    // LL boucle d'accueil
    do {
        $menuAccueil = menuAccueil();
        switch($menuAccueil){
            case 1 :
                infoReservation($dateSystem);
                break;
            case 2 :
                echo "partie Gestionnaire";
                break;
            case 3 :
                echo "Merci de votre visite. A bientot...";
                break;
            default : echo "evenement inattendu";
        }
    } while($menuAccueil!="3")






    

    

?>