<?php
    require('./service/methode.php');
        do{
            
            $userName = readline("Username: ");
            $mdp = readline("Password : ");
            $login = $userName.";".$mdp;
            $fichierLogin = fopen("../BDD/config.ini","r");
            
                if($fichierLogin){//Si lecture du fichier s'est bien dérouler
                    //Tant qu'on est pas à la fin du fichier
                    $boolean = false;
                    $ligne = fgets($fichierLogin,4096); //Lit ligne par ligne 4096 octets
                    while(!feof($fichierLogin)){
                        $ligne = fgets($fichierLogin,4096);
                        if(strstr($ligne,$login)){
                            $boolean=true;
                            break;
                        }
                    }
                    fclose($fichierLogin);
                }
                if ($boolean) {
                    echo"Identifiant correct"."\n";
                    $repUser = "";
                }else{
                    echo "Identifiant inccorect "."\n";
                    $repUser = readline("(quit) pour quitter, (Entrer pour continuer)");
                }
        }while(($boolean != true) && ($repUser != "quit"));

        echo "help pour plus d'information"."\n"."quit pour quitter"."\n";
    
        do{
            $repUser = readline("SQL :>"); //Affichage console des requete sql
            $repUser = strtolower($repUser);
            $repUser = str_replace("(","",$repUser);
            $repUser = str_replace(")","",$repUser);
            $repUser = str_replace(";","",$repUser);
            $repUser = str_replace(",","",$repUser);
            $repUser =  explode(" ",$repUser);

            if ($repUser[0] == "help"){ //Ouverture menu help
            help($repUser);  

            }elseif($repUser[0] =="create" && $repUser[1]== "table"){ //Creation de la table + creation fichier
                if(verifLenght($repUser)){
                    
                    create_table($repUser);
                }

            }elseif($repUser[0] == "insert" && $repUser[1] =="into"){
                insert($repUser);

            }elseif($repUser[0] == "select" && $repUser[1] =="*" && $repUser[2]=="from"){
                select($repUser);
                
            }elseif ($repUser[0] != "quit") {
                echo "Commande incorrect !\n ";
            }
        
        }while($repUser[0]!= "quit");
               
            

        

        

?>