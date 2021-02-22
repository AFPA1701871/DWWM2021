<?php
        require("../src/fonctions.php");
    //variables
   
    $auth = false;
    //authentification                   
    while ($auth==false or strlen($login)>25 or strlen($password)>25){
        $login = readline("Login    : ");
        $password = readline("Password : ");
        $user = $login.";".$password;
        $fp = fopen("../bdd/config.ini","r");
        
        while(!feof($fp)){
           
            //pour prendre ligne apres ligne
            $ligne = fgets($fp,4096);        
            //pour couper la ligne en donnée unitaire dans un tableau
            $tabLine = explode(";",$ligne);  
            //concatener les données pour recreer une identification d'un user
           
            $ligne = $tabLine[0].";".$tabLine[1];       
            if($user == $ligne){
                $auth = true;
                break;
            }
            
        }
        if(!$auth){
            echo"Identification incorrecte.\n";
        }  
    }   
    fclose($fp);
    // requetes
    do {
        $requete=readline("SQL :> ");

        if (strtoupper(substr($requete,0,13))=="CREATE TABLE ") {
           createTable($requete);
        }
        elseif (strtoupper(substr($requete,0,12))=="INSERT INTO ") {
            insertInto($requete);
        }
         // cas où la requête est un affichage de toutes les données de la table
         elseif (substr($requete,0,14)=="SELECT * FROM ") {
            selectAll($requete);
        }
        
        elseif ($requete=="quit") {
            echo "au revoir";
        }
        else {
            echo "requête incorrecte\n";
        }
    } while ($requete!="quit");
?>

        
    
       
       
    
    

    
    



?>