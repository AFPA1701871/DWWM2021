<?php
$niveau = readline("Veuillez rentrez le niveau entre 1 et 9 :");

switch ($niveau) {
    case ($niveau <=0) : 
        echo "Cela n'existe pas";
        break;    
    case 1 : 
       echo "Micro tremblement de terre, non resentie";
        break;   
    case 2 : 
        echo "Tres mineur,non ressentit mais detecter";
        break;   
    case 3 : 
        echo "Mineur,causant rarement des dommages";
        break;    
    case 4 : 
        echo "Leger, secousses notables d'objet a l'interieur des maisons";
        break;        
    case 5 : 
        echo "Modere, leger dommages aux edifices bien construits";
        break;
    case 6 : 
        echo "Fort,destructeur dans des zones allant jusqu'a 180 kilometres a la ronde si elles sont peuplées";
        break;
    case 7 : 
        echo "Majeur";
        break;
    case 8 : 
        echo "Important";
        break;
    case 9 : 
        echo "C'est la merde";
        break;
    default :
        echo " Ravie de  t'avoir connu";
    }
?>