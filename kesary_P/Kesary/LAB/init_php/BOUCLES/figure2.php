<?php
//$rangee = readline("Entrez le  nombre de rangée :");
//$colonne = readline("Entrez le  nombre de colonne :");
for ($rangee=1; $rangee <= 5 ; $rangee++) { 
    for ($colonne=1; $colonne < $rangee ; $colonne++) { 
        echo "*";
    }
    echo "\n";  
}
for ($rangee=5; $rangee >=1 ; $rangee--) { 
    for ($colonne=1; $colonne <= $rangee ; $colonne++) { 
        echo "*";
    }  
}
echo "\n";  
for ($rangee=5; $rangee >= 1 ; $rangee--) { 
    for ($espace=5; $espace > $rangee ; $espace--) { 
        echo'';
    }
    for ($colonne=1; $colonne <= $rangee ; $colonne++) { 
        echo"*";
    }
    echo "\n";  
}
echo "\n";
for ($rangee=5; $rangee >= 1 ; $rangee--) { 
    for ($espace=1; $espace < $rangee; $espace++) { 
        echo " ";
    }
    for ($colonne=5; $colonne >= $rangee ; $colonne--) { 
        echo"*";
    }
}  

?>

