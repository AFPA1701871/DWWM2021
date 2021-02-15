<?php
class Monster extends Character {
    public function __construct(){
        Parent::__construct(random_int(20,100),random_int(5,10),"le monstre");
        if ($this->getLifePoint()>60){
            $this->_pseudo="le gros monstre";
        }
    }
    
    //permet d'altérer le score du joueur en fonction du pseudo du monstre qui l'utilise
    //prend en entré un joueur
    //retourne rien
    public function scoring(Player $player){
        $score=$player->getScore();
        if ($this->getPseudo()=="le gros monstre"){
            echo "Vous avez gagné 2 points\n";
            $score+=2;
        }else{
            echo "Vous avez gagné 1 point\n";
            $score++;
        }
        echo "votre score est de ".$score."\n";
        $player->setScore($score);
    }
}
?>