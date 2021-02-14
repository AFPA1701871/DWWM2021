<?php 

    function chargementClass($classe){
	    require('./class/'. $classe .'.class.php');
    }
	spl_autoload_register('chargementClass');

    require ("./function/functions.php");

    $client = new Client("Wyts","Jordan","WJ-01");

    $tabProduit=f_ajouterProduit();

    for ($i=0; $i <count($tabProduit) ; $i++) { 
        $tabOjetProduit[]=new Produit($tabProduit[$i][0],$tabProduit[$i][1],$tabProduit[$i][2],$tabProduit[$i][3]);
    }

    $commande = new Commande($client);
    do{
        // Afficher les produits
        f_AfficherTableau(f_afficherLesProduits($tabOjetProduit),"Liste des Produits");
            // Saisir reference produit
            do{
                $reference=readline("Saisir une reference : (quit pour terminer)");
            }while(!f_referenceExiste($tabOjetProduit,$reference)&& $reference!="quit");
            if($reference!="quit"){
                // Saisir nombre de produit
                $leProduit = f_objetProduitReference($reference,$tabOjetProduit);
                //var_dump($leProduit);
                do{
                    $nombre = readline("Saisir un nombre de ".$leProduit->_libelle." : ");
                }while(!is_numeric($nombre) && $nombre<="0"); 
                $commande->_listeLigneCommande[]=new LigneCommande($leProduit,$nombre);;
            }
    }while($reference !="quit");
    // Boucle sur les lignes Commandes de Commande
    $total=0;
    
    $tabAffichage[]=array("Reference","Libelle","Quantité","Total TTC");
    foreach($commande->_listeLigneCommande as $ligne){
        $tabAffichage[]=$ligne->affichage();
        $total+=$ligne->calculTotalLigneTTC();
    } 
    $tabAffichage[]=array("","","","");
    $tabAffichage[]=array("Total Commande","","",$total);
    f_AfficherTableau($tabAffichage,"Details de la commande");
?>