<?php
function login(string $inputLogin, string $inputPassword){
    $fp = fopen("../BDD/config.ini", "r");
    $compteur=0;
    while(!feof($fp)){
        fgets($fp,4096);
        if($compteur==0){
            $compteur++;
        }
        if($compteur>0){
            $tabLoginPassword=explode(";",fgets($fp,4096));
        }   
    } if($tabLoginPassword[0]==$inputLogin and $tabLoginPassword[1]==$inputPassword){
        $boolean=true;
        }else{
            $boolean=false;
            echo "Login ou mot de passe incorrect "."\n";
        }
    return $boolean;
}

?>