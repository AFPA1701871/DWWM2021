<?php
$fp = fopen("../../BDD/test.txt","r");

while(!feof($fp)){
    $ligne = fgets($fp,4096);
    echo $ligne;
}
fclose($fp);

?>