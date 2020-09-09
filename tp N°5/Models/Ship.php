<?php

    namespace Models;

    use Models\Maritime as Maritime;

    class Ship  extends Maritime{

        //Attributes
        private $propelQuantity;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getPropelQuantity(){
            return $this->propelQuantity;
        }

        //SET
        public function setPropelQuantity($propelQuantity){
            $this->propelQuantity = $propelQuantity;
        }
        
    }

?>