<?php
    namespace Models;

    class BeerType
    {
        private $id;
        private $name;
        private $description;

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setId($id)
        {
            $this->id = $id;
        }
        
        public function setName($name)
        {
            $this->name = $name;
        }
        
        public function setDescription($description)
        {
            $this->description = $description;
        }
    }

?>