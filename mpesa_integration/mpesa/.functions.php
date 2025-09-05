<?php
	function getAccessToken() {
		global $consumerKey;
		global $consumerSecret;
		global $url_sandbox;

		$tokenFile = __DIR__ . "/accesstkn.cmblock";

		// Check if file exists and still valid
		if (file_exists($tokenFile)) {
			$fcontents = file_get_contents($tokenFile);
			$data = json_decode($fcontents, true);

			// Check if token is still valid
			if (isset($data['access_token'], $data['expires_at']) && (time() - 30) < $data['expires_at']) {
				return $data; // Reuse valid token
			}
		}

		// Otherwise request a new token
		$credentials = base64_encode($consumerKey . ":" . $consumerSecret);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url_sandbox);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Basic " . $credentials]);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($response, true);

		if (!isset($result['access_token'])) {
			throw new Exception("Failed to fetch access token: " . $response);
		}

		// Save new token with expiry timestamp
		$expiresAt = time() + intval($result['expires_in']); // usually 3599s
		$result['expires_at'] = $expiresAt;

		file_put_contents($tokenFile, json_encode($result));

		return $result;
	}
?>