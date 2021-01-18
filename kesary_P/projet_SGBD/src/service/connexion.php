<?php
//Permet de se connecter au fichier config.ini, cette fonction retourne true si le login et mot de passe est trouvé
function seConnecter($login,$passwd){
    $fichier = fopen("../BDD/config.ini","r");
    $connect = false;
    while(!feof($fichier)){
        $str = fgets($fichier,4096);
        $tab = explode(";",$str); 
        if ($login == $tab[0] && $passwd == $tab[1]) {
            $connect = true;
        }
    }
    fclose($fichier);
    return $connect;
}

?>