<?php
    echo "Hello";

    //Include database configuration file
    include('../gallery-pages/dbConfig.php');

    echo $_POST["name"];

    echo $_POST["name_entered"];

    $song = $_POST["name"];

    //get images from database
    $query = $db->query("INSERT INTO `song-requests` (`name`) VALUES ('$song');"); 

    
?>