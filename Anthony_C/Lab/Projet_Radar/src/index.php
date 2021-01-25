<?php
    require "./services/function.php";
    
    function loadClass($class){
        require "./entities/".$class.".class.php";
    }

    spl_autoload_register("loadClass");

    do {
        $limitation=readline("Qu'elle est la limitation de vitesse ? (minimum 50 km/h) :");
    } while ($limitation < 50);
    
    $radar = new Radar($limitation);

    do {
        $nbCar=readline("Combien y'a t'il de voitures participantes ? (minimum 2) :");
    } while ($nbCar < 2);

    echo "\n";

    for ($i=1;$i<=$nbCar;$i++){
        $brand = readline("De quelle marque est votre $i voiture ? :");
        $model = readline("De quelle modèle est votre $i voiture ? :");
        $registration = readline("De quelle immatriculation est votre $i voiture ? :");
        $color = readline("De quelle color est votre $i voiture ? :");
        ${"car".$i} = new Car($brand,$model,$registration,$color);
        echo "\n";
    }

    do {
        for ($i=1;$i<=$nbCar;$i++){
            ${"car".$i}->accelerate($i);
            $speed = ${"car".$i}->get_speed();
            $typePv = $radar->flasher($i,$speed);
            if ($typePv >=0 and $typePv <=2){
                echo ${"car".$i}->toString();
                $pv = new Pv();
                echo $pv->createPV($typePv,$i);
            }
        }
        $stop=readline("");
    } while ($i != 0);
?>