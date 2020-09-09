<?php

    namespace Models;

    use Models\Ship as Ship;

    class BattleShip  extends Ship{

        //Attributes
        private $armament;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getArmament(){
            return $this->armament;
        }

        //SET
        public function setArmament($armament){
            $this->armament = $armament;
        }
        
    }

?>