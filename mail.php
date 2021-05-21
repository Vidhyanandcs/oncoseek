<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "bharadwaj@oncoseekbio.com";
    $headers = "From: My Website";
        $txt = "You have received a mail from " .$name."\n\n" .$email."\n\n".$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location: contactus.php");
}

?>

