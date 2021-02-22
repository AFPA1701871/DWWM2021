<?php
class Produit{
    private $_libelle;
    private $_prixUnitaire;
    private $_description;

    public function __construct($libelle,$prixUnitaire,$description){
        $this->setLibelle($libelle);
        $this->setPrixUnitaire($prixUnitaire);
        $this->setDescription($description);
    }
    public function setLibelle($libelle){
        $this ->_libelle=$libelle;
    }
    public function setQuantite($quantite){
        $this ->_quantite=$quantite;
    }
    public function setPrixUnitaire($prixUnitaire){
        $this ->_prixUnitaire=$prixUnitaire;
    }
    public function setDescription($description){
        $this ->_description=$description;
    }
    public function getLibelle(){
        return $this ->_libelle;
    }
    public function getPrixUnitaire(){
        return $this ->_prixUnitaire;
    }
    public function getDescription(){
        return $this ->_description;
    }

    public function toutEnString(){
        return $this ->_libelle.";".$this ->_description.";". $this ->_prixUnitaire.";";
    }

    public function estEnStock(){
        $booleen=false;
        $fp = fopen("../BDD/produits en stock.txt", "r");
        while (!feof($fp)){
            ($this->_libelle==stristr (fgets($fp,4096),";",true))?$booleen=true:null;
        }
        fclose($fp);
        return $booleen;
    }

    public function save(){
        if ($this->estEnStock()){
            echo "erreur, produit déjà ressencé\n";
        }else{
            $fp = fopen("../BDD/produits en stock.txt", "a");
            fputs($fp,$this->toutEnString()."\n");
            fclose($fp);
        }
    }
}
?>