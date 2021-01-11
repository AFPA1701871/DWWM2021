<?php
    $monDictionnaire=array("acajou","feuille","kilo","mangue","punaise","wu","zigzag");

    $motRecherche=readline("entrez le mot à rechercher dans le dictionnaire: ");

    $limiteRechercheBasse=1;
    $limiteRechercheHaute=8;

    $boolean="faux";
    $motmilieu=intdiv($limiteRechercheBasse+$limiteRechercheHaute,2);
    echo $motmilieu;

?>