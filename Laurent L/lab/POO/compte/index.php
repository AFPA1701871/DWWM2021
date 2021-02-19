<?php
    require ('./service/fonctions.php');
    spl_autoload_register('chargerClasse');


    $compte1 = new Compte(46086861901);
    $compte2 = new Compte(46086861902);
    $compte3 = new Compte(46086861903);
    $compte4 = new Compte(46086861904);

    $client1 = new Client("Gustave",[$compte1,$compte2]);
    $client2 = new Client("Léon",[$compte3,$compte4]);

    do{
        do{
            $choixClient = readline("Quel client voulez-vous ou quit pour quitter ? ");
        }while ($choixClient!=1 && $choixClient!=2 && strtoupper($choixClient)!="QUIT");
        // sortie du programme si choix sur quit seule possibilité de sortir
        if (strtoupper($choixClient)=="QUIT"){
            exit;
        }
        // On détermine le client selon choix de l'utilisateur
        if($choixClient == 1){
            $client = $client1;
        }else{
            $client = $client2;
        }
        // menu de actions possible sur les comptes
        do{
            echo "1/ Afficher les infos du client\n2/ Afficher les infos d'un de ses comptes\n3/ Réaliser un retrait si le solde le permet\n4/ Réaliser un versement sur le compte\n5/ Réaliser un virement sur un autre compte (l'un des siens ou sur un compte d'un autre client)\n";
            $action = readline ("Quel est votre choix ? ");
        }while($action!=1 && $action!=2 && $action!=3 && $action!=4 && $action!=5);
      
        // switch correspondant aux actions possibles
        switch ($action){
            case 1 :
                $client->afficherSesInfos();
                break;
            case 2 :            
                $compteChoix = $client->choixCompte(); 
                echo $client->get_compteBancaire()[$compteChoix]->afficherInformationCompte();
                break;
            case 3 :
                $compteChoix = $client->choixCompte();
                $mttRetrait = intval(readline("Quel est le montant de votre retrait ? "));
                $client->get_compteBancaire()[$compteChoix]->retrait($mttRetrait);            
                break;
            case 4 :
                $compteChoix = $client->choixCompte();
                $mttVersement = intval(readline("Quel est le montant de votre versement ? "));
                $client->get_compteBancaire()[$compteChoix]->versement($mttVersement);
                break;
            case 5 :
                $compteChoix = $client->choixCompte();
                $mttVirement = intval(readline("Quel est le montant de votre virement ? "));
                $compteACrediter = intval(readline("N° de compte bénéficiant du virement : "));
                $client->get_compteBancaire()[$compteChoix]->virementCompte($mttVirement,$compteACrediter);                
                break;
            default :
                echo "Cela ne devrait pas être le cas...";
        }
    }while($choixClient != "QUIT")
   
    
   

    

?>