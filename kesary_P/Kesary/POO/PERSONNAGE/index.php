<?php
 require ("Personnage.php"); 
$merlin = new Personnage("Merlin");
//$merlin -> nom = "Merlin";
//$merlin -> regenerer(5);

$harry = new Personnage("Harry");
$merlin->attaque($harry);
if($harry->mort()){
    echo "Harry est mort :(";
}else{
    echo "Harry a survécu avec " . $harry->vie;
}

//$harry -> regenerer();
//$harry->vie = 0;
//var_dump($harry->mort());
//$harry->mort();
//$harry -> nom = "Harry";
//var_dump($merlin);
//var_dump($harry);

?> 