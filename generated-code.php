<!doctype html>
<html lang="en">
<head>
    <?php include('./partials/header.php');?>
    <title>JUstSend | Generated Code</title>
</head>
<body>

    <div class="container">
        <h1 class="success">
            To access your message use this code:
        </h1>
        <div class="code">
            <?php
            echo $_GET['code'];
            ?>
        </div>
        <a class="button" href="index.php">Back</a>

    </div>
</body>
</html>
