<?php
 header('Content-Type: application/json');
    //Include database configuration file
    include('../gallery-pages/dbConfig.php');
    sleep(1);

    $songName = $_POST['songname'];    
    $db->query("INSERT INTO `song-requests` (`name`) VALUES ('$songName');"); 
    echo json_encode("Success");
?>