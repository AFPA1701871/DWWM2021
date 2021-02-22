<?php
 function autoLoadClasse($classe){
    require("./Entities/".$classe.".php");
    }
    spl_autoload_register("autoLoadClasse");

    $compte= new Compte("50236R",120);
    $livret= new Livret("45789L",1200);
    $client= new Client("Dupont","Paul",$compte->getNumero(),$livret->getNumL());
    echo"Creation du client\n";
    $client->affiche().$compte->afficheCompte().$livret->afficheLivret();
    echo"\n";
    echo"Le client recoit 50 euros\n";
    echo $client->affiche().$client->recevoir($compte->getMontant(),50);
    

?>
