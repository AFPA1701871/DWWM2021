<?php
do{
    $nombreNote=readline("combien de note ?");
}while($nombreNote<=0 or $nombreNote!=strval(intval($nombreNote)));
for($i=0;$i<$nombreNote;$i++){
    do{
        $note[$i]=readline("note n°".strval($i+1)." ? ");
    }while($note[$i]!=strval(floatval($note[$i])));
}
$moyenne=array_sum($note)/$nombreNote;
$supALaMoyenne=0;
foreach($note as $iEmeNot){
    ($iEmeNot>$moyenne)?$supALaMoyenne++:null;
}
echo "il y a ".$supALaMoyenne." notes qui sont au dessus de la moyenne (qui est de ".$moyenne.")";
?>