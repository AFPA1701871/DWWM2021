<?php
    echo "EXO 6 APRES-MIDI MONNAIE"."\n";

$intNombre = 1;
$intPrixTotal = 0;
$intPosition = 1;

while( $intNombre!=0){
    $intNombre =  readline("Saisir prix".$intPosition." :");
    $intPosition++;
    $intPrixTotal += $intNombre;
}

echo "Le client doit ",$intPrixTotal,"e";

$intMonnaieClient= readline("Le Client donne : ");

while($intMonnaieClient < $intPrixTotal){
    echo "Il manque de l'argent";
    $intMonnaieClient = readline("Le Client donne : ");
}

$intMonnaieRendre = $intMonnaieClient- $intPrixTotal;

echo "On doit au Client : ";
echo intDiv($intMonnaieRendre,10)."billet(s) de 10e"."\n";
$intMonnaieRendre = $intMonnaieRendre - (intDiv($intMonnaieRendre,10)*10);

echo intdiv($intMonnaieRendre,5)."billet(s) de 5e"."\n";
$intMonnaieRendre = $intMonnaieRendre - (intDiv($intMonnaieRendre,5)*5);

echo $intMonnaieRendre,"piece(s) de 1e"."\n";

?>