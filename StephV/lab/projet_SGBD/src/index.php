<?php

//check login
do {
    $user=readline("name ");
            if ($input=="quit"){
                die;
            }
    $password=readline("password ");
            if ($input=="quit"){
                die;
            }
    $login=array($user,$password);
    $fp=fopen("..\BDD\config.ini","r");
    
    if($fp){
        $ok=false;
        $line=fgets($login,4096); 
        while(!feof($login)){
            $line=fgets($login,4096);
            if(strstr($line,$login)){
                $ok=true;
                break;
            }
        }
        fclose($login);
    }
    if ($ok) {
        echo"Correct id";
        $input=" ";
    }else{
        echo "Wrong id";
}while(($ok!= true) and ($input!= "quit"));





?>