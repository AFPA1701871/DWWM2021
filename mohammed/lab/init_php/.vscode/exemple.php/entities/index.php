<?php
require ("class.php");
$eleve= new eleve ("bts",16,"amine","35","171","100");
echo  " eleve  " .$eleve->reviser()."\n";
echo   " eleve  " .$eleve->mesnotes()."\n";
echo " eleve " . $eleve-> get_nom()."\n";
echo " eleve " .$eleve->sport()."\n";
echo " eleve " . $eleve-> get_age()."\n";
echo " eleve " . $eleve->travail()."\n";
echo " eleve " . $eleve->courir()."\n";
?>