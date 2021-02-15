<?php 

    function chargementClass($classe){
        require('.=entities/'. $classe .'.class.php');
    }
    spl_autoload_register('chargementClass');

    ///////////////////
    $maBanque=new banque("Caisse Epargne");

    $monCompteCourant = new CompteEnBanque($maBanque,"0123456789",0,15000,0);



?> 