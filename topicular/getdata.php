<?php
    require_once __DIR__.'/_packages/loader.php';

    $fileguy = new fl_();
    $arr1 = json_decode($fileguy->saferead('data.json'));
    $arr2 = json_decode($fileguy->saferead('data2.json'));
    $arr3 = json_decode($fileguy->saferead('data3.json'));

    $arr = array_merge($arr1,$arr2,$arr3);

    echo json_encode($arr);
?>