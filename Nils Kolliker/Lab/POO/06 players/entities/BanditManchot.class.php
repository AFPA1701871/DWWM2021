<?php
class BanditManchot{
    //sort un nombre entre 0 et 1 (le 0 est considéré comme faux dans les tests)
    //prend en entré rien
    //retourne un entier
    public function winOrLose(){
        return random_int(0,1);//1, you win ! 0, you lose
    }

    //sort un nombre entre 1 et 10
    //prend en entré rien
    //retourne un entier
    public function howManyWeWinOrLose(){
        return random_int(1,10);
    }
}
?>