<?php
    //variables
    require("service/verifications.php");
    $auth = false;


    //authentification
    while ($auth==false){
        $login = readline("Login    : ");
        $password = readline("Password : ");
        $user = $login.";".$password;
        $fp = fopen("../BDD/config.ini","r");
        while(!feof($fp)){
            //pour prendre ligne apres ligne
            $ligne = fgets($fp,50);        
            //pour couper la ligne en donnée unitaire dans un tableau
            $tabLine = explode(";",$ligne);   
            //concatener les données pour recreer une identification d'un user
            $ligne = $tabLine[0].";".$tabLine[1]; 
            if($user == $ligne){
                $auth = true;
            }   
            // echo $user." ".$ligne." ".$auth;   
            // var_dump($user);
            // var_dump($ligne);      
        }
        if(!$auth){
            echo "Identification incorrecte.\n";
        }       
        fclose($fp);
    }
    
       
       
    
    $commande = readline("SQL :>");


    
    



?>