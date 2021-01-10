<?php
$moyenne=0;
for($i=0;$i<9;$i++){
    $note[]=readline("note n°".strval($i+1)." ? ");
    $moyenne=$moyenne+$note[$i];
}
$moyenne=$moyenne/9;
echo "moyenne = ".$moyenne
?>