<?php


    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    
    
    $email_from = "getrk124@bartoszulc.pl";
    $email_subject="Nowa wiadomość";
    $email_body="Imię: $name.\n".
        "Nazwisko: $surname.\n".
        "Nr. Telefonu: $phone.\n".
        "Email: $email.\n".
        "Wiadomość: $message.\n";

        $to ="getrk124@gmail.com";
        $headers="From: $email_from \r\n";
        $headers .="Reply-To: $email \r\n";
    mail($to, $email_subject,$email_body,$headers);
    header("Location: index.html");

?>