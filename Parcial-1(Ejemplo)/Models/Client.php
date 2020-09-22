<?php
    namespace Models;

    class Client{

        //Attributes
        private $businessName;
        private $clientContact;
        private $cuit;
        private $email;
        private $vatCondition;

        //Constructor
        function __construct(){
        }

        //GET
        public function GetBusinnesName(){
            return $this->businessName;
        }

        public function GetClientContact(){
            return $this->clientContact;
        }

        public function GetCuit(){
            return $this->cuit;
        }

        public function GetEmail(){
            return $this->email;
        }

        public function GetVatCondition(){
            return $this->vatCondition;
        }

        //SET
        public function SetBusinessName($businessName){
            $this->businessName = $businessName;
        }

        public function SetClientContact($clientContact){
            $this->clientContact = $clientContact;
        }
        
        public function SetCuit($cuit){
            $this->cuit = $cuit;
        }

        public function SetEmail($email){
            $this->email = $email;
        }

        public function SetVatCondition($vatCondition){
            $this->vatCondition = $vatCondition;
        }
    }
?>