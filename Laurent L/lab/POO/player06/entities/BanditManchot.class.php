<?php

    Class Banditmanchot {


        //Méthodes

        public static function winOrLose (){
            $nbreAleatoire = random_int(0,1);
            ($nbreAleatoire == 1) ? $action = "Win" : $action = "Lose";
            return $action;
        }

        public static function howManyWeWinOrLose(){
            $pointAleatoire = random_int(1,10);     
            return $pointAleatoire;       
        }




    }


?>