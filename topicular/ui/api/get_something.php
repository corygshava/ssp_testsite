<?php
	include 'data_session_vars.php';
	include 'data_responses.php';

	function stopgoing($complaint){
		global $myresponse;

		$myresponse->success = false;
		$myresponse->data = $complaint;

		echo json_encode($myresponse);
		exit();
	}

	$keepgoing = true;
	$defaultwant = str_shuffle("nothing");
	$passeddata = file_get_contents("php://input");
	$thedata = json_decode($passeddata);
	$usepost = isset($_POST['want']);
	$toget = isset($_POST['want']) ? $_POST['want'] : (isset($thedata->want) ? $thedata->want : $defaultwant);
	$complaint = "i just started";

	if($_SERVER['REQUEST_METHOD'] !== "POST"){
		$keepgoing = false;
		stopgoing("invalid request method");
	}

	if($toget == $defaultwant){
		$keepgoing = false;
		stopgoing("define what you want");
	}

	if($keepgoing){
		// stopgoing("returning data for $toget");
		$getme = $toget;

		switch ($getme) {
			case 'cart':
				returncart();
				break;
			
			default:
				stopgoing("invalid data item");
				break;
		}
	}

	stopgoing("what the hell did you do??")
?>

<?php
	function returncart(){
		// get the session variable for the user's cart
		global $sess_cartvar;
		// get the data object to return to the consumer
		global $myresponse;

		include 'get_cart.php';

		exit();
	}
?>