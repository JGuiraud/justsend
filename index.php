<?php
    session_start();

?>

<!doctype html>
<html lang="en">
<head>
   <?php include('./partials/header.php');?>
    <title>JUstSend</title>
</head>
<body>
    <div class="container">
        <h1>JUstSend</h1>
        <a class="button" href="post.php">Start a message</a>
        <a class="button button--yellow" href="getmessage.php">Read a message</a>
        <div class="success--mini">
            <?php
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
        </div>
    </div>
</body>
</html>
