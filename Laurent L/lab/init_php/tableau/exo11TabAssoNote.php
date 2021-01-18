<?php
    //variables et son affichage
    $tabNotes = ["Franck"=>14, "Kesary"=>16, "Jimmy"=>15];
    $tabNotes2 = [];
    print_r($tabNotes);

    //ajout de Houssam
    $tabNotes["Houssam"] = 17;
    print_r($tabNotes);

    //enlever la note d'un stagiaire
    
    $tabNotes["Franck"] = " ";

    //determiner la valeur max et mini 
    

    foreach($tabNotes as $cle=>$valeur){
        if($cle == $aEnlever){
            echo $valeur;
            $tabNotes2 = $tabNotes2+$tabNotesS;

        }
    }

    // for ($i=0; $i<count($tabNotes); $i++){
    //     if($tabNotes[$i][0] != $aEnlever){
    //         $tabNotes2 = $tabNotes[$i];
    //     }
        
    // }
    print_r($tabNotes);
    print_r($tabNotes2);



   


?>