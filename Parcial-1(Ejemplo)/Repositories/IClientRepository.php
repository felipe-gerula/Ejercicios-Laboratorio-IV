<?php

    namespace Repositories;

    use Models\Client as Client;

    interface IClientRepository{

        public function Add(Client $client);
        public function GetAll();
    }

?>