<?php

do{
    $intAge = readline("Age:");
}while(is_numeric($intAge)==false);

switch (true) {
    case ($intAge >= 12):
        echo "Cadet" . "\n";
        break;
    case ($intAge >= 10):
        echo "Minime" . "\n";
        break;
    case ($intAge >= 8):
        echo "Pupille" . "\n";
        break;
    case ($intAge >= 6):
        echo "Poussin" . "\n";
        break;    
    default:
        echo "hors categorie" . "\n";
        break;
}

if ($intAge >= 12){
    echo "Cadet". "\n";    
}elseif($intAge >=10 && $intAge <= 11){
    echo "Minime". "\n";
}elseif($intAge >=8 && $intAge <= 9){
    echo "Pupille". "\n";
}elseif($intAge >=6 && $intAge <= 7){
    echo "Poussin". "\n";
}else{
    echo "trop jeune". "\n";
}

?>