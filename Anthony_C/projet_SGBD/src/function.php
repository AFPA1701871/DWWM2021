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
                case "help":
                    help($value);
                    break;
                case "":
                    echo "Error invalid inputs.\n";
                    break;
                case strtoupper($valueTab[0]) == "CREATE" and strtoupper($valueTab[1]) == "TABLE" and substr($value,-1,1) == ";" and strpos($valueTab[2],"(") >= 1 and strpos($valueTab[2],")") >=1:
                    createTable($value);
                    break;
                case strtoupper($valueTab[0]) == "INSERT" and strtoupper($valueTab[1]) == "INTO" and strtoupper(substr($valueTab[3],0,6)) == "VALUES" and substr($value,-1,1) == ";" and strpos($valueTab[3],"(") >= 1 and strpos($valueTab[3],")") >=1:
                    insertInto($value);
                    break;
                case strtoupper($valueTab[0]) == "SELECT" and strtoupper($valueTab[2]) == "FROM" and substr($value,-1,1) == ";" and strpos($valueTab[3],"(") < 1 and strpos($valueTab[3],")") < 1:
                    if($valueTab[1] == "*"){
                        selectAllFrom($value);
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
            $testCharTab=explode(",",substr($value,strpos($value,"(")+1,(strpos($value,")")-iconv_strlen($value))));
            $bool = true;
            foreach ($testCharTab as $test){
                if (iconv_strlen($test) >= 25){
                    $bool = false;
                }
            }
            for ($i=0;$i<count($testCharTab);$i++){
                for ($j=$i+1;$j<count($testCharTab);$j++){
                    if ($testCharTab[$i] == $testCharTab[$j]){
                        $bool = false;
                    }
                }
            }
            if ($bool == true){
                $fp = fopen($newFileName,"w");
                $value=str_replace(",",";",$value);
                fputs($fp, substr($value,strpos($value,"(")+1,(strpos($value,")")-iconv_strlen($value))).";");
                fclose($fp);
                echo substr($value,13,(strpos($value,"(")-13))." is created.\n";
            }else{
                echo "Too many characters in a column.\n"."Reminder : you can have the same values in your column.\n";
            }
        }
    }

    //function Insert into.
    function insertInto($value){
        $fileName="..\BDD\\".substr($value,12,(strpos(strtoupper($value),"VALUES")-13)).".DWWM";
        if(file_exists($fileName)){
            $fp = fopen($fileName, "r");
            $valueTab = explode(",",substr($value,strpos($value,"(")+1,(strpos($value,")")-iconv_strlen($value))));
            $count=0;
            while(!feof($fp)){
                if ($count == 0){
                    $nbColoneTab=explode(";", fgets($fp,4096));
                }
            }
            fclose($fp);
            $bool = true;
            foreach ($valueTab as $test){
                if (iconv_strlen($test) >= 25){
                    $bool = false;
                }
            }
            if (count($valueTab)+1 == count($nbColoneTab) and $bool == true){
                $fp = fopen($fileName,"a");
                fputs($fp,"\n");
                $value=str_replace(",",";",$value);
                $value=str_replace("'","",$value);
                fputs($fp,substr($value,strpos($value,"(")+1,(strpos($value,")")-iconv_strlen($value))).";");
                fclose($fp);
            }else{
                echo "Invalid inputs, you need to enter ".count($nbColoneTab)." inputs after in the '()' séparated by ',' or atleast one of your value is more than 25 char.\n";
            }
        }else{
            echo substr($value,12,(strpos(strtoupper($value),"VALUES")-13))." doesn't exist.\n";
        }
    }

    //function help user.
    function help($value){
        echo "Cheh t'auras pas d'aide!\n";
    }

    //function select * from.
    function selectAllFrom($value){
        $newFileName="..\BDD\\".substr($value,14,strpos($value,";")-14).".DWWM";
        if(file_exists($newFileName)){
            $fp = fopen("..\BDD\\".substr($value,14,strpos($value,";")-14).".DWWM","r");
            $count=0;
            $cadre="+";
            while (!feof($fp)){
                $showTab[$count]=explode(";", fgets($fp, 4096));
                $count++;
            }
            fclose($fp);
            for ($i=0;$i<count($showTab[0])-1;$i++){  //$i == ligne
                $plusGrand="";
                for ($j=0;$j<count($showTab)-1;$j++){  //$j == colonne
                    if (iconv_strlen($showTab[$j][$i])<iconv_strlen($showTab[$j+1][$i])){
                        $plusGrand=$showTab[$j+1][$i];
                    }else if(iconv_strlen($showTab[$j][$i])>iconv_strlen($showTab[$j+1][$i])){
                        $plusGrand=$showTab[$j][$i];
                    }
                }
                for ($j=0;$j<count($showTab);$j++){
                    while(iconv_strlen($showTab[$j][$i])<=iconv_strlen($plusGrand)){
                        $showTab[$j][$i].=" ";
                    }
                    $showTab[$j][$i].="|";
                    $stock=$showTab[$j][$i];
                    if ($i==0){
                        $showTab[$j][$i]="| ".$showTab[$j][$i];
                    }else{
                        $showTab[$j][$i]=" ".$showTab[$j][$i];
                    }
                }
                for ($k=0;$k<iconv_strlen($stock)+2;$k++){
                    if($k==iconv_strlen($stock)){
                        $cadre.="+";
                    }else if($k<iconv_strlen($stock)){
                        $cadre.="-";
                    }
                }
            }
            for($i=0;$i<count($showTab);$i++){
                $var="";
                for($j=0;$j<(count($showTab[$i]));$j++){
                        $var.=$showTab[$i][$j];
                }
                if($i==0 or $i==1 or $i==count($showTab)-1){
                    if($i==count($showTab)-1){
                        echo $var."\n";
                        echo $cadre."\n";
                    }else if($i==1){
                        echo $cadre."\n";
                        echo $var;
                    }else{
                        echo $cadre."\n";
                        echo $var;
                    }
                }else{
                    echo $var;
                } 
            }
        }else{
            echo substr($value,14,strpos($value,";")-14)." doesn't exist.\n";
        }
    }
?>