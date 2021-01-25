<?php
    $prenom=readline("prénom du joueur : ");
    $nom=readline("nom du joueur : ");
    do{
        $shifumiJoueur=strtoupper(readline("PIERRE, FEUILLE ou CISEAUX ? "));
    }while($shifumiJoueur!="PIERRE" && $shifumiJoueur!="FEUILLE" && $shifumiJoueur!="CISEAUX");
    $temp=random_int(1,3);
    if ($temp==1){
        $shifumIA="PIERRE";
    }else if ($temp==2){
        $shifumIA="FEUILLE";
    }else{
        $shifumIA="CISEAUX";
    }
    echo $shifumIA." !!!\n";
    if ($shifumIA==$shifumiJoueur){
        echo "EGALITER\n";
    }else if (($shifumIA=="PIERRE"&&$shifumiJoueur=="CISEAUX")||($shifumIA=="FEUILLE"&&$shifumiJoueur=="PIERRE")||($shifumIA=="CISEAUX"&&$shifumiJoueur=="FEUILLE")){
        echo "PERDU\n";
    }else{
        echo "GAGNER\n";
        $numeroDeLigne=0;
        $fp = fopen("../Shi-Fu-Mi/BDD/pantheon.txt", "r");
        while (!feof($fp)){
            $ligne = fgets($fp,4096);
            $numeroDeLigne++;
        }
        fclose($fp);
        $fp = fopen("../Shi-Fu-Mi/BDD/pantheon.txt", "a");
        fputs($fp,$numeroDeLigne."- ".$prenom." ".$nom."\n");
        fclose($fp);
    }
    do{
    $voirGagnant=strtoupper(readline("souhaitez vous voir la liste des gagnants ? (O/N) "));
    }while($voirGagnant!="O"&&$voirGagnant!="N");
    if($voirGagnant=="O"){
        $fp = fopen("../Shi-Fu-Mi/BDD/pantheon.txt", "r");
        for($i=0;$i<3&&!feof($fp);$i++){
            $ligne = fgets($fp,4096);
            echo $ligne;
        }
        fclose($fp);
    }
?>