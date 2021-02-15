<?php

    //Pour pouvoir aller chercher les différents fichiers
    require('./Services/function.php');
        function chargerClasse($classe){
            require ('./Entities/'.$classe.'.class.php');
        }
        spl_autoload_register('chargerClasse');

    $compte1= new Compte ("12345678910","0");
    $client1= new Client ("toto",$compte1->get_numeroCompte());
    $compte2= new Compte ("1098","0");
    $client2= new Client ("tata",$compte1->get_numeroCompte());

    id($client);

?>