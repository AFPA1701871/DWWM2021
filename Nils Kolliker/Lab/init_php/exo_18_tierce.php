<?php
do{
    $chevauxPartants=readline("nombre de chevaux partant? ");
    $chevauxJoues=readline("nombre de chevaux joués? ");
}while($chevauxJoues<=0 or $chevauxPartants<$chevauxJoues or intval($chevauxJoues)!=$chevauxJoues or intval($chevauxPartants)!=$chevauxPartants);
$dansLOrdre=1;
$chevauxJouesFactorielle=1;
for($i=1;$i<=$chevauxJoues;$i++){
    $chevauxJouesFactorielle=$chevauxJouesFactorielle*$i;
    $dansLOrdre=$dansLOrdre*($i+$chevauxPartants-$chevauxJoues);
}
$dansLeDesordre=$dansLOrdre/$chevauxJouesFactorielle;
echo "Dans l'ordre : 1/". $dansLOrdre." chance de gagner\n";
echo "Dans le désordre : 1/". $dansLeDesordre." chance de gagner";
?>