<?php
/*-2 id-clients
-chacun 2 comptes ac num
-solde start =0
-user-client peut :
    -sélect user clients ou quit
    -puis:
        -afficher ses info
        -afficher info d'un de ses comptes (et seulement le sien)
        -faire retrait
        -verseme
        -virem vers autre compte
        -revenir au choix client*/

    function chargerClasse($classe){
        require $classe.'.php';
    }
    spl_autoload_register('chargerClasse');

    $client1= new Client("dhskf55584",$account[0]);
    $client2= new Client("ddsgg85246",$account[1]);

    $client1->displayInfo("dhskf55584",$account[0]);


?>