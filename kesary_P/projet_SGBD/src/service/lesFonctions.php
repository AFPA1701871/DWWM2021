<?php
//Fonction quitter
function quitter($saisie){
    if($saisie == "quit"){
        fclose($fichier);
    }
}

//Fonction login
function seConnecter($login,$passwd){
    $fichier = fopen("../BDD/config.ini","r");
    //$compteur =0;

    $connect = false;
    while(!feof($fichier)){
        $str = fgets($fichier,4096);
        $tab = explode(";",$str); 
       // echo $tab[0]." ".$tab[1]."\n";
        //echo $login." ".$passwd."\n";
        //if (strcmp($login,$tab[0]) == 0 && strcmp($passwd,$tab[1]) == 0) {
        if ($login == $tab[0] && $passwd == $tab[1]) {
            $connect = true;
        }
    }
    fclose($fichier);

    return $connect;
}

?>