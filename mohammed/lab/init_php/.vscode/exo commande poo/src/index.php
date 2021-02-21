<?php
    function chargementClass($class){
        require( "./entities/".$class.'.php');
      }
    spl_autoload_register('chargementClass');
    //require(".\services/fonction.php");
    $nom=readline("nom :");
    $prenom=readline("prenom :");
    $numeroClient=readline("numeroClient :");
    $client=new client( $nom, $prenom, $numeroClient);
    echo "bienvenue\n";
    $client-> affichageClient();
    for ($i=0; $i <2 ; $i++) { 
        $libelle=readline( "libelle :");
        $desription=readline("desription :");
        $reference=readline ("reference :");
        $prixUnitaire=readline("prixUnitaire :");
        ${"produit$i"}=new produit ($libelle, $desription, $reference, $prixUnitaire);
        echo "produit$i est :\n";
        ${"produit$i"}->afficheProduit();
    }
    // debut commande choix des article 
    //choisir produit et quantite
    $tabProduit=[];
    $tabQantite=[];
 do {
        $choixProduit=readline (" choisir vos produit :");
        array_push($tabProduit,$choixProduit);
        $choixQantite=readline( "choisir quantite :");
        array_push($tabQantite,$choixQantite);
    } while ($choixProduit!="quit");
   print_r($tabProduit);
    print_r($tabQantite);
    $totalPrix=[];
    $ligneCommande=[];
  for ($j=0; $j <count($tabProduit)-1 ; $j++) { 
  // echo  ${$tabProduit[$j]}->afficheProduit();
    ${"ligneCommande$j"} = new ligneDeCommande  (${$tabProduit[$j]},$tabQantite[$j]);
    ${"ligneCommande$j"} ->affichageLigneCommande();
    array_push($ligneCommande,${"ligneCommande$j"});
    array_push($totalPrix,${"ligneCommande$j"} ->calculPrixLingeCommande());
  }
  print_r($totalPrix);
  $commande=new commande (1,$ligneCommande,$client);
  echo $commande->affichageCommande();
  $commande->totalCommande();
  
  
   
   
?>