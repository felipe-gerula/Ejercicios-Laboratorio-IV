<?php

    namespace Repositories;

    require_once("IClientRepository.php");
    use Repositories\IClientRepository as IClientRepository;
    use Models\Client as Client;
    
    class ClientRepository implements IClientRepository{

        private $clientList;

        //Method
        public function Add(Client $client){
            $this->RetrieveData();
            array_push($this->clientList , $client);
            $this->SaveData();
        }

        public function GetAll(){
            $this->RetrieveData();
            return $this->clientList;
        }

        public function GetClient($clientCuit, $clientEmail){
        $this->RetrieveData();
        $clientExists = null;

        foreach($this->clientList as $client){
            if(($client->GetCuit() == $clientCuit) && ($client->GetEmail() == $clientEmail)){
                $clientExists = $client;
            }
        }
        
        return $clientExists;
        }


        //JSON Persistence
        private function SaveData(){
            $arrayToEncode = array();

            foreach ($this->clientList as $client) {
                $ValuesArray["businessName"] = $client->GetBusinnesName();
                $ValuesArray["clientContact"] = $client->GetClientContact();
                $ValuesArray["cuit"] = $client->GetCuit();
                $ValuesArray["email"] = $client->GetEmail();
                $ValuesArray["vatCondition"] = $client->GetVatCondition();

                array_push($arrayToEncode , $ValuesArray);
            }

            $jsonContent = json_encode($arrayToEncode , JSON_PRETTY_PRINT);

            $jsonPath = $this->GetJsonFilePath();

            file_put_contents($jsonPath , $jsonContent);
        }

        private function RetrieveData(){

            $this->clientList = array();

            $jsonPath = $this->GetJsonFilePath();

            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true) : array();

            foreach ($arrayToDecode as $ValuesArray) {
                
                $client = new Client();
                $client->SetBusinessName($ValuesArray["businessName"]);
                $client->SetClientContact($ValuesArray["clientContact"]);
                $client->SetCuit($ValuesArray["cuit"]);
                $client->SetEmail($ValuesArray["email"]);
                $client->SetVatCondition($ValuesArray["vatCondition"]);

                array_push($this->clientList,$client);
                
            }

        }

        function GetJsonFilePath(){

            $initialPath = "Data/clients.php";

            if (file_exists($initialPath)) {
                $jsonFilePath = $initialPath;
            }else {
                $jsonFilePath = "../".$initialPath;
            }

            return $jsonFilePath;
        }
    }
?>