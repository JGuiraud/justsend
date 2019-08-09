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
<div class="container--read">
    <div class="header">
        <h1>JUstSend!</h1>
    </div>
    <div class="content">
        <form action="getmessage.php" method="post">
            <div class="input">
                <label for="">Paste your code</label>
                <div class="">
                    <input type="text" id="input-code" name="code" placeholder="ex: EOD45d">
<!--                    <button class="button-inline" id="pastebutton" type="button">Paste</button>
-->                </div>
            </div>
            <div class="button-cont">
                <button class="button button--full-width" type="submit" name="submit" value="Read message">Read message</button>
                <a href="/index.php" class="button button--yellow" value="Home">Home</a>
            </div>
        </form>
    </div>
<!--    <script src="./js/pastecode.js"></script>
--></div>
</body>
</html>
