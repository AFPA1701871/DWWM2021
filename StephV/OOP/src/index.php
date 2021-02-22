<?php

function loadClass($classe){
    require("./Entities/".$classe.".php");}
spl_autoload_register("loadClass");

//input user

    $radar->setSpeedLimit("");
    $speedLimit=readline("Déterminez la limitation de vitesse : ");
    $radar=new Radar();

$inputNbCars=readline("Combien de voitures ? ");

//input user over car's characteristics
    for($i=1;$i<=$inputNbCars;$i++){
        $idCar=new Car();
        $idCar=$idCar.$i;
        echo $idCar;
    
    }
                

//start & acceleration
while (nbCars<=inputNbCars){
    do {
        
    } while ($radar!=TRUE); //radar boolean
}

for ($i=1;$inputNbCars;$i++){
    $trespass=FALSE;
    if ($speedCar>$speedLimit){
        echo "Vous avez été flashé à ". $speedCar;
        $infraction=$speedCar-$speedLimit;
        $trespass=TRUE;
    }
}

echo "la voiture".$idCar."(make, model, matric, color) \nvient d'accélérer
de".$acc."km/h et roule maintenant à ".$speedCar."km/h\n";

//fee if trespass

if ($infraction<=10){
    echo "Vous perdez 1pts, votre amende s'élève à 45€"; 
}
elseif ($infraction>10 and $infraction<=20){
    echo "Vous perdez 3pts, votre amende s'élève à 90€";
}
elseif ($infraction>20){
    echo "Rendez-vous à la gendarmerie";
}

?>