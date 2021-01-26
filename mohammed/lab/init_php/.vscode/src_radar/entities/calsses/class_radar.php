<?php
class radar {
   private $limite;
   private $flash;
    ///*****************************fonction ********************** */
function hors_limite(){
    if ($flash>=$limite+10) {
        echo " moins un point et 45 euros d'amende ";
    }
    else if ($flash<$limite+10 and $flash>$limite+20) {
        echo " moins 3 point et 90 euros d'amende ";
    }
    elseif ($flash>$limite+20) {
       echo " rendez vous a la gendarmerie ...";
    }




}







}






?>