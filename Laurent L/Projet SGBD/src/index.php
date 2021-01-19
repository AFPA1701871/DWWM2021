<?php
    //variables
    require('service/verifications.php');
<<<<<<< HEAD
=======
    // $auth = false;
>>>>>>> bba43cd120d18552ac90c373cf5ae7e488682370


    //authentification
    do{
        $login = readline("Login    : ");
        $password = readline("Password : ");
        $user = $login.";".$password;
<<<<<<< HEAD
        $auth=login($user);
    }while ($auth==false);
=======
        // $fp = fopen("../BDD/config.ini","r");
        // while(!feof($fp)){
        //     //pour prendre ligne apres ligne
        //     $ligne = fgets($fp,50);        
        //     //pour couper la ligne en donnée unitaire dans un tableau
        //     $tabLine = explode(";",$ligne);   
        //     //concatener les données pour recreer une identification d'un user
        //     $ligne = $tabLine[0].";".$tabLine[1]; 
        //     if($user == $ligne){
        //         $auth = true;
        //     }   
        //     // echo $user." ".$ligne." ".$auth;   
        //     // var_dump($user);
        //     // var_dump($ligne);      
        // }
        // fclose($fp);
        
        authentification($user);
        if(!$auth){
            echo "Identification incorrecte.\n";
        }       
        
    }
>>>>>>> bba43cd120d18552ac90c373cf5ae7e488682370
    
    $commande = readline("SQL :>");
    $commande = strtolower($commande);

    // Verification de la syntaxe de la commande. Si verification ok création des différentes variables  ($instruction, $nomFichier, )  
    
   
    $informations = analyse($commande);

    echo $informations[0];
    echo "\n".$informations[1];
    echo "\n".$informations[2];  
    


    //traitement des demandes

    switch($instruction){
        case "CREATETABLE": echo "ok create";
            break;
        case "INSERTINTOVALUES": echo "ok insert";
            break;
        case "SELECT*FROM" : echo "ok select";
            break;
        default  ;

    }


?>