<?php
namespace modelo;

    class abstract Person {

        private $id;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        public function __constructor($id="",$firstName,$lastName,$dni,$email){
            this->id = $id;
            this->firstName = $firstName;
            this->lastName = $lastName;
            this->dni = $dni;
            this->email = $email;
        }


        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setFirstName($firstName){$this->firstName = $firstName;}
        public function getFirstName(){return $this->firstName;}

        public function setLastName($lastName){$this->lastName = $lastName;}
        public function getLastName(){return $this->lastName;}

        public function setDni($dni){$this->dni = $dni;}
        public function getDni(){return $this->dni;}
        
        public function setEmail($email){$this->email = $email;}
        public function getEmail(){return $this->email;}
    }

?>