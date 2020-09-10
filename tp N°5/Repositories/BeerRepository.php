<?php

    namespace Repositories;

    use Repositories\IBeerRepository as IBeerRepository;
    use Models\Beer as Beer;

    class BeerRepository implements IBeerRepository
    {
        private $beerList = array();
        private $fileName;

        public function __construct()
        {
            $this->fileName = dirname(__DIR__)."/Data/beers.json";
        }

        public function Add(Beer $beer)
        {
            $this->RetrieveData();//obtiene todo lo que esta dentro del archivo en una lista

            array_push($this->beerList , $beer);//Agrego el nuevo objeto a la lista

            $this->SaveData();
        }

        public function getAll()
        {
            $this->RetrieveData();

            return $this->beerList;
        }
        
        public function Delete($code)
        {
            $this->retrieveData();

            $newList = array();

            foreach ($this->beerList as $beer) {

                if($beer->getCode() != $code){

                    array_push($newList, $beer);
                }
                
            }

            $this->beerList = $newList;
            $this->saveData();
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach ($this->beerList as $beer)//recorre la lista de objetos y crea un array asociativo
            {
             $valueArray["code"] = $beer->getCode();
             $valueArray["name"] = $beer->getName();
             $valueArray["description"] = $beer->getDescription(); 
             $valueArray["type"] = $beer->getType(); 

             array_push($arrayToEncode , $valueArray);
            }
           
            $jsonContent = json_encode($arrayToEncode ,JSON_PRETTY_PRINT);//Codifico el contenido a un JSON

            file_put_contents($this->fileName , $jsonContent);//guardo el contenido coficado en un archivo
        }
         
        private function RetrieveData()
        {
            $this->beerList = array();

            if (file_exists($this->fileName))//Consulto si el archivo existe 
            {
                $jsonContent = file_get_contents($this->fileName);

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent , true) : array();//Convierte el contenido JSON en un array asociativo
                
                foreach ($arrayToDecode as $valueArray) {//Recorro el array , formando objetos del tipo Beer
                
                    $beer = new Beer();
                    $beer->setCode($valueArray["code"]);
                    $beer->setName($valueArray["name"]);
                    $beer->setDescription($valueArray["description"]);
                    $beer->setType($valueArray["type"]);

                    array_push($this->beerList , $beer);
                }
                
            }
        }
    }
?>