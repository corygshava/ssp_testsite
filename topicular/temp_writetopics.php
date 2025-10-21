<?php
    header('Content-Type: application/json; charset=utf-8');

    // Allow CORS if needed
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: X-Requested-With, Accept, Content-Type');

    // Handle preflight OPTIONS request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(400);
        $res = ['error' => 'invalid request method'];
        echo json_encode($res);
        exit();
    }

    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // If decoding fails, return error
    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON']);
        exit();
    }

    echo '{"verdict":true}';
    exit();
    require_once __DIR__.'/_packages/loader.php';

    // Echo received data
    $writeme = json_encode(['subtopics' => $data],JSON_PRETTY_PRINT);
    $errormsg = "nothing happened";
    $myfile = __DIR__.'/datazone/subtopics.json';
    fl_::c_file($myfile);
    $writeop = fl_::safe_write_text($myfile,$writeme,true, 12,$errormsg);

    $showme = [
        'error' => $errormsg,
        'verdict' => $writeop,
    ];

    echo json_encode($showme);
    exit();
