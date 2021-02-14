<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");
    require("Services/fonctions.php");

    $tabCompteBancaire1=[];
    $compte1= new Compte("0001");
    $compte2= new Compte("0002");
    array_push($tabCompteBancaire1,$compte1, $compte2);
    $client1= new Client("GerardBouchard",$tabCompteBancaire1);

    $tabCompteBancaire2=[];
    $compte3= new Compte("0003");
    $compte4= new Compte("0004");
    array_push($tabCompteBancaire2,$compte3, $compte4);
    $client2= new Client("AndreDurand",$tabCompteBancaire2);

    $tabClient=[];
    array_push($tabClient,$client1,$client2);

    
    // fonction avec $tabClient en argument
      
    do {

        echo "**** Selection du client pour lequel vous souhaitez effectuer l'action ****\n";
        $choixClient=choixClient($tabClient);
        
        if ($choixClient!="quit") {

            echo "Vous avez sélectionné le client suivant : ".$tabClient[$choixClient]->get_identifiant()."\n";

            echo "**** Selection de l'action ****\n";
            echo "Voici la liste des actions possbiles : \n";
            echo "\t 1 - Afficher les infos du client\n";
            echo "\t 2 - Afficher les infos d’un de ses compte\n";
            echo "\t 3 - Réaliser un retrait\n";
            echo "\t 4 - Réaliser un versement sur le compte\n";
            echo "\t 5 - Réaliser un virement sur un autre compte \n";
            echo "\t 6 - Revenir au choix du client\n";

            do {
                $choixAction=readline("entrez le numéro correspondant à l'action que vous souhaitez effectuer : ");
            } while ($choixAction<1 or $choixAction>6);

            echo "\n";
            switch ($choixAction) {
                case 1:
                    echo "**** Affichage des informations du client ****\n";
                    echo "voici les informations du client: \n";
                    $tabClient[$choixClient]->afficherSesInfos();
                    break;
                case 2:
                    echo "**** Affichage des informations d'un des comptes du client ****\n";
                    echo "vous avez sélectionné ce client : \n";
                    $tabClient[$choixClient]->afficherSesInfos();
                    afficherListeComptesClient($tabClient,$choixClient);
                    $compteSelectionne=readline("de quel compte voulez-vous voir les détails? (entrez le numero correspondant !");
                    $tabClient[$choixClient]->get_compteBancaire()[$compteSelectionne]->afficherInformationCompte(); 
                    break;
                case 3:
                    echo "**** Réaliser un retrait sur l'un des comptes du client ****\n";
                    afficherListeComptesClient($tabClient,$choixClient);
                    $compteSelectionne=readline("sur quel compte voulez-vous effectuer un retrait? (entrez le numero correspondant !");
                    $tabClient[$choixClient]->get_compteBancaire()[$compteSelectionne]->retrait();
                    break;
                case 4:
                    echo "**** Réaliser un versement sur l'un des comptes du client ****\n";
                    afficherListeComptesClient($tabClient,$choixClient);
                    $compteSelectionne=readline("sur quel compte voulez-vous effectuer un versement? (entrez le numero correspondant !");
                    $tabClient[$choixClient]->get_compteBancaire()[$compteSelectionne]->versement();
                    break;
                case 5:
                    echo "**** Réaliser un virement depuis un des comptes du client sur un autre compte ****\n";
                    afficherListeComptesClient($tabClient,$choixClient);
                    $compteSelectionne=readline("depuis quel compte souhaitez vous effectuer un virement? (entrez le numero correspondant !");
                    echo "Quel est le client qui sera bénéficiaire de ce virement?\n";
                    $clientBeneficiaire=choixClient($tabClient);
                    afficherListeComptesClient($tabClient,$clientBeneficiaire);
                    $compteBeneficiaire=readline("sur quel compte souhaitez-vous un virement? (entrez le numero correspondant !");
                    $numCompteBeneficiaire=$tabClient[$clientBeneficiaire]->get_compteBancaire()[$compteBeneficiaire];
                    if ($tabClient[$choixClient]->get_compteBancaire()[$compteSelectionne]!=$numCompteBeneficiaire) {
                        $tabClient[$choixClient]->get_compteBancaire()[$compteSelectionne]->virement($numCompteBeneficiaire);
                    }
                    else {
                        echo "les comptes émetteurs et bénéficiaires ne peuvent pas être les mêmes !\n";
                    }
                    break;
                case 6:
                    echo "**** Retour au choix du client ****\n";
                    break;
            }
        }

    } while ($choixClient!="quit");
    echo "              ******************* Fermeture du programme *******************";
    
?>