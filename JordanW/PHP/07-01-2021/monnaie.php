<?php
    echo "EXO 6 APRES-MIDI MONNAIE"."\n";

$intNombre = 1;
$intPrixTotal = 0;
$intPosition = 1;

while( $intNombre!=0){
    do{
        $intNombre =  readline("Saisir prix".$intPosition." :");
    }while(is_numeric($intNombre)==false);
    $intPosition++;
    $intPrixTotal += $intNombre;
}

echo "Le client doit ",$intPrixTotal,"e"."\n";

do{
    $intMonnaieClient= readline("Le Client donne : ");
}while(is_numeric($intMonnaieClient)==false OR ($intMonnaieClient < $intPrixTotal));

$intMonnaieRendre = $intMonnaieClient- $intPrixTotal;

echo "/n"."On doit au Client : ";
echo intDiv($intMonnaieRendre,10)."billet(s) de 10e"."\n";
$intMonnaieRendre = $intMonnaieRendre - (intDiv($intMonnaieRendre,10)*10);

echo intdiv($intMonnaieRendre,5)."billet(s) de 5e"."\n";
$intMonnaieRendre = $intMonnaieRendre - (intDiv($intMonnaieRendre,5)*5);

echo $intMonnaieRendre,"piece(s) de 1e"."\n";

?>