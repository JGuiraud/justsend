<?php include('./config/getmessage.php') ?>
<!doctype html>
<html lang="en">
<head>
    <head>
        <?php include('./partials/header.php');?>
        <title>JUstSend | Read</title>
    </head>
</head>
<body>
<div class="container container--read">
    <div class="header">
        <h1>JUstSend!</h1>
    </div>
    <div class="content">
        <form action="getmessage.php" method="post">
            <input type="text" name="code" placeholder="Code">
            <input class="button button--full-width" type="submit" name="submit" value="Read message"/>
            <a href="/index.php" class="button button--yellow" value="Home">Home</a>


        </form>
    </div>
</div>
</body>
</html>
