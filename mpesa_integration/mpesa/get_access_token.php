<?php
	header('Content-Type: application/json');
	include '.authdata.php';
	include '.functions.php';

	// Usage:
	try {
		if($_SERVER['REQUEST_METHOD'] !== "POST"){
			throw new Exception("invalid request");
		}

		$accessToken = getAccessToken();
		$thetoken = $accessToken['access_token'];
		$timerem = $accessToken['expires_at'] - (time());

		$accessToken['time_remaining'] = $timerem;
		// echo "Current Access Token: " . $thetoken."<br>";
		// echo "Time remaining: " . $timerem;

		echo json_encode($accessToken);
	} catch (Exception $e) {
		$response = ["Error" => $e->getMessage()];

		echo json_encode($response);
	}
?>