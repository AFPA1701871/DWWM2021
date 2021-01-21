<?php
function numVowels($word){ 
    
    $vowels=array('a','e','i','o','u','y');
    $len=strlen($word);
    $num=0;
    for($i=0; $i<$len; $i++){
        if(in_array($word[$i], $vowels))  //F that checks if value exists in an array
        {
            $num=$num+1;
        }
    }
    return $num;
}     


functionPurge($word,$char){  //removes character from word

    $word = str_split($word);
    $word = strtolower($word);
    $char = strtolower($char);

    for ($i=0;$i<count($word);$i++){

        if ($word[$i] == $char){
            $word[$i]="";
        }
    }
   
    $word = implode($word);
    $word = ucfirst($word);

    return $word;

}

?>