<?php
    include('config.php');

    if(isset($_POST['submit']) && isset($_POST['code']) && !empty($_POST['code'])) {
        $code = $_POST['code'];
        header("Location:read.php/?code=".$code);
    } else {
        $_SESSION['error'] = 'Please provide a code';
        unset($_SESSION['error']);
    }

?>
