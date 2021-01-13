<?php 

    function f_deplacement(array $tab,int $lignePion,int $colonnePion,int $ligneDeplacement,int $colonneDeplacement){
        $bool=false;
        //Selon le type de Pion
        switch($tab[$lignePion][$colonnePion]){
            // La Reine Q => toutes les directions
            case "Q":
                // si diagonale
                if(abs($lignePion-$ligneDeplacement)===abs($colonnePion-$colonneDeplacement)){
                    $bool=true;
                // Avance ou recule
                }elseif(($lignePion==$ligneDeplacement && ($colonneDeplacement!=$colonnePion ))){
                    $bool=true;
                // Droite ou gauche
                }elseif(($lignePion!=$ligneDeplacement && ($colonneDeplacement==$colonnePion ))){
                    $bool=true;
                }
                
            // Le Roi K  => autour de lui 1 case
            case "K":
                // Si droite OU gauche
                if(($lignePion==$ligneDeplacement && ($colonneDeplacement==$colonnePion+1 OR $colonneDeplacement==$colonnePion-1))){
                    $bool=true;
                // Si avance OU recule
                }elseif(($colonnePion==$colonneDeplacement && ($ligneDeplacement==$lignePion+1 OR $ligneDeplacement==$lignePion-1))){ 
                    $bool=true;
                // Si diagonale haute
                }elseif(($lignePion+1==$ligneDeplacement && ($colonneDeplacement==$colonnePion+1 OR $colonneDeplacement==$colonnePion-1))){
                    $bool=true;
                // Si diagonale basse
                }elseif(($lignePion-1==$ligneDeplacement && ($colonneDeplacement==$colonnePion+1 OR $colonneDeplacement==$colonnePion-1))){
                    $bool=true;    
                }
                break;
            // Les pions P => 1er dep 2 ou 1, apres que 1 devant lui / diag que pour manger
            case "P":
                // Avance tout droit : ligne ++ meme colonne
                if(($lignePion+1==$ligneDeplacement && ($colonneDeplacement==$colonnePion ))){
                    $bool=true;
                // Diagonale si mange adversaire: ligne ++ && (colonne-- OU colonne ++) SI pion adversaire
                }elseif(($lignePion+1==$ligneDeplacement && ($colonneDeplacement==$colonnePion ))){
                    $bool=true;
                }
                break;
            // La tour T   => croix pas de limite
            case "T":
                // Avance ou recule
                if(($lignePion==$ligneDeplacement && ($colonneDeplacement!=$colonnePion ))){
                    $bool=true;
                // Droite ou gauche
                }elseif(($lignePion!=$ligneDeplacement && ($colonneDeplacement==$colonnePion ))){
                    $bool=true;
                }
                break;
            // Le Cavalier => deplacement en L (2 et 1)
            case "C":
                // haut (droite ou gauche)
                if($ligneDeplacement==$lignePion+2 && ($colonneDeplacement==$colonnePion-1 OR $colonneDeplacement==$colonnePion+1)){
                
                // droite (haut OU  bas) 
                }elseif(($colonnePion+2==$colonneDeplacement && ($ligneDeplacement=$lignePion+1 OR $ligneDeplacement=$lignePion-1))){
    
                // bas droite OU bas gauche)
                }elseif($ligneDeplacement==$lignePion-2 && ($colonneDeplacement==$colonnePion-1 OR $colonneDeplacement==$colonnePion+1)){
                
                // gauche haut OU gauche bas
                }elseif(($colonnePion-2==$colonneDeplacement && ($ligneDeplacement=$lignePion+1 OR $ligneDeplacement=$lignePion-1))){
                }
                break;
            // Le Fou => diag pas de limite
            case "F":
                // diagonale avant ou arriere
                if(abs($lignePion-$ligneDeplacement)===abs($colonnePion-$colonneDeplacement)){
                        $bool=true;
                }
                break;
            default:
                # code...
                break;
        }
        return $bool;
    }
    
    function f_afficherEchec(array $tab){
        echo "Partie echec : "."\n";
        
        echo "\n";
        $tab2 = array_reverse($tab);
        $ii=8;
        for ($i=0;$i<NOMBRE_LIGNE; $i++){ 
            echo $ii." ¦ ";   
            //echo substr(CHIFFRE_LIGNE,$ii,1) ." ";
            $ii--;
            for ($j=0; $j<NOMBRE_COLONNE; $j++) { 
                echo $tab2[$i][$j]. " ";
            }
            echo "\n";
        }
        
        //Affiche les lettres Colonne
        echo "   ----------------"."\n";
        echo "    ";
        for ($i=0; $i < strlen(LETTRE_COLONNE); $i++){ 
            echo substr(LETTRE_COLONNE,$i,1)." ";
        }
        
        echo "\n";
    }
    
    function f_initialiserEchec(){
        $tab=[];
        for ($i=0; $i <NOMBRE_LIGNE ; $i++) { 
            for ($j=0; $j <NOMBRE_COLONNE ; $j++) { 
                $tab[$i][$j] = CARACTERE_VIDE_ECHIQUIER;
            }
        }
        //Afficher les pions
        for ($i=0; $i <NOMBRE_COLONNE ; $i++) { 
            //pion Moi
            $tab[1][$i]="P";
            //pion Adversaire
            //$tab[6][$i]="p";
        }
        //Tour
            $tab[0][0]="T";
            $tab[0][7]="T";
            
            //$tab[7][0]="t";
            //$tab[7][7]="t";
        //Cavalier
            $tab[0][1]="C";
            $tab[0][6]="C";
    
            //$tab[7][1]="c";
            //$tab[7][6]="c";
        //Fou
            $tab[0][2]="F";
            $tab[0][5]="F";
    
            //$tab[7][2]="f";
            //$tab[7][5]="f";
        //Roi
            $tab[0][3]="K";
            //$tab[7][3]="k";
        //Reine
            $tab[0][4]="Q";
            //$tab[7][4]="q";
        return $tab;   
    }
    
?>