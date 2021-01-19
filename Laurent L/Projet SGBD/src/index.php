<?php
    //variables
    require('service/verifications.php');
<<<<<<< HEAD
    $auth = false;
=======
<<<<<<< HEAD
=======
    // $auth = false;
>>>>>>> bba43cd120d18552ac90c373cf5ae7e488682370
>>>>>>> 46bf071425c0a3bba3afdd903980b1d2ce5580e4


    //authentification
    do{
        $login = readline("Login    : ");
        $password = readline("Password : ");
        $user = $login.";".$password;
<<<<<<< HEAD
        $auth = authentification($user);
=======
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
>>>>>>> 46bf071425c0a3bba3afdd903980b1d2ce5580e4
        if(!$auth){
            echo "Identification incorrecte.\n";
        }       
        
    }
>>>>>>> bba43cd120d18552ac90c373cf5ae7e488682370
    
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