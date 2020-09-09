<?php

    namespace Models;

    use Models\Transport as Transport;

    class Aerial extends Transport{

        //Attributes
        private $engineQuantity;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getEngineQuantity(){
            return $this->engineQuantity;
        }

        //SET
        public function setEngineQuantity($engineQuantity){
            $this->engineQuantity = $engineQuantity;
        }
        
    }

?>