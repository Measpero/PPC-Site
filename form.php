<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['number'];
$message = $_POST['message'];

$email_from  = 'hectororl@icloud.com';

$email_subject = "New Form";

$email_body = "User Name: $name.\n".
                "User Email: $email. \n".
                "User Phone Number:$phone_number. \n".
                "Message: $message. \n";
                
    $to = "hector@oasisvps.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: Index.html");

?>