<?php
class Joueur
{
    private $life;
    //private $_de; //joueur aura possib d'use dé
    //priv nbmonstrafaciletué

    //en lecture seule donc pas de setter, seul la meth subitdegats viendra chger pv
    public function __construct(int $life=50){  //don't initialize pv here !!
        $this->set_life=$life;        //$this->life=50;
        $this->_de=new De(); //méthode d'une autre classe, joueur, grace à new De aura automatiquement dé dans sa poche
    }

    public function get_life(){   //pour vérif à chaq fois si player en vie
        return $this->_life;
    }

    public function estVivant(int $life){  //svt méthode ac nom "is..." =boolean
        if ($life>0){
            $alive==true; 
            echo "Le héros a survécu\n"; 
        }else{
            $alive==false;
            echo "Le héros vient de mourir\n";
            exit;
        }
    }

    public function attack($monstre){     //monstre difficile est un monstre facile à cause héritage , see p13cours
        echo "Le héros attaque le monstre\n";
        
    }

    public function subitDegats($degats=10){
        //$this->degats=$degats;
        echo "Le héros subit ".$this->degats." points de vie";  //doit chager les pv
        $life=$life-10;


    }
}
?>