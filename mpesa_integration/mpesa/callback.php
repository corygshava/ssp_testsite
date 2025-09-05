<?php
	// callback.php

	// Capture the raw input from Safaricom
	$callbackData = file_get_contents('php://input');

	// Log it (for testing)
	file_put_contents("mpesa_callback.log", $callbackData . PHP_EOL, FILE_APPEND);

	// Always respond with 200 OK
	http_response_code(200);
	echo json_encode(["ResultCode" => 0, "ResultDesc" => "Callback received successfully"]);
?>