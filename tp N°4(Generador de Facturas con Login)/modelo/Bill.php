<?php
namespace modelo;

    class Bill{

        private $date;
        private $type;
        private $number;
    }

    public function __constructor($date,$type,$number)
        {
            this->date = $date;
            this->type = $type;
            this->number = $number;
        }

    public function setDate($date){$this->date = $date;}
    public function getDate(){return $this->date;} 

    public function setType($type){$this->type = $type;}
    public function getType(){return $this->type;} 

    public function setNumber($number){$this->number = $number;}
    public function getNumber(){return $this->number;} 

?>