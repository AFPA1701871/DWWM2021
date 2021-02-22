<?php
    class Pigeon {
        private $_color="grey";
        private $_nbOfPaws=2;
        private $_nbOfEyes=2;


        public function fly(int $flyspeed) {
            echo "le pigeon vole à $flyspeed km/h\n";
        }

        public function cutPaws(int $nbOfCuttedPaws) {
            $restOfPaws=$this->_nbOfPaws-$nbOfCuttedPaws;
            if ($restOfPaws>=0) {
                echo "il reste $restOfPaws patte au pigeon\n";
            }
            else {
                echo "le pigeon n'a que ".$this->_nbOfPaws." pattes, vous ne pouvez pas lui couper ".$nbOfCuttedPaws." pattes\n";
            }
        }
    }
?>