<?php
class Radar{
    //speedLimit ?
    
    public function flash(){
        for ($i=1,$inputNbCars,$i++){     //or foreach
            $trespass=FALSE;
            if ($speedCar>$speedLimit){
                echo "Vous avez été flashé à ". $speedCar;
                $infraction=$speedCar-$speedLimit;
                $trespass=TRUE;
            }
        }
    }

}

?>