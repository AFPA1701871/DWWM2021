<?php

    class Joueur{
        private $_nom;
        private $_pointVie;
        private $_score;
        private $_monstreDifficile;
        private $_monstreFacile;
        protected static $_ligneSuivant = "************************************     Monstre Suivant\n";


        public function __construct(string $nom){
            $this->_nom=$nom;
            $this->_pointVie=50;
            $this->_score=0;
            $this->_monstreDifficile=0;
            $this->_monstreFacile=0;

        }

        public function get_nom(){
            return $this->_nom;
        }

        public function set_pointVie(int $pointVie){
            $this->_pointVie=$pointVie;
        }
        public function get_pointVie(){
            return $this->_pointVie;
        }
        public function set_score(int $score){
            $this->_score=$score;
        }
        public function get_score(){
            return $this->_score;
        }
        public function set_monstreFacile(int $monstreFacile){
            $this->_monstreFacile=$monstreFacile;
        }
        public function get_monstreFacile(){
            return $this->_monstreFacile;
        }
        public function set_monstreDifficile(int $monstreDifficile){
            $this->_monstreDifficile=$monstreDifficile;
        }
        public function get_monstreDifficile(){
            return $this->_monstreDifficile;
        }

        public function estVivant(){
            if($this->get_pointVie()>0){
                return true;
            }
            return false;
        }

        public function attaque(MonstreFacile $monstre,bool $trace){
            $objDe=new De();
            $intJoueur = $objDe->lanceLeDe();
            $intMonstre = $objDe->lanceLeDe();

            if($trace){echo $this->get_nom(). " attaque : ".$intJoueur. "  le Monstre : ".$intMonstre."\n";} // Trace

            if($intJoueur>=$intMonstre){
                $monstre->set_enVie(false);; // Le monstre est tué
            }
        }

        public function subitDegats(int $degats,bool $trace){
            if($this->bouclier($trace)){ // Si bouclier active ----> pas de dégats
                $degats=0;
            }
            $this->set_pointVie($this->get_pointVie()-$degats); 
            if($trace){echo "***              héros subit des dégats $degats   reste : ".$this->get_pointVie()."\n";} // Trace
        }

        public function bouclier(bool $trace){ // true si bouclié activé / false sinon
            $objDe = new De();
            $intDe = $objDe->lanceLeDe();
            if($trace){ echo "***              bouclier $intDe \n";} // Trace
            if($intDe<=2){
                return true; // Bouclié activé
            }else{
                return false; // bouclié désactivé
            }
        }

        public function ajouteScore(int $point){
            $this->set_score($this->get_score()+$point);
        }

        public function ajouteMonstreFacile(){
            $this->set_monstreFacile($this->get_monstreFacile()+1);
        }

        public function ajouteMonstreDifficile(){
            $this->set_monstreDifficile($this->get_monstreDifficile()+1);
        }

        public function gagne(MonstreFacile $monstre,bool $trace){
            
            $this->ajouteScore($monstre->get_pointAdversaire());// Recupere les points du type de monstre

            if(get_class($monstre)=="MonstreFacile"){ // Incremente dans le bon attribut
                $this->ajouteMonstreFacile();
            }else{
                $this->ajouteMonstreDifficile();
            }
            if($trace){ // Trace
                echo "***              héros gagne\n";
                echo self::$_ligneSuivant;
            }

        }

        public function afficheScore(){
            $strPhrase="Dommage, vous êtes mort...\nCela dit, vous avez tué ";
            if($this->get_monstreFacile()>1){
                $strPhrase.= $this->get_monstreFacile(). " monstres faciles et ";
            }else{
                $strPhrase.= $this->get_monstreFacile(). " monstre facile et ";
            }

            if($this->get_monstreFacile()>1){
                $strPhrase.= $this->get_monstreDifficile(). " monstres difficiles.\n";
            }else{
                $strPhrase.= $this->get_monstreDifficile(). " monstre difficile.\n";
            }
            $strPhrase.=" Vous avez ";
            if($this->get_score()>1){
                $strPhrase.= $this->get_score(). " points.";
            }else{
                $strPhrase.= $this->get_score(). " point.";
            }

            echo $strPhrase."\n"; // Affiche la phrase
        }

    }

?>