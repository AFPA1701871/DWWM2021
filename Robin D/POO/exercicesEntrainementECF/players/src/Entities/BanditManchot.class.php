<?php
    class BanditManchot {
        
        public function winOrLose() {
            $result=random_int(1,2);
            switch ($result) {
                case 1:
                    return true;
                    break;
                case 2:
                    return false;
                    break;
            }
        }

        public function howManyWeWinOrLose() {
            $result=random_int(1,10);
            return $result;
        }

    }
?>