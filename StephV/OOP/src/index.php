<?php
/*

6.on screen, characteristics trespassing car + fee following speedTrespassing
vitesseRoul=start(numCars?)+acc(random)
if (speed<= */

function loadClass($classe){
    require("./Entities/".$classe.".class.php");
}
spl_autoload_register('loadClass');

//input user
$speedLimit=readline("Déterminez la limitation de vitesse : ");
$inputNbCars=readline("Combien de voitures ? ");

//input user over car's characteristics
do {
    
        $numCar=new cars($make, $model, $matric, $color);
        $make=readline("Marque de la voiture ?  \n");
        $model=readline("Modèle de la voiture ?  \n");
        $matric=readline("Immatriculation de la voiture ?  \n");
        $color=readline("Couleur de la voiture ?  \n");
        $numCar=array($make,$model,$matric,$color);
        $tabCar=$numCar();

        echo $make."\n".$model."\n".$matric."\n".$color;
    
    
} while (nbCars!=inputNbCars);


//start & acceleration
while (nbCars==inputNbCars){
    do {
        
    } while ($radar!=TRUE); //radar boolean
}

echo "la voiture".$numCar."(make, model, matric, color) \nvient d'accélérer
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