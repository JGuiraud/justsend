<?php
    session_start();

    $servername="localhost";
    $username="root";
    $password="root";
    $database="JUstSend";

    $db = new mysqli($servername, $username, $password, $database);

/*    if($db->connect_error) {
        die("Connection failed:".$db->connect_error);
    } else {
        echo "ok";
    }*/

?>
