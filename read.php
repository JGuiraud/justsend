
<?php include('./config/read.php') ?>
<?php
    if(isset($_POST['delete'])) {
        $id=$_POST['id'];
        $query = "DELETE FROM messages WHERE id='$id'";

        if(!mysqli_query($db, $query)) {
            echo 'error'.$db->error;
        } else {
            $_SESSION['message']="Message successfully deleted";
            header('Location:/index.php');
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <?php include('./partials/header.php');?>
    <title>JUstSend | Post</title>
</head>
<body class="body-read">
<div class="container container--read">
    <div class="header">
        <h1>JUstSend!</h1>
    </div>
    <div class="content content--read">
        <div class="header">
            <div>
                <span class="underline">Date:</span> 00/00/2019
               </div>
            <div>
                <span class="underline">From:</span><?php echo ' '.$name; ?>
            </div>
            <div>
                <span class="underline">Contact:</span><?php echo ' '.$emailphone; ?>
            </div>
            <div>
                <span class="underline">Subject:</span><?php echo ' '.$subject; ?>
            </div>
        </div>
        <div class="message">
            Message: <?php echo $message; ?>
        </div>
        <div class="image-container">
            <?php
                if(!empty($image)) {
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($image ).'"/>';
                }
            ?>
        </div>
<!--        <div class="download">
            Donwnload attached file: ooooo.ii
        </div>-->

    </div>
</div>
<div class="buttons-container">
    <form action="" method="post">
        <input type="text" name="id" hidden value="<?php echo $id;?>">
        <input class="button button--delete" type="submit" name="delete" value="Delete" />
    </form>
    <a href="/index.php" class="button button--yellow" value="Home">Home</a>
    <a href="/getmessage.php" class="button" value="Home">Read another</a>
</div>
</body>
</html>
