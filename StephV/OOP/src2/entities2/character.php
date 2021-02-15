<?php
/*V-User entre pseudo puis création Player 
    V-Détails Player: pv100,pf20 & score0
-Player move:NSEO
    V-Random encounter: Bandit Manchot OR Monster
    V-odds BM+2/6
    V-Monster: pv&pf=random, pv(min20/max100) & pf(min5/max10)
V-Monster created, Player attacks: dégats=pf
    -if Player not dead, Monster attacks & idem
    -until death
    -if Monster dies, Player increases his score: 
        -if Monster was pv20to60, score +1
        -if Monster was pv61to100, score +2
    -if Player dies, game over & Player's score  
-BM created, Play ? YES/NO ?
        if YES
        -game=1/2 
            -if Player looses=dead
            -if Player survives, next game
        -game 2 : random +-pv(1à10)
            -Player dead =game over & score Player
-Player move again OR quit        
-end progr qd Player pv=0 OR if User quit (in both cases=score)*/

abstract class Character{
    protected $life;
    protected $strength;

    public function __construct($life, $strength){
        $this->setLife;
        $this->setStrength;
    }

    public function getLife(){
		return $this->life;
	}

	public function setLife($life){
		$this->life = $life;
	}

	public function getStrength(){
		return $this->strength;
	}

	public function setStrength($strength){
		$this->strength = $strength;
	}

    abstract function attack();
    
    public function __toString(){}

}    
  
?>