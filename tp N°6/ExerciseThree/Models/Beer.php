<?php
    namespace Models;

    use Models\BeerType as BeerType;

    class Beer
    {
        private $id;
        private $code;
        private $name;
        private $description;
        private $density;
        private $beerType;
        private $price;

        public function getId()
        {
            return $this->id;
        }

        public function getCode()
        {
            return $this->code;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getDensity()
        {
            return $this->density;
        }

        public function getBeerType()
        {
            return $this->beerType;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setId($id)
        {
            $this->id = $id;
        }
        
        public function setCode($code)
        {
            $this->code = $code;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function setDensity($density)
        {
            $this->density = $density;
        }

        public function setBeerType(BeerType $beerType)
        {
            $this->beerType = $beerType;
        }
        
        public function setPrice($price)
        {
            $this->price = $price;
        }
    }


?>