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
            $testCharTab=explode(",",substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-iconv_strlen($inputUser))));
            $boolean = true;
            foreach ($testCharTab as $test){
                if (iconv_strlen($test) >= 25){
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
            $inputUser=str_replace(",",";",$inputUser);
            fputs($fp, substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-iconv_strlen($inputUser))).";");
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
            $valueTab = explode(",",substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-iconv_strlen($inputUser))));
            $count=0;
            while(!feof($fp)){
                if ($count == 0){
                    $nbColoneTab=explode(";", fgets($fp,4096));
                }
            }
            fclose($fp);
            //compte les caractères
            $boolean = true;
            foreach ($valueTab as $test){
                if (iconv_strlen($test) >= 25){
                    $boolean = false;
                }
            }
            //si les conditions sont respectées, on autorise l'utilisateur à écrire dans le fichier déjà créé, sinon message d'erreur
            if (count($valueTab)+1 == count($nbColoneTab) and $boolean==true){
                $fp = fopen($nomFichier,"a");
                fputs($fp,"\n");
                $inputUser=str_replace(",",";",$inputUser);
                $inputUser=str_replace("'","",$inputUser);
                fputs($fp,substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-iconv_strlen($inputUser))).";");
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
        //Voir si le fichier existe
        $newFileName="..\BDD\\".substr($inputUser,14,strpos($inputUser,";")-14).".dwwm";
        if(file_exists($newFileName)){
            //Si oui on ouvre et on lit pour afficher le tableau
            $fp = fopen("..\BDD\\".substr($inputUser,14,strpos($inputUser,";")-14).".dwwm","r");
            $count=0;
            $cadre="+";
            while (!feof($fp)){
                $showTab[$count]=explode(";", fgets($fp, 4096));
                $count++;
            }
            fclose($fp);
            //Chercher à savoir qui est le plus grand pour caler le tableau dessus
            for ($i=0;$i<count($showTab[0])-1;$i++){  //$i == ligne
                $plusGrand="";
                for ($j=0;$j<count($showTab)-1;$j++){  //$j == colonne
                    if (iconv_strlen($showTab[$j][$i])<iconv_strlen($showTab[$j+1][$i])){
                        $plusGrand=$showTab[$j+1][$i];
                    }else if(iconv_strlen($showTab[$j][$i])>iconv_strlen($showTab[$j+1][$i])){
                        $plusGrand=$showTab[$j][$i];
                    }
                }
                //Une fois qu'on le sait, gérer les espaces et les batons pour affichage de ligne
                for ($j=0;$j<count($showTab);$j++){
                    while(iconv_strlen($showTab[$j][$i])<=iconv_strlen($plusGrand)){
                        $showTab[$j][$i].=" ";
                    }
                    $showTab[$j][$i].="|";
                    $stock=$showTab[$j][$i];
                    if ($i==0){
                        $showTab[$j][$i]="| ".$showTab[$j][$i];
                    }else{
                        $showTab[$j][$i]=" ".$showTab[$j][$i];
                    }
                }
                //Gérer les affichages de colonne
                for ($k=0;$k<iconv_strlen($stock)+2;$k++){
                    if($k==iconv_strlen($stock)){
                        $cadre.="+";
                    }else if($k<iconv_strlen($stock)){
                        $cadre.="-";
                    }
                }
            }
            //Affichage final
            for($i=0;$i<count($showTab);$i++){
                $var="";
                for($j=0;$j<(count($showTab[$i]));$j++){
                        $var.=$showTab[$i][$j];
                }
                if($i==0 or $i==1 or $i==count($showTab)-1){
                    if($i==count($showTab)-1){
                        echo $var."\n";
                        echo $cadre."\n";
                    }else if($i==1){
                        echo $cadre."\n";
                        echo $var;
                    }else{
                        echo $cadre."\n";
                        echo $var;
                    }
                }else{
                    echo $var;
                } 
            }
        }else{
            echo "Le fichier n'existe pas"."\n";
        }
    }

?>