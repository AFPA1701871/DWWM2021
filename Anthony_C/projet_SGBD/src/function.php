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
                case "":
                    echo "Error invalid inputs.\n";
                    break;
                case strtoupper($valueTab[0]) == "CREATE" and strtoupper($valueTab[1]) == "TABLE" and substr($value,-1,1) == ";" and strpos($valueTab[2],"(") >= 1 and strpos($valueTab[2],")") >=1:
                    createTable($value);
                    break;
                case strtoupper($valueTab[0]) == "INSERT" and strtoupper($valueTab[1]) == "INTO" and strtoupper(substr($valueTab[3],0,6)) == "VALUES" and substr($value,-1,1) == ";" and strpos($valueTab[2],"(") >= 1 and strpos($valueTab[2],")") >=1:
                    insertInto($value);
                    break;
                case strtoupper($valueTab[0]) == "SELECT" and strtoupper($valueTab[2]) == "FROM" and substr($value,-1,1) == ";" and strpos($valueTab[2],"(") < 1 and strpos($valueTab[2],")") < 1:
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
            $testCharTab=explode(",",substr($value,strpos($value,"(")+1,(strpos($value,")")-strlen($value))));
            $bool = true;
            foreach ($testCharTab as $test){
                if (strlen($test) >= 25){
                    $bool = false;
                }
            }
            if ($bool == true){
            $fp = fopen($newFileName,"w");
            fputs($fp, substr($value,strpos($value,"(")+1,(strpos($value,")")-strlen($value))));
            fclose($fp);
            echo substr($value,13,(strpos($value,"(")-13))." is created.\n";
            }else{
                echo "Too many characters in a column.\n";
            }
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