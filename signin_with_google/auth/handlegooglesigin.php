<?php
    // callback.php

    include '.authdata.php';
    include 'snippets.php';

    // Step 1: Check if Google returned an authorization code
    if (!isset($_GET['code'])) {
        die("No code parameter in callback");
    }

    $code = $_GET['code'];

    echo "sending request for google info<br><hr>";

    // Step 2: Exchange authorization code for access token
    $token_request = curl_init("https://oauth2.googleapis.com/token");
    curl_setopt($token_request, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($token_request, CURLOPT_POST, true);
    curl_setopt($token_request, CURLOPT_POSTFIELDS, http_build_query([
        "code" => $code,
        "client_id" => $clientid,
        "client_secret" => $client_secret,
        "redirect_uri" => $callback,
        "grant_type" => "authorization_code"
    ]));

    $response = curl_exec($token_request);
    curl_close($token_request);

    $token_data = json_decode($response, true);

    if (!isset($token_data["access_token"])) {
        die("Error fetching access token: " . showerror_2($response));
    }

    // Step 3: Fetch user info with access token
    $user_request = curl_init("https://www.googleapis.com/oauth2/v2/userinfo");
    curl_setopt($user_request, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($user_request, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . $token_data["access_token"]
    ]);
    $user_response = curl_exec($user_request);
    curl_close($user_request);

    $user_info = json_decode($user_response, true);

    // Step 4: Display the info
    echo "<pre>";
    print_r($user_info);
    echo "</pre>";
?>