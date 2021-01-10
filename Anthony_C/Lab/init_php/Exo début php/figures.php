<?php
    echo "Première figure :" . "\n";

    $figure1="";
    for ($j=0; $j < 7; $j++) { /* Boucle $i pour bouclé sur la valeur $figure1.*/
        $figure1=$figure1."*"; /* Ajoute un "*" a chaque tour de boucle.*/
        echo $figure1 . "\n";
    }
    for ($i=6; $i >0 ; $i--) { /* Boucle $i pour bouclé sur la valeur $figure2.*/
        $figure1Bis=substr($figure1,0,$i); /* Retire un "*" a $figure1 chaque tour de bouche au $i ème caractère.*/
        echo $figure1Bis . "\n";
    }

    echo "Deuxième figure :" . "\n";  /* En cours de construction) */

    $figure2="";
    for ($i=0; $i <8; $i++) {       /* Boucle $i jusqu'a la longueur de ma figure. */
        $figure2Len=strlen($figure2);   /* Calculez la longueur de ma figure. */
        if ($figure2Len<=1) {           /* Si la longueur de ma figure est < ou = a 1. */
            $figure2=$figure2."X";      /* j'ajoute un "X". */
            echo $figure2 ."\n";
        }
        elseif ($figure2Len<=6) {   /* Sinon la longueur de ma figure est < ou = a 6. */
            $figure2Bis=substr($figure2,0,$figure2Len-1);   /* Je retire la dernière valeur de ma figure. */
            $figure2Bis=$figure2Bis."O"."X";    /* J'ajoute un "O" puis un "X" a ma figure. */
            $figure2=$figure2Bis;   /* ici j'initialise ma figure avec ce que j'ai fais les deux lignes du dessus. */
            echo $figure2Bis."\n";      
        }
        elseif ($figure2len=7) {    /* Sinon la longueur de ma figure est = 7. */
            echo "XXXXXXXX";    /* Ce qui termine ma boucle est ma figure. */
        }
    }
?>