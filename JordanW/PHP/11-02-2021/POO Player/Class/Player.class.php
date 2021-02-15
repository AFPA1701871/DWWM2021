<?php 

    class Player extends Character{
        protected $_score;
        protected $_pseudo;

        public function __construct(string $pseudo){
            parent::__construct(100,20);
            $this->_pseudo=$pseudo;
            $this->_score=0;
        }

        public function move(){

            while(true){
                echo "\nSaisir 0 pour quitter \n";
                echo "Saisir 1 pour aller au Nord\n";
                echo "Saisir 2 pour aller au Sud\n";
                echo "Saisir 3 pour aller à l'Est\n";
                echo "Saisir 4 pour aller à l'Ouest\n";
                switch(readline("Votre choix : ")){
                    case "0":
                        // Afficher score
                        $this->get_Score();
                        exit;
                        break;  
                    case "1": // Nord
                    case "2": // Sud
                    case "3": // Est
                    case "4": // Ouest
                        return true;
                        break;
                    default:
                        echo "\nSaisir un chiffre correct !!\n";
                        break;
                }
            }

        }

        public function play(BanditManchot $banditManchot){
            do{
                $reponse = readline("Veux tu jouer avec le ManchotBandit (O/N) : ");
            }while($reponse !="O" && $reponse !="N");
            return $reponse;
        }

        public function addScore(int $add){
            $this->_score+=$add;
        }

        public function get_score(){
            echo "\nScore de ".$this->get_pseudo()." : ".$this->_score."\n";
        }

        public function get_pseudo(){
                return $this->_pseudo;
        }
    }

?>