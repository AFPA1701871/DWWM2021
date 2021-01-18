<?php
    echo"  Manipultation d'un tableau clé-valeur\n";
    //declaration du tableau initial
    $tableauNotes=array("franck"=>14,"kesary"=>16,"jimmy"=>15);
    //affichage du tableau
    echo"Voici le premier tableau: \n";
    print_r($tableauNotes);
    //ajouter la note d'houssam
    echo"on ajoute la note d'Houssam : \n";
    $tableauNotes["Houssam"]=15;
    echo"voici le nouveau tableau: \n";
    print_r($tableauNotes);
    //on va supprimer la note de franck
    echo"suppression de la note de Franck: \n";
    array_shift($tableauNotes);
    //note maximale/minimale
    echo"Voici le nouveau tableau: \n";
    print_r($tableauNotes);
    echo"note maximale= ".max($tableauNotes);
    echo"\n";
    echo"note minimale= ".min($tableauNotes);
    echo"\n";
    //tri du tableau par ordre alphabetique
    ksort($tableauNotes);
    echo"le tableau trié par odre alphabetique: \n";
    print_r($tableauNotes);
    //tri du tableau par ordre de merite(decroissant)
    arsort($tableauNotes);
    echo"le tableau trié par ordre de mérite: \n";
    print_r($tableauNotes);
    //moyenne
    $moyenneTab=array_sum($tableauNotes)/sizeof($tableauNotes);
    echo"la moyenne des notes est: ".$moyenneTab;
    
