<?php

    //se connecter
    function login(string $log,string $password){
        $fp=fopen("../BDD/config.ini","r");
        $compteur=0;
        while(!feof($fp)){
            fgets($fp,4096);
            if($compteur==0){
                $compteur++;
            }
            if($compteur>0){
                $tabLog=explode(";",fgets($fp,4096));
            }   
        } if($tabLog[0]==$log and $tabLog[1]==$password){
            $bool=true;
            }else{
                $bool=false;
                echo "Login ou mot de passe incorrect "."\n";
            }
        return $bool;
    }

    //création de la table
    function create($table){
        $nom=$table[2].".dwwm";
        $bool=file_exists("../BDD/".$nom);
        if($bool==false){
            $f = fopen("../BDD/".$nom,"x+");
                for($i=3;$i<count($table);$i++){
                    fputs($f,$table[$i]);
                    if($i<>count($table)-1){
                    fputs($f,";");
                    }
                }
            fclose($f);
        }else{
            echo"Erreur : Se fp existe detempa \n";
        }
        
        return;
    }

    //vérification de la taille
    function taille($table){
        $bool=true;
        for ($i=0;$i<count($table);$i++){
            if(strlen($table[$i])>25){
                $bool=false;
                echo "Erreurs nombre de caracteres superieur a 25 ! \n";
                break;
            }
            
        }
        return $bool;
    }

    //insert into
    function insert($table){
        if (!file_exists("../BDD/".$table[2].".dwwm")){
            echo "fp introuvable.\n";
            return;
        }

            $fp = fopen("../BDD/".$table[2].".dwwm","r");
            $ligne = explode(";",fgets($fp, 4096));
            $fp = fopen("../BDD/".$table[2].".dwwm","a");
            
        if ((count($table)-4) == count($ligne)){
            fputs($fp,"\n");
            for ($i=4;$i<count($table);$i++){
                fputs($fp,$table[$i]);
                if ($i<>count($table)-1){
                    fputs($fp,";");
                }                    
            }
        }else{
            echo "Le nombre de colonnes tapées ne correspond pas au nombre de colonnes du tableau.\n";
        }
        fclose($fp);
    }

    //seclect from
    function select($table){
        $nom=$table[3].".dwwm";
        if(!file_exists("../BDD/".$nom)){
            echo "Se fp n'existe pas\n";
        }else{
            $fp=fopen("../BDD/".$nom,"r") ;
            while(!feof($f)){
                $ligne=explode(";",fgets($f,4096));
                for ($i=0;$i<count($ligne);$i++){
                    $ligne=str_replace("\n","",$ligne);
                    $ligne=str_replace("\r","",$ligne);
                    $ligne=str_replace("\t","",$ligne);
                    echo $ligne[$i]." ";
                }
                echo "\n";
            }
        }
    }

    //seclect from
    function selectNom($table){
        
    }

    
?>