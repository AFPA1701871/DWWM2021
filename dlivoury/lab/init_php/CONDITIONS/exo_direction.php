<?php
    $nombre=readline("saisir un nombre: ");
                switch($nombre){
                    case 6:
                        echo"le perso va droite";
                    break;
                    case 4:
                        echo"le perso va a gauche";
                    break;
                    case 8:
                        echo"le perso va en haut";
                    break;
                    case 2:
                        echo"le perso va en bas";
                    break;
                    default:
                        echo"le perso ne bouge pas, erreur de saisie";
                }
 ?>           
        
