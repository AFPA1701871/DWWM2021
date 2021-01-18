<?php
    //function login_user. 
    function testLogin($login,$password){
        $fp = fopen("..\BDD\config.ini","r");
        $boolean = false;
        $compteur = 0;
        while (!feof($fp)) {
            $authentificationTab=explode(";", fgets($fp, 4096));
            if ($compteur != 0){
                if($authentificationTab[0]==$login and $authentificationTab[1]==$password){
                    $boolean = true;
                }
            }
            $compteur++;
        }   
        if($boolean == false){
            echo "Error login/password incorrect, please try again.\n";
        }
        fclose($fp);
        return $boolean;
    }

    //function when the user inputs is quit stop the application.
    function quitApplication($value){
        if ($value == "quit"){
            exit;
        }
    }

    //function test all the inputs of the user.
    function testInputs($value){
        $valueTab = explode(" ",$value);
        switch ($value){
            case $valueTab[0] == "CREATE" and $valueTab[1] == "TABLE" and substr($value,-1,1) == ";":
                $execute = 1;
                break;
            case $valueTab[0] == "INSERT" and $valueTab[1] == "INTO" and substr($valueTab[3],0,6) == "VALUES" and substr($value,-1,1) == ";":
                $execute = 2;
                break;
            case $valueTab[0] == "SELECT" and $valueTab[2] == "FROM" and substr($value,-1,1) == ";":
                    if($valueTab[1] == "*"){
                        $execute = 3;
                    }else{
                        $execute = 4;
                    }
                break;
            default:
                $execute = 0;
                echo "Error invalid inputs please try again. Don't forget the ';' at the end.\n";    
                return $execute;
        }
    }
?>