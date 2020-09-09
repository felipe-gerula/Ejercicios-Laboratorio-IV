<?php

    namespace Models;

    class User{
        //Attributes
        private $userName;
        private $password;
        private $firstName;
        private $lastName;
        private $email;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getUserName(){
            return $this->userName;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function getEmail(){
            return $this->email;
        }

        //Set
        public function setUserName($userName){
            $this->userName = $userName;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function setEmail($email){
            $this->email = $email;
        }
    }

?>
