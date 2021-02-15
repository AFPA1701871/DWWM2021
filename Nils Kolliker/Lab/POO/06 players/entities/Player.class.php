<?php
class Player extends Character {
    private $_score;

    public function __construct(string $pseudo){
        Parent::__construct(100,20,$pseudo);
        $this->_score=0;
    }

    public function setScore(int $score){
        $this->_score=$score;
    }

    public function getScore(){
        return $this->_score;
    }

    //permet d'afficher la direction vers ou va le joueur ou de quitter.. tire également un nombre entre 1 et 3 si quitte pas
    //prend rien
    //renvois rien
    public function move($mouvement){
        switch ($mouvement){
            case "nord":
                echo $this->getPseudo()." va vers le Nord\n";
                break;
            case "sud":
                echo $this->getPseudo()." va vers le Sud\n";
                break;
            case "est":
                echo $this->getPseudo()." va vers l'est\n";
                break;
            case "ouest":
                echo $this->getPseudo()." va vers l'ouest\n";
                break;
            case "quit":
                return "quit";
            default:
                return false;
        }
        return random_int(1,3);
    }

    //permet au joueur qui l'utilise de jouer avec un bandit manchot
    //prend en entré un bandit manchot
    //retourne rien
    public function play(BanditManchot $banditManchot){
        $mise=$banditManchot->howManyWeWinOrLose();
        if($banditManchot->winOrLose()){
            echo $this->getPseudo()." gagne ".$mise." point de vie\n";
            $this->_lifePoint+=$mise;
        }else{
            echo $this->getPseudo()." perd ".$mise." point de vie\n";
            $this->_lifePoint-=$mise;
            if($this->getLifePoint()<=0){
                echo $this->getPseudo()." n'a pas de quoi payer.\n".$this->getPseudo()." est mort.\n";
                return;
            }
        }
        echo $this->getPseudo()." a maintenant ".$this->getLifePoint()." point de vie\n";
    }

}
?>