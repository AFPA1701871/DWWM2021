<?php
   function help($repUser){
        echo "1.create table nomTable(titreColonne1, titreColonne2,titreColonne3,tite); (création de table) \n
2.insert into table (insertion de données dans une table)\n
3.SELECT * FROM nomTable; \n
4.quit (Pour quitter)\n";
    }return;
/*****************************************CREATE_TABLE********************************************************** */
   function create_table($repUser){
    $nomfile= $repUser[2].".dwwm";
    $boolean = file_exists("../BDD/".$nomfile);
    if($boolean == false){
        $f = fopen("../BDD/".$nomfile,"x+");
            for($i=3;$i<count($repUser);$i++){
                fputs($f,$repUser[$i]);
                if($i<>count($repUser)-1){
                fputs($f,";");
                }
            }
        fclose($f);
    }else{
        echo"Erreur : Se fichier existe deja \n";
    }
    
    }return;
/****************************************INSERT_INTO************************************************************ */
   function insert ($repUser){
    $nomfile = $repUser[2].".dwwm";
    $boolean = file_exists("../BDD/".$nomfile);
    $f = fopen("../BDD/".$nomfile,"r") ;
    $ligne = explode(";",fgets($f,4096));
    $f = fopen("../BDD/".$nomfile,"a") ;

    if((count($repUser)-4)==count($ligne)){
            if($boolean){
                fputs($f,"\r\n");
                for ($i=4; $i<count($repUser) ; $i++) { 
                    fputs($f,$repUser[$i]);
                    if($i!=count($repUser)-1){
                        fputs($f,";");
                    } 
                } 
                fclose($f); 
            }else{
                echo "Se fichier n'existe pas \n";
            }
    }else{
        echo "Nombre de colonne incorrect\n\r";
    }

}
/****************************************SELECT_FROM************************************************************ */
function select($repUser){
    $nomfile = $repUser[3].".dwwm";
    if(!file_exists("../BDD/".$nomfile)){
        echo "Se fichier n'existe pas\n";
    }else{
        $f = fopen("../BDD/".$nomfile,"r") ;
        while(!feof($f)){
            $ligne = explode(";",fgets($f,4096));
            for ($i = 0; $i < count($ligne);$i++){
                $ligne= str_replace("\n","",$ligne);
                $ligne = str_replace("\r","",$ligne);
                $ligne = str_replace("\t","",$ligne);
                echo $ligne[$i]." ";
            }
            echo "\n";
        }
    }
}

function selectColonne($repUser){
    $nomfile = $repUser[1].".dwwm";
    if(!file_exists("../BDD/".$nomfile)){
        echo "Se fichier n'existe pas\n";
    }else{
        $f = fopen("../BDD/".$nomfile,"r") ;
        $j = 0;
        while(!feof($f)){
            $ligne = explode(";",fgets($f,4096));
            for ($i = 0; $i < count($ligne);$i++){
                $tableau[$j][$i] = $ligne[$i];
               
            }
            $j++;
            
        }
    }   
}
/***************************************VERIFICATION*********************************************************** */  
    function verifLenght($repUser){
        $boolean = true;
        for ($i=0; $i < count($repUser) ; $i++) {
            if(strlen($repUser[$i])>25){
                $boolean = false;
                echo "Erreurs nombre de caracteres superieur a 25 ! \n";
                break;
            }
            
        }
        return $boolean;
    }

?>