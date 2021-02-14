<?php
    function randomEncounters(player $player){
        if(rand(1,6) <3){
            $banditManchot=new BanditManchot();
            echo "\nYou found a bandit manchot, he's sitting next to a campfire seems like he want to play some kind of game with you.\n";
            $player->play($player,$banditManchot);
            return $player;
        }else{
            $monster=new Monster(rand(20,100),rand(5,10));
            if($monster->get_lifePoint() <=60){
                echo "\nA small wild monster appear!\n";
                do {  
                    displayAttribute($player, $monster);
                    $player->attack($player,$monster);
                    if ($monster->get_lifePoint()>0){
                        $monster->attack($player,$monster);
                    }else{
                        echo "The monster is dead.\n";
                    }
                    sleep(1);  
                } while ($monster->get_lifePoint()>0 and $player->get_lifePoint()>0);
                if ($player->get_lifePoint()>0){
                    $player->set_score($player->get_score()+1);
                    displayCongrats();
                    return $player;
                }else{
                    return $player;
                }
            }else{
                echo "\nA big wild monster appear!\n";
                do {  
                    displayAttribute($player, $monster);
                    $player->attack($player,$monster);
                    if ($monster->get_lifePoint()>0){
                        $monster->attack($player,$monster);
                    }else{
                        echo "The monster is dead.\n";
                    }
                    sleep(1);       
                } while ($monster->get_lifePoint()>0 and $player->get_lifePoint()>0);
                if ($player->get_lifePoint()>0){
                    $player->set_score($player->get_score()+2);
                    displayCongrats();
                    return $player;
                }else{
                    return $player;
                }
            }
        }
    }
?>