<?php
$age = readline("Quel est votre âge : ");
$permis = readline("Depuis combien de temps avez-vous votre permis : ");
$accident = readline("Combien avez-vous eu d'accidents : ");
$fidelite = readline("Depuis combien temps êtes vous assuré chez nous : ");
$tarif = "bleu";

if ((($age < 25 &&  $permis > 2) || ($age > 25 &&  $permis < 2)) &&  $accident == 0 ){
    $tarif = 'orange';
    echo "Vous avez un tarif orange";
}elseif (($age > 25 &&  $permis < 2 &&  $accident == 1) || ($age < 25 &&  $permis > 2 &&  $accident == 1)) {
    $tarif = 'rouge';
    echo "Vous avez un tarif rouge";
}elseif ($age > 25 &&  $permis > 2 &&  $accident == 0) {
    $tarif = 'vert';
    echo "Vous pouvez bénéficier d'un tarif vert";
}elseif (($age > 25 && $permis > 2) &&  $accident = 1) {
    $tarif = 'orange';
    echo "Vous avez un tarif orange";
}elseif (($age > 25 &&  $permis > 2 &&  $accident = 2) || ($age < 25 &&  $permis < 2 &&  $accident = 0)) {
    $tarif = 'rouge';
    echo "Vous avez un tarif rouge";
}else {
    echo "Refusé";
}

if ($fidelite > 5 && $tarif = 'vert' ) {
    echo "Vous avez un bonus, vous passez en tarif bleu";
}elseif ($fidelite > 5 && $tarif = 'orange') {
    echo "Vous avez un bonus, vous passez en tarif vert";
}elseif ($fidelite > 5 && $tarif = 'rouge') {
    "Vous avez un bonus, vous passez en tarif orange";
}

?>











