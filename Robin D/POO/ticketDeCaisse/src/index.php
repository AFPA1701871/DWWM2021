<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("./src/Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    do {
        $accessType=readline("Si vous êtes un client, entrez-->1 / Si vous êtes le gestionnaire, entrez-->2 : ");
    } while ($accessType!=1 and $accessType!=2);
    
    if ($accessType==1) {

        // création du client
        $firstName=readline("entrez votre prénom: ");
        $lastName=readline("entrez votre nom: ");
        $client=new Client($firstName, $lastName);

        print_r($client); // à supprimer

        // extraction des produits disponibles dans la table productsList.txt
        $fp=fopen("./BDD/productsList.txt", "r");
        $i=0;
        while (!feof($fp)) {
            $lineTable[$i]=fgets($fp, 4096);
            $lineTable[$i]=trim($lineTable[$i]);
            $lineTable[$i]=substr( $lineTable[$i], 0, strrpos($lineTable[$i], ";") );
            $i+=1;
        }
        fclose($fp);

        array_pop($lineTable);

        print_r($lineTable); // à supprimer

        for ($i=0; $i < count($lineTable) ; $i++) { 
            $lineList[$i]=explode(";",$lineTable[$i]);
        }

        array_shift($lineList);

        print_r($lineList); // à supprimer

        //stockage des objets "Product" dans un tableau
        for ($i=0; $i < count($lineList); $i++) { 
            $product[$i]=new Product($lineList[$i][0], $lineList[$i][1], $lineList[$i][2]);
        }

        print_r($product); // à supprimer

        // affichage des produits disponibles
        echo "les produits disponibles sont : \n";
        for ($i=0; $i < count($lineList); $i++) { 
            echo "n°".$i."-->".$lineList[$i][0]."-->".$lineList[$i][1]."-->".$lineList[$i][2]."€"."\n";
        }

        // sélection des produits par le client et ajout de ceux-ci dans un ticket: $tableReceipt
        $tableReceipt=[];
        array_push($tableReceipt,array("Produit","Qté","Prix Unitaire","Prix Total"));

        print_r($tableReceipt); // à supprimer
        
        do { 
            $productSelected=readline("entrez le numéro du produit que vous souhaitez ajouter à votre commande: ");
            $quantity=readline("entrez le nombre de produits de ce type que vous souhaitez ajouter à votre commande: ");

            array_push($tableReceipt,array($lineList[$productSelected][0],$quantity,$lineList[$productSelected][2],($quantity*$lineList[$productSelected][2])));

            do {
               $continueShopping=readline("voulez-vous sélectionner un autre article ? (O/N) "); 
            } while ($continueShopping!="O" and $continueShopping!="N");
        } while ($continueShopping=="O");

        print_r($tableReceipt); // à supprimer

        //calcul du "Total Ticket"
        $totalTicket=0;
        for ($i=1; $i < count($tableReceipt); $i++) { 
            $totalTicket+=$tableReceipt[$i][3];
        }

        // ajout du "Total Ticket" au ticket: $tableReceipt
        array_push($tableReceipt,array("Total Ticket","","",$totalTicket));

        // affichage du ticket
        
        print_r($tableReceipt); // à supprimer
    }
    
?>