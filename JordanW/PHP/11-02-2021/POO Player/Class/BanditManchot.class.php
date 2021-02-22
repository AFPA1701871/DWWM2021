<?php 

    class BanditManchot{

        public function winOrLose(){ // retourne true pour win / false pour lose
            if(rand(1,2)==1){return true;}
            return false;
        }

        public function howManyWeWinOrLose(){
            return rand(1,10);
        }
    }

?>