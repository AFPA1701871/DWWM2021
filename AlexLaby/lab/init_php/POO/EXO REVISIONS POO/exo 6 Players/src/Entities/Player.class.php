<?php

    class Player extends Character{
        //Attributs
        private $_score;
        private $_pseudo;

        //GETTERs et SETTERs
        public function get_score(){
            return $this->_score;
        }
        public function set_score(int $score){
            $this->_score = $score;
        }

        public function get_pseudo(){
            return $this->_pseudo;
        }
        public function set_pseudo(string $pseudo){
            $this->_pseudo = $pseudo;
        }

        //constructeur
        public function __construct($lifepoint,$strenghtPoint,$score,$pseudo){
            parent::__construct($lifepoint,$strenghtPoint);
            $this->_score=0;
            $this->set_pseudo($pseudo);
        }

        //fonction move
        public function move($inputPseudo,$player){
            echo "1. Quitter le jeu \n";
            echo "2. Aller vers le Nord \n";
            echo "3. Aller vers le Sud \n";
            echo "4. Aller vers l'Est \n";
            echo "5. Aller vers l'Ouest \n";
            $inputUser=strtoupper(readline (""));
            switch ($inputUser) {
                case "QUIT":
                case "1":
                    exit;
                case "2":
                    echo "$inputPseudo se déplace vers le Nord.\n\n";
                    randomVS($player,$inputPseudo);
                    break;
                case "3":
                    echo "$inputPseudo se déplace vers le Sud.\n\n";
                    randomVS($player,$inputPseudo);
                    break;
                case "4":
                    echo "$inputPseudo se déplace vers l'Est.\n\n";
                    randomVS($player,$inputPseudo);
                    break;
                case "5":
                    echo "$inputPseudo se déplace vers l'Ouest.\n\n";
                    randomVS($player,$inputPseudo);
                    break;
                case "":
                default:
                    echo "Erreur de syntaxe";
                    $this->move($inputPseudo,$player);
            }

        }

        //fonction pour attaquer
        public function attack(Character $monster,$inputPseudo){
            echo "$inputPseudo attaque le monstre et lui inflige ". $this->get_strenghtPoint() ." points de dégâts" ."\n";
            $monster->set_lifepoint($monster->get_lifepoint()-$this->get_strenghtPoint());
            echo "Le monstre a maintenant ". $monster->get_lifepoint() ." points de vie" ."\n\n";
        }

        //Savoir si le jeu est fini par rapport au pdv du perso
        public function finDeJeu(){
            if($this->get_lifepoint()<=0){
                echo "Vous avez succombé, partie terminée \n";
                echo "Vous avez un score de : ".$this->get_score();
                exit;
            }
        }

        //fonction pour jouer avec le bandit manchot
        public function play(BanditManchot $banditManchot,$player,$inputPseudo){
            echo "Vous rencontrez le bandit manchot, il vous invite à jouer à un jeu de hasard, voulez-vous jouer avec lui ? (O/N) \n";
            $inputUser=strtoupper(readline (""));
            switch ($inputUser) {
                case "O":
                    $banditManchot->howManyWeWinOrLose($player,$inputPseudo);
                    $player->finDeJeu();
                    $player->move($inputPseudo,$player);
                case "N":
                    $player->move($inputPseudo,$player);
                case "QUIT":
                    exit;
                case "":
                default:
                    echo "Erreur de syntaxe \n";
                    $this->play($banditManchot,$player,$inputPseudo);
            }
        }
    }

?>