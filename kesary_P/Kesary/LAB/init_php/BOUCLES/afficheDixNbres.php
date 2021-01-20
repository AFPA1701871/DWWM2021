<?php
$saisieUser = readline("Entrez un nombre :");
while (! is_numeric($saisieUser)) {
    echo "Recommencez \n";
    $saisieUser = readline("Entrez un nombre :");
}
for ($i=$saisieUser+1; $i <= $saisieUser+10; $i++) { 
    echo "\n". $i;
}
?>