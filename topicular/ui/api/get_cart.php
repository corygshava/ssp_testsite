<?php
	session_start();

	class cart{
		public $productname = "";
		public $productcost = "";
		public $amt = 0;

		function __construct($pname,$pcost,$pamt){
			$this->productname = $pname;
			$this->productcost = $pcost;
			$this->amt = $pamt;
		}
	}

	if(isset($_SESSION[$sess_cartvar])){
		$myresponse->data = $_SESSION[$sess_cartvar];
	} else {
		$myresponse->data = [];
		$myresponse->session_started = false;
	}

	echo json_encode($myresponse);
?>