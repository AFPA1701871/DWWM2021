<?php
    // demande l'identité de l'utilisateur
    function inscription(){
        do{
            $nom = ucwords(strtolower(readline("Quel est votre nom ? ")));
            $prenom = ucwords(strtolower(readline("Quel est votre prénom ? ")));
        } while (verifSaisie($nom)== false || verifSaisie(($prenom)) == false);
        $aSaisir = "\n".$prenom.";".$nom.";";
        return $aSaisir;
    }

    function verifSaisie($string){
        if(preg_match("#^[a-zA-Z\s]+$#",$string)){
            return true;
        }else{
            return false;
        }
    }

    // affichage et demande du choix de mouvement a l'utilisateur
    function choixMouvement(){
        do{
            echo "\nFaites votre choix parmis :\n  1/ pierre,\n  2/ feuille,\n  3/ ciseaux,\n";
            $choixMouvement = readline("Votre choix : ");    
        } while($choixMouvement!=1 && $choixMouvement!=2 && $choixMouvement!=3);        
        return $choixMouvement;     
    }

    //choix aleatoire CPU
    function mouvementAleatoireCPU(){       
        return intval(rand(1,3));
        
    }

    //détermination résultat
    function resultat($var){
        $choixCPU = mouvementAleatoireCPU();
        $mouvement = ["pierre","feuille","ciseaux"];
        echo "\nVotre choix s'est porté sur : ".($mouvement[($var-1)]);
        echo "\nVotre adversaire a choisi   : ".($mouvement[($choixCPU-1)]);
        if (($var==1 && $choixCPU==3)||($var==2 && $choixCPU==1)||($var==3 && $choixCPU==2)){
            echo "\n\n    Gagné!!!!\n";
            return true;
        } else if ($var==$choixCPU){
            echo "\n\n    Egalité\n"; 
        } else{
            echo "\n\n    Perdu!!!!\n";
        }   
    }

    //insertion de l'identité du vainqueur
    function insertionFichier($string){
        $fp = fopen("winner.txt","a");
        fputs($fp,$string);
        fclose($fp);
    }

    //choix utilisateur pour affichage
    function choixAffichage(){
        do{
            $affichage = readline("\nVoulez-vous afficher les vainqueurs de ce jeu ? ");
        }while(strtolower($affichage!="oui")&&strtolower($affichage!="non"));       
        return $affichage;
    }

    //affichage de la liste 
    function apercuTableau(){
        $fp = fopen("winner.txt","r");
        $i = 0;
        echo " Liste des gagnants\n";
        while(!feof($fp)){
            $ligne = fgets($fp,4096);
            $ligne = str_replace(";"," ",$ligne);
            if($i>0){
                echo "$i - $ligne";
            }
            $i++;
        }
        fclose($fp);
    }

    function repetitionJeu(){
        $rejouer = readline("\nVoulez-vous rejouer une partie ? ");
        return $rejouer;
    }


?>