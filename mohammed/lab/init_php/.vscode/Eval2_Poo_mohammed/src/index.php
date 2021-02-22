<?php
  function chargementClass($class){
    require( "./entities/".$class.'.php');
  }
   spl_autoload_register('chargementClass');
   $compte=new compte ("50236R",120);
   $livret= new livret ("45789L",1200);
   $client=new client ("dupont","paul",$compte,$livret);
   echo " creation du client \n";
   $client->affiche()."\n";
   echo " le client recoit 50€ \n";
   $client->recevoir(50);
   $client->affiche()."\n";
   echo " le client depense 10€ \n";
   $client->depenser(10);
   $client->affiche()."\n";
   echo " le client epargne 100€ \n";
   $client->epargner(100);
   $client->affiche()."\n";
   echo " on applique les interet au livret \n";
   $client->interet();
   $client->affiche()."\n";

?>