<?php

    require_once("config/Autoload.php");

    use Models\Cruiser as Cruiser;

    use Models\BattleShip as BattleShip;

    use Models\Airplane as Airplane;

    $cruiser = new Cruiser();

    $cruiser->setName("cruiser");

    $cruiser->setCapacity(300);

    $cruiser->setPropelQuantity(5);

    $cruiser->setMaxKnots(500);

    $battleShip = new BattleShip();

    $battleShip->setName("battleShip");

    $battleShip->setArmament(200);

    $battleShip->setPropelQuantity(10);

    $battleShip->setMaxKnots(300);

    $airplane = new Airplane();

    $airplane->setName("airplane");

    $airplane->setCapacity(100);

    $airplane->setEngineQuantity(3);

    $array = array($cruiser,$battleShip,$airplane);

    var_dump($array);

?>