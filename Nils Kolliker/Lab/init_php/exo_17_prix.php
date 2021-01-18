<?php
$aPayer=0;
do{
    do{
    $prixArticle=readline("prix de l'article? (0=fin) ");
    }while($prixArticle!=strval(intval($prixArticle)));
    $aPayer=$aPayer+$prixArticle;
}while($prixArticle!=0);

echo "cout total: ".$aPayer;
do{
    $prixPayer=readline("E. Combien vous payez? ");
}while($prixPayer<$aPayer or $prixPayer!=strval(intval($prixPayer)));

$aRendre=$prixPayer-$aPayer;
$pieceDeUn=$aRendre%5;
$aRendre=$aRendre-$pieceDeUn;
$billetDeCinq=($aRendre%10)/5;
$aRendre=($aRendre-(5*$billetDeCinq))/10;
echo "la machine vous rend ".$aRendre." billet de 10E, ".$billetDeCinq." billet de 5E et ".$pieceDeUn." piece de 1E";
?>