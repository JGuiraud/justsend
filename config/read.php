<?php
    include('config.php');
    if(isset($_GET['code'])) {
        $code = $_GET['code'];
        $subject ="";
        $date="";
        $message ="";
        $image="";
        $message="";
        $id="";

        $query = "SELECT * FROM messages WHERE code ='$code'";
        if ($result = mysqli_query($db, $query)) {
            while ($row = mysqli_fetch_row($result)) {
                $id = $row[0];
                $name = $row[1];
                $emailphone = $row[2];
                $subject = $row[3];
                $message = $row[4];
                $image = $row[6];
            }
        } else {
            'error: ' . $db->error;
        }
    }
?>
