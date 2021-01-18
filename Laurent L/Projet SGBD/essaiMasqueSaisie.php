<?php

    // $variable1 ="CREATE TABLE monTest(nom,prenom,ville,manille=Martinique)";
    // $variable2 ="INSERT INTO monTest VALUES(nom,prenom,taille)";
    // $variable3 ="SELECT * FROM bonTest";

    // $createMasque = '#CREATE TABLE [a-z]\w*\([\w{1,25},]+\w{1,24}\)#';
    // $insertIntoMasque = '#INSERT INTO [a-z]\w* VALUES(...)#';
    // $selectFromMasque = '#SELECT \* FROM [a-z]\w#';

    // $masqueSaisie = [$createMasque,$insertIntoMasque,$selectFromMasque];

    // for($i=0;$i<count($masqueSaisie);$i++){
    //     if(preg_match($masqueSaisie[$i], $variable1,$matches)){
    //         echo "c'est ok";
    //         print_r ($matches);
    //     }else {
    //         echo "il y a une erreur";
    //         print_r ($matches);
    //     }

    // }
    $commande = "INSERT INTO monTest VALUES('nom','prenom','taille')"; 
    $commande = strtolower($commande);   
    $tabCommande = explode(" ",$commande);

    if ($tabCommande[0]=="create" && $tabCommande[1]=="table"){
        $instruction =$tabCommande[0].$tabCommande[1];
        $fichier = $tabCommande[2];
        if ((strpos($fichier,"(") && strpos($fichier,")") && strpos($fichier,","))){
            $tabFichier = explode("(",$fichier);
            $nomFichier = $tabFichier[0];
            $enteteFichier = $tabFichier[1];
            $enteteFichier = str_replace(",",";",$enteteFichier);
            $enteteFichier = str_replace(")",";",$enteteFichier);
        } else{
            $erreurSyntaxe = true;
        }
        
    } else if($tabCommande[0]=="insert" && $tabCommande[1]=="into" && (substr($tabCommande[3],0,5)=="values")){
        $instruction = $tabCommande[0].$tabCommande[1];
        $nomFichier = $tabCommande[2];
        if ((strpos($tabCommande[3],"(") && strpos($tabCommande[3],")") && strpos($tabCommande[3],",") && strpos($tabCommande[3],"'"))){
            $tabFichier = explode("(",$tabCommande[3]);
            $enteteFichier = $tabFichier[1];
            $enteteFichier = str_replace("'","",$enteteFichier);
            $enteteFichier = str_replace(",",";",$enteteFichier);
            $enteteFichier = str_replace(")",";",$enteteFichier);
        } else{
            $erreurSyntaxe = true;
        }
    } else if($tabCommande[0]=="select" && $tabCommande[1]=="*" && $tabCommande[2]=="from"){
        print_r($tabCommande);
        $instruction = $tabCommande[0].$tabCommande[1].$tabCommande[2];
        $nomFichier = $tabCommande[3];
    } else{
        $erreurSyntaxe = true;
    }

    if ($enteteFichier!=""){
        $donneesTraitement = [$instruction, $nomFichier, $enteteFichier];
    }else {
        $donneesTraitement = [$instruction, $nomFichier] ;
    }

    foreach($tabCommande as $element){
        echo $element."\n";
    }

    
    echo "\n".$instruction;
    echo "\n".$nomFichier;
    echo "\n".$enteteFichier;



?>