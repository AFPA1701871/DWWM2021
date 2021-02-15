<?php
abstract class Character{
    protected $_lifePoint;
    protected $_strenghtPoint;
    protected $_pseudo;

    public function __construct(int $lifePoint,int $strenghtPoint, string $pseudo){
        $this->_lifePoint=$lifePoint;
        $this->_strenghtPoint=$strenghtPoint;
        $this->_pseudo=$pseudo;
    }

    public function setLifePoint(int $lifePoint){
        $this->_lifePoint=$lifePoint;
    }
    public function setStrenghtPoint(int $strenghtPoint){
        $this->_strenghtPoint=$strenghtPoint;
    }
    public function setPseudo(string $pseudo){
        $this->_pseudo=$pseudo;
    }

    public function getLifePoint(){
        return $this->_lifePoint;
    }
    public function getStrenghtPoint(){
        return $this->_strenghtPoint;
    }
    public function getPseudo(){
        return $this->_pseudo;
    }

    //permet au character de fraper une fois un autre character
    //prend en entré un character
    //retourn rien
    public function attack(Character $character){
        echo $this->getPseudo()." frappe ".$character->getPseudo()."\n".$character->getPseudo()." perd ".$this->getStrenghtPoint()." Point de vie\n";
        $character->setLifePoint($character->getLifePoint()-$this->getStrenghtPoint());
        if($character->getLifePoint()>0){
            echo "Il lui reste ".$character->getLifePoint()." Point de vie\n";
        }else{
            echo $character->getPseudo()." est vaincu\n";
        }
    }
}
?>