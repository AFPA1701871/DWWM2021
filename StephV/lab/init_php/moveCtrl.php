<?php
$move=readline("sélectionner un mouvement");
switch ($move){
    case 6 :
        echo "right";
        break;
    case 4 :
        echo "left";
        break;
    case 8 :
        echo "up";
        break;
    case 2 :
        echo "down";
        break;
      
    default:
        echo "error";
        break;

}
?>