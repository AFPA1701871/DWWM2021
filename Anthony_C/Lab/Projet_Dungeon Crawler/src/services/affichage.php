<?php
    function menuTitre(){
        echo"           
        ██████╗░░█████╗░███╗░░██╗██████╗░██╗████████╗  ███╗░░░███╗░█████╗░███╗░░██╗░█████╗░██╗░░██╗░█████╗░████████╗
        ██╔══██╗██╔══██╗████╗░██║██╔══██╗██║╚══██╔══╝  ████╗░████║██╔══██╗████╗░██║██╔══██╗██║░░██║██╔══██╗╚══██╔══╝
        ██████╦╝███████║██╔██╗██║██║░░██║██║░░░██║░░░  ██╔████╔██║███████║██╔██╗██║██║░░╚═╝███████║██║░░██║░░░██║░░░
        ██╔══██╗██╔══██║██║╚████║██║░░██║██║░░░██║░░░  ██║╚██╔╝██║██╔══██║██║╚████║██║░░██╗██╔══██║██║░░██║░░░██║░░░
        ██████╦╝██║░░██║██║░╚███║██████╔╝██║░░░██║░░░  ██║░╚═╝░██║██║░░██║██║░╚███║╚█████╔╝██║░░██║╚█████╔╝░░░██║░░░
        ╚═════╝░╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░╚═╝░░░╚═╝░░░  ╚═╝░░░░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝░╚════╝░╚═╝░░╚═╝░╚════╝░░░░╚═╝░░░\n\n";
    }

    function menuAction(){
        echo"
        ╔══════════════════════╗
        ║        ACTION        ║
        ║══════════════════════║
        ║   1 -> MOVE NORTH    ║
        ║   2 -> MOVE WEST     ║
        ║   3 -> MOVE EAST     ║
        ║   4 -> MOVE SOUTH    ║
        ║   5 -> QUIT          ║
        ╚══════════════════════╝\n\n";
    }

    function displayAttribute(player $player,monster $monster){
        $nbSpace=(30-iconv_strlen($player->get_pseudo()));
        $nbSpacePlayerPvToAdd=(3-iconv_strlen($player->get_lifePoint()));
        $nbSpaceMonsterPvToAdd=(3-iconv_strlen($monster->get_lifePoint()));
        $space="";
        $spacePlayerPV="";
        $spaceMonsterPV="";
        for($i=0;$i<$nbSpace;$i++){
            $space.=" ";
        }
        for($i=0;$i<$nbSpacePlayerPvToAdd;$i++){
            $spacePlayerPV.=" ";
        }
        for($i=0;$i<$nbSpaceMonsterPvToAdd;$i++){
            $spaceMonsterPV.=" ";
        }
        echo "\n".
        $player->get_pseudo().$space."Monster";
        echo"\n╔════════╗                    ╔════════╗\n";
        echo"║ ".$spacePlayerPV.$player->get_lifePoint()." HP ║                    ║ ".$spaceMonsterPV.$monster->get_lifePoint()." HP ║\n";
        echo"╚════════╝                    ╚════════╝\n\n";
    }

    function displayCongrats(){
        echo"
        ╔══════════════════════╗
        ║    CONGRATULATION    ║
        ╚══════════════════════╝\n";
    }

    function displayDefeat(){
        echo"
        ╔══════════════════════╗
        ║     YOU ARE DEAD     ║
        ╚══════════════════════╝\n";
    }

    function displayScore(player $player){
        $cadre="";
        for($i=0;$i<iconv_strlen($player->get_score());$i++){
            $cadre.="═";
        }
        echo"
        ╔════════════════════════"."$cadre"."════╗
        ║  Score monster Killed : ".$player->get_score()."   ║
        ╚════════════════════════"."$cadre"."════╝\n\n";
    }

    function displayWin($hp){
        $cadre="";
        for($i=0;$i<iconv_strlen($hp);$i++){
            $cadre.="═";
        }
        echo"
        ╔═════════════".$cadre."═════╗
        ║    YOU WON ".$hp." HP   ║
        ╚═════════════".$cadre."═════╝\n";
    }

    function displayLose($hp){
        $cadre="";
        for($i=0;$i<iconv_strlen($hp);$i++){
            $cadre.="═";
        }
        echo"
        ╔══════════════".$cadre."═════╗
        ║    YOU LOSE ".$hp." HP   ║
        ╚══════════════".$cadre."═════╝\n";
    }

    function bye(){
        echo "        ╔═════════════════════════════════════════════════╗
        ║    Thank you for playing, see you next time!    ║
        ╚═════════════════════════════════════════════════╝\n\n";
    }
?>