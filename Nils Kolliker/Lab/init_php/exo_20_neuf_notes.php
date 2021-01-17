<?php
$moyenne=0;
for($i=0;$i<9;$i++){
    do{
        $note[$i]=readline("note n°".strval($i+1)." ? ");
    }while($note[$i]!=strval(floatval($note[$i])));
    $moyenne=$moyenne+$note[$i];
}
$moyenne=$moyenne/9;
echo "moyenne = ".$moyenne
?>