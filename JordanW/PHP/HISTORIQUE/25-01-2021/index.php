<?php 

    define("LIEN_TICKET","./entities/ticket.txt");
    define("LIEN_PRODUIT","./entities/produit.txt");

    require ('fonctionsPOO.php');
    
    
    while(true){
        do{
            // Saisir le type d'utilisation
            echo "Taper c pour acceder aux courses"."\n"; 
            echo "Taper g pour acceder à l'espace du Gestionnaire : "."\n";
            echo "Taper quit pour quitter"."\n";
            $utilisateur = readline("Que voulez vous faire :");
        }while($utilisateur!= "c" && $utilisateur!="g" && $utilisateur!="quit");

        if($utilisateur=="quit"){exit();}

        if($utilisateur=="c"){
            f_client();
        }else{
            f_gestionnaire();
        }
    }
   
        
?>  