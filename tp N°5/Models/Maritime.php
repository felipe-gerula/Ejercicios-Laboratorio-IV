<?php

    namespace Models;

    use Models\Transport as Transport;

    class Maritime extends Transport{

        //Attributes
        private $maxKnots;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getMaxKnots(){
            return $this->maxKnots;
        }

        //SET
        public function setMaxKnots($maxKnots){
            $this->maxKnots = $maxKnots;
        }
        
    }

?>