<?php
	class jsonresponse{
		public $success = false;
		public $data = null;
		public $extras = null;

		function __construct($con=true,$dta=null){
			$success = $con;
			$data = $dta;
		}
	}

	$myresponse = new jsonresponse(false,null);
?>