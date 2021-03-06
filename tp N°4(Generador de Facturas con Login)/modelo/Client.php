<?php
    require_once "Person.php";

    class Client extends Person{
        
        private $userName;
        private $password;

        public function __constructor($userName,$password,$id="",$firstName,$lastName,$dni,$email)
        {
            parent::__constructor($id,$firstName,$lastName,$dni,$email);
            this->userName = $userName;
            this->password = $password;
        }

        public function setUserName($userName){$this->userName = $userName;}
        public function getUserName(){return $this->userName;} 

        public function setPassword($password){$this->password = $password;}
        public function getPassword(){return $this->password;} 

    }

?>