<?php
require("functions.php");

$player=readline("Your name : ");
$Elemental="\nYou play against Elemental";

while (new game=="O"){
    do{
        $betPlayer=readline("Make your choice : R for rock, L for Leaf and M for metal");
    }while($betPlayer!=R AND $betPlayer!=L AND $betPlayer!=M);
    $Elemental= randomString();
    $sign=array("R", "L", "M");

    $joust=$player.$Elemental;
        if ($joust=="RM" OR $joust=="LR" OR $joust=="ML"){
            echo $player." wins";
        }
        elseif ($joust=="MR" OR $joust=="RL" OR $joust=="LM"){
            echo $Elemental." wins";
        }
        else ($joust=="RR" OR "LL" OR "MM"){
            echo "Draw";

        }

    
    
}

?>