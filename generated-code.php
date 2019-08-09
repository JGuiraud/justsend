<!doctype html>
<html lang="en">
<head>
    <?php include('./partials/header.php');?>
    <title>JUstSend | Generated Code</title>
</head>
<body>

    <div class="container">
        <h1>
            JUstSend
        </h1>
        <div class="code">
            <span class="warning">
                To access your message use this code:
            </span>
            <input type="text" id="generated-code" value="<?php echo $_GET['code']; ?>" readonly>
            <div class="success" id="copy-success">

            </div>
        </div>
        <div class="button-cont">
            <button id="copybutton" class="button">Copy this code</button>
            <a class="button button--yellow" href="index.php">Back</a>
        </div>
    </div>
    <script src="./js/copycode.js"></script>
</body>
</html>
