<?php
class Ticket{
    private $_nom;
    private $_prenom;
    private $_listeDeProduit;//doivent faire la même longueur
    private $_quantiteDuProduit;//doivent faire la même longueur

    public function __construct ($nom,$prenom,$listeDeProduit,$quantiteDuProduit){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setListeDeProduit($listeDeProduit);
        $this->setQuantitéDuProduit($quantiteDuProduit);
    }
    public function setNom ($nom){
        $this ->_nom=$nom;
    }
    public function setPrenom ($prenom){
        $this ->_prenom=$prenom;
    }
    public function setListeDeProduit ($listeDeProduit){
        $this ->_listeDeProduit=$listeDeProduit;
    }
    public function setQuantitéDuProduit ($quantiteDuProduit){
        $this ->_quantiteDuProduit=$quantiteDuProduit;
    }
    public function getNom (){
        return $this ->_nom;
    }
    public function getPrenom (){
        return $this ->_prenom;
    }
    public function getListeDeProduit (){
        return $this ->_listeDeProduit;
    }
    public function getQuantitéDuProduit (){
        return $this ->_quantiteDuProduit;
    }

    public function prixTotal(){
        for ($i=0;$i<count($this->_listeDeProduit);$i++){
            $tab[$i]=$this->_listeDeProduit[$i]->getPrixUnitaire()*$this->_quantiteDuProduit[$i];
        }
        return $tab;
    }

    public function totalTicket(){
        return array_sum($this->prixTotal());
    }

    public function toutEnString(){
        $string=$this ->_nom.";".$this ->_prenom.";";
        for ($i=0;$i<count($this->_listeDeProduit);$i++){
            $string.=$this->_listeDeProduit[$i]->getLibelle().";".$this->_quantiteDuProduit[$i].";";
        }
        return $string.=$this->totalTicket();
    }

    public function save(){
        $fp = fopen("./BDD/ticket de caisse.txt", "a");
        fputs($fp,$this->toutEnString()."\n");
        fclose($fp);
    }
}
?>