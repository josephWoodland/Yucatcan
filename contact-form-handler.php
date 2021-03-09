<?php


    $name = $_POST['name'];
    $contact_email= $_POST['email'];
    $contact_reason = $_POST['contact-reason'];
    $marketing = $_POST['marketing'];
    $message = $_POST['message'];

    $email_from = 'joseph@workit-app.com';
    $email_subject = "Yucatan contact";
    $email_body = "Name: $name.\n".
                  "Email: $contact_email.\n".
                  "About: $contact_reason.\n".
                  "Marketing: $marketing.\n".
                  "Message: $message.\n";


    $to = "yucatanlondon@gmail.com ";

    $headers =  "Contact Form Submission: $email_from \r\n";

    $headers = "Reply-To: $contact_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>