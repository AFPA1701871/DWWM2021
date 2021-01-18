<?php
    //variables
   
    $auth = false;
    //authentification
    while ($auth==false){
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
        else{
            $commande=readline("SQL:>");
        }
    }   
    fclose($fp);

        
    
       
       
    
    

    
    



?>