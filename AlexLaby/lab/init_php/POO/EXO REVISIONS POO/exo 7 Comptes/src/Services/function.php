<?php

    //Pour identifier son client
    function id($inputUser,$client){
        $inputUser=readline("Selectionner un client en tapant son numéro de compte ou son nom : ");
        if($inputUser=="12345678910" or $inputUser=="toto"){
            menu($client);
        }else if($inputUser=="1098" or $inputUser=="tata"){
            menu($client);
        }else{
            echo "Le client n'existe pas \n";
            id($inputUser,$client);
        }
    }


    //Pour faire des actions sur le client
    function menu($client){

        echo "1. Afficher les infos du client\n";
        echo "2. Afficher les infos d'un de ses comptes\n";
        echo "3. Réaliser un retrait\n";
        echo "4. Réaliser un versement sur le compte \n";
        echo "5. Réaliser un virement sur un autre compte \n";
        echo "6. Revenir au choix du client \n";

        $inputUser=readline(strtoupper(""));
        switch ($inputUser) {
            case '1':
                $client->infos();
                break;
            
            default:
                # code...
                break;
        }
    }

?>