<?php
$sum=1;
$due=0;
$cash=0;
while ($sum!=0){
    $sum=readline("Saisir le montant à payer en euros\n");
    $due=$due+$sum;
    echo "Le client nous doit $due euros\n";
    echo "somme versée $cash\n";
}
while ($sum<$due){
    $cash=readline("Somme versée insuffisante, veuillez recommencer");
  
}
$e1=$cash-$sum;
$e10=0;

while ($e1>=10){
    $e10=$e10+1;
    $e1=$e1-10;
}
$e5=0;
if ($e5>=5){
    $e5=1;
    $e1=$e1-5;
}
echo "Vous recevez $e10 billets de 10 euros";
echo "Vous recevez $e5 billets de 5 euros";
echo "Vous recevez $e1 pièces de 1 euros";
?>