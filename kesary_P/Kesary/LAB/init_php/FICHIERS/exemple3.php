<?php
//Copie un fichier vers un autre
$file = "file.txt";
$newfile = "file.txt.bak";

if (!copy($file,$newfile)) {
    echo "La copie $file du fichier a échoué...\n";
}

?>

