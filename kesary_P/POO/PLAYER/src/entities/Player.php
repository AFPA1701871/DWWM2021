<?php

class Player extends Character{
    private $_score;
    private $_pseudo;

    public function __construct($lifePoint,$strenghtPoint,$score,$pseudo){
        Parent::__construct($lifePoint,$strenghtPoint);
        $this->_score = 0;
        $this->set_pseudo($pseudo);
    }

    //Getters
    public function get_score(){
        return $this->_score;
    }
    public function get_pseudo(){
        return $this->_pseudo;
    }
    //Setters
    public function set_score($score){
        $this->_score=$score;
    }
    public function set_pseudo($pseudo){
        $this->_pseudo=$pseudo;
    }

    //Menu pour permettre au joueur soit de quitter ou de continuer à jouer, de se déplacer
    public function deplacement($pseudo,$player){
        echo "Choisissez une option : \n";
        echo "\n";
        echo "1. Quitter le jeu \n";
        echo "2. Aller vers le nord \n ";
        echo "3. Aller vers le sud \n ";
        echo "4. Aller vers l'ouest \n ";
        echo "5. Aller vers l'est  \n";
        $reponse = strtoupper(readline("Que voulez-vous faire : "));
                switch($reponse){
                    case "1" : 
                        exit();
                        break;
                    case "2" :
                        echo "$pseudo se déplace vers le nord \n";
                        $this->randomVS($player,$pseudo);
                        break;
                    case "3" :
                        echo "$pseudo se déplace vers le sud \n";
                        $this->randomVS($player,$pseudo);
                    case "4" :
                        echo "$pseudo se déplace vers l'ouest \n";
                        $this->randomVS($player,$pseudo);
                    case "5" :
                        echo "$pseudo se déplace vers l'est \n";
                        $this->randomVS($player,$pseudo);
                        break;
                    case "":
                    default :
                        echo "Saisie erronée \n";
                        $this->deplacement($pseudo,$player);
                       
                }
    }

    //Méthode Player attaque
    public function attack(Character $monstre, $pseudo){
        echo "$pseudo attaque le monstre et lui inflige ". $this->get_strenghtPoint() . "points de dégats \n";
        $monstre->set_lifePoint($monstre->get_lifePoint()-$this->get_strenghtPoint());
        echo "Le monstre a maintenant ". $monstre->get_lifePoint() . "points de vie \n";
        
    }
    //méthode qui dit game over en fonction des points de vie du player
    public function gameOver(){
        if($this->get_lifePoint() <= 0){
            echo "Plus de vie : Game Over \n";
            echo "Votre score est de : ".$this->get_score();
            exit;
        }
    }

    //Méthode pour jouer avec le BanditManchot
    public function jouer(BanditManchot $banditManchot,$player,$pseudo){
        echo "Coucou, je suis le BanditManchot, voulez-vous jouer au jeu de hasard ? (O/N) \n ";
        $reponse = strtoupper(readline(""));
        switch ($reponse) {
            case "O":
                $banditManchot->howManyWeWinOrLose($player,$pseudo);
                $player->gameOver();
                $player->deplacement($pseudo,$player);
                break;
            case "N":
                $player->deplacement($pseudo,$player);
            case "QUIT":
                exit;
            case "": 
            default:
                echo "Erreur de syntaxe \n";
                $this->jouer($banditManchot,$player,$pseudo);
        }
    }
    public function randomVS($player,$pseudo){
        if (rand(1,6)<= 2) {
            $banditManchot = new BanditManchot();
            $player->jouer($banditManchot,$player,$pseudo);
        }else {
            $monstre = new Monster(rand(20,100),rand(5,10));
            echo "Un monstre est apparu ! \n";
            echo "Le monstre a " . $monstre->get_lifePoint(). " points de vie et ". $monstre->get_strenghtPoint(). "points de dégats \n";
            if($monstre->get_lifePoint() >=61){
                $tempScore = 2;
            }else {
                $tempScore = 1;
            }
            while ($monstre->get_lifePoint() > 0) {
                $player->gameOver();
                $player->attack($monstre,$pseudo);
                readline("");
                if ($monstre->get_lifePoint() <= 0) {
                    echo " Vous avez gagné votre combat ! \n";
                    $player->set_score($player->get_score() + $tempScore);
                    echo "Votre score est maintenant de ". $player->get_score(). "\n";
                    readline("");
                    break;
                }
                $monstre->attack($player,$pseudo);
                readline("");
            }
            $player->deplacement($pseudo,$player);
        }
    }
    


    

/*
    //Pour afficher le joueur
    public function __toString(){
        $affichage = "Bonjour Player       : ". $this->_pseudo. "\n";
        $affichage .= "Votre Score         : ". $this->_score. "\n";
        $affichage .= "Point de vie        : ". $this->_lifePoint. "\n";
        $affichage .= "Force               : ". $this->_strenghtPoint. "\n";
        return $affichage;


    }*/
}

?>