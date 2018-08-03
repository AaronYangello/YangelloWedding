<?php
    //DB details
    $dbHost = 'ec2-23-21-162-90.compute-1.amazonaws.com';
    $dbUsername = 'egzddsretbjcmk';
    $dbPassword = 'f291391453ee292a8d7f299478671659d96bca66b3c90db33673c7d3092f4cf9';
    $dbName = 'd9vr3giol0a43g';

    //Create connection and select DB
    //$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    $db = pg_connect("host=$dbHost port=5432 dbname=$dbName user=$dbUsername password=$dbPassword");

    if(!$db) {
      echo "<h1>Error : Unable to open database\n Sorry!</h1>";
   } 
?>
