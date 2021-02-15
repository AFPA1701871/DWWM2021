<?php
require "./services/metodes.php";

function chargerClasse($classe){
    require "./entities/". $classe . ".class.php";
}
spl_autoload_register("chargerClasse");


$j1=new Player(readline("entrez votre pseudo : "));//creation du joueur

do{
    do{
        $action=$j1->move(strtolower(readline("vers où aller ? (Nord/Sud/Est/Ouest) ")));//déplacement
    }while(!$action);
    if ($action=="quit"){//juste pour quit
        break;
    }
        if($action<2){
            $banditManchot=new BanditManchot;//creation bandit manchot
            echo "un bandit manchot apparait !\nil propose à ".$j1->getPseudo()." de jouer avec sa vie\n";
            do{
                $choix=strtolower(readline("acceptez vous ? (Accepter/Refuser) "));
            }while($choix!="refuser"&&$choix!="accepter");
            if($choix=="accepter"){
                $j1->play($banditManchot);//parier
            }
        }else{
            $monster=new Monster;//creation monstre
            if ($monster->getPseudo()=="le gros monstre"){
                echo "un tres gros monstre apparait !\n";
            }else{
                echo "un monstre apparait.\n";
            }
            matchAMort($j1,$monster);//combat
        }
}while($j1->getLifePoint()>0);
echo "Le score de ".$j1->getPseudo()." est de ".$j1->getScore();//affichage du score
?>