<?php
    namespace Process;

    require('..\Config\Autoload.php');
    use Models\Client as Client;
    use Repositories\ClientRepository as ClientRepository;

    if ($_GET) {
        if (isset($_GET["businessName"]) && isset($_GET["cuit"]) && isset($_GET["clientContact"])) {
            
            $newClient = new Client();
            $newClient->SetBusinessName($_GET["businessName"]);
            $newClient->SetClientContact($_GET["clientContact"]);
            $newClient->SetCuit($_GET["cuit"]);
            $newClient->SetEmail($_GET["email"]);
            $newClient->SetVatCondition($_GET["vatCondition"]);

            $clientRepository = new ClientRepository();
            $exist = $clientRepository->GetClient($newClient->GetCuit(),$newClient->GetEmail());

            if ($exist == null) {
                $clientRepository->Add($newClient);

                session_start();
                $_SESSION['from'] = $newClient->GetCuit() ."-".  $newClient->GetEmail();

                echo "<script> alert('El cliente se genero correctamente!');";  
                echo "window.location = '../client-list.php'; </script>";
            }else {
                echo "<script> alert('El cliente que intenta generar ya se encuentra cargada !');";  
                echo "window.location = '../client-add.php'; </script>";
            }
        }else {
            echo "<script> if(confirm('Olvido completar alguno de los datos, vuelva a intentarlo !'));";  
            echo "window.location = '../client-add.php'; </script>";
        }
    }
?>