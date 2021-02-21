<?php

    require ("./service/fonctions.php");
    spl_autoload_register('chargerClasse');

    $ligneCommande = [];

    $client1 = new ClientCommande(411001,"Bezos","Jeff");

    $produit1 = new Produit("chaise dactylo", "Chaise dactylo a roulette de couleur grise", "produit001", 249.99);
    $produit2 = new Produit("bureau direction", "bureau en bois alu et verre", "produit002", 3499.99);
    $produit3 = new Produit("PC bureau ", "PC de bureau haute perf rysen 7 5800", "produit003", 1749.99);
    $produit4 = new Produit("clavier gamer ", "Clavier gamer mecaniqueSteelSeries apex 7 switchs rouges", "produit004", 159.99);
    

    $listeProduit = [$produit1,$produit2,$produit3,$produit4];

    //Affichage de l'ensemble des attributs de chaque produit 
    foreach($listeProduit as $element){
        $element->afficherSesInfos();
    }

    //Determination des lignes de commande desirées par le client
    do{
        $referenceChoisie = readline("Quel référence voulez-vous commander ? "); //Reference choisie par le client
        $quantite = intval(readline("Quelle quantité voulez-vous commander ?"));
        
        array_push($ligneCommande, new LigneCommande(verifReference($referenceChoisie,$listeProduit),$quantite));        

        $desirDeCommander = strtoupper(readline("Desirez-vous commander un autre produit?"));
        
    }while ($desirDeCommander == "OUI");

    print_r ($ligneCommande);



?>