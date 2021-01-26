<?php
    class Cart {
        private $_client;
        private $_cartLine;

        public function get_client() {
            return $this->_client;
        }

        public function get_cartLine() {
            return $this->_cartLine;
        }

        public function set_client($client) {
            $this->_client=$client;
        }

        public function set_cartLine($cartLine) {
            $this->_cartLine=$cartLine;
        }

        public function __construct($client,$cartLine) {
            $this->set_client($client);
            $this->set_cartLine($cartLine);
        }
    }
?>