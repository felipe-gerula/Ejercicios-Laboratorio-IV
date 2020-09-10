<?php

    namespace Models;

    class Beer{

        //Attributes
        private $code;
        private $name;
        private $description;
        private $type;

        //Construct
        function __construct(){

        }

        //GET
        public function getCode(){
            return $this->code;
        }

        public function getName(){
            return $this->name;
        }

        public function getDescription(){
            return $this->description;
        }

        public function getType(){
            return $this->type;
        }

        //SET
        public function setCode($code){
            $this->code = $code;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function setType($type){
            $this->type = $type;
        }
    }


?>