<?php

    function voyelles()
    {
        $txt =readline("Écrivez un mot : ");
        $voyelle = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $resultat = str_replace($voyelle,"", $txt);

        return $resultat;
    }

    function purge($txt,$lettre)
    {
        $resultat = str_replace($lettre,"", $txt);
        return $resultat;
    }

    function voyelles2()
    {
        $txt =readline("Écrivez une phrase : ");
        $nbr =readline("Écrivez un nombre : ");
        $voyelle = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $resultat = str_replace($voyelle,"", $txt);

        return $resultat;
    }

    function recursi($nbr)
    {
        if ($nbr==0){
            return 1;
        } else {
            return $nbr*recursi($nbr-1);
        }
        return recursi($nbr);
    }

?>