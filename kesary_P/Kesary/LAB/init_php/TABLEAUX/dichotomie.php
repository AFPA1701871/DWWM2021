<?php
// Recherche dichotomie
$tab = array("aaa", "ghy","bbb","chaise","fenetre","armoire","table");
//Affichage tableau
for ($i=0; $i < count($tab); $i++) { 
    echo " ";
    echo " ";
    echo $tab[$i];  
}
echo " \n";

$mot = readline("Entrez un mot à rechercher : \n");

//trouve = false
$trouve = 0;
$auDebut = 0;
$aLaFin = count($tab);

//Recherche dichotomie
while ($trouve == 0 && $auDebut <= $aLaFin) {
    $milieu = intdiv(($auDebut+$aLaFin),2);
    if ($tab[$milieu] == $mot) {
        $trouve = 1;
    }elseif ($tab[$milieu] < $mot) {
        $auDebut = $milieu + 1;
    }else {
        $aLaFin = $milieu-1;
    }
}

//Affichage résultat
if ($trouve ==1) {
    echo " ";
    echo "Mot trouvé";
}else{
    echo " ";
    echo"Mot non trouvé";
}


?>

