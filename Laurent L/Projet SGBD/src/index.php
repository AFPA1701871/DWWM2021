<?php
    //variables
    require('service/verifications.php');
    $auth = false;


    //authentification
    while ($auth==false){
        $login = readline("Login    : ");
        $password = readline("Password : ");
        $user = $login.";".$password;
        $auth = authentification($user);
        if(!$auth){
            echo "Identification incorrecte.\n";
        }       
        
    }
    
    $commande = readline("SQL :>");
    
    verifSaisie($commande);
    
   
    
        


    //traitement des demandes

    // switch($instruction){
    //     case "CREATETABLE": echo "ok create";
    //         break;
    //     case "INSERTINTOVALUES": echo "ok insert";
    //         break;
    //     case "SELECT*FROM" : echo "ok select";
    //         break;
    //     default  ;

    // }


?>