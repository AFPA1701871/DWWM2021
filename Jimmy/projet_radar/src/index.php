<?php
    
    function chargerClasse($classe){
        require $classe.".class.php";   
    }
    spl_autoload_register("chargerClasse");
    $voiture1 =  new Voiture();
    $voiture2 = new Voiture();

    $marque = readline("Ecrire la marque de la voiture : ");
    $voiture1->set_marque($marque);
    $voiture2->set_marque($marque);
    echo $voiture1->get_marque();
    $model = readline("Ecrire le model de la voiture : ");
    $voiture1->set_model($model);
    $voiture2->set_model($model);
    $couleur = readline ("Ecrire la couleur de la voiture : ");
    $voiture1->set_couleur($couleur);
    $voiture2->set_couleur($couleur);
    $immatricule= readline("Ecrire l'immatriculation de la voiture ");
    $voiture1->set_immatriculation($immatricule);
    $voiture2->set_immatriculation($immatricule);

?>