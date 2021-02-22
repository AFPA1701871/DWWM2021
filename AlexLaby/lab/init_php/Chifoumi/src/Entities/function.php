<?php
    function jeu(){
        //Variables
        $choixBot=rand(1,3);
        $choixPlayer=0;
        //Blocage de l'utilisateur
        do{
            $choixPlayer=readline("Choississez la pierre (1), la feuille (2) ou le ciseaux(3) ");
        }while($choixPlayer!=1 and $choixPlayer!=2 and $choixPlayer!=3);
        //Gérer le jeu
        if($choixPlayer==1 and $choixBot==1){
            echo "Égalité, l'ordinateur à fait pierre\n";
            $boolean=false;
        }else if($choixPlayer==1 and $choixBot==2){
            echo "Vous avez perdu, l'ordinateur à fait feuille\n";
            $boolean=false;
        }else if($choixPlayer==1 and $choixBot==3){
            echo "Vous avez gagné, l'ordinateur à fait ciseaux\n";
            $boolean=true;
        }else if($choixPlayer==2 and $choixBot==1){
            echo "Vous avez gagné, l'ordinateur à fait pierre\n";
            $boolean=true;
        }else if($choixPlayer==2 and $choixBot==2){
            echo "Égalité, l'ordinateur à fait feuille\n";
            $boolean=false;
        }else if($choixPlayer==2 and $choixBot==3){
            echo "Vous avez perdu, l'ordinateur à fait ciseaux\n";
            $boolean=false;
        }else if($choixPlayer==3 and $choixBot==1){
            echo "Vous avez perdu, l'ordinateur à fait pierre\n";
            $boolean=false;
        }else if($choixPlayer==3 and $choixBot==2){
            echo "Vous avez gagné, l'ordinateur à fait feuille\n";
            $boolean=true;
        }else if($choixPlayer==3 and $choixBot==3){
            echo "Égalité, l'ordinateur à fait ciseaux\n";
            $boolean=false;
        }
        return $boolean;
    }
    
    function affichage(){
        do{
            $choixPlayer=readline("Voulez vous voir le tableau des gagnants ? Écrivez 'oui' ou 'non' ");
        }while($choixPlayer!="oui" and $choixPlayer!="non");
        if($choixPlayer=="oui"){
            $boolean=true;
        }else{
            $boolean=false;
        }
        if($boolean==true){
            $fp = fopen("winners.txt","r");
            $count=1;
            while (!feof($fp)){
                $showTab[$count]=(fgets($fp, 4096));
                $count++;
            }
            fclose($fp);
            if($count>0){
                for($i=1;$i<count($showTab);$i++){
                    echo $i ." -> ". $showTab[$i];
                }  
            }
        }
    }
            

?>