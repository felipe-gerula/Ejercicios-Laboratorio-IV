<?php

    namespace Repository;

    use Models\Bill as Bill;
    use Models\Item as Item;

    interface IBillRepository{

        public function Add(Bill $bill);
        public function AddItem(Bill $bill , Item $item);
        public function Remove($billType , $billNumber);
        public function GetAll();
    }

?>