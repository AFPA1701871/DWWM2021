<?php 

    function f_testerSaisie(string $saisie,int $i){
        do{
        $retour=readline("Saisir ".$saisie." de la voiture ".$i." : "."\n");
        }while(trim($retour) =="");
        return $retour;
    }

    function f_testerImmatriculation(int $i){
        // test si l'immatriculation existe déjà
        do{
            $saisie= f_testerSaisie("l'immatriculation",$i);
        }while( (Voiture::testImmatriculation($saisie))==true);
        return $saisie;
    }

    function f_repeter(int $i,string $car){ // Affiche le nombre $i de caractere $car
    $return="";
    for ($j=0; $j < $i ; $j++) { 
        $return.=$car;
    }
    return $return;
    }
?>
