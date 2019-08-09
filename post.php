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
    <div class="container--post">
        <div class="header">
            <h1>JUstSend</h1>
        </div>
        <div class="content">
            <form action="" enctype="multipart/form-data" method="post">
                <div class="content">
                    <input type="text" name="name" placeholder="Your name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''?>">
                    <input type="text" name="emailphone" placeholder="Your email or phone" value="<?php echo isset($_POST['emailphone']) ? $_POST['emailphone']: ''?>">
                    <input type="text" name="subject" placeholder="Subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''?>">
                    <textarea name="message" id="" cols="30" rows="8" placeholder="Your message"><?php echo isset($_POST['message']) ? $_POST['message'] : ''?></textarea>
                    <div class="select-files">
                        <input type="file" name="picture" id="picture" accept="image/*">
                        <label class="button file-button" for="picture">
                           <img id="displayimage" src="#" class="hide"/>
                            Pic
                        </label>
                        <input type="file" name="file" id="file">
                        <label class="button file-button button--greyedout" for="">File</label>
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

                <div class="button-con">
                    <input class="button button--full-width" type="submit" name="submit" value="Send">
                    <a href="/index.php" class="button button--yellow" value="Home">Home</a>
                </div>
            </form>

        </div>

    </div>
    <script src="./js/index.js"></script>
</body>
</html>
