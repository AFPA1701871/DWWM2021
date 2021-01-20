<?php

    //Permet de créer le fichier config.ini
    function initConfig(){
        $fp = fopen("../BDD/config.ini", "w");
        $varID = "login;password"."\n";
        $varIDrep= "admin;admin";

        fputs($fp,$varID);
        fputs($fp,$varIDrep);
        fclose($fp);
    }
    //Fonction pour se logger et accéder à la suite
    function login(string $inputLogin, string $inputPassword){
        $fp = fopen("../BDD/config.ini", "r");
        $compteur=0;
        while(!feof($fp)){
            fgets($fp,4096);
            if($compteur==0){
                $compteur++;
            }
            if($compteur>0){
                $tabLoginPassword=explode(";",fgets($fp,4096));
            }   
        } if($tabLoginPassword[0]==$inputLogin and $tabLoginPassword[1]==$inputPassword){
            $boolean=true;
            }else{
                $boolean=false;
                echo "Login ou mot de passe incorrect "."\n";
            }
        return $boolean;
    }
    //Fonction pour accèder aux différentes fonctions SQL en gérant les erreurs de syntaxe de l'utilisateur
    function call($inputUser){
        //Converti mon string en tableau pour effectuer des vérifs de caractères
        $tabCall = explode(" ",$inputUser);
        //Switch pour gerer les différents "menus" et gérer la casse
        switch ($inputUser){
            case "help":
                echo 
                "Les syntaxes ne sont pas sensibles à la casse.\n 
                Syntaxe pour créer une table :\r 
                create table nomTable(titreColonne1,titreColonne2,titreColonne3,...);\n 
                Syntaxe pour intégrer des données dans une table :\r
                2.INSERT INTO nomTable VALUES('valeur 1','valeur 2'); \n 
                Affichage de données :\r
                SELECT * FROM nomTable; \r
                Cette requête SQL va sélectionner (SELECT) tous les champs provenant (FROM) de la table appelée “nomTable”. \n 
                SELECT nom_du_champ FROM nomTable; \r
                Cette requête SQL va sélectionner (SELECT) le champ “nom_du_champ” provenant (FROM) de la table appelé “nomTable”. \n 
                SELECT * FROM nomTable Order by nom_du_champ ASC; \r
                Cette requête SQL va sélectionner (SELECT) tous les champs provenant (FROM) de la table appelée “nomTable” et les affiche ordonnés par nom_du_champ. \r 
                ASC : Ordre croissant \r
                DESC : Ordre décroissant \n 
                Écrire quit pour quitter \n";
                break;
            case "quit":
                exit;
            case "" :
                break;
            case strtoupper($tabCall[0]) == "CREATE" and strtoupper($tabCall[1]) == "TABLE" and substr($inputUser,-1,1) == ";" and strpos($tabCall[2],"(") >= 1 and strpos($tabCall[2],")") >=1:
                createTable($inputUser);
                break;
            case strtoupper($tabCall[0]) == "INSERT" and strtoupper($tabCall[1]) == "INTO" and strtoupper(substr($tabCall[3],0,6)) == "VALUES" and substr($inputUser,-1,1) == ";" and strpos($tabCall[3],"(") >= 1 and strpos($tabCall[3],")") >=1:
                insertInto($inputUser);
                break;
            case strtoupper($tabCall[0]) == "SELECT" and strtoupper($tabCall[2]) == "FROM" and substr($inputUser,-1,1) == ";" and strpos($tabCall[3],"(") < 1 and strpos($tabCall[3],")") < 1:
                if($tabCall[1] == "*"){
                    selectEtoileFrom($inputUser);
                }else{
                    selectFrom($inputUser);
                }
                break;
            default:
                echo "Erreur de syntaxe.\n"; 
        } 
        $stop = false;
        return $stop;
    }
    //Fonction pour créer un fichier
    function createTable($inputUser){
        $nomFichier="../BDD/".substr($inputUser,13,(strpos($inputUser,"(")-13)).".dwwm";
        if(file_exists($nomFichier)){
            echo "Ce fichier existe déjà .\n";
        }else{
            //on va tester le nombre de caractères
            $testCharTab=explode(",",substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser))));
            $boolean = true;
            foreach ($testCharTab as $test){
                if (strlen($test) >= 25){
                    $boolean = false;
                }
            }
            //on va tester que la colonne x et la colonne y sont différentes
            for($i=0;$i<count($testCharTab)-1;$i++){
                for($j=$i+1;$j<count($testCharTab);$j++){
                    if($testCharTab[$i]==$testCharTab[$j]){
                        $boolean=false;
                    }
                }
            }
            //si les deux conditions sont respectées, le programme autorise l'user à créer un fichier et écrire dedans
            if ($boolean == true){
            $fp = fopen($nomFichier,"w");
            fputs($fp, substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser))));
            fclose($fp);
            echo substr($inputUser,13,(strpos($inputUser,"(")-13))." est créé.\n";
            }else{
                echo "Mêmes données entrées dans les colonnes.\n"."Rappel : vos valeurs dans les colonnes ne doivents pas dépasser 25 caractères.\n";
            }
        }
    }
    //Fonction pour insérer des données
    function insertInto($inputUser){
        $nomFichier="../BDD/".substr($inputUser,12,(strpos(strtoupper($inputUser),"VALUES")-13)).".dwwm";
        //Vérifie que le fichier existe et vérifie où mettre les données et le nombre de colonne grâce à un tableau
        if(file_exists($nomFichier)){
            $fp = fopen($nomFichier, "r");
            $valueTab = explode(",",substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser))));
            $count=0;
            while(!feof($fp)){
                if ($count == 0){
                    $nbColoneTab=explode(",", fgets($fp,4096));
                }
            }
            fclose($fp);
            //compte les caractères
            $boolean = true;
            foreach ($valueTab as $test){
                if (strlen($test) >= 25){
                    $boolean = false;
                }
            }
            //si les conditions sont respectées, on autorise l'utilisateur à écrire dans le fichier déjà créé, sinon message d'erreur
            if (count($valueTab) == count($nbColoneTab) and $boolean==true){
                $fp = fopen($nomFichier,"a");
                fputs($fp,"\n");
                fputs($fp,substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser))));
                fclose($fp);
            }else{
                echo "Erreur de syntaxe, vous devez entrer ".count($nbColoneTab)." valeurs dans les '()' séparé par des ','.\n"."Rappel : vos valeurs dans les colonnes ne doivents pas dépasser 25 caractères.\n";
            }
        }else{
            echo "Ce fichier n'existe pas.\n";
        }
    }
    //Permet d'afficher son fichier sous forme de tableau
    function selectEtoileFrom($inputUser){
        //Vérifier si le fichier existe
        $nomFichier="../BDD/".substr($inputUser,14,(strpos($inputUser,";"))-14).".dwwm";
        //Si le fichier existe, on va afficher le tableau. Sinon message d'erreur.
        if(file_exists($nomFichier)){
            $fp = fopen($nomFichier, "r");
            $compteur=0;
            while(!feof($fp)){
                $tabAffichage=explode(",",fgets($fp,4096));
                $compteur++;
            }
        }else{
            echo "Ce fichier n'existe pas.\n";
        }

    }

?>