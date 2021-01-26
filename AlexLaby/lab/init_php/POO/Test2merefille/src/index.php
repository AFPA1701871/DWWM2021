<?php
    //Pour pouvoir aller chercher mes autres fichiers
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');


    $Guerrier=new Guerrier("Alexandre le Grand",1000,500);

    $Guerrier->parler();
    $Guerrier->BoirePotion();
    $Guerrier->Dormir();

?>