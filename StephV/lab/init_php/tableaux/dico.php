<?php
$dico=array("abysse","baltique","chat","igloo","lynx","océan","steppe","toundra","yourte","zoo");

$crawl="oui";
do {
$low=1; $high=11;
$search=readline(" Mot à rechercher :");   
$dichotome="vrai";
    while ($dichotome=="vrai") {
        $middle=intdiv($low+$high,2);
        if ($search==$dico[$middle] or $high<$low) {
            $dichotome="faux";
        }
        else if ($search<$dico[$middle]) {
            $high=$middle-1;
        }
        else {
            $low=$middle+1;
        }
    }
    if ($search==$dico[$middle]) {
        echo "Mot trouvé. Au revoir";
        //goto a;
    }
    else {
        echo "Le mot n'est pas dans le dictionnaire. ";
        $crawl;
    }
    }    
while ($crawl="non");

/*a:
echo "Nouvelle recherche de mot ? ";
if (!$crawl){
    goto b;
}
elseif ($crawl){
    $crawl;
}

b :
echo "Au revoir";*/
?>