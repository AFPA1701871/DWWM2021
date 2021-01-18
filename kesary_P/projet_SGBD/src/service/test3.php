<?php
$monTab = array();
$separateur = ' ';
$parseLine = explode("\r\n", file_get_contents('monFichierTexte.txt'));

foreach($separateur as $line){
    $dec =explode($separateur,$line);
    array_push($monTab,array(
        'nom'     =>   $dec[0],
        'prenom'  =>   $dec[1],

    ));
}
printf('Salut %s %s !'.$monTab[0]['nom']. $monTab[0]['prenom']);

?>