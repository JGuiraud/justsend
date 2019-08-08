<?php
    include('config.php');

    if(isset($_POST['submit']) && isset($_POST['code'])) {
        $code = $_POST['code'];
        header("Location:read.php/?code=".$code);
    }

?>
