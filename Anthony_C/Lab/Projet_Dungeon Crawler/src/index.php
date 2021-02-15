<?php
    function loadClass($class){
        require "./entities/".$class.".class.php";
    }
    spl_autoload_register("loadClass");

    require "./services/function.php";
    require "./services/affichage.php";

    menuTitre();

    do {
        $pseudo=readline("Enter your nickname : ");
        if (iconv_strlen($pseudo)>20){
            echo "\nSorry, your nickname is too long. (20 characters max)\n\n";
        }
    } while (iconv_strlen($pseudo)>20);
    $player = new player(100,20,0,$pseudo);
    do {
        menuAction();
        do {
            $action=readline("What action do you want to do ? : ");
            if (!preg_match("#^[1-5]$#",$action)){
                echo "\n".$player->get_pseudo()." : Sorry, i don't understand what i have to do...\n\n";
            }
        } while (!preg_match("#^[1-5]$#",$action));
        switch ($action) {
            case 1 :
                $player->move("North");
                randomEncounters($player);
                break;
            case 2 :
                $player->move("West");
                randomEncounters($player);
                break;
            case 3 :
                $player->move("East");
                randomEncounters($player);
                break;
            case 4 :
                $player->move("South");
                randomEncounters($player);
                break;
            default:
                displayScore($player);
                bye();
                exit;
        }
    } while ($player->get_lifePoint()>0);
    displayDefeat();
    displayScore($player);
    bye();
?>