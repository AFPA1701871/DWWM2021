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
        $valueTab[0]=strtoupper($valueTab[0]);
        if (strtoupper($valueTab[1]) == "TABLE" or strtoupper($valueTab[1]) == "INTO"){
            $valueTab[1]=strtoupper($valueTab[1]);
        }
        if (strtoupper($valueTab[2]) == "FROM"){
            $valueTab[2]=strtoupper($valueTab[2]);
        }
        if (strtoupper(substr($valueTab[3],0,(strpos($valueTab[3],"(")))) == "VALUES"){
            $valueTab[3]=strtoupper(substr($valueTab[3],0,(strpos($valueTab[3],"(")))).substr($valueTab[3],strpos($valueTab[3],"("),(strpos($valueTab[3],";")-strlen($valueTab[3])));
        }
        print_r($valueTab);
        switch ($value){
            case "":
                echo "Error invalid inputs.\n";
                break;
            case $valueTab[0] == "CREATE" and $valueTab[1] == "TABLE" and substr($value,-1,1) == ";":
                createTable($value);
                break;
            case $valueTab[0] == "INSERT" and $valueTab[1] == "INTO" and substr($valueTab[3],0,6) == "VALUES" and substr($value,-1,1) == ";":
                insertInto($value);
                break;
            case $valueTab[0] == "SELECT" and $valueTab[2] == "FROM" and substr($value,-1,1) == ";":
                if($valueTab[1] == "*"){
                    selectAllFrom();
                }else{
                    selectValueFrom();
                }
                break;
            default:
                echo "Error invalid inputs please try again. Don't forget the ';' at the end.\n";
        } 
        $stop = false;
        return $stop;
    }

    //function create.
    function createTable($value){
        $newFileName="..\BDD\\".substr($value,13,(strpos($value,"(")-13)).".DWWM";
        if(file_exists($newFileName)){
            echo substr($value,13,(strpos($value,"(")-13))." already exist.\n";
        }else{

            //if ($bool = true){
            $fp = fopen($newFileName,"w");
            fputs($fp, substr($value,strpos($value,"(")+1,(strpos($value,")")-strlen($value))));
            fclose($fp);
            echo substr($value,13,(strpos($value,"(")-13))." is created.\n";
            //}
        }
    }

    //function Insert into.
    function insertInto($value){
        $fileName="..\BDD\\".substr($value,12,(strpos($value,"VALUES")-13)).".DWWM";
        if(file_exists($fileName)){
            $fp = fopen($fileName, "r");
            $valueTab = explode(",",substr($value,strpos($value,"(")+1,(strpos($value,")")-strlen($value))));
            $count=0;
            while(!feof($fp)){
                if ($count == 0){
                    $nbColoneTab=explode(",", fgets($fp,4096));
                }
            }
            fclose($fp);
            if (count($valueTab) == count($nbColoneTab)){
                $fp = fopen($fileName,"a");
                fputs($fp,"\n");
                fputs($fp,substr($value,strpos($value,"(")+1,(strpos($value,")")-strlen($value))));
                fclose($fp);
            }else{
                echo "Invalid inputs, you need to enter ".count($nbColoneTab)."inputs after in the '()' séparated by ','.\n";
            }
        }else{
            echo substr($value,12,(strpos($value,"VALUES")-13))." doesn't exist.\n";
        }
    }
?>