<?php 

    class Banque{
        private $_nom;
        private $_tabClient=[];

        public function __construct(string $nom){
            $this-> _nom=$nom;
        }

        public function setClient(Client $client){
            $this-> _tabClient[]=$client;
        }

    }

?>