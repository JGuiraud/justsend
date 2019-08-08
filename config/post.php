<?php
    include('config.php');



    function generateCode() {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle($permitted_chars), 0, 6);
    }

    function isFileAnImage($image) {
        $imageMimetypes = [
            'image/png',
            'image/gif',
            'image/jpg',
            'image/jpeg',
        ];

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $type = finfo_file($finfo, $image);
        return isset($type) && in_array($type, $imageMimetypes);
    }

    function isFileAPdf($file) {
     /*   $finfo = finfo_open(FILEINFO_MIME);
        $mime = finfo_file($finfo, $file);
        echo $mime;*/


        /*$sentFileMimeTypes= [
            'application/pdf',
        ];
        $fileMimeTypes = mime_content_type($file);
        if(in_array($fileMimeTypes, $sentFileMimeTypes)) {
            echo 'pdf';
        } else {
            echo 'not pdf';
        }*/
        /*return in_array($fileMimeTypes, $sentFileMimeTypes);*/
    }

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $emailphone = $_POST['emailphone'];
        $subject = $_POST['subject'];
        $message = htmlspecialchars($_POST['message']);
        $code = generateCode();
        $image = isFileAnImage($_FILES['picture']['tmp_name']) ? addslashes(file_get_contents($_FILES['picture']['tmp_name'])): '';
        /*$file = addslashes(file_get_contents($_FILES['file']['tmp_name']));*/

        $query = "INSERT INTO messages(name, emailphone, subject, message, code, image) VALUES ('$name','$emailphone', '$subject', '$message', '$code', '$image')";

        if (!mysqli_query($db, $query)) {
            'error: ' . $db->error;
        } else {
            header("Location:../generated-code.php?code=".$code);
        }
    } else {
        $_SESSION['error'] = "Oops something went wrong, check the format of you files";
        unset($_SESSION['error']);
    }
?>
