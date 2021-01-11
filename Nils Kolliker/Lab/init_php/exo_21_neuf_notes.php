<?php
for($i=0;$i<9;$i++){
    do{
        $note[$i]=readline("note n°".strval($i+1)." ? ");
    }while($note[$i]!=strval(floatval($note[$i])));
}
echo "moyenne = ".strval(array_sum($note)/9);
?>