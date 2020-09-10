<?php

    require_once("config/Autoload.php");

    use Models\Beer as Beer;
    use Repositories\BeerRepository as BeerRepository;

    if($_POST)
    {
        $code = $_POST["code"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        $type = $_POST["type"];

        $beer = new Beer();
        $beer->setCode($code);
        $beer->setName($name);
        $beer->setDescription($description);
        $beer->setType($type);

        $beerRepository = new BeerRepository();

        $beerRepository->Add($beer);

        header("location:add.php");

    }elseif($_GET){
        $code = $_GET["code"];

        $beerRepository = new BeerRepository();

        $beerRepository->Delete($code);

        echo "<script> if(confirm('Se ha eliminado correctamente una cerveza.'));";
            echo "window.location = 'list.php';</script>";
    }

?>