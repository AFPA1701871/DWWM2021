<?php

    //LL Verification de la syntaxe de saisie de la date
    function verifFormatDate($date){
        $format = DateTime::createFromFormat("d-m-Y",$date);
        if(!$format){
            echo "Votre format de saisie est non valide.\n";
            return false;
        }else{
            return true;
        }
    }

    //LL Verification de la validité de la date
    function verifValiditeDate($date){
        $dateTab = explode("-",$date);
        if(!checkdate($dateTab[1],$dateTab[0],$dateTab[2])){
            // echo "La date n'est pas valide. Veuillez la resaisir.\n"; 
            return false;           
        } else {
            // echo "La date est valide. Merci.\n";
            return true;
        }    
    }

    // LL fonction regroupant la verif format et la validité de la date saisie
    function dateSaisieValide($date){
        $format = verifFormatDate($date);
        if($format){
             return verifValiditeDate($date);
        }    
    }

    // LL verification que date saisie ne soit pas antérieure a une date de référence
    // toujours placer la date de reférence en premier et la date a verifer en second
    // renvoie un vrai si date de référence est inf à la date saisie
    function respectChrono ($date1, $date2){
        if (strtotime($date1)>strtotime($date2)){
            echo "La date saisie soit n'a pas la bonne syntaxe, soit n'est pas valide, soit ne répond pas à la chronologie...\n        Veuillez la resaisir, s'il vous plait...\n";
            return false;
        }else{
            return true;
        }
    }
    


?>