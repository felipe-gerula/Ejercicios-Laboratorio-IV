<?php

    namespace Repositories;

    use Models\Beer as Beer;

    interface IBeerRepository{

       function Add(Beer $beer);
       function GetAll(); 
    }

?>    