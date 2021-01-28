<?php
    //Pour pouvoir aller chercher mes autres fichiers
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');


    $GuerrierGentil=new GuerrierGentil("Alexandre le Grand",1000,500,100);

    $GuerrierGentil->parler();
    $GuerrierGentil->BoirePotion();
    $GuerrierGentil->coupDépée();
    $GuerrierGentil->courbette();
    $GuerrierGentil->ouvrirParam();

    $GuerrierMechant=new GuerrierMechant("Alexandre le méchant",100,100,100);
    $GuerrierMechant->parler();
    $GuerrierMechant->BoirePotion();
    $GuerrierMechant->coupDépée();

    $GuerrierMechant->ouvrirParam();
    

?>