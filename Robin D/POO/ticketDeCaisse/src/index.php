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

        //extraction des produits disponibles dans la table productsList.txt
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

        echo "les produits disponibles sont : \n";
        for ($i=0; $i < count($lineList); $i++) { 
            echo "n°".$i."-->".$lineList[$i][0]."-->".$lineList[$i][1]."-->".$lineList[$i][2]."€"."\n";
        }

    }
    

?>