<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "vidhyanand@securecerts.in";
    $headers = "From: Oncoseek Bio Website";
        $txt = "You have received a mail from " .$name."\n\n" .$email."\n\n".$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location: contact.php");
}

?>

