<?php
class Gateau{
    private $_chocolat;
    private $_vanille;

    public function gateauChocolat($chocolat){
        $this->_chocolat = $chocolat;
        echo "\n";
        echo "Pour faire un bon gateau au chocolat\n";
        echo "Il faut $this->_chocolat gramme de chocolat\n";
        echo "Et du sucre";
        echo "\n";
    }

    public function gateauVanille(){
        echo "\n";
        echo "Pour faire un bon à la vanille\n";
        echo "Il faut de la vanille\n";
        echo "Et du sucre";
        echo "\n";
    }

}

?>