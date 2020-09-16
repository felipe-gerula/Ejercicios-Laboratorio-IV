<?php
    namespace Process;

    use Config\Autoload as Autoload;
    use Models\Bill as Bill;
    use Models\Item as Item;
    use Repository\BillRepository as BillRepository;

    Autoload::Start();

    //Obtener diferentes variables SESSION para recuperar la data de Bill
    if (isset($_SESSION["from"])) {
        
        $from = explode('-' , $_SESSION["from"]);
        
        $billType = $from[0];
        $billNumber = $from[1];

        $billRepository = new BillRepository();

        $newBill = $billRepository->getBill($billType , $billNumber);

        if (!isset($newBill)) {
            echo "<script> alert('Hubo inconveniente al procesar la Factura, vuelva a intentarlo!'));";  
            echo "window.location = '../add-bill.php'; </script>";
        }
        
    if ($_POST) {
        if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["quantity"])){
            $name = $_POST["name"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $description = isset($_POST["description"]) ? $_POST["description"] : "";

            $newItem = new Item();
            $newItem->setName($name);
            $newItem->setPrice($price);
            $newItem->setQuantity($quantity);
            $newItem->setDescription($description);

            $newBill = $billRepository->AddItem($newBill , $newItem);
        }
    }    
}
?>