<?php

$fp =fopen("C:\git\mohammed\DWWM2021\mohammed\lab\init_php\.vscode\projet_SGBD\BDD\config.ini.txt", "r");
$line=fgets($fp);
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
$fp1= fopen("C:\git\mohammed\DWWM2021\mohammed\lab\init_php\.vscode\projet_SGBD\src\service\data.txt.txt","a");
$table=[" - nom  prenom - "," - numero - "," - email - "];
$envoi="-nom --telephone--email--"."\n";

fputs($fp1,$envoi,)."\n";
$createtable = readline( " SQL :> ");
$nom=readline( " entrez nom  ")."\n";
fputs($fp1,$nom)."\n";
$telephone=readline( " entrez tel  ")."\n";
fputs($fp1,$telephone)."\n";
$email=readline( " entrez email ")."\n";
fputs($fp1,$email)."\n";
for ($i=0; $i <10 ; $i++) {
    echo $tab1[$i]="-"."\n";
    for ($j=0; $j <10 ; $j++) { 
        echo $tab1[$i][$j]="-";
    }    
}


fputs($fp1,$sql);



?>