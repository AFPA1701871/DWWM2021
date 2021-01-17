<?php
require("fonction_exo_1a3.php");
$mot=readline("saisir un mot: ");
echo"Il y a".' '.compteurvoyelle($mot,"aeiouy").' '."voyelle(s)";
?>