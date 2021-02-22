<?php

    //choix utilisateur
    function choixUt($choixUt){
        $tab=array("PIERRE","FEUILLE","CISEAUX");
       
        switch($choixUt){
            case 0 :
                $resultUt=$tab[0];
                echo "vous avez joué : $resultUt \n";
            break;

            case 1 :
                $resultUt=$tab[1];
                echo "vous avez joué : $resultUt \n";
            break;

            case 2 :
                $resultUt=$tab[2];
                echo "vous avez joué : $resultUt \n";
            break;
        }
        return $resultUt;
    }

    //choix bot
    function choixBot(){
        $choixBot=rand(0,2);
        $tab=array("PIERRE","FEUILLE","CISEAUX");
       
        switch($choixBot){
            case 0 :
                $resultBot=$tab[0];
                echo "votre adversaire a joué : $resultBot \n";
            break;

            case 1 :
                $resultBot=$tab[1];
                echo "votre adversaire a joué : $resultBot \n";
            break;

            case 2 :
                $resultBot=$tab[2];
                echo "votre adversaire a joué : $resultBot \n";
            break;
        }
        return $resultBot;
    }

    //résultat
    function resultat($joueur,$ordi,$resultUt,$resultBot){
        $result="$resultUt,$resultBot";
        $victoire="";
        //comparateur de résultat
        if($result=="PIERRE,CISEAUX" or $result=="FEUILLE,PIERRE" or $result=="CISEAUX,FEUILLE"){
            $victoire=$joueur;
        }
        else if($result=="PIERRE,FEUILLE" or $result=="FEUILLE,CISEAUX" or $result=="CISEAUX,PIERRE"){
            $victoire=$ordi;
        }
        else if($result=="PIERRE,PIERRE" or $result=="FEUILLE,FEUILLE" or $result=="CISEAUX,CISEAUX"){
            $victoire="auncun";
        }

        //décision gagnant
        if($victoire==$joueur){
            echo "vous avez gagné !!!\n";
            //ajout dans le fichier winner.txt
            $fp=fopen("../src/winner.txt", "a");
            fputs($fp, "$joueur\n");
            fclose($fp);
        }
        else if($victoire==$ordi){
            echo "vous avez perdu !!!\n";
        }
        else if($victoire=="aucun"){
            echo "égalité !!!\n";
        }
    }

    function liste(){
        $fp=fopen("../src/winner.txt", "r");
        $texte=file($fp);
        for($i=0;$i=2;$i++){
            foreach($texte as $noms){
                echo $noms;
            }
        }
    }
?>