<?php
    echo "    **** CHI FOU MI ****\n";

    $lastName=readline("Entrez votre nom: ");
    $firstName=readline("Entrez votre prénom: ");
    $player1=$firstName.";".$lastName;
    $player2="Jordi;Nateur";
    echo "le joueur 1 est: ".$player1."\n";
    echo "le joueur 2 est: ".$player2."\n";


    do {
        do {
            $answerPlayer1=readline("entrez 0 pour pierre, entrez 1 pour feuille, entrez 2 pour ciseaux : ");
        } while ($answerPlayer1!=0 and $answerPlayer1!=1 and $answerPlayer1!=2);

        $answerPlayer2=random_int(0,2);
        echo $answerPlayer1."\n";
        echo $answerPlayer2."\n";

        $tableSign=array("pierre","feuille","ciseaux");

        print_r($tableSign);

        switch ($answerPlayer1) {
            case 0:
                $signPlayer1=$tableSign[0];
                break;
            case 1:
                $signPlayer1=$tableSign[1];
                break;
            case 2:
                $signPlayer1=$tableSign[2];
                break;
        }

        switch ($answerPlayer2) {
            case 0:
                $signPlayer2=$tableSign[0];
                break;
            case 1:
                $signPlayer2=$tableSign[1];
                break;
            case 2:
                $signPlayer2=$tableSign[2];
                break;
        }

        echo "vous jouez ".$signPlayer1."\n";
        echo "votre adversaire joue ".$signPlayer2."\n";

        $stringToCheck=$signPlayer1.$signPlayer2;
        echo $stringToCheck."\n";

        if ($stringToCheck=="pierrefeuille" or $stringToCheck=="feuilleciseaux" or $stringToCheck=="ciseauxpierre") {
            $winner=$player2;
        }
        elseif ($stringToCheck=="pierreciseaux" or $stringToCheck=="feuillepierre" or $stringToCheck=="ciseauxfeuille") {
            $winner=$player1;
        }
        elseif ($stringToCheck=="pierrepierre" or $stringToCheck=="feuillefeuille" or $stringToCheck=="ciseauxciseaux") {
            $winner="";
        }

        if ($winner==$player1) {
            echo "GAGNE\n";
            // instructions pour entrer le joueur1 dans le fichier
            $fp=fopen("./chifoumi/BDD/ranking.dwwm", "a");
            fputs($fp, "$player1\n");
            fclose($fp);
        }
        elseif ($winner==$player2) {
            echo "PERDU\n";
        }
        else {
            echo "EGALITE\n";
        }

        do {
            $retry=readline("voulez-vous refaire une partie? (O/N): ");
        } while ($retry!="O" and $retry!="N");
    } while ($retry=="O");

    $fp=fopen("./chifoumi/BDD/ranking.dwwm", "r");
    $ligne=array();
    $i=0;
    while (!feof($fp)) {
        $ligne[$i]=fgets($fp, 4096);
        $ligne[$i]=trim($ligne[$i]);
        $i+=1;
    }
    array_pop($ligne);
    array_shift($ligne);
    print_r($ligne);
    fclose($fp);

    echo "La liste des gagnants est :\n";
    for ($i=0; $i < count($ligne) ; $i++) { 
        echo $ligne[$i]."\n";
    }

?>