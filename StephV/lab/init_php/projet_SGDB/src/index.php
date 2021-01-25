<?php


$login = readline("Username: ");
$password = readline("Password : ");

$file = fopen(".././BDD/config.ini","r");

if($file){                         //if read file=ok
    $boolean = false;
    $line = fgets($file,4096); 
    while(!feof($file)){
        $line = fgets($file,4096);
        if(strstr($line,$id)){
            $boolean=true;
            break;        
        }
    }
    fclose($file);
}
?>



































/