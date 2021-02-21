<?php

    function chargerClasse($classe){
        require './entities/'.$classe.'.class.php';
    }


    // verification que la reference choisie par le client appartient à la liste des produits
    // la fonction renvoie un objet produit correspondant à la reference choisie par le client
    function verifReference($ref, array $liste){
        foreach($liste as $element){
            if ($element->get_reference() == $ref){
                return new Produit($element->get_libelle(),$element->get_description(),$element->get_reference(),$element->get_prixUnitaireTTC());
            }
        }
    }



?>