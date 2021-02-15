<?php

    function randomVS($player,$inputPseudo){
        if(rand(1,6)<=2){
            $banditManchot= new BanditManchot;
            $player->play($banditManchot,$player,$inputPseudo);
        }else{
            $monster= new Monster(rand(20,100),rand(5,10));
            echo "Un monstre est apparu ! \n\n";
            echo "Le monstre a ". $monster->get_lifepoint(). " points de vie et " .$monster->get_strenghtPoint(). " points de dégâts" ."\n";
            if($monster->get_lifepoint()>=61){
                $tempScore=2;
            }else{
                $tempScore=1;
            }
            while($monster->get_lifepoint()>0){
                $player->finDejeu();
                $player->attack($monster,$inputPseudo);
                readline("");
                if($monster->get_lifepoint()<=0){
                    echo "Vous avez gagné votre combat !\n";
                    $player->set_score($player->get_score()+$tempScore);
                    echo "Votre score est maintenant de ". $player->get_score(). "\n";
                    readline("");
                    break;
                }
                $monster->attack($player,$inputPseudo);
                readline("");
            }
            
            $player->move($inputPseudo,$player);
        
        }
        
    }

?>