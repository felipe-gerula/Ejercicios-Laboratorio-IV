<?php
    namespace Process;
    require("../Config/Autoload.php");

    use Config\Autoload as Autoload;

    use Models\Bill as Bill;
    use Models\Item as Item;
    use Repository\BillRepository as BillRepository;
    
    Autoload::Start();

    if($_GET){
        
        if (isset($_GET["billNumber"]) && isset($_GET["billDate"])) {

            if ($_GET["billDate"] <= date("Y-m-j")) {
                
                $newBill = new Bill();
                $newBill->setBillDate($_GET["billDate"]);
                $newBill->setBillType($_GET["billType"]);
                $newBill->setBillNumber($_GET["billNumber"]);

                //Verificar si la factura existe en el repositorio

                $billRespository = new BillRepository();
                $exist = $billRespository->getBill($newBill->getType() , $newBill->getNumber());

                if ($exist == null) {//Si la factura no existe en el repositorio
                    $billRespository->Add($newBill);

                    //Guardar las variables type y number en la SESSION para poder movernos entre los fomularios
                    session_start();
                    $_SESSION["from"] = $newBill->getType() . "-". $newBill->getNumber();

                    echo "<script> alert('La factura se genero con exito!')";
                    echo "window.location = '../bill-content.php'; </script>";
                }else {
                    echo "<script> alert('La factura que intenta ingresar ya se encuentra cargada!')";
                    echo "window.location = '../add-bill.php'; </script>";
                }
            }else {
                    echo "<script> if(confirm('Fecha incorrecta, la fecha no puede ser futura !'));";
                    echo "window.location = '../add-bill.php'; </script>";
            }
        }else {
                    echo "<script> if(confirm('Olvido completar alguno de los datos !'));";  
                    echo "window.location = '../add-bill.php'; </script>";
        }
    }else {
                    echo "<script> if(confirm('Error al intentar procesar la informacion !'));";  
                    echo "window.location = '../add-bill.php'; </script>";
    }
?>