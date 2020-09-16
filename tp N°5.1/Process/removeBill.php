<?php
    namespace Process;

    require("../Config/Autoload.php");

    use Config\Autoload as Autoload;

    use Models\Bill as Bill;
    use Models\Item as Item;
    use Repository\BillRepository as BillRepository;

    Autoload::Start();

    if ($_POST) {
        if (isset($_POST["btnRemove"])) {
            
            $dataToRemove = explode("-",$_POST["btnRemove"]);
            $billType = $dataToRemove[0];
            $billNumber = $dataToRemove[1];

            $billRepository = new BillRepository();

            $billRepository->Remove($billType , $billNumber);

            echo "<script> alert('Se ha eliminado correctamente la Factura!');";
            echo "window.location = '../bill-list.php'; </script>";
        }
    }else {
        echo "<script> alert('No se propeso correctamente la solicitud');";
            echo "window.location = '../bill-list.php'; </script>";
    }
?>