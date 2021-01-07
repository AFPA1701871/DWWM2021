<?php
    $valeur =readline("Écrivez une valeur : ");

    if ($valeur <1 or $valeur>9) {
        echo "Erreur" ."\n";
        $valeur =readline("Écrivez une valeur : ");
    }   else{
        switch ($valeur) {
            case 1: 
                echo "Micro trenlement de terre, non ressenti";
                break;
            case 2: 
                echo "Très mineur. Non ressenti mais détecté";
                break;
            case 3: 
                echo "Mineur. Cousant rarement des dommages";
                break;
            case 4: 
                echo "Léger. Secousses notables d'objets à l'intérieur des maisons";
                break;
            case 5: 
                echo "Modéré. Légers dommages aux edifices bien construits";
                break;
            case 6: 
                echo "Fort. Destructeur dans des zones allant jusqu'à 180 Km à la ronde si elles sont peuplés";
                break;
            case 7: 
                echo "Majeur. Dommages modérés à sévères dans des zones plus vastes";
                break;
            case 8: 
                echo "Important. Dommages sérieux dans des zones à des centaines de km à la ronde";
                break;
            case 9: 
                echo "Dévastateur. Dévaste des zones sur des milliers de km à la ronde";
                break;
            }
    }
?>