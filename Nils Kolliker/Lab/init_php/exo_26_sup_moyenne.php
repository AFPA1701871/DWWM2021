<?php
do{
    $nombreNote=readline("combien de note ?");
}while($nombreNote<=0 or $nombreNote!=intval($nombreNote));
$moyenne=0;
for($i=0;$i<$nombreNote;$i++){
    $note[]=readline("note n°".strval($i+1)." ? ");
    $moyenne=$moyenne+$note[$i];
}
$moyenne=$moyenne/$nombreNote;
$supALaMoyenne=0;
foreach($note as $iEmeNot){
    ($iEmeNot>$moyenne)?$supALaMoyenne++:null;
}
echo "il y a ".$supALaMoyenne." notes qui sont au dessus de la moyenne (qui est de ".$moyenne.")";
?>