<?php
do{
    $ligne=readline("n°de ligne (1 à 10): ");
}while ($ligne<1 or $ligne>10 or $ligne!=strval(intval($ligne)));
do{
    $colonne=readline("n°de colonne (1 à 10): ");
}while ($colonne<1 or $colonne>10 or $colonne!=strval(intval($colonne)));
$ligne--;
$colonne--;
for ($i=0;$i<10;$i++){
    for($j=0;$j<10;$j++){
        $jeuDeDame[$i][$j]="O ";
    }
}
$jeuDeDame[$ligne][$colonne]="X ";
for ($i=0;$i<10;$i++){
    for($j=0;$j<10;$j++){
        echo $jeuDeDame[$i][$j];
    }
    echo"\n";
} 

do{
    $mouv=readline("quelle mouvement souhaitez vous effectuer (0:en haut à gauche)(1:en haut à droite)(2:en bas à gauche)(3:en bas à droite) ? ");
}while ($mouv<0 or $mouv>3 or $mouv!=strval(intval($mouv)));
$jeuDeDame[$ligne][$colonne]="O ";
if($mouv<2){
    $ligne--;
}else{
    $ligne++;
}
if($mouv%2==0){
    $colonne--;
}else{
    $colonne++;
}
$jeuDeDame[$ligne][$colonne]="X ";
if($ligne==-1 or $ligne==10 or $colonne==-1 or $colonne==10){
    echo "vous etes sortie du plateau";
}else{
    for ($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            echo $jeuDeDame[$i][$j];
        }
        echo"\n";
    } 
}


?>