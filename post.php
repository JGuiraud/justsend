<?php include('./config/post.php')?>
<!doctype html>
<html lang="en">
<head>
    <head>
        <?php include('./partials/header.php');?>
        <title>JUstSend | Post</title>
    </head>
</head>
<body>
    <div class="container container--post">
        <div class="header">
            <h1>JUstSend!</h1>
        </div>
        <div class="content">
            <form action="" enctype="multipart/form-data" method="post">
                <input type="text" name="name" placeholder="Your name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''?>">
                <input type="text" name="emailphone" placeholder="Your email or phone" value="<?php echo isset($_POST['emailphone']) ? $_POST['emailphone']: ''?>">
                <input type="text" name="subject" placeholder="Subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''?>">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"><?php echo isset($_POST['message']) ? $_POST['message'] : ''?>
                </textarea>
                <div class="select-files">
                    <input type="file" name="picture" id="picture">
                    <label class="button file-button" for="picture">Pic</label>
                    <input type="file" name="file" id="file">
                    <label class="button file-button button--greyedout" for="">File</label>
                </div>
                <input class="button button--full-width" type="submit" name="submit" value="Send">

            </form>
        </div>

        <div class="error">
            <?php
                if(isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
            ?>
        </div>


    </div>
</body>
</html>
