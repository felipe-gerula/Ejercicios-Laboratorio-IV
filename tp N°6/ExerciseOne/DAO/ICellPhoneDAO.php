<?php
    namespace DAO;

    use Models\CellPhone as CellPhone;
    
    interface ICellPhoneDAO
    {
        function Add(CellPhone $cellPhone);
        function GetAll();
        function Remove($id);
    }
?>