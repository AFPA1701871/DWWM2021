<?php
$note=["franck"=>15,"kesary"=>14,"jimmy"=>16];
$ajout=["houssam"=>15];
array_shift($note);
$result = array_merge($note,$ajout);
$moyenne=0;
array_multisort($result);
var_dump($result);
foreach ($result as $key => $value) {
    if ($key=="franck") {
        $value=0;
    }  
    if ($value==max($result)) {
        $noteMax=$value;  }
        elseif ($value==min($result)) {
            $noteMin=$value; 
    } 
    echo "la note de  ".$key." est de  " .$value."\n";
    $moyenne+=$value;
}
echo "la moyenne de la classe est  ".$moyenne/3 ."\n";
echo "la note max est de ".$noteMax."\n";
echo "la note min est de ".$noteMin."\n";
?>