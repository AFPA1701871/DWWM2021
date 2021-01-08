<?php
for($i=0;$i<9;$i++){
    $note[]=readline("note n°".strval($i+1)." ? ");
}
echo "moyenne = ".strval(array_sum($note)/9);
?>