<?php
class De
{
    public function lanceLeDe(){
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