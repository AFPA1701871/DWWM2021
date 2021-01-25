<?php

$fp =fopen("..\..\BDD\config.ini.txt", "r");
echo " veuillez saisir vos identifiant " ."\n";
$i=0;
do {
    $ok=0;
    $ok1=0;
    $login=readline (" saisir identifiant ");  $motdepasse=readline( "  saisir mot de passe ");
        while (!feof($fp)) {
            $line=fgets($fp,4096);
            $tab[$i]=$line;
            $i++;
            echo $line;}                        
                    print_r ($tab);
                    echo $line."\n";
                    echo $ok1."\n";
                    echo $ok."\n";
            for ($i=0; $i <count($tab) ; $i++) { 
                echo $tab[$i]."\n";
                    if ($tab[$i]==$login ) {
                        echo " login corect "."\n";
                        $ok=1;}
  
                   if ($tab[$i]==$motdepasse) {
                        echo " mot de passe corect "."\n";
                        $ok1=1;} 
            }
            if ($ok==0 or $ok1==0) {
                echo " saisie erronée"."\n";
            }
                       echo $ok;
                       echo $ok1;
}   while ($ok==0 or $ok1==0); 
$fp =fclose($fp);


?>