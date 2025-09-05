<?php
	// /*
	$sampleresult = '
	{
	  "last_log": {
	    "Body": {
	      "stkCallback": {
	        "MerchantRequestID": "29115-34620561-1",
	        "CheckoutRequestID": "ws_CO_191220191020363925",
	        "ResultCode": 0,
	        "ResultDesc": "The service request is processed successfully.",
	        "CallbackMetadata": {
	          "Item": [
	            { "Name": "Amount", "Value": 1 },
	            { "Name": "MpesaReceiptNumber", "Value": "NLJ7RT61SV" },
	            { "Name": "TransactionDate", "Value": "20191219102114" },
	            { "Name": "PhoneNumber", "Value": "2547XXXXXXX" }
	          ]
	        }
	      }
	    }
	  }
	}
	';

	// */

	// echo $sampleresult;

	header("Content-Type: application/json");

	// Only allow POST
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	    http_response_code(405);
	    echo json_encode(["error" => "Only POST allowed"]);
	    exit;
	}

	$logFile = __DIR__ . "/mpesa_callback.log";

	if (!file_exists($logFile)) {
	    echo json_encode(["error" => "Log file not found"]);
	    exit;
	}

	// Read all lines
	$lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

	if (!$lines) {
	    echo json_encode(["error" => "Log file is empty"]);
	    exit;
	}

	// Get last line and decode JSON if valid
	$lastLine = trim(end($lines));
	$decoded = json_decode($lastLine, true);

	if (json_last_error() === JSON_ERROR_NONE) {
	    echo json_encode(["last_log" => $decoded]);
	} else {
	    echo json_encode(["last_log_raw" => $lastLine]);
	}
?>