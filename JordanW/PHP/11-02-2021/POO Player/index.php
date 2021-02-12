<?php 

    function chargementClass($classe){
	require('./Class/'. $classe .'.class.php');
    }   
	spl_autoload_register('chargementClass');


    $strPseudo = readline("Saisir votre pseudo :");

    $player = new Player($strPseudo);

    do{
        
        $player->move();// Deplacement player

        if(rand(1,3)==1){// 1=bandit / 2 ou 3 Monster
            $banditManchot = new BanditManchot();
            
            if($player->play($banditManchot) =="O"){
                $winLose= $banditManchot->howManyWeWinOrLose();
                if($banditManchot->winOrLose()){
                    echo $player->get_pseudo() .", tu as gagné !\n";  
                    $player->addLifePoint($winLose); // true:win
                }else{
                    echo $player->get_pseudo() .", tu as perdu !\n";  
                    $player->reduceLifePoint($winLose); //false:lose
                }
            }
        }else{
            $monster = new Monster();
            $boolTour=true;
            if($monster->get_lifePoint()<60){
                $intScoreAjouter=1;
            }else{
                $intScoreAjouter=2;
            }
            do{
                if($boolTour){
                    echo "\nLe monstre : \n";
                    $monster->toStringLifePoint();
                    $player->attack($monster);
                    echo $player->get_pseudo(). " attaque le Monstre de ".$player->get_strenghtPoint()."\n";
                    $monster->toStringLifePoint();
                }else{
                    echo "\n".$player->get_pseudo(). " : \n";
                    $player->toStringLifePoint();
                    $monster->attack($player);
                    echo "Le monster attaque ".$player->get_pseudo()." de ".$monster->get_strenghtPoint()."\n";
                    $player->toStringLifePoint();
               }
               $boolTour=!$boolTour;
            }while($monster->get_lifePoint()>0 && $player->get_lifePoint()>0);
            
            if($monster->get_lifePoint()<=0){
                $player->addScore($intScoreAjouter);
            }else{
                $player->get_score();// Afficher le score du joueur
                exit;
            }
        }
    }while($player->get_lifePoint()> 0);

    
?>