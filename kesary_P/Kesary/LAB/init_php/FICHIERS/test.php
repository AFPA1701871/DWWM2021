<?php
$fichier = fopen ("file.txt", "r");
$compteur = 0;

while($compteur <2){

  //On recupère la ligne courante
  $temp = fgets($fichier);
  $compteur++;
}
echo $temp;
fclose($fichier);
?>

function rechercheLine(){
    /*
    $fichier = fopen("../BDD/config.ini","w");
    $ligne = 0;
    $temp = 0;

    while ($line <2){
        $temp = fgets($fichier);
        $ligne++;
    }
    echo $temp;
    fclose($fichier);*/
    echo"bbbb";
}
