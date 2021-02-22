<?php
    require('./service/fonction.php');
    spl_autoload_register('chargerClasse');

    $compte1 = new Compte ("50236R",120);
    $livret1 = new Livret ("45789L",1200);

    $client1 = new Client("Dupont","Paul",$compte1,$livret1);

    $client1->affichageSituation();
    $client1->recevoir(50);
    $client1->affichageSituation();
    $client1->depenser(10);
    $client1->affichageSituation();
    $client1->epargner(100);
    $client1->affichageSituation();
    $livret1->appliqueInteret(5);
    $client1->affichageSituation();

?>