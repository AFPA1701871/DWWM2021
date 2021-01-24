<?php
function reverse($word) {
    if (strlen($word)==1) {
        return $word;
    }
    else {
        
        echo substr($word,1,strlen($word))."\n";
        return inverse(substr($word,1,strlen($word))).substr($word,0,1);
    }
}

$monMot="Hello";

echo reverse($monMot);

?>