<?php

//Se connecter
    function testConnexion(string $userLogin,string $userMdp) {
        $auth=false;
        $fichier = fopen("../BDD/config.ini", "r");
        $count=0;
        while(!feof($fichier)) {
            $tabLogin=explode(";",fgets($fichier,4096));
            if($count!=0){
                if ($userLogin==$tabLogin[0] && $userMdp==$tabLogin[1]){
                    $auth=true;
                    echo "\nTu es connecté \n\n";
                }
                break;
            }
            $count++;
        }
        if($auth==false){
            echo "Erreur, tu n'es pas connecté -_- \n";
        }
        fclose($fichier);
        return $auth;
    }

//Quitter l'application
    function quit($userAction){
        if($userAction=="quit"){
            echo "\n\nAu revoir et à bientôt !\n\n";
            exit;
        }
    }

?>