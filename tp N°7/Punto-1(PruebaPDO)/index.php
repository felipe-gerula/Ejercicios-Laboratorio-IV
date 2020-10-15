<?php
    require_once("Player.php");

    define("DB_HOST", "localhost");//Host de la base de datos
    define("DB_NAME", "players");//Nombre de la base de datos
    define("DB_USER", "root");//Nombre de usuario
    define("DB_PASS", "");//Contraseña de la base de datos

    $playerList = array();

    $player1 = new Player();
    $player1->setPlayerCode("123");
    $player1->setFirstName("John");
    $player1->setLastName("Doe");
    $player1->setEmail("john@doe.com");
    $player1->setPlayedHours(25);

    $player2 = new Player();
    $player2->setPlayerCode("456");
    $player2->setFirstName("Martin");
    $player2->setLastName("Smith");
    $player2->setEmail("martin@smith.com");
    $player2->setPlayedHours(23.5);

    $player3 = new Player();
    $player3->setPlayerCode("789");
    $player3->setFirstName("Kevin");
    $player3->setLastName("Lindholm");
    $player3->setEmail("kevin@lindholm.com");
    $player3->setPlayedHours(56);

    array_push($playerList,$player1,$player2,$player3);


    try
    {
        //Instancio un objeto de tipo PDO
        $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        //--Sentencias para ingresar datos a la BBDD--

        //Creo la query para enviar a la base de datos
        $insertStatement = $pdo->prepare("INSERT INTO players(playerCode, firstName, lastName, email, playedHours)
                                          VALUE (:playerCode, :firstName, :lastName, :email, :playedHours)");

        //Recorro todos los jugadores y guardo los valores de los atributos
        foreach($playerList as $player)
        {
            $playerCode = $player->getPlayerCode();
            $firstName = $player->getFirstName();
            $lastName =  $player->getLastName();
            $email = $player->getEmail();
            $playedHours = $player->getPlayedHours();

            //Creo el enlaze entre los atributos de los jugadores y los parametros a enviar a la query 
            $insertStatement->bindParam(":playerCode", $playerCode);
            $insertStatement->bindParam(":firstName", $firstName);
            $insertStatement->bindParam(":lastName", $lastName);
            $insertStatement->bindParam(":email", $email);
            $insertStatement->bindParam(":playedHours", $playedHours);

            $insertStatement->execute();//Ejecuto la sentencia con los parametros ya ingresados
        }

        
        //--Sentencias para borrar datos a la BBDD--

            $deleteStatement = $pdo->prepare("DELETE FROM players WHERE (playerCode = :playerCode)");

            $playerCode = "456";

            $deleteStatement->bindParam(":playerCode",$playerCode);
            
            $deleteStatement->execute();

        //--Sentencia para la seleccion de datos a la BBDD
            
            $selectStatement = $pdo->prepare("SELECT playerCode, firstName, lastName, email, playedHours FROM players");

            $selectStatement->execute();

            $result = $selectStatement->fetchAll();//Devuelve un array que contiene todas las filas del conjunto de resultados

           echo "Showing List:<br>";

           foreach($result as $row)
            {
                echo $row["playerCode"]." ".$row["firstName"]. " ".$row["lastName"]." ".$row["email"]." ".$row["playedHours"]."<br>";
            }

        //--Sentencia para actualizar datos en la BBDD
        
            $updateStatement = $pdo->prepare("UPDATE players SET playedHours = :playedHours WHERE (playerCode = :playerCode)");

            $playerCode = "789";

            $playedHours = "160";

            $updateStatement->bindParam(":playerCode",$playerCode);
            $updateStatement->bindParam(":playedHours",$playedHours);

            $updateStatement->execute();
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
?>    
