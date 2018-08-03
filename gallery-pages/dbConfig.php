<?php
    //DB details
    $dbHost = 'lgg2gx1ha7yp2w0k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $dbUsername = 'nn19hrl9814adkgz';
    $dbPassword = 'kzooau5om14i0vd7';
    $dbName = 'pliyfymnekydhsu0';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
?>
