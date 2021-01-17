<?php

$dico= array("acajou","demain","noir","pour","voiture");
$mot=readline("entrez le mot à rechercher : ");

$bool=false;

for($i=0;$i<count($dico);$i++){
    if($mot==$dico[$i]){
        $bool=true;
    }
}

if($bool==true){
    echo "le mot recherché est dans le dictionnaire";
}
else{
    echo "le mot recherché n'est pas dans le dictionnaire";
}

?>