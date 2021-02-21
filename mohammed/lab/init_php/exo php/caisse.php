<?php
$prix=1;
$somme=0;
$total=0;
$prix1=readline(" entrez le prix  ");
while ($prix!=0) {
    $prix=readline(" entrez le prix  ");
    $somme = $somme+$prix;
    $total=$somme+$prix1;   
}

echo $prix; echo $total;
$paiment=readline("entrez paiment  ");
if ($paiment>$total) {
    echo " merci pour votre paiment nous vous devons";echo $paiment-$total;
}
    

    

else {
         
while ($paiment<$total) 
     { 
    $paiment=readline("entrez paiment  ");-
     
        $total=$total-$paiment;
        echo " vous devez encore ";echo $total-$paiment;
        
    }
}
if ($paiment=$total) {
    echo " merci pour votre paiment c est ok";}
?>