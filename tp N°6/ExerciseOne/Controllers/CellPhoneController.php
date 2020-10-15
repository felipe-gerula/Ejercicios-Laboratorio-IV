<?php
    namespace Controllers;

    use DAO\CellPhoneDAO as CellPhoneDAO;
    use Models\CellPhone as CellPhone; 

    class CellPhoneController
    {
        private $cellPhoneDAO;

        public function __construct()
        {
            $this->cellPhoneDAO = new CellPhoneDAO();
        }

        public function ShowAddView()//Muestra la vista para añadir un celular nuevo
        {
            require_once(VIEWS_PATH."validate-session.php");
            require_once(VIEWS_PATH."add-cellphone.php");
        }

        public function ShowListView()//Muestra la vista que enlista los celulales
        {
            require_once(VIEWS_PATH."validate-session.php");
            $cellPhoneList = $this->cellPhoneDAO->getAll();

            require_once(VIEWS_PATH."cellphone-list.php");
        }

        public function Add($code,$brand,$model,$price)//Recibe los atributos del celular, lo crea y lo envia al DAO para añadirlo a la base de datos
        {
            require_once(VIEWS_PATH."validate-session.php");

            $cellPhone = new CellPhone();
            $cellPhone->setCode($code);
            $cellPhone->setBrand($brand);
            $cellPhone->setModel($model);
            $cellPhone->setPrice($price);

            $this->cellPhoneDAO->Add($cellPhone);//Llama a la funcion del DAO que añade los celulares nuevos

            $this->ShowListView();//llama a la function para mostrar la vista de lista
        }

        public function Remove($id)//Recibe el Id del celular a eliminar y lo elimina
        {
            require_once(VIEWS_PATH."validate-session.php");
            
            $this->cellPhoneDAO->Remove($id);//Llama a la funcion del DAO que elimina celulares 
            $this->ShowListView();//Llama a la funcion para mostrar la vista que enlista los celulares
        }

    }
?>