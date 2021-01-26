<?php

class moule{
   private $_forme="Ronde";
   private $_couleur="Noir";
   private $_matiere="Metal";
   private $_taille="5L";

    public function mettreAuFour(int $_degres){ //cette fonction permet de mettre le moule au four
        echo "Je suis au four à $_degres °". "\n";
    }
    public function laisserReposer(int $_minutes){ //cette fonction permet de laisser le moule reposer
        echo "Je suis dans le frigo pendant $_minutes minutes";
    }
}

?>