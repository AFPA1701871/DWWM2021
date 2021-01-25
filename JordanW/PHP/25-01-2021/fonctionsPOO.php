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

    function f_fichierTab(string $fichier){ // Bascule le fichier dans un tableau
    
        // apres avoir bouclé, reaffecter proprement dans un tableau
        $fp=fopen($fichier,"r");
        
        $i=0;
        // Boucle sur le fichier
        while(!feof($fp)){
            $tab[$i]=explode(";",fgets($fp,4096));
            $i++;
        }
        fclose($fp);
        $tabRetour=[];
            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) { 
                // Boucle sur les colonnes du fichier
                for ($j=0; $j < count($tab[0]); $j++) { 
                    
                    // Enleve les retours lignes
                    $tab[$i][$j]= preg_replace("#\n|\t|\r#","",$tab[$i][$j]);
    
                    if($tab[$i][$j]!=null){
                        $tabRetour[$i][$j]=$tab[$i][$j];
                    }
                }
                    
            }
        
        return $tabRetour;
    }

    function f_tableauProduit(){
         // Ouvrir le fichier produit et afficher
         $fp=fopen(LIEN_PRODUIT,"r");
         $i=0;
         // Boucle sur le fichier
         while(!feof($fp)){
             $tab[$i]=explode(";",fgets($fp,4096));
             $i++;
         }
         fclose($fp);
         $tabRetour=[];
        // Boucle sur les lignes du fichier
        for ($i=0; $i <count($tab) ; $i++) { 
            // Boucle sur les colonnes du fichier
            for ($j=0; $j <= 2; $j++) { 
                // Enleve les retours lignes
                $tab[$i][$j]= preg_replace("#\n|\t|\r#","",$tab[$i][$j]);
                if($tab[$i][$j]!=null){
                    $tabRetour[$i][$j]=$tab[$i][$j];
                }
            }
                
        }
        return $tabRetour;
    }

    function f_client(){
        $nom = readline("Saisir votre nom : ");
        $prenom = readline("Saisir votre prenom : ");

        $ligne="";

        $tabTicket=[];
        array_push($tabTicket,array("Produit","Qté","Prix Unitaire","Prix Total"));

        while(true){

           $tabProduit = f_tableauProduit();

            for ($i=1; $i <count($tabProduit) ; $i++) { 
               ${$tabProduit[$i][0]} = new Produit($tabProduit[$i][0],$tabProduit[$i][2]);
               echo  ${$tabProduit[$i][0]}->toString()."\n";
            }

            do{
                $saisie = readline("Saisir le nom du produit de la liste ci-dessus : ");
            }while(!isset(${$saisie}));

            $nomVariable = $saisie;

            do{
                $intQuantite=readline("Saisir la quantité :");
            }while($intQuantite<=0);


            array_push($tabTicket,array(${$nomVariable}->getNom(),$intQuantite,${$nomVariable}->getPrix(),(${$nomVariable}->getPrix()*$intQuantite)));
            $ligne .= ";".${$nomVariable}->getNom().";".$intQuantite.";".${$nomVariable}->getPrix().";". (${$nomVariable}->getPrix()*$intQuantite);
            
            do{
                $saisie = readline("Voulez-vous continuer les courses (O/N) :");
            }while($saisie!="O" && $saisie!="N");
            if($saisie=="N"){break;}

        }
        if($ligne!=""){
            $ligne = $nom.";".$prenom.$ligne;
            f_ajouterDansTicket($ligne); 
        }

        f_afficherTicket2($tabTicket);

        return true;
    }

    function f_ajouterDansTicket(string $ligne){
        // Mettre le produit et quantite dans fichier txt
        $fichier=LIEN_TICKET;
        $contenu= file_get_contents($fichier);
        if($contenu==""){
            $contenu=$ligne;
        }else{
            $contenu .= "\n".$ligne;
        }
        file_put_contents($fichier,$contenu);
    }

    function f_gestionnaireProduit(){

        // Recuperer le fichier Produit
        $tab=f_fichierTab(LIEN_PRODUIT);
    
        $tabMEP[0]=strlen($tab[0][0])+5;
        $tabMEP[1]=strlen($tab[1][0])+5;
        $tabMEP[2]=strlen($tab[2][0])+5;
            
        // Boucle sur le tableau Ticket pour prendre la longueur maxi/colonne
            // et avoir la somme des produits
        $intSommeProduit=0;
        for ($i=0; $i < count($tab); $i++){
    
            if(intval($tabMEP[0]) < strlen($tab[$i][0])+5){
                $tabMEP[0]=strlen($tab[$i][0])+5;
            }
            
            if(intval($tabMEP[1]) < strlen($tab[$i][1])+5){
                $tabMEP[1]=strlen($tab[$i][1])+5;
            }
            if(intval($tabMEP[2]) < strlen($tab[$i][2])+5){
                $tabMEP[2]=strlen($tab[$i][2])+5;
            }
        }
    
        // Boucle sur le tableau pour affichage
        for ($i=0; $i < count($tab); $i++) { 
            // Ligne intermediaire
            if ($i<2){
                echo f_repeter($tabMEP[0],"-");
                echo f_repeter($tabMEP[1],"-");
                echo f_repeter($tabMEP[2],"-");
                echo "\n";
            }
            // Ligne de valeur
            echo $tab[$i][0];
            echo f_repeter(intval($tabMEP[0])-strlen($tab[$i][0])," ");
            echo $tab[$i][1];
            echo f_repeter(intval($tabMEP[1])-strlen($tab[$i][1])," ");
            echo $tab[$i][2];
            echo f_repeter(intval($tabMEP[2])-strlen($tab[$i][2])," ");
            echo "\n";
       }
       echo "\n";
       
    }

    function f_gestionnaireAjouter(){

        while(true){

             $libelle = readline("Saisissez le nom du produit : ");
            if(isset(${$libelle})){
                echo "Le produit existe deja !!"."\n";
            }

             $description = readline("Saisissez la description du produit : ");
             $prixUnitaire = readline("Saisissez le prix unitaire du produit : ");
             

            ${$libelle}=new Produit($libelle,$prixUnitaire);

             $fichier=LIEN_PRODUIT;
             $contenu= file_get_contents($fichier);
             $contenu .= "\n".$libelle.";".$description.";".$prixUnitaire;
             file_put_contents($fichier,$contenu);
             echo "Produit ajouté !"."\n";

             do{
                 $reponse = readline("Voulez-vous ajouter un autre produit ? (O/N) ");
             }while($reponse !="O" && $reponse!="N");
             if($reponse=="N"){break;}
        }
 
    }
    
    function f_gestionnaire(){
    
        echo "Pour visualiser les produits, taper 'produit'"."\n";
        echo "Pour ajouter des produits, taper 'ajouter'"."\n";
        echo "Pour visualiser les tickets, taper 'ticket'"."\n";
        do{
            $saisie = readline("Que voulez vous faire : ");
        }while($saisie !="ticket" && $saisie !="ajouter" && $saisie !="produit" );
    
    
        switch ($saisie){
            case "produit":
                f_gestionnaireProduit();
                break;
            case "ajouter":
                f_gestionnaireAjouter();
                break;
            case "ticket":
                f_AfficherLesTickets();
                break;
        }
    
    }
    
    function f_AfficherLesTickets(){
        $tab = f_fichierTab(LIEN_TICKET);
        $intSommeTicket=0;
            // Pour chaque ligne
            for ($i=0; $i <count($tab) ; $i++) { 
                //Affiche le ticket de la ligne 
                echo "\n"."Le ticket de ". $tab[$i][0] . " " . $tab[$i][1]."\n";
                // Boucle sur les colonnes de la ligne sauf nom et prenom
                $tabTicket=[];
                $tabTicket[0][0]="Produit";
                $tabTicket[0][1]="Qté";
                $tabTicket[0][2]="Prix unitaire";
                $tabTicket[0][3]="Prix total";
    
                for ($j=2; $j <count($tab[$i]) ; $j+=4){ 
                    array_push($tabTicket,array($tab[$i][$j],$tab[$i][$j+1],$tab[$i][$j+2],$tab[$i][$j+3]));
                }
                $intSommeTicket += f_afficherTicket($tabTicket);
                echo "\n";
                
            }
        echo "La somme des tickets est : ".$intSommeTicket."\n";
    }    
        
    function f_afficherTicket(array $tabT){
    
        $tabMEP[0]=strlen("Produit")+5;
        $tabMEP[1]=strlen("Qté")+5;
        $tabMEP[2]=strlen("Prix Unitaire")+5;
        $tabMEP[3]=strlen("Prix total ticket")+5;

        // Boucle sur le tableau Ticket pour prendre la longueur maxi/colonne
            // et avoir la somme des produits
        $intSommeProduit=0;
        for ($i=0; $i < count($tabT); $i++){

            if(intval($tabMEP[0]) < strlen($tabT[$i][0])+5){
                $tabMEP[0]=strlen($tabT[$i][0])+5;
            }
            
            if(intval($tabMEP[1]) < strlen($tabT[$i][1])+5){
                $tabMEP[1]=strlen($tabT[$i][1])+5;
            }
            if(intval($tabMEP[2]) < strlen($tabT[$i][2])+5){
                $tabMEP[2]=strlen($tabT[$i][2])+5;
            }
            if(intval($tabMEP[3]) < strlen($tabT[$i][3])+5){
                $tabMEP[3]=strlen($tabT[$i][3])+5;
            }
            $intSommeProduit+=intval($tabT[$i][3]);
        }
        array_push($tabT,array("Total ticket","","",$intSommeProduit));

        // Boucle sur le tableau pour affichage
        for ($i=0; $i < count($tabT); $i++) { 
            // Ligne intermediaire
            if ($i<2 OR $i ==count($tabT)-1){
                echo f_repeter($tabMEP[0],"-");
                echo f_repeter($tabMEP[1],"-");
                echo f_repeter($tabMEP[2],"-");
                echo f_repeter($tabMEP[3],"-");
                echo "\n";
            }
            // Ligne de valeur
            echo $tabT[$i][0];
            echo f_repeter(intval($tabMEP[0])-strlen($tabT[$i][0])," ");
            echo $tabT[$i][1];
            echo f_repeter(intval($tabMEP[1])-strlen($tabT[$i][1])," ");
            echo $tabT[$i][2];
            echo f_repeter(intval($tabMEP[2])-strlen($tabT[$i][2])," ");
            echo $tabT[$i][3];
            echo f_repeter(intval($tabMEP[3])-strlen($tabT[$i][3])," ");
            echo "\n";
        }
        return $intSommeProduit;
    }

    function f_AfficherTicket2(array $tabTicket){
        $tabMEP[0]=strlen("Produit")+5;
        $tabMEP[1]=strlen("Qté")+5;
        $tabMEP[2]=strlen("Prix Unitaire")+5;
        $tabMEP[3]=strlen("Total ticket")+5;
            
        // Boucle sur le tableau Ticket pour prendre la longueur maxi/colonne
            // et avoir la somme des produits
        $intSommeProduit=0;
        for ($i=0; $i < count($tabTicket); $i++){

            if(intval($tabMEP[0]) < strlen($tabTicket[$i][0])+5){
                $tabMEP[0]=strlen($tabTicket[$i][0])+5;
            }
            
            if(intval($tabMEP[1]) < strlen($tabTicket[$i][1])+5){
                $tabMEP[1]=strlen($tabTicket[$i][1])+5;
            }
            if(intval($tabMEP[2]) < strlen($tabTicket[$i][2])+5){
                $tabMEP[2]=strlen($tabTicket[$i][2])+5;
            }
            if(intval($tabMEP[3]) < strlen($tabTicket[$i][3])+5){
                $tabMEP[3]=strlen($tabTicket[$i][3])+5;
            }
            $intSommeProduit+=intval($tabTicket[$i][3]);
        }
        array_push($tabTicket,array("Total ticket","","",$intSommeProduit));

        // Boucle sur le tableau pour affichage
        for ($i=0; $i < count($tabTicket); $i++) { 
            // Ligne intermediaire
            if ($i<2 OR $i ==count($tabTicket)-1){
                echo f_repeter($tabMEP[0],"-");
                echo f_repeter($tabMEP[1],"-");
                echo f_repeter($tabMEP[2],"-");
                echo f_repeter($tabMEP[3],"-");
                echo "\n";
            }
            // Ligne de valeur
            echo $tabTicket[$i][0];
            echo f_repeter(intval($tabMEP[0])-strlen($tabTicket[$i][0])," ");
            echo $tabTicket[$i][1];
            echo f_repeter(intval($tabMEP[1])-strlen($tabTicket[$i][1])," ");
            echo $tabTicket[$i][2];
            echo f_repeter(intval($tabMEP[2])-strlen($tabTicket[$i][2])," ");
            echo $tabTicket[$i][3];
            echo f_repeter(intval($tabMEP[3])-strlen($tabTicket[$i][3])," ");
            echo "\n";
        }
    }

?>
