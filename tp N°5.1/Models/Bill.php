<?php

    namespace Models;

    use Models\Item as Item;

    class Bill{

    //Atributes
        private $billDate;
        private $billNumber;
        private $billType;
        private $items;

    //constructor
        public function __construct(){
            $this->items = array();
        }

   //Access Properties
	public function getBillDate(){
		return $this->billDate;
	}

	public function setBillDate($date){
		$this->billDate = $date;   
	}

	public function getBillNumber(){
		return $this->billNumber;
	}

	public function setBillNumber($billNumb){
		$this->billNumber = $billNumb;   
	}

	public function getBillType(){
		return $this->billType;
	}

	public function setBillType($billType){
		$this->billType = $billType;   
	}

	public function getItemList(){
		return $this->items;
	}

	public function pushItem($item){
		if(isset($item)){
			array_push($this->items, $item);
		}
    }
    
    //Methods
        function totalCost(){
            $total = 0.0;
            foreach ($this->getItemList() as $item) {
                $total += $item->getSubTotal();
            }
            return $total;
        }    
    }

?>