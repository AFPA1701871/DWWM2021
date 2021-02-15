<?php 

    function chargementClass($classe){
	    require('./class/'. $classe .'.class.php');
    }
	spl_autoload_register('chargementClass');

    $compte1 = new Compte("Compte Matthieu",0);
    $compte2 = new Compte("Livret A Matthieu",0);
    $client1 = new Client("Matthieu",array($compte1,$compte2));
    
    $compte3 = new Compte("Compte Jordan",0);
    $compte4 = new Compte("Livret A Jordan",0);
    $client2 = new Client("Jordan",array($compte3,$compte4));
    
    while(true){
        do{
            echo "Saisir 1 pour selectionner Matthieu\n";
            echo "Saisir 2 pour selectionner Jordan\n";
            echo "Saisir quit pour quitter\n";
            $saisie = readline("");
            if($saisie=="quit"){exit();}
        }while($saisie !="1" && $saisie!="2");

        if($saisie == "1"){
            $objClient = $client1;
        }elseif($saisie == "2"){
            $objClient = $client2;
        }

        $objClient->afficherSesInfos();
        $tabCompte=$objClient->get_compteBancaire(); // recupere les comptes du client
       
        $compteClient1 = $tabCompte[0]; // Selectionne un compte aleatoire du client

        echo "\nLe compte ".$compteClient1->get_numero()." est choisi \n";
        $compteClient1->afficherInformationCompte(); // affiche les info du compte

        echo "\nRetrait sur le compte ".$compteClient1->get_numero()." (solde:".$compteClient1->get_solde().")\n";
        $compteClient1->retrait(true,0); // true pour demander de saisir

        echo "\nVersement sur le compte ".$compteClient1->get_numero()." (solde:".$compteClient1->get_solde().")\n";
        $compteClient1->versement(true,0);

        $compteClient2 = $tabCompte[1];

        echo "\nVirement à partir du compte ".$compteClient1->get_numero()." (solde:".$compteClient1->get_solde()
                .") vers ".$compteClient2->get_numero(). "(solde:".$compteClient2->get_solde().")\n";
        $compteClient1->virement($compteClient2);

    }
?>