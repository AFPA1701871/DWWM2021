<?php
class De
{
    //class qui renvoie simplement un entier donc un rand
    //public function lanceLeDe(){rand(1,6);}
    )
    //was also possible to use attribut result with getter but longer to do

    //tjrs possible de faire évoluer la classe par la suite

    //possible créér objet dans objet, ex new objet dé dans joueur, see pic
    //ex tableau à afficher ac foreach




    public function lanceLeDe(){    //renvoie simplement un entier
        $intAleaPlayer=rand(1,6);
        $intAleaMonster=rand(1,6);
        if($intAleaPlayer>=$intAleaMonster){
            $monstre= $alive==false;
            echo "Le héros a vaincu le monstre\n";

        }
    }

    public function lanceLeDe2(){
        $intAleaPlayer=rand(1,6);
        $intAleaMonster=rand(1,6);
        if($intAleaPlayer<$intAleaMonster){
            echo "Le héros est touché \n";
        }
    }


}
?>