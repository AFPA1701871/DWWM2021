<?php
    //variables
    require('service/verifications.php');


    //authentification
    do{
        $login = readline("Login    : ");
        $password = readline("Password : ");
        $user = $login.";".$password;
        $auth=login($user);
    }while ($auth==false);
    
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