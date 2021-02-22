<?php

    function choixClient($tabClient) {
        echo "Voici la liste des clients: \n";

        for ($i=0; $i < count($tabClient) ; $i++) { 
            echo "\tn° ".$i." : ".$tabClient[$i]->get_identifiant()."\n";
        }

        do {
            $choixClient=readline("entrez le numéro correspondant au client de votre choix ou entrez \"quit\" pour quitter : ");
        } while ( $choixClient!="quit" and ( $choixClient<0 or $choixClient>count($tabClient)-1 ) ); // ajouter controle pour entier

        return $choixClient;
    }

    function afficherListeComptesClient($tabClient,$choixClient) {
        echo "voici la liste des comptes de ce client: \n";
        for ($i=0; $i < count($tabClient[$choixClient]->get_compteBancaire()) ; $i++) { 
            echo "n° ".$i." - ".$tabClient[$choixClient]->get_compteBancaire()[$i]->get_numeroCompte()."\n";
        }
    }
?>