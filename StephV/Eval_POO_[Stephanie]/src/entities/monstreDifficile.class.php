<?php
class MonstreDifficile extends MonstreFacile
{
    public function __construct(){
        Parent::__construct($alive=true);
    }

    public function attack($joueur){
        echo "Le monstre attaque le héros\n";
       
    }

    public function spell(){
        echo "Le monstre lance un sort\n";

    }
}
?>