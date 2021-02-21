<?php

class De{

    /**
     * methode random simulant un lancé de dé classique
     */
    public function lancerLeDe(){
        return rand(1,6);
    }

    /**
     * methode random simulant un pile ou face
     */
    public function pileOuFace(){
        return rand(1,2);
    }

}

?>