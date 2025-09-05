<?php
	include '.authdata.php';
	include '.functions.php';

	$accessToken = getAccessToken(); // from the function we made earlier

	$url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

	$Timestamp = date("YmdHis");
	// $Password = base64_encode($BusinessShortCode . $Passkey . $Timestamp);
	$Password = "MTc0Mzc5YmZiMjc5TliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTYwMjE2MTY1NjI3";
	$phoneNo = "254707978099";

	$payload = [
		"BusinessShortCode" => $BusinessShortCode,
		"Password" => $Password,
		"Timestamp" => $Timestamp,
		"TransactionType" => "CustomerPayBillOnline",
		"Amount" => "1", // test KES 1
		"PartyA" => $phoneNo, // your phone number
		"PartyB" => $BusinessShortCode,
		"PhoneNumber" => $phoneNo, // same as PartyA
		"CallBackURL" => "https://localhost/protos/mpesa_integration/mpesa/callback.php",
		"AccountReference" => "Test123",
		"TransactionDesc" => "Payment test"
	];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		"Authorization: Bearer " . $accessToken['access_token'],
		"Content-Type: application/json"
	]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

	$response = curl_exec($ch);
	curl_close($ch);

	echo $response;
?>