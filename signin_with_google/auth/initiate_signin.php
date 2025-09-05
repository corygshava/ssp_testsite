<?php
    /*
    link template
        https://accounts.google.com/o/oauth2/v2/auth?
        client_id=545589601693-8v94v05cqpmutgcncm3u9n5cf9gtl22u.apps.googleusercontent.com&
        redirect_uri=http%3A//localhost/callback.php&
        response_type=code&
        scope=openid%20email%20profile&
        access_type=offline
    */

    include '.authdata.php';

    $thelink = 'https://accounts.google.com/o/oauth2/v2/auth';
    $thequery = "client_id=$clientid&redirect_uri=$callback&response_type=code&scope=$scope&access_type=$accesstype";

    $validlink = $thelink."?".$thequery;

    // echo "redirecting to <br>$validlink";
    // exit();

    header("Location: $validlink");
    exit();
?>