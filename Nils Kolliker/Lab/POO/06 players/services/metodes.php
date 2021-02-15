<?php
//fait combattre un joueur et un monstre (jusqu'à la mort de l'un des deux) et augmente le score du joueur si il gagne
//prend en entré un joueur et un monstre
//retourne rien
function matchAMort(Player $player, Monster $monster){
    while($player->getLifePoint()>0){
        $player->attack($monster);
        sleep(2);
        if($monster->getLifePoint()<=0){
            $monster->scoring($player);
            return;
        }
        $monster->attack($player);
        sleep(2);
    }
}
?>